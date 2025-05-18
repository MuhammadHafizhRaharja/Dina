<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Redirect if the user is not an admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Fetch all ticket reservations from the database
$sql = "SELECT pt.id_pemesanan, u.username, w.nama_wisata, pt.tanggal, pt.jumlah_tiket, pt.tanggal_pemesanan
        FROM pemesanan_tiket pt
        JOIN users u ON pt.id_user = u.id_user
        JOIN wisata w ON pt.id_wisata = w.id_wisata
        ORDER BY pt.tanggal_pemesanan DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Ticket Reservations</title>
    <link rel="stylesheet" href="member_edit.css">
</head>
<body>

<div class="container">
    <div class="card">
        <div class="header">
            <h1>Manage Ticket Reservations</h1>

            <!-- Reservations Table -->
            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Reservation ID</th>
                            <th>Username</th>
                            <th>Tourist Site</th>
                            <th>Visit Date</th>
                            <th>Number of Tickets</th>
                            <th>Reservation Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id_pemesanan']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['nama_wisata']; ?></td>
                                <td><?= date('d M Y', strtotime($row['tanggal'])); ?></td>
                                <td><?= $row['jumlah_tiket']; ?></td>
                                <td><?= date('d M Y', strtotime($row['tanggal_pemesanan'])); ?></td>
                                <td>
                                    <a href="edit_reservation.php?edit_reservation=<?= $row['id_pemesanan']; ?>" class="btn btn-warning">Edit</a> |
                                    <a href="delete_reservation.php?delete_reservation=<?= $row['id_pemesanan']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="back-button-container">
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>