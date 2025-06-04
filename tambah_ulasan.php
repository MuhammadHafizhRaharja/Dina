<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start(); // Mulai sesi


// Cek apakah pengguna sudah login
if (!isset($_SESSION['id_user'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: Signin.php");
    exit();
}

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "dina");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menyimpan ulasan ke dalam tabel ulasan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user']; // Ambil id_user dari session
    $id_restaurants = $_POST['id_restaurants']; // Ambil id_restaurants dari form
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    // Menyimpan ulasan ke dalam tabel ulasan
    $stmt = $conn->prepare("INSERT INTO ulasan (id_user, id_restaurants, komentar, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $id_user, $id_restaurants, $komentar, $rating); // id_user, id_restaurants, komentar, rating
    $stmt->execute();
    $stmt->close();

    // Redirect ke halaman ulasan setelah berhasil menambahkan ulasan
    header("Location: semua_ulasan.php");
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

    <form action="tambah_ulasan.php" method="POST" class="review-form">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?= $_SESSION['username'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="id_restaurants">ID Restoran:</label>
            <input type="hidden" name="id_restaurants" value="<?= htmlspecialchars($_GET['id_restaurants'] ?? '') ?>" required>
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
        <a href="semua_ulasan.php" class="btn">← Lihat Semua Ulasan</a>
    </div>
</body>
</html>
