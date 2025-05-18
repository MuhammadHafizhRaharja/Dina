<?php
// Koneksi ke database
include 'db.php';

// Ambil data dari form
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$people = $_POST['people'] ?? '';
$date = $_POST['date'] ?? '';
$table = $_POST['table_number'] ?? ''; // Ambil data nomor meja
$time = $_POST['time'] ?? '';
$message = $_POST['message'] ?? '';

// Pastikan table_number adalah angka atau set default jika kosong
$table = isset($table) && is_numeric($table) ? $table : 0; // Atur default ke 0 jika kosong atau bukan angka

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO reservation (name, phone, people, date, table_number, time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $name, $phone, $people, $date, $table, $time, $message);

if ($stmt->execute()) {
    // Jika berhasil menyimpan data
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Struk Pembayaran</title>
  <link rel="stylesheet" href="struk_pembayaran.css" media="all">
</head>
<body>

  <div class="receipt">
    <h2>Struk Pembayaran</h2>

    <div class="info">
      <div class="info-label">Nama</div>
      <p class="info-value"><?= $name ?></p>
    </div>

    <div class="info">
      <div class="info-label">No. Telepon</div>
      <div class="info-value"><?= $phone ?></div>
    </div>

    <div class="info">
      <div class="info-label">Jumlah Orang</div>
      <div class="info-value"><?= $people ?> orang</div>
    </div>

    <div class="info">
      <div class="info-label">Tanggal</div>
      <div class="info-value"><?= $date ?></div>
    </div>

    <div class="info">
      <div class="info-label">Waktu</div>
      <div class="info-value"><?= $time ?></div>
    </div>

    <div class="info">
      <div class="info-label">Nomor Meja</div>
      <div class="info-value">Meja <?= $table ?></div>
    </div>

    <div class="info">
      <div class="info-label">Catatan</div>
      <div class="info-value"><?= $message ?></div>
    </div>

    <div class="total">Total: Rp100.000</div>

    <div class="thankyou">Reservasi berhasil!</div>
    <div class="thankyou">Terima kasih <?= $name?> atas reservasi Anda!</div>

    <div class="button-footer">
    <button class="btn-print" onclick="window.print()">Cetak Struk</button>
    <a href="../../restaurant.php" class="btn-back">Back to Home</a>
  </div>

  </div>

</body>
</html>