<?php
session_start();
include 'db.php';

$query = "SELECT * FROM reservasi ORDER BY tanggal DESC";
$result = $conn->query($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $nama = $_POST['username'];
    $telepon = $_POST['telepon'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $tanggal = $_POST['tanggal'];
    $id_meja = $_POST['id_meja'];
    $jam = $_POST['jam'];
    $pesan = $_POST['pesan'];

    $stmt = $conn->prepare("INSERT INTO reservasi (username, telepon, jumlah_orang, tanggal, id_meja, jam, pesan, total_biaya) VALUES (?, ?, ?, ?, ?, ?, ?, 0)");
    $stmt->bind_param("ssissss", $nama, $telepon, $jumlah_orang, $tanggal, $id_meja, $jam, $pesan);

    if ($stmt->execute()) {
        $success = "Reservation created successfully!";
    } else {
        $error = "Error: " . $stmt->error;
    }
    $stmt->close();
}

if (isset($_POST['delete_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    $stmt = $conn->prepare("DELETE FROM reservasi WHERE id_reservasi = ?");
    $stmt->bind_param("i", $reservation_id);

    if ($stmt->execute()) {
        $success = "Reservation deleted successfully!";
    } else {
        $error = "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Reservasi Restoran</title>
    <link rel="stylesheet" href="admin_reservation.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="header">
            <h1>Manajemen Reservasi Restoran</h1>
        </div>

        <!-- Alert -->
        <?php if (!empty($success)): ?>
            <div class="alert-success"><?= $success ?></div>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <div class="alert-danger" style="color:red;"><?= $error ?></div>
        <?php endif; ?>

        <!-- Reservations Table -->
        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Restaurants</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Jumlah Orang</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Meja</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id_reservasi'] ?></td>
                            <td><?= $row['id_restaurants'] ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['telepon']) ?></td>
                            <td><?= $row['jumlah_orang'] ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td><?= $row['jam'] ?></td>
                            <td><?= $row['id_meja'] ?></td>
                            <td><?= htmlspecialchars($row['pesan']) ?></td>
                            <td>
                                <a href="update_reservation.php?id=<?= $row['id_reservasi'] ?>" class="btn btn-warning">Edit</a>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="reservation_id" value="<?= $row['id_reservasi'] ?>">
                                    <button type="submit" name="delete_reservation" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="10" style="text-align:center;">Belum ada reservasi.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="back-button-container">
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>
</body>
</html>