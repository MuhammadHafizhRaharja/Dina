<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Redirect if the user is not an admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Handle Edit reservation (update)
if (isset($_GET['edit_reservation'])) {
    $id_pemesanan = $_GET['edit_reservation'];
    $sql = "SELECT * FROM pemesanan_tiket WHERE id_pemesanan = $id_pemesanan";
    $edit_result = $conn->query($sql);
    $reservation = $edit_result->fetch_assoc();
}

// Update reservation
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_reservation'])) {
    $id_pemesanan = $_POST['id_pemesanan'];
    $tanggal = $_POST['tanggal'];
    $jumlah_tiket = $_POST['jumlah_tiket'];

    $update_sql = "UPDATE pemesanan_tiket SET tanggal = ?, jumlah_tiket = ? WHERE id_pemesanan = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sii", $tanggal, $jumlah_tiket, $id_pemesanan);
    $stmt->execute();
    $stmt->close();
    $_SESSION['success_message'] = "Reservation updated successfully.";
    header("Location: admin_pesanan.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="member_edit.css">
</head>
<body>

<div class="container">
    <div class="card">
        <div class="header">
            <h1>Edit Reservation</h1>

            <!-- Success Message -->
            <?php if (isset($_SESSION['success_message'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success_message']; ?>
                    <?php unset($_SESSION['success_message']); ?>
                </div>
            <?php endif; ?>

            <!-- Edit Reservation Form -->
            <form method="POST">
                <input type="hidden" name="id_pemesanan" value="<?= $reservation['id_pemesanan']; ?>">

                <label>Visit Date:</label><br>
                <input type="date" name="tanggal" value="<?= $reservation['tanggal']; ?>" required><br><br>

                <label>Number of Tickets:</label><br>
                <input type="number" name="jumlah_tiket" value="<?= $reservation['jumlah_tiket']; ?>" min="1" required><br><br>

                <button type="submit" name="update_reservation">Update Reservation</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>