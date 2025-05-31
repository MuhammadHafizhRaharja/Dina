<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';
    
    // Tampilkan halaman konfirmasi
    $nama = $_GET['nama'];
    $telepon = $_GET['telepon'];
    $tanggal = $_GET['tanggal'];
    $jam = $_GET['jam'];
    $jumlah_orang = $_GET['jumlah_orang'];
    $pesan = $_GET['pesan'];
    $id_meja = $_GET['id_meja'];
    $total_biaya = $_GET['total_biaya'];

    ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Detail Reservasi Restoran</title>
    <link rel="stylesheet" href="detail_pembayaran.css" />
</head>
<body>

<div class="card">
    <h2>Detail Reservasi Restoran</h2>
    <div class="info">
        <p><span class="highlight">Nama:</span> <?= htmlspecialchars($nama) ?></p>
        <p><span class="highlight">Tanggal Reservasi:</span> <?= htmlspecialchars($tanggal) ?></p>
        <p><span class="highlight">Jam:</span> <?= htmlspecialchars($jam) ?></p>
        <p><span class="highlight">Jumlah Orang:</span> <?= htmlspecialchars($jumlah_orang) ?></p>
        <p><span class="highlight">Meja:</span> <?= htmlspecialchars($id_meja) ?></p>
        <p><span class="highlight">Pesan:</span> <?= htmlspecialchars($pesan) ?></p>

    </div>

    <form class="payment-section" method="POST" action="struk_pembayaran.php">
      <input type="hidden" name="nama" value="<?= htmlspecialchars($nama) ?>">
      <input type="hidden" name="telepon" value="<?= htmlspecialchars($telepon) ?>">
      <input type="hidden" name="tanggal" value="<?= htmlspecialchars($tanggal) ?>">
      <input type="hidden" name="jam" value="<?= htmlspecialchars($jam) ?>">
      <input type="hidden" name="jumlah_orang" value="<?= htmlspecialchars($jumlah_orang) ?>">
      <input type="hidden" name="pesan" value="<?= htmlspecialchars($pesan) ?>">
      <input type="hidden" name="id_meja" value="<?= htmlspecialchars($id_meja) ?>">
      <input type="hidden" name="total_biaya" value="<?= htmlspecialchars($total_biaya) ?>">

        <input type="hidden" name="id_reservasi" value="<?= htmlspecialchars($id_reservasi) ?>">
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
            <div class="total-amount">Rp<?= number_format($total_biaya, 0, ',', '.') ?></div>
          </div>
          <button type="submit" class="btn-pay" id="btnPay" disabled>Bayar</button>
        </div>
    </form>
</div>

<script>
  const agreeCheckbox = document.getElementById('agree');
  const payButton = document.getElementById('btnPay');

  agreeCheckbox.addEventListener('change', () => {
    payButton.disabled = !agreeCheckbox.checked;
  });
</script>

</body>
</html>
