<?php
// koneksi
$conn = new mysqli("localhost", "root", "", "dina");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tambah ulasan
if (isset($_POST['tambah'])) {
    $id_user = $_POST['id_user'];
    $id_restoran = $_POST['id_restoran'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("INSERT INTO ulasan (id_user, id_restoran, rating, komentar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $id_user, $id_restoran, $rating, $komentar);
    $stmt->execute();
}

// Hapus ulasan
if (isset($_GET['hapus'])) {
    $id_ulasan = $_GET['hapus'];
    $conn->query("DELETE FROM ulasan WHERE id_ulasan = $id_ulasan");
}

// Ambil data untuk form edit
$edit = null;
if (isset($_GET['edit'])) {
    $id_ulasan = $_GET['edit'];
    $edit = $conn->query("SELECT * FROM ulasan WHERE id_ulasan = $id_ulasan")->fetch_assoc();
}

// Update ulasan
if (isset($_POST['update'])) {
    $id_ulasan = $_POST['id_ulasan'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("UPDATE ulasan SET rating = ?, komentar = ? WHERE id_ulasan = ?");
    $stmt->bind_param("isi", $rating, $komentar, $id_ulasan);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Ulasan</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .ulasan { margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        img { border-radius: 50%; vertical-align: middle; }
        input, textarea, select { margin: 5px 0; padding: 5px; width: 300px; }
        form { margin-bottom: 30px; }
    </style>
</head>
<body>

<h2><?= $edit ? "Edit Ulasan" : "Tambah Ulasan" ?></h2>
<form method="post">
    <?php if ($edit): ?>
        <input type="hidden" name="id_ulasan" value="<?= $edit['id_ulasan'] ?>">
    <?php endif; ?>

    <label>User:</label><br>
    <select name="id_user" <?= $edit ? "disabled" : "" ?>>
        <?php
        $users = $conn->query("SELECT * FROM users");
        while ($user = $users->fetch_assoc()):
        ?>
            <option value="<?= $user['id_user'] ?>" <?= ($edit && $user['id_user'] == $edit['id_user']) ? "selected" : "" ?>>
                <?= $user['nama'] ?>
            </option>
        <?php endwhile; ?>
    </select><br>

    <label>ID Restoran:</label><br>
    <input type="number" name="id_restoran" value="<?= $edit['id_restoran'] ?? '' ?>" <?= $edit ? "disabled" : "" ?>><br>

    <label>Rating (1-5):</label><br>
    <input type="number" name="rating" min="1" max="5" value="<?= $edit['rating'] ?? '' ?>"><br>

    <label>Komentar:</label><br>
    <textarea name="komentar"><?= $edit['komentar'] ?? '' ?></textarea><br>

    <button type="submit" name="<?= $edit ? "update" : "tambah" ?>">
        <?= $edit ? "Update" : "Tambah" ?> Ulasan
    </button>
</form>

<hr>

<h2>Daftar Ulasan</h2>
<?php
$ulasan = $conn->query("
    SELECT u.*, us.nama, us.foto_profil 
    FROM ulasan u
    JOIN users us ON u.id_user = us.id_user
    ORDER BY u.tanggal DESC
");
while ($row = $ulasan->fetch_assoc()):
?>
    <div class="ulasan">
        <img src="<?= $row['foto_profil'] ?>" width="50" height="50">
        <strong><?= $row['nama'] ?></strong><br>
        <span>Rating: <?= $row['rating'] ?>/5</span><br>
        <p><?= htmlspecialchars($row['komentar']) ?></p>
        <small><?= $row['tanggal'] ?></small><br>
        <a href="?edit=<?= $row['id_ulasan'] ?>">Edit</a> |
        <a href="?hapus=<?= $row['id_ulasan'] ?>" onclick="return confirm('Hapus ulasan ini?')">Hapus</a>
    </div>
<?php endwhile; ?>

</body>
</html>
