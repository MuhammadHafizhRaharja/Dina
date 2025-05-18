<?php
include 'views/header1.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'db_connection.php';

// Fetch the tourist site details
$id_wisata = 1; // Replace with dynamic ID, e.g., from URL parameter
$sql = "SELECT * FROM wisata WHERE id_wisata = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_wisata);
$stmt->execute();
$wisata = $stmt->get_result()->fetch_assoc();
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user'];
    $tanggal = $_POST['tanggal'];
    $jumlah_tiket = $_POST['jumlah_tiket'];

    // Insert booking into the database
    $stmt = $conn->prepare("INSERT INTO pemesanan_tiket (id_user, id_wisata, tanggal, jumlah_tiket) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $id_user, $id_wisata, $tanggal, $jumlah_tiket);
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
    <title>Detail Wisata - <?= htmlspecialchars($wisata['nama_wisata']) ?></title>
    <link rel="stylesheet" href="style_pesan.css">
    <link rel="stylesheet" href="detailtourism.css">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
</head>
<body>
    <h1><?= htmlspecialchars($wisata['nama_wisata']) ?></h1>

    <div class="tour-details">
        <img class="image_toursim" src="<?= $wisata['foto_profil'] ?>" width="40" height="40" alt="Foto profil">
        <p><?= htmlspecialchars($wisata['deskripsi']) ?></p>
        <p>Harga: Rp <?= number_format($wisata['harga'], 0, ',', '.') ?> per tiket</p>
    </div>

    <h2>Pemesanan Tiket</h2>
    <form method="POST">
        <label>Tanggal Kunjungan:</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Jumlah Tiket:</label><br>
        <input type="number" name="jumlah_tiket" min="1" required><br><br>

        <button type="submit">Pesan Tiket</button>
    </form>

    <div class="actions">
        <a href="riwayat_pemesanan.php" class="btn">Lihat Riwayat Pemesanan</a>
    </div>
</body>
</html>
