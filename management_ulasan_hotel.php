<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Signin.php");
    exit();
}
include 'CRUD/reservasi restoran/db.php';

// Hapus ulasan hotel
if (isset($_GET['hapus'])) {
    $id_ulasan = $_GET['hapus'];
    $conn->query("DELETE FROM ulasan_hotel WHERE id_ulasan = $id_ulasan");
    header("Location: management_ulasan_hotel.php");
    exit();
}

// Balas ulasan hotel
if (isset($_POST['create_comment'])) {
    $id_ulasan = $_POST['id_ulasan'];
    $komentar = $_POST['komentar'];
    $id_user = $_SESSION['id_user'];
    $stmt = $conn->prepare("INSERT INTO balasan_ulasan_hotel (id_ulasan, id_user, komentar) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $id_ulasan, $id_user, $komentar);
    $stmt->execute();
    $stmt->close();
    header("Location: management_ulasan_hotel.php");
    exit();
}

$ulasan = $conn->query("
    SELECT uh.*, us.fullname, us.foto_profil 
    FROM ulasan_hotel uh
    JOIN users us ON uh.id_user = us.id_user
    ORDER BY uh.tanggal DESC
");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Ulasan Hotel</title>
    <link rel="stylesheet" href="tambah_ulasan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Manajemen Ulasan Hotel</h1>
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
                <form action="management_ulasan_hotel.php" method="POST" class="comment-form">
                    <input type="hidden" name="id_ulasan" value="<?= $row['id_ulasan'] ?>">
                    <label for="komentar">Balas Ulasan:</label>
                    <textarea name="komentar" required></textarea>
                    <button type="submit" name="create_comment" class="btn">Kirim Balasan</button>
                </form>
                <a href="?hapus=<?= $row['id_ulasan'] ?>" onclick="return confirm('Yakin ingin menghapus ulasan ini?')" class="btn">Hapus</a>
            </div>
            <div class="review-replies">
                <?php
                $balasan = $conn->query("SELECT bh.*, u.fullname FROM balasan_ulasan_hotel bh
                                         JOIN users u ON bh.id_user = u.id_user
                                         WHERE bh.id_ulasan = " . $row['id_ulasan']);
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
    <div class="actions">
        <a href="dashboard.php" class="btn">← Kembali ke Dashboard</a>
    </div>
</body>
</html>