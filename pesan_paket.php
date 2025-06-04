<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

// CEK id_paket ADA DI URL
if (!isset($_GET['id_paket']) || !is_numeric($_GET['id_paket'])) {
    echo "<h2>Paket tidak ditemukan.</h2>";
    exit();
}

$id_paket = (int)$_GET['id_paket'];
$id_user = $_SESSION['id_user'];

// Ambil detail paket
$paket = $conn->query("SELECT * FROM paket_perjalanan WHERE id_paket=$id_paket")->fetch_assoc();
$detailResult = $conn->query("SELECT * FROM detail_paket WHERE id_paket=$id_paket");

// Ambil data hotel, restoran, wisata (bisa lebih dari satu)
$hotels = [];
$restos = [];
$wisatas = [];
while ($detail = $detailResult->fetch_assoc()) {
    if ($detail['id_hotel']) {
        $hotel = $conn->query("SELECT * FROM hotels WHERE id={$detail['id_hotel']}")->fetch_assoc();
        if ($hotel) $hotels[] = $hotel;
    }
    if ($detail['id_wisata']) {
        $wisata = $conn->query("SELECT * FROM wisata WHERE id_wisata={$detail['id_wisata']}")->fetch_assoc();
        if ($wisata) $wisatas[] = $wisata;
    }
}

// Hitung harga asli (tanpa diskon)
$harga_asli = 0;
foreach ($hotels as $hotel) $harga_asli += (int)$hotel['reservasi'];
foreach ($wisatas as $wisata) $harga_asli += (int)$wisata['harga'];

// Harga diskon dari paket
$harga_diskon = $paket['harga'];
$alasan_diskon = "Harga paket lebih murah karena sudah termasuk hotel, restoran, dan tiket wisata dalam satu pembelian. Diskon diberikan untuk pembelian paket sekaligus.";

