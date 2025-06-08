<?php
session_start();
include 'CRUD/reservasi restoran/db.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['id_user'];
    $nama_user = $_SESSION['username'];
    $kota = $_POST['kota'];
    $judul = $_POST['judul'];
    $cerita = $_POST['cerita'];
    $rating = $_POST['rating'];

    // Upload foto
    $foto = '';
    if ($_FILES['foto']['name']) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir);
        $foto = $target_dir . time() . '_' . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
    }

    $stmt = $conn->prepare("INSERT INTO pengalaman_wisata (id_user, nama_user, kota, judul, cerita, foto, rating) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssi", $id_user, $nama_user, $kota, $judul, $cerita, $foto, $rating);
    $stmt->execute();
    $stmt->close();

    if ($kota === 'Bandung') {
        header("Location: tourismbandung.php");
    } else {
        header("Location: tourism.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengalaman Wisata</title>
    <link rel="stylesheet" href="pengalaman.css">
</head>
<body>
    <h2>Bagikan Pengalamanmu!</h2>
    <form class="form-pengalaman" method="POST" enctype="multipart/form-data">
        <label>Kota:
            <select name="kota" required>
                <option value="Bali">Bali</option>
                <option value="Bandung">Bandung</option>
            </select>
        </label><br>
        <label>Judul Pengalaman: <input type="text" name="judul" required></label><br>
        <label>Foto: <input type="file" name="foto" accept="image/*"></label><br>
        <label>Rating:
            <select name="rating" required>
                <option value="5">5 - Luar Biasa</option>
                <option value="4">4 - Bagus</option>
                <option value="3">3 - Cukup</option>
                <option value="2">2 - Kurang</option>
                <option value="1">1 - Buruk</option>
            </select>
        </label><br>
        <label>Ceritakan pengalamanmu:<br>
            <textarea name="cerita" rows="5" cols="40" required></textarea>
        </label><br>
        <button type="submit">Kirim Pengalaman</button>
    </form>
</body>
</html>