<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'db.php';
$username = $_SESSION['username']; // Pastikan username disimpan di session saat login


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_restaurants = $_POST['id_restaurants'];
    $id_user = $_SESSION['id_user'];
    $telepon        = $_POST['telepon'];
    $tanggal        = $_POST['tanggal'];
    $jam            = $_POST['jam'];
    $jumlah_orang   = $_POST['jumlah_orang'];
    $pesan          = $_POST['pesan'];
    $id_meja        = $_POST['id_meja'];
    $total_biaya    = $_POST['total_biaya'];

    // Simpan ke database
    $stmt = $conn->prepare("
        INSERT INTO reservasi 
        (id_restaurants, id_user, username, telepon, tanggal, jam, jumlah_orang, pesan, id_meja, total_biaya) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)
    ");

    $stmt->bind_param("iisssssssi", $id_restaurants, $id_user, $username, $telepon, $tanggal, $jam, $jumlah_orang, $pesan, $id_meja, $total_biaya);

    if (!$stmt->execute()) {
        die("Gagal menyimpan data: " . $stmt->error);
    }

    $stmt->close();
} else {
    header("Location: detail_pembayaran.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Struk Pembayaran Restoran</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="struk_pembayaran.css">
</head>
<body>

  <div class="container">
    <h2>Struk Pembayaran Restoran</h2>
    <div class="status">Pembayaran Berhasil</div>

    <p><span class="label">Nama:</span> <?= htmlspecialchars($username) ?></p>
    <p><span class="label">Telepon:</span> <?= htmlspecialchars($telepon) ?></p>
    <p><span class="label">Tanggal Reservasi:</span> <?= htmlspecialchars($tanggal) ?></p>
    <p><span class="label">Jam:</span> <?= htmlspecialchars($jam) ?></p>
    <p><span class="label">Jumlah Orang:</span> <?= htmlspecialchars($jumlah_orang) ?></p>
    <p><span class="label">Meja:</span> <?= htmlspecialchars($id_meja) ?></p>
    <p><span class="label">Pesan:</span> <?= nl2br(htmlspecialchars($pesan)) ?></p>

    <div class="total">Total: Rp<?= number_format($total_biaya, 0, ',', '.') ?></div>

    <div class="thankyou">
      Terima kasih telah melakukan reservasi!<br>
    </div>

    <div class="btn-group">
      <button onclick="window.print()" class="btn btn-print">Cetak Struk</button>
      <a href="../../restaurant.php"><button class="btn btn-back">Kembali ke Beranda</button></a>
    </div>
  </div>

</body>
</html>
