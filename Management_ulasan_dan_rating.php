<?php
// Mulai sesi untuk memeriksa apakah admin sudah login
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Jika bukan admin, redirect ke halaman login atau halaman lainnya
    header("Location: Signin.php");
    exit();
}

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "dina");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Hapus ulasan
if (isset($_GET['hapus'])) {
    $id_ulasan = $_GET['hapus'];
    $conn->query("DELETE FROM ulasan WHERE id_ulasan = $id_ulasan");
    header("Location: Management_ulasan_dan_rating.php"); // Refresh halaman setelah hapus
    exit();
}

// Create Comment (Balasan)
if (isset($_POST['create_comment'])) {
    $id_ulasan = $_POST['id_ulasan'];
    $komentar = $_POST['komentar'];
    $id_user = $_SESSION['id_user']; // Ambil ID User (admin) dari session

    // Simpan balasan ke dalam tabel balasan_ulasan
    $conn->query("INSERT INTO balasan_ulasan (id_ulasan, id_user, komentar) 
                  VALUES ($id_ulasan, $id_user, '$komentar')");
    header("Location: Management_ulasan_dan_rating.php"); // Refresh halaman setelah submit
    exit();
}

// Menampilkan semua ulasan
$ulasan = $conn->query("
    SELECT u.*, us.fullname, us.foto_profil 
    FROM ulasan u
    JOIN users us ON u.id_user = us.id_user
    ORDER BY u.tanggal DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Ulasan dan Rating</title>
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <link rel="stylesheet" href="tambah_ulasan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Manajemen Ulasan dan Rating</h1>

    <!-- Tampilkan semua ulasan -->
    <div class="review-container">
        <?php while ($row = $ulasan->fetch_assoc()): ?>
        <div class="review-card">
            <div class="review-header">
                <div class="stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                    <i class="fas fa-star <?= $i <= $row['rating'] ? '' : 'inactive' ?>"></i>
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
            <div class="review-actions">

                <form action="Management_ulasan_dan_rating.php" method="POST" class="comment-form">
                    <input type="hidden" name="id_ulasan" value="<?= $row['id_ulasan'] ?>">
                    <label for="komentar">Balas Ulasan:</label>
                    <textarea name="komentar" required></textarea>
                    <br>
                    <button type="submit" name="create_comment" class="btn">Kirim Balasan</button>
                </form>
                <br>
                <a href="?hapus=<?= $row['id_ulasan'] ?>" onclick="return confirm('Yakin ingin menghapus ulasan ini?')" class="btn">Hapus</a>
            </div>

            <div class="review-replies">
                <?php
                $balasan = $conn->query("SELECT * FROM balasan_ulasan bu
                                        JOIN users u ON bu.id_user = u.id_user
                                        WHERE bu.id_ulasan = " . $row['id_ulasan']);
                while ($balas = $balasan->fetch_assoc()):
                ?>
                    <div class="reply">
                        <strong><?= $balas['fullname'] ?></strong>: <?= htmlspecialchars($balas['komentar']) ?>
                        <div class="reply-date"><?= date('d M Y', strtotime($balas['tanggal'])) ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <!-- Tombol kembali ke dashboard admin -->
    <div class="actions">
        <a href="dashboard.php" class="btn">← Kembali ke Dashboard</a>
    </div>

</body>
</html>