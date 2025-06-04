<?php
include 'CRUD/reservasi restoran/db.php';
$id_hotel = $_GET['id_hotel'] ?? 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Semua Ulasan Hotel</title>
    <link rel="stylesheet" href="tambah_ulasan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Semua Ulasan Hotel</h1>
    <div class="review-container">
        <?php
        $ulasan = $conn->query("
            SELECT uh.*, u.fullname, u.foto_profil 
            FROM ulasan_hotel uh
            JOIN users u ON uh.id_user = u.id_user
            WHERE uh.id_hotel = $id_hotel
            ORDER BY uh.tanggal DESC
        ");
        while ($row = $ulasan->fetch_assoc()):
        ?>
        <div class="review-card">
            <div class="review-header">
                <div class="stars">
                    <?php
                    for ($i = 1; $i <= 5; $i++): ?>
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
            <!-- Balasan admin -->
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
        <a href="reservation<?= $id_hotel ?>.php" class="btn">← Kembali</a>
    </div>
</body>
</html>