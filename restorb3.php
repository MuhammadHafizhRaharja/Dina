<?php
include 'CRUD/reservasi restoran/db.php';

$id_restaurants = 8;

$biaya_per_orang = 100000;
$pesan_error = "";
$pesan_sukses = "";

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $telepon = $_POST['telepon'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $jam = $_POST['jam'] ?? '';
    $jumlah_orang = intval($_POST['jumlah_orang'] ?? 0);
    $pesan = $_POST['pesan'] ?? '';
    $id_meja = intval($_POST['id_meja'] ?? 0);
    $id_restaurants = $_POST['id_restaurants'] ?? '';

    $total_biaya = $jumlah_orang * $biaya_per_orang;

    // Validasi
    if (empty($jam)) {
        $pesan_error = "Jam reservasi belum dipilih.";
    } else {
        $cek = $conn->prepare("SELECT * FROM reservasi WHERE tanggal=? AND jam=? AND id_meja=? AND id_restaurants=?");
        $cek->bind_param("ssis", $tanggal, $jam, $id_meja, $id_restaurants);
        $cek->execute();
        $result = $cek->get_result();

        if ($result->num_rows > 0) {
            $pesan_error = "Meja sudah dipesan pada tanggal dan jam tersebut.";
        } else {
            // Tidak langsung simpan, redirect ke halaman konfirmasi pembayaran
            header("Location: CRUD/reservasi restoran/detail_pembayaran.php?" .
                "nama=" . urlencode($nama) .
                "&telepon=" . urlencode($telepon) .
                "&tanggal=$tanggal" .
                "&jam=$jam" .
                "&jumlah_orang=$jumlah_orang" .
                "&pesan=" . urlencode($pesan) .
                "&id_meja=$id_meja" .
                "&total_biaya=$total_biaya" .
                "&id_restaurants=$id_restaurants");
            exit();
        }
    }
}

// Ambil daftar meja
$meja_query = $conn->query("SELECT * FROM meja");
$meja_list = [];
while ($row = $meja_query->fetch_assoc()) {
    $meja_list[] = $row;
}
?>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <title>Reservation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="reservasiresto.css">
<body>
<?php
include 'views/header2.php';
?>

<div class="container-resto">
    <div class="contact-resto" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
        <h2>Tropical Bistro</h2>
        <img alt="Restaurant exterior with tables and chairs" height="200" src="media/restob3.jpg" width="300"/>
        <div>
            <p style="padding-top: 20px; color: white;"><strong>Location</strong></p>
            <p style="font-size: 14px;">Pakar, Jl. Lembah Pakar Timur No. 28 Dago, Ciburial, Kec. Cimenyan, Kota Bandung, Jawa Barat 40198</p>
            <p style="padding-top: 10px; color: white;"><strong> Opening Hours</strong></p>
            <p style="font-size: 14px;">Monday to Sunday</p>
            <p style="font-size: 14px;">08.00 - 22.00</p>
        </div>
    </div>

    <div class="reservation" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
        <form action="" method="POST">
            <div style="border-left: 2px solid maroon; padding-left: 10px;">
                <h1>Reservation Restaurant</h1>
                <p>Booking Now</p>
            </div>

            <?php if ($pesan_sukses): ?>
                <div class="alert-success"><?= $pesan_sukses ?></div>
            <?php elseif ($pesan_error): ?>
                <div class="alert-error"><?= $pesan_error ?></div>
            <?php endif; ?>

            <input type="hidden" name="id_restaurants" value="<?php echo $id_restaurants; ?>">

            <input name="nama" placeholder="Full Name" type="text" required />
            <input name="telepon" placeholder="Phone Number" type="tel" required />

            <div style="display: flex; gap: 10px;">
                <input type="number" name="jumlah_orang" placeholder="Jumlah Orang" min="1" required>
                <input name="tanggal" placeholder="HH/BB/TTTT" type="date" required />
            </div>

            <div style="display: flex; gap: 10px;">
                <select name="id_meja" required>
                    <option value="">-- Pilih Meja --</option>
                    <?php foreach ($meja_list as $meja): ?>
                        <option value="<?= $meja['id_meja'] ?>">
                            <?= $meja['nama_meja'] ?> (Kapasitas: <?= $meja['kapasitas'] ?> orang)
                        </option>
                    <?php endforeach; ?>
                </select>
                <select name="jam" required>
                    <?php for ($i = 8; $i <= 22; $i++): 
                        $jamFormatted = str_pad($i, 2, '0', STR_PAD_LEFT) . ":00"; ?>
                        <option value="<?= $jamFormatted ?>"><?= $jamFormatted ?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <textarea name="pesan" placeholder="Pesan" style="max-width: 650px;"></textarea>

            <div class="button-resto">
                <button type="submit" style="background-color: maroon;">BOOK A TABLE</button>
                <a href="restaurantBandung.php"><button type="button">Back to Menu</button></a>
            </div>
        </form>
    </div>
</div>

<div style="border-top: 2px solid maroon; padding-top: 115px; margin-left: 300px; margin-right: 300px;" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"></div>

<!-- Review Section -->
<?php
// Tambah ulasan
if (isset($_POST['tambah'])) {
    $id_user = $_POST['id_user'];
    $id_restoran = $_POST['id_restoran'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("INSERT INTO ulasan (id_user, id_restoran, rating, komentar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $id_user, $id_restoran, $rating, $komentar);
    $stmt->execute();
}

// Hapus ulasan
if (isset($_GET['hapus'])) {
    $id_ulasan = $_GET['hapus'];
    $conn->query("DELETE FROM ulasan WHERE id_ulasan = $id_ulasan");
}
?>

<h1 class="review-h1">Ulasan Terbaru</h1>
<div class="review-container">
    <?php
    $ulasan = $conn->query("
        SELECT u.*, us.fullname, us.foto_profil 
        FROM ulasan u
        JOIN users us ON u.id_user = us.id_user
        ORDER BY u.tanggal DESC
        LIMIT 3
    ");
    while ($row = $ulasan->fetch_assoc()):
    ?>
    <div class="review-card">
        <div class="review-header">
            <div class="stars">
                <?php
                $rating = (int)($row['rating'] ?? 0);
                for ($i = 1; $i <= 5; $i++): ?>
                    <i class="fas fa-star <?= ($i <= $rating) ? '' : 'inactive' ?>"></i>
                <?php endfor; ?>
            </div>
        </div>
        <div class="review-content">
            <?= htmlspecialchars($row['komentar']) ?>
        </div>
        <div class="review-footer">
            <img src="<?= $row['foto_profil'] ?>" width="40" height="40" alt="Foto profil">
            <div class="username"><?= $row['fullname'] ?></div>
            <div class="date"><?= date('d M Y', strtotime($row['tanggal'])) ?></div>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<div class="actions">
    <a href="semua_ulasan.php" class="btn">See More</a>
    <a href="tambah_ulasan.php" class="btn">Review</a>
</div>

<?php include 'views/footer4.php'; ?>
</body>
</html>
