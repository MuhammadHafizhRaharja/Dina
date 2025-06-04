<?php
$conn = new mysqli("localhost", "root", "", "dina");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$id_restaurants = $_GET['id_restaurants'] ?? 1;
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
            SELECT u.*, us.fullname, us.foto_profil 
            FROM ulasan u
            JOIN users us ON u.id_user = us.id_user
            WHERE u.id_restaurants = $id_restaurants
            ORDER BY u.tanggal DESC
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
                // Query untuk mengambil balasan terhadap ulasan ini
                $balasan = $conn->query("SELECT bu.*, ua.fullname AS admin_fullname, ua.foto_profil AS admin_foto 
                                        FROM balasan_ulasan bu
                                        JOIN users ua ON bu.id_user = ua.id_user
                                        WHERE bu.id_ulasan = " . $row['id_ulasan']);
                
                while ($balas = $balasan->fetch_assoc()):
                ?>
                    <div class="reply">
                        <img src="<?= $balas['admin_foto'] ?>" width="30" height="30" alt="Foto Admin">
                        <strong><?= $balas['admin_fullname'] ?></strong>: <?= htmlspecialchars($balas['komentar']) ?>
                        <div class="reply-date"><?= date('d M Y', strtotime($balas['tanggal'])) ?></div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
        <?php endwhile; ?>
    </div>

    <div class="actions">
        <a href="restor1.php?id_restaurants=<?= $id_restaurants ?>" class="btn">← Kembali</a>
    </div>
</body>
</html>
