<?php
include 'views/header1.php';
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'db_connection.php';

// Fetch the tourist site details
$id_wisata = 2; // Replace with dynamic ID, e.g., from URL parameter
$sql = "SELECT * FROM wisata WHERE id_wisata = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_wisata);
$stmt->execute();
$wisata = $stmt->get_result()->fetch_assoc();
$stmt->close();

$username = $_SESSION['username']; // Pastikan username disimpan di session saat login

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user'];
    $tanggal = $_POST['tanggal'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $total_harga = $jumlah_tiket * $wisata['harga']; //Menghitung total

    $stmt = $conn->prepare("INSERT INTO pemesanan_tiket (id_user, id_wisata, tanggal, jumlah_tiket, total_harga) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisid", $id_user, $id_wisata, $tanggal, $jumlah_tiket, $total_harga);
    $stmt->execute();
    $stmt->close();

    header("Location: konfirmasi_pemesanan.php"); // Redirect to confirmation page
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($wisata['nama_wisata']) ?> - Bali</title>
    <link rel="stylesheet" href="detailtourism.css">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
</head>
<body>
    <div class="gallery" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">
        <div class="main-photo">
            <img src="<?= htmlspecialchars($wisata['foto_profil']) ?>" height="300" width="100%">
            <div class="overlay">
                <h1><?= htmlspecialchars($wisata['nama_wisata']) ?></h1>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-duration="900" data-aos-delay="500">
        <div class="content">
            <h1>About</h1>
            <p><?= htmlspecialchars($wisata['deskripsi']) ?></p>
            <div class="details">
                <div><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($wisata['city']) ?></div>
                <div><i class="fas fa-calendar-alt"></i> Start time: Check availability</div>
                <div><i class="fas fa-mobile-alt"></i> Mobile ticket: Available</div>
            </div>
        </div>
        <div class="sidebar">
            <h2>From Rp.<?= number_format($wisata['harga'], 0, ',', '.') ?></h2>
            <p class="price">price per person</p>
            <p style="color: maroon;">Get your calendar to Explore</p>
            <form method="POST">
                <div class="user-info" style="margin-top:1rem;">
                    <strong>Username:</strong> <?= htmlspecialchars($username) ?><br>
                </div>
                <div class="date-picker">
                    <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="tanggal" required>
                </div>
                <p class="price" style="color: maroon;">How many tickets</p>
                <div class="traveler-picker">
                    <i class="fas fa-user-friends"></i>
                    <input id="jumlah_tiket" type="number" name="jumlah_tiket" min="1" value="1" required>
                </div>
                <div class="traveler-picker" style="color: maroon;">
                 <strong>Total Harga: </strong>
                 <span id="total_harga">Rp.<?= number_format($wisata['harga'], 0, ',', '.') ?></span>
                </div>
                <button type="submit" class="reserve-btn">Reserve Now</button>
            </form>
            <div class="free-cancellation">
                <i class="fas fa-check-circle"></i>
                <p>Free cancellation. Cancel anytime before your visit for full refund.</p>
            </div>
        </div>
    </div>

    <div class="actions">
        <a href="riwayat_pemesanan.php" class="btn">Lihat Riwayat Pemesanan</a>
    </div>
</body>
</html>
    <?php
include 'views/footer1.php';
?>
<script>
    const harga = <?= (int)$wisata['harga'] ?>;
    const jumlahTiket = document.getElementById('jumlah_tiket');
    const totalHarga = document.getElementById('total_harga');

    function updateTotalHarga() {
        const qty = parseInt(jumlahTiket.value) || 1;
        const total = harga * qty;
        totalHarga.textContent = 'Rp.' + total.toLocaleString('id-ID');
    }

    jumlahTiket.addEventListener('input', updateTotalHarga);
    window.addEventListener('DOMContentLoaded', updateTotalHarga);
</script>