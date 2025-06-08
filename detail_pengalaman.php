<?php
include 'CRUD/reservasi restoran/db.php';
$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM pengalaman_wisata WHERE id_pengalaman = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();
$exp = $res->fetch_assoc();
$stmt->close();
if (!$exp) { echo "Pengalaman tidak ditemukan."; exit; }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($exp['judul']) ?></title>
    <link rel="stylesheet" href="pengalaman.css">
</head>
<body>
    <div class="detail-container">
        <h2><?= htmlspecialchars($exp['judul']) ?></h2>
        <img src="<?= htmlspecialchars($exp['foto']) ?>" alt="Foto Pengalaman" style="width:400px;height:250px;object-fit:cover;">
        <p><b>Oleh:</b> <?= htmlspecialchars($exp['nama_user']) ?> | 
        <b>Rating:</b> 
        <?php for($i=0;$i<$exp['rating'];$i++) echo "★"; ?>
        <?php for($i=$exp['rating'];$i<5;$i++) echo "☆"; ?>
        </p>
        <p><?= nl2br(htmlspecialchars($exp['cerita'])) ?></p>
        <a href="tourism.php?kota=<?= urlencode($exp['kota']) ?>">Kembali ke pengalaman <?= htmlspecialchars($exp['kota']) ?></a>
    </div>
</body>
</html>