<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "ID reservasi tidak ditemukan.";
    exit();
}

$id_reservasi = intval($_GET['id']);

// Ambil data reservasi
$stmt = $conn->prepare("SELECT * FROM reservasi WHERE id_reservasi = ?");
$stmt->bind_param("i", $id_reservasi);
$stmt->execute();
$result = $stmt->get_result();
$reservasi = $result->fetch_assoc();

if (!$reservasi) {
    echo "Data reservasi tidak ditemukan.";
    exit();
}

// Proses update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $tanggal = $_POST['tanggal'];
    $id_meja = $_POST['id_meja'];
    $jam = $_POST['jam'];
    $pesan = $_POST['pesan'];

    $stmt = $conn->prepare("UPDATE reservasi SET username=?, telepon=?, jumlah_orang=?, tanggal=?, id_meja=?, jam=?, pesan=? WHERE id_reservasi=?");
    $stmt->bind_param("ssissssi", $nama, $telepon, $jumlah_orang, $tanggal, $id_meja, $jam, $pesan, $id_reservasi);

    if ($stmt->execute()) {
        echo "<script>alert('Reservasi berhasil diupdate!');window.location='admin_reservation.php';</script>";
        exit();
    } else {
        $error = "Gagal update reservasi: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Reservasi</title>
    <link rel="stylesheet" href="admin_reservation.css">
</head>
<body>
    <div class="admin-container">
        <h1>Edit Reservasi</h1>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <label>Nama Pemesan:</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($reservasi['username']) ?>" required>
            <label>Nomor Telepon:</label>
            <input type="text" name="telepon" value="<?= htmlspecialchars($reservasi['telepon']) ?>" required>
            <label>Jumlah Orang:</label>
            <input type="number" name="jumlah_orang" value="<?= htmlspecialchars($reservasi['jumlah_orang']) ?>" required>
            <label>Tanggal:</label>
            <input type="date" name="tanggal" value="<?= htmlspecialchars($reservasi['tanggal']) ?>" required>
            <label>Nomor Meja:</label>
            <input type="number" name="id_meja" value="<?= htmlspecialchars($reservasi['id_meja']) ?>" required>
            <label>Jam:</label>
            <input type="time" name="jam" value="<?= htmlspecialchars($reservasi['jam']) ?>" required>
            <label>Pesan:</label>
            <textarea name="pesan"><?= htmlspecialchars($reservasi['pesan']) ?></textarea>
            <button type="submit">Update Reservasi</button>
            <a href="admin_reservation.php" class="btn-back-to-dashboard">Batal</a>
        </form>
    </div>
</body>
</html>