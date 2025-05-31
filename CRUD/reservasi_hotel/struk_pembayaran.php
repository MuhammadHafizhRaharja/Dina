<?php
include 'db.php';

// Ambil data dari POST
$name     = $_POST['name'] ?? '';
$email    = $_POST['email'] ?? '';
$phone    = $_POST['phone'] ?? '';
$checkin  = $_POST['checkin'] ?? '';
$checkout = $_POST['checkout'] ?? '';
$room_key = $_POST['room_type'] ?? '';
$special  = $_POST['special_request'] ?? '';
$payment  = $_POST['payment_method'] ?? '';

// Ambil data tipe kamar dari database
$sql = "SELECT name, price FROM room_types WHERE type_key = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $room_key);
$stmt->execute();
$stmt->bind_result($room_name, $price);
$stmt->fetch();
$stmt->close();

// Hitung malam & total harga
$start = new DateTime($checkin);
$end   = new DateTime($checkout);
$nights = max(1, $start->diff($end)->days);
$total = $price * $nights;

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO hotel_reservations (
    name, email, phone, checkin, checkout, room_type, special_request, nights, total_price
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssii",
    $name, $email, $phone, $checkin, $checkout,
    $room_key, $special, $nights, $total
);
$stmt->execute();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Struk Pembayaran Hotel</title>
  <link rel="stylesheet" href="struk_pembayaran_hotel.css" />
</head>
<body>
  <div class="receipt">
    <h2>Struk Pembayaran Hotel</h2>
    <div class="status">Status: LUNAS</div>

    <div class="receipt-info">
      <p><strong>Nama:</strong> <?= htmlspecialchars($name) ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
      <p><strong>Telepon:</strong> <?= htmlspecialchars($phone) ?></p>
      <p><strong>Tipe Kamar:</strong> <?= htmlspecialchars($room_name) ?></p>
      <p><strong>Harga / Malam:</strong> Rp<?= number_format($price, 0, ',', '.') ?></p>
      <p><strong>Check-in:</strong> <?= htmlspecialchars($checkin) ?></p>
      <p><strong>Check-out:</strong> <?= htmlspecialchars($checkout) ?></p>
      <p><strong>Jumlah Malam:</strong> <?= $nights ?></p>
      <p><strong>Total:</strong> Rp<?= number_format($total, 0, ',', '.') ?></p>
      <p><strong>Metode Pembayaran:</strong> <?= strtoupper(htmlspecialchars($payment)) ?></p>
      <p><strong>Permintaan Khusus:</strong><br><?= nl2br(htmlspecialchars($special)) ?></p>
    </div>

    <div class="button-group">
      <button class="btn btn-print" onclick="window.print()">Cetak Struk</button>
      <a href="../../slider.php" class="btn btn-back">Kembali ke Menu</a>
    </div>
  </div>
</body>
</html>
