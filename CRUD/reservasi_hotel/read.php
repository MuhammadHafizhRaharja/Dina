<?php
include 'db.php';
$result = $conn->query("SELECT * FROM hotel_reservations");
?>

<h2>List Reservasi Hotel</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>No</th><th>Nama</th><th>Email</th><th>Check-in</th><th>Check-out</th><th>Kamar</th><th>Total</th><th>Action</th>
    </tr>
    <?php $i=1; while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= $row['checkin'] ?></td>
        <td><?= $row['checkout'] ?></td>
        <td><?= $row['room_type'] ?></td>
        <td>Rp<?= number_format($row['total_price'], 0, ',', '.') ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus reservasi ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
