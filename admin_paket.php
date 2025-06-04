<?php
session_start();
include 'db_connection.php';

// Cek jika user adalah admin (misal session role)
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: Signin.php");
    exit();
}

// Ambil data hotel, restoran, wisata untuk pilihan
$hotels = $conn->query("SELECT id, name FROM hotels");
$restaurants = $conn->query("SELECT id_restaurants, name FROM restaurants");
$wisata = $conn->query("SELECT id_wisata, nama_wisata FROM wisata");

// Proses tambah paket
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_paket = $_POST['nama_paket'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];
    $gambar = $_POST['gambar']; // bisa upload file, ini contoh sederhana
    $id_hotel = $_POST['id_hotel'];
    $id_restaurant = $_POST['id_restaurant'];
    $id_wisata = $_POST['id_wisata'];

    // Insert ke paket_perjalanan
    $stmt = $conn->prepare("INSERT INTO paket_perjalanan (nama_paket, deskripsi, harga, gambar, diskon) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $nama_paket, $deskripsi, $harga, $gambar, $diskon);
    $stmt->execute();
    $id_paket = $stmt->insert_id;
    $stmt->close();

    // Insert ke detail_paket
    $stmt = $conn->prepare("INSERT INTO detail_paket (id_paket, id_hotel, id_restaurant, id_wisata) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiii", $id_paket, $id_hotel, $id_restaurant, $id_wisata);
    $stmt->execute();
    $stmt->close();

    $success = "Paket berhasil ditambahkan!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Tambah Paket Perjalanan</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 480px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            padding: 32px 28px;
        }
        h2 {
            text-align: center;
            color: #2d3e50;
            margin-bottom: 24px;
        }
        label {
            font-weight: 500;
            margin-top: 12px;
            display: block;
            color: #333;
        }
        input[type="text"], input[type="number"], textarea, select {
            width: 100%;
            padding: 8px 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            background: #fafbfc;
            margin-bottom: 12px;
        }
        textarea {
            min-height: 60px;
            resize: vertical;
        }
        button {
            width: 100%;
            background: #1e90ff;
            color: #fff;
            border: none;
            padding: 12px 0;
            border-radius: 6px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.2s;
        }
        button:hover {
            background: #156ec0;
        }
        .success {
            background: #e0ffe0;
            color: #228b22;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Paket Perjalanan</h2>
        <?php if (isset($success)) echo "<div class='success'>$success</div>"; ?>
        <form method="POST">
            <label>Nama Paket:</label>
            <input type="text" name="nama_paket" required>

            <label>Deskripsi:</label>
            <textarea name="deskripsi" required></textarea>

            <label>Harga (Rp):</label>
            <input type="number" name="harga" min="0" required>

            <label>Diskon (%):</label>
            <input type="number" name="diskon" min="0" max="100" value="0">

            <label>Link Gambar:</label>
            <input type="text" name="gambar" placeholder="Contoh: assets/paket_bali.jpg">

            <label>Pilih Hotel:</label>
            <select name="id_hotel" required>
                <option value="">-- Pilih Hotel --</option>
                <?php $hotels->data_seek(0); while($h = $hotels->fetch_assoc()): ?>
                    <option value="<?= $h['id'] ?>"><?= htmlspecialchars($h['name']) ?></option>
                <?php endwhile; ?>
            </select>

            <label>Pilih Restoran:</label>
            <select name="id_restaurant" required>
                <option value="">-- Pilih Restoran --</option>
                <?php $restaurants->data_seek(0); while($r = $restaurants->fetch_assoc()): ?>
                    <option value="<?= $r['id_restaurants'] ?>"><?= htmlspecialchars($r['name']) ?></option>
                <?php endwhile; ?>
            </select>

            <label>Pilih Wisata:</label>
            <select name="id_wisata" required>
                <option value="">-- Pilih Wisata --</option>
                <?php $wisata->data_seek(0); while($w = $wisata->fetch_assoc()): ?>
                    <option value="<?= $w['id_wisata'] ?>"><?= htmlspecialchars($w['nama_wisata']) ?></option>
                <?php endwhile; ?>
            </select>

            <button type="submit">Tambah Paket</button>
        </form>
    </div>
</body>
</html>