<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'db_connection.php';

// Fetch booking history for the logged-in user
$id_user = $_SESSION['id_user'];
$sql = "SELECT pt.id_pemesanan, w.nama_wisata, pt.tanggal, pt.jumlah_tiket, pt.tanggal_pemesanan
        FROM pemesanan_tiket pt
        JOIN wisata w ON pt.id_wisata = w.id_wisata
        WHERE pt.id_user = ?
        ORDER BY pt.tanggal_pemesanan DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_user);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pemesanan</title>
    <link rel="stylesheet" href="style_pesan.css">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
</head>
<body>
    <h1>Riwayat Pemesanan Tiket</h1>

    <?php if ($result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Nama Wisata</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jumlah Tiket</th>
                    <th>Tanggal Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nama_wisata']) ?></td>
                        <td><?= date('d M Y', strtotime($row['tanggal'])) ?></td>
                        <td><?= $row['jumlah_tiket'] ?></td>
                        <td><?= date('d M Y', strtotime($row['tanggal_pemesanan'])) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Anda belum melakukan pemesanan tiket.</p>
    <?php endif; ?>

    <div class="actions">
        <a href="kutatourism.php" class="btn">Pesan Tiket Baru</a>
    </div>
</body>
</html>
