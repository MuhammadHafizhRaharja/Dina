<?php
include 'CRUD/reservasi restoran/db.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start(); // Mulai sesi


// Cek apakah pengguna sudah login
if (!isset($_SESSION['id_user'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: Signin.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user'];
    $id_wisata = $_POST['id_wisata'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("INSERT INTO ulasan_wisata (id_user, id_wisata, komentar, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $id_user, $id_wisata, $komentar, $rating);
    $stmt->execute();
    $stmt->close();

    header("Location: semua_ulasan_wisata.php?id_wisata=$id_wisata");
    exit();
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Ulasan</title>
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <link rel="stylesheet" href="tambah_ulasan.css">
</head>
<body>
    <h1>Tambah Ulasan</h1>

    <form action="tambah_ulasan_wisata.php" method="POST" class="review-form">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?= $_SESSION['username'] ?>" readonly>
        </div>
        <div class="form-group">
            <input type="hidden" name="id_wisata" value="<?= htmlspecialchars($_GET['id_wisata'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="id_wisata">ID Wisata:</label>
            <input type="hidden" name="id_wisata" value="<?= htmlspecialchars($_GET['id_wisata'] ?? '') ?>">
        <div class="form-group">
            <label for="rating">Rating:</label>
            <select name="rating" id="rating" required>
                <option value="1">1 - Sangat Buruk</option>
                <option value="2">2 - Buruk</option>
                <option value="3">3 - Cukup</option>
                <option value="4">4 - Baik</option>
                <option value="5">5 - Sangat Baik</option>
            </select>
        </div>

        <div class="form-group">
            <label for="komentar">Komentar:</label>
            <textarea name="komentar" id="komentar" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn">Kirim Ulasan</button>
    </form>

    <div class="actions">
        <a href="semua_ulasan_wisata.php" class="btn">← Lihat Semua Ulasan</a>
    </div>
</body>
</html>
