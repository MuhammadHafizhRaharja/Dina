<?php
include 'db.php';

// Ambil data dari form
$name       = $_POST['name'] ?? '';
$email      = $_POST['email'] ?? '';
$phone      = $_POST['phone'] ?? '';
$checkin    = $_POST['checkin'] ?? '';
$checkout   = $_POST['checkout'] ?? '';
$room_type  = $_POST['room_type'] ?? '';
$special    = $_POST['special_request'] ?? '';
$hotel_id   = $_POST['hotel_id'] ?? '';

// Ambil harga kamar berdasarkan room_type dan hotel_id
$sql = "SELECT name, price FROM room_types WHERE type_key = ? AND hotel_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $room_type, $hotel_id);
$stmt->execute();
$stmt->bind_result($room_name, $price);
$stmt->fetch();
$stmt->close();

// Hitung jumlah malam dan total harga
$start = new DateTime($checkin);
$end   = new DateTime($checkout);
$nights = max(1, $start->diff($end)->days);
$total = $price * $nights;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Detail Pembayaran Hotel</title>
  <link rel="stylesheet" href="detail_pembayaran_hotel.css" />
</head>
<body>
  <section class="container">
    <h1>Detail Reservasi Hotel</h1>
    <div class="details">
      <p><strong>Nama:</strong> <?= htmlspecialchars($name) ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
      <p><strong>Nomor Telepon:</strong> <?= htmlspecialchars($phone) ?></p>
      <p><strong>Check-in:</strong> <?= htmlspecialchars($checkin) ?></p>
      <p><strong>Check-out:</strong> <?= htmlspecialchars($checkout) ?></p>
      <p><strong>Jumlah Malam:</strong> <?= $nights ?></p>
      <p><strong>Tipe Kamar:</strong> <?= htmlspecialchars($room_name) ?> - Rp<?= number_format($price, 0, ',', '.') ?>/malam</p>
      <p><strong>Permintaan Khusus:</strong><br> <?= nl2br(htmlspecialchars($special)) ?></p>
    </div>

    <form action="struk_pembayaran.php" method="POST" id="paymentForm">
      <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
      <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
      <input type="hidden" name="phone" value="<?= htmlspecialchars($phone) ?>">
      <input type="hidden" name="checkin" value="<?= htmlspecialchars($checkin) ?>">
      <input type="hidden" name="checkout" value="<?= htmlspecialchars($checkout) ?>">
      <input type="hidden" name="room_type" value="<?= htmlspecialchars($room_type) ?>">
      <input type="hidden" name="special_request" value="<?= htmlspecialchars($special) ?>">
      <input type="hidden" name="hotel_id" value="<?= htmlspecialchars($hotel_id) ?>">

      <div class="payment-section">
        <label class="payment-method">
          <input type="radio" name="payment_method" value="qris" required style="display:none;">
          <div class="payment-icon">QRIS</div>
          <div class="payment-info">
            Selesaikan pembayaran dengan QRIS
            <div class="terms-checkbox">
              <input type="checkbox" id="agree" required>
              <label for="agree" class="terms">
                Dengan menyelesaikan pesanan ini Anda setuju dengan 
                <a href="#">Syarat dan Ketentuan</a> yang berlaku.
              </label>
            </div>
          </div>
        </label>

        <div class="payment-summary">
          <div>
            <div class="total-label">Total Biaya</div>
            <div class="total-amount">Rp<?= number_format($total, 0, ',', '.') ?></div>
          </div>
          <button type="submit" class="btn-pay" id="btnPay" disabled>Bayar</button>
        </div>
      </div>
    </form>
  </section>

  <script>
    const agreeCheckbox = document.getElementById('agree');
    const btnPay = document.getElementById('btnPay');

    agreeCheckbox.addEventListener('change', () => {
      btnPay.disabled = !agreeCheckbox.checked;
    });
  </script>
</body>
</html>
