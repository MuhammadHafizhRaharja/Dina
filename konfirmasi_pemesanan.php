<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'db_connection.php';

// Fetch the most recent booking made by the user
$id_user = $_SESSION['id_user'];
$sql = "SELECT pt.id_pemesanan, u.username, w.nama_wisata, pt.tanggal, pt.jumlah_tiket, pt.tanggal_pemesanan, pt.total_harga
        FROM pemesanan_tiket pt
        JOIN wisata w ON pt.id_wisata = w.id_wisata
        JOIN users u ON pt.id_user = u.id_user
        WHERE pt.id_user = ?
        ORDER BY pt.tanggal_pemesanan DESC LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_user);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

if ($result->num_rows > 0) {
    $booking = $result->fetch_assoc();
} else {
    header("Location: tiket_pemesanan.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pemesanan</title>
    <link rel="stylesheet" href="style_pesan.css">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
</head>
<body>
    <h1>Konfirmasi Pemesanan Tiket</h1>

    <p>Terima kasih telah melakukan pemesanan tiket. Berikut adalah detail pemesanan Anda:</p>

    <table>
        <tr>
        <th>Username</th>
        <td><?= htmlspecialchars($booking['username']) ?></td>
    </tr>
        <tr>
            <th>Nama Wisata</th>
            <td><?= htmlspecialchars($booking['nama_wisata']) ?></td>
        </tr>
        <tr>
            <th>Tanggal Kunjungan</th>
            <td><?= date('d M Y', strtotime($booking['tanggal'])) ?></td>
        </tr>
        <tr>
            <th>Jumlah Tiket</th>
            <td><?= $booking['jumlah_tiket'] ?></td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td>Rp.<?= number_format($booking['total_harga'], 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Tanggal Pemesanan</th>
            <td><?= date('d M Y', strtotime($booking['tanggal_pemesanan'])) ?></td>
        </tr>
    </table>

    <div class="actions">
        <a href="riwayat_pemesanan.php" class="btn">Lihat Riwayat Pemesanan</a>
        <a href="tourism.php" class="btn">Pesan Tiket Baru</a>
    </div>
</body>
</html>