// Proses pemesanan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal = $_POST['tanggal'] ?? '';
    if (!$tanggal) {
        echo "<script>alert('Tanggal perjalanan harus diisi!');</script>";
    } else {
        // 1. Insert ke pemesanan_paket
        $stmt = $conn->prepare("INSERT INTO pemesanan_paket (id_user, id_paket, tanggal) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $id_user, $id_paket, $tanggal);
        $stmt->execute();
        $stmt->close();

        // 2. Insert ke hotel_reservations (gunakan checkin dan checkout sama jika hanya 1 malam)
        foreach ($hotels as $hotel) {
            $stmt = $conn->prepare("INSERT INTO hotel_reservations (name, email, phone, hotel_id, checkin, checkout, room_type, nights, total_price, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $name = $_SESSION['username'];
            $email = $_SESSION['email'] ?? '';
            $phone = ''; // Isi jika ada di session/user
            $hotel_id = $hotel['id'];
            $checkin = $tanggal;
            $checkout = $tanggal;
            $room_type = '';
            $nights = 1;
            $total_price = $hotel['reservasi'] ?? 0;
            $stmt->bind_param("ssssssssii", $name, $email, $phone, $hotel_id, $checkin, $checkout, $room_type, $nights, $total_price, $id_user);
            $stmt->execute();
            $stmt->close();
        }

        // 3. Insert ke reservasi restoran
        foreach ($restos as $resto) {
            $stmt = $conn->prepare("INSERT INTO reservasi (id_user, id_restaurants, tanggal) VALUES (?, ?, ?)");
            $stmt->bind_param("iis", $id_user, $resto['id_restaurants'], $tanggal);
            $stmt->execute();
            $stmt->close();
        }

        // 4. Insert ke pemesanan_tiket wisata
        foreach ($wisatas as $wisata) {
            $jumlah_tiket = 1;
            $total_harga = $wisata['harga'] * $jumlah_tiket;
            $stmt = $conn->prepare("INSERT INTO pemesanan_tiket (id_user, id_wisata, tanggal, jumlah_tiket, total_harga) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("iisid", $id_user, $wisata['id_wisata'], $tanggal, $jumlah_tiket, $total_harga);
            $stmt->execute();
            $stmt->close();
        }

        header("Location: konfirmasi_pemesanan.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pesan'])) {
    $tanggal = $_POST['tanggal'];
    $id_user = $_SESSION['id_user'];
    $total_harga = $paket['harga'];
    $stmt = $conn->prepare("INSERT INTO pemesanan_paket (id_user, id_paket, tanggal, total_harga) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $id_user, $id_paket, $tanggal, $total_harga);
    $stmt->execute();
    $stmt->close();
    echo "<script>alert('Paket berhasil dipesan!');window.location='riwayat_pemesanan_paket.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pesan Paket</title>
    <link rel="stylesheet" href="paket.css">
    <style>
        .paket-detail-box {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.09);
            max-width: 440px;
            margin: 0 auto 32px auto;
            padding: 28px 24px 18px 24px;
        }
        .paket-detail-list {
            list-style: none;
            padding: 0;
            margin: 0 0 18px 0;
        }
        .paket-detail-list li {
            margin-bottom: 8px;
            font-size: 1.05em;
            color: #444;
        }
        .paket__harga {
            margin-bottom: 12px;
        }
        .harga-asli {
            text-decoration: line-through;
            color: #b85c5c;
            font-size: 1.1em;
            margin-right: 8px;
        }
        .harga-diskon {
            color: #800000;
            font-size: 1.3em;
            font-weight: bold;
        }
        .alasan-diskon {
            background: #fff7e6;
            color: #b85c5c;
            border-left: 4px solid #800000;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 0.98em;
            margin-bottom: 14px;
        }
        .paket__desc {
            color: #555;
            margin-bottom: 18px;
            text-align: center;
        }
        @media (max-width: 600px) {
            .paket-detail-box { padding: 14px 6px; }
        }
    </style>
</head>
<body>
    <div class="paket__section">
        <h2 class="section__title">Detail Paket: <?= htmlspecialchars($paket['nama_paket']) ?></h2>
        <div class="paket-detail-box">
            <div class="paket__image" style="margin-bottom:18px;">
                <img class="paket__img" src="<?= htmlspecialchars($paket['gambar']) ?>" alt="<?= htmlspecialchars($paket['nama_paket']) ?>">
            </div>
            <div class="paket__desc"><?= htmlspecialchars($paket['deskripsi']) ?></div>
            <ul class="paket-detail-list">
                <?php foreach($hotels as $hotel): ?>
                <li><b>Hotel:</b> <?= htmlspecialchars($hotel['name']) ?> <?= isset($hotel['stars']) ? "({$hotel['stars']}★)" : "" ?></li>
                <?php endforeach; ?>
                <?php foreach($restos as $resto): ?>
                <li><b>Restoran:</b> <?= htmlspecialchars($resto['name']) ?></li>
                <?php endforeach; ?>
                <?php foreach($wisatas as $wisata): ?>
                <li><b>Wisata:</b> <?= htmlspecialchars($wisata['nama_wisata']) ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="paket__harga">
                <span class="harga-asli">Rp <?= number_format($harga_asli,0,',','.') ?></span>
                <span class="harga-diskon">Rp <?= number_format($harga_diskon,0,',','.') ?></span>
            </div>
            <div class="alasan-diskon">
                <b>Kenapa bisa diskon?</b><br>
                <?= $alasan_diskon ?>
            </div>
            <form method="POST" class="pesan-form">
                <label for="tanggal">Tanggal Perjalanan:</label>
                <input type="date" name="tanggal" id="tanggal" required>
                <button type="submit">Pesan Sekarang</button>
            </form>
            <div style="text-align:center; margin-top:16px;">
                <a href="paket.php" class="button">Kembali ke Daftar Paket</a>
            </div>
        </div>
    </div>
</body>
</html>