<?php
session_start();
include 'db.php';

// Redirect jika bukan admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Ambil semua data reservasi hotel
$sql = "SELECT id, name, email, phone, hotel_id, checkin, checkout, room_type, special_request, nights, total_price
        FROM hotel_reservations
        ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Hotel Reservations</title>
    <link rel="stylesheet" href="admin_hotel.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="header">
            <h1>Manage Hotel Reservations</h1>
        </div>

        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Hotel ID</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Room Type</th>
                        <th>Special Request</th>
                        <th>Nights</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= htmlspecialchars($row['name']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td><?= htmlspecialchars($row['phone']); ?></td>
                            <td><?= $row['hotel_id']; ?></td>
                            <td><?= htmlspecialchars($row['checkin']); ?></td>
                            <td><?= htmlspecialchars($row['checkout']); ?></td>
                            <td><?= htmlspecialchars($row['room_type']); ?></td>
                            <td><?= htmlspecialchars($row['special_request']); ?></td>
                            <td><?= $row['nights']; ?></td>
                            <td>Rp<?= number_format($row['total_price'], 0, ',', '.'); ?></td>
                            <td>
                                <a href="edit_hotel_reservation.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete_hotel_reservation.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <div class="back-button-container">
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>
</body>
</html>