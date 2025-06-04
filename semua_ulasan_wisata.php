<?php
include 'CRUD/reservasi restoran/db.php';

$id_wisata = $_GET['id_wisata'] ?? 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Semua Ulasan</title>
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <link rel="stylesheet" href="tambah_ulasan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Semua Ulasan</h1>
    <div class="review-container">
        <?php
        // Ambil semua ulasan
        $ulasan = $conn->query("
            SELECT uw.*, u.fullname, u.foto_profil 
            FROM ulasan_wisata uw
            JOIN users u ON uw.id_user = u.id_user
            WHERE uw.id_wisata = $id_wisata
            ORDER BY uw.tanggal DESC
        ");
        
        while ($row = $ulasan->fetch_assoc()):
        ?>
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

            <!-- Menampilkan balasan admin -->
            <div class="review-replies">
                <?php
                $balasan = $conn->query("SELECT bw.*, u.fullname FROM balasan_ulasan_wisata bw
                                        JOIN users u ON bw.id_user = u.id_user
                                        WHERE bw.id_ulasan = " . $row['id_ulasan']);
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
        <a href="tourism.php" class="btn">← Kembali</a>
    </div>

</body>
</html>
