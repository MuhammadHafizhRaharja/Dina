<?php
include 'CRUD/reservasi restoran/db.php';
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

$id_hotel = $_GET['id_hotel'] ?? 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user'];
    $id_hotel = $_POST['id_hotel']; 
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("INSERT INTO ulasan_hotel (id_user, id_hotel, komentar, rating) VALUES (?, ?, ?, ?)"); // <-- perbaiki di sini
    $stmt->bind_param("iisi", $id_user, $id_hotel, $komentar, $rating);
    $stmt->execute();
    $stmt->close();

    header("Location: semua_ulasan_hotel.php?id_hotel=$id_hotel");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Ulasan Hotel</title>
    <link rel="stylesheet" href="tambah_ulasan.css">
</head>
<body>
    <h1>Tambah Ulasan Hotel</h1>
    <form action="" method="POST" class="review-form">
        <input type="hidden" name="id_hotel" value="<?= htmlspecialchars($id_hotel) ?>">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" value="<?= $_SESSION['username'] ?>" readonly>
        </div>
        <div class="form-group">
            <label>Rating:</label>
            <select name="rating" required>
                <option value="1">1 - Sangat Buruk</option>
                <option value="2">2 - Buruk</option>
                <option value="3">3 - Cukup</option>
                <option value="4">4 - Baik</option>
                <option value="5">5 - Sangat Baik</option>
            </select>
        </div>
        <div class="form-group">
            <label>Komentar:</label>
            <textarea name="komentar" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn">Kirim Ulasan</button>
    </form>
    <div class="actions">
        <a href="semua_ulasan_hotel.php?id_hotel=<?= htmlspecialchars($id_hotel) ?>" class="btn">← Lihat Semua Ulasan</a>
    </div>
</body>
</html>