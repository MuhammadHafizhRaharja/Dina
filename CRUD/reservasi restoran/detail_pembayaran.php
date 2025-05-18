<?php
include 'db.php';

// Ambil data dari form
$name    = $_POST['name'] ?? '';
$phone   = $_POST['phone'] ?? '';
$people  = $_POST['people'] ?? '';
$date    = $_POST['date'] ?? '';
$table   = $_POST['table_number'] ?? '';
$time    = $_POST['time'] ?? '';
$message = $_POST['message'] ?? '';

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO reservation (name, phone, people, date, table_number, time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $name, $phone, $people, $date, $table, $time, $message);
// $stmt->execute();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Pembayaran</title>
  <link rel="stylesheet" href="detail_pembayaran.css" media="all">
</head>
<body>

  <section class="container">
    <h1>Detail Pesanan</h1>
    <p>Nama: <?= $name ?></p>
    <p>Nomor Telepon: <?= $phone?></p>
    <p>Jumlah Orang: <?= $people ?></p>
    <p>Tanggal Reservasi: <?= $date ?></p>
    <p>Jam Reservasi: <?= $time ?></p>
    <p>Nomor Meja: <?= $table ?></p>
    <p>Pesan: <?= $message ?></p>

    <h3>Selesaikan Pembayaran</h3>
    <label class="payment-card">
      <div class="payment-icon" style="background-color : maroon;"></div>
      <div class="payment-content">
        <strong>QRIS</strong>
        <div class="terms-checkbox">
          <input type="checkbox" required>
          <span>Dengan menyelesaikan pesanan ini Anda setuju dengan
            <a href="#">Syarat dan Ketentuan</a> yang berlaku
          </span>
        </div>
      </div>
      <input type="radio" name="payment" class="radio-button" required>
    </label>

    <form action="struk_pembayaran.php" method="POST">
      <input type="hidden" name="name" value="<?= $name ?>">
      <input type="hidden" name="phone" value="<?= $phone ?>">
      <input type="hidden" name="people" value="<?= $people ?>">
      <input type="hidden" name="date" value="<?= $date ?>">
      <input type="hidden" name="table_number" value="<?= $table ?>">
      <input type="hidden" name="time" value="<?= $time ?>">
      <input type="hidden" name="message" value="<?= $message ?>">

      <div class="payment-summary">
        <div class="summary-left">
          <div class="total-label">Biaya Reservasi</div>
          <div class="total-amount">Rp100.000</div>
        </div>
        <button type="submit" class="btn-pay">Bayar</button>
      </div>
    </form>
  </section>

</body>
</html>
