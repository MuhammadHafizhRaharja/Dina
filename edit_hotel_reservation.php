<?php
// filepath: c:\xampp\htdocs\dina1\Dina\edit_hotel_reservation.php
session_start();
include 'db.php';

// Redirect jika bukan admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$id = intval($_GET['id']);

// Ambil data reservasi hotel
$stmt = $conn->prepare("SELECT * FROM hotel_reservations WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$reservasi = $result->fetch_assoc();

if (!$reservasi) {
    echo "Data tidak ditemukan.";
    exit();
}

// Proses update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name            = $_POST['name'];
    $email           = $_POST['email'];
    $phone           = $_POST['phone'];
    $hotel_id        = $_POST['hotel_id'];
    $checkin         = $_POST['checkin'];
    $checkout        = $_POST['checkout'];
    $room_type       = $_POST['room_type'];
    $special_request = $_POST['special_request'];
    $nights          = $_POST['nights'];
    $total_price     = $_POST['total_price'];

    $stmt = $conn->prepare("UPDATE hotel_reservations SET name=?, email=?, phone=?, hotel_id=?, checkin=?, checkout=?, room_type=?, special_request=?, nights=?, total_price=? WHERE id=?");
    $stmt->bind_param("ssssssssiii", $name, $email, $phone, $hotel_id, $checkin, $checkout, $room_type, $special_request, $nights, $total_price, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Reservasi berhasil diupdate!');window.location='admin_hotel.php';</script>";
        exit();
    } else {
        $error = "Gagal update: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Hotel Reservation</title>
    <link rel="stylesheet" href="admin_hotel.css">
</head>
<body>
<div class="container">
    <div class="card" style="max-width:500px;margin:40px auto;">
        <h1 style="text-align:center;">Edit Hotel Reservation</h1>
        <?php if (isset($error)) echo "<div class='alert-danger'>$error</div>"; ?>
        <form method="POST" style="display:flex;flex-direction:column;gap:13px;">
            <label>Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($reservasi['name']) ?>" required>
            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($reservasi['email']) ?>" required>
            <label>Phone:</label>
            <input type="text" name="phone" value="<?= htmlspecialchars($reservasi['phone']) ?>" required>
            <label>Hotel ID:</label>
            <input type="text" name="hotel_id" value="<?= htmlspecialchars($reservasi['hotel_id']) ?>" required>
            <label>Check-in:</label>
            <input type="date" name="checkin" value="<?= htmlspecialchars($reservasi['checkin']) ?>" required>
            <label>Check-out:</label>
            <input type="date" name="checkout" value="<?= htmlspecialchars($reservasi['checkout']) ?>" required>
            <label>Room Type:</label>
            <input type="text" name="room_type" value="<?= htmlspecialchars($reservasi['room_type']) ?>" required>
            <label>Special Request:</label>
            <input type="text" name="special_request" value="<?= htmlspecialchars($reservasi['special_request']) ?>">
            <label>Nights:</label>
            <input type="number" name="nights" value="<?= htmlspecialchars($reservasi['nights']) ?>" required>
            <label>Total Price:</label>
            <input type="number" name="total_price" value="<?= htmlspecialchars($reservasi['total_price']) ?>" required>
            <div style="display:flex;gap:10px;justify-content:flex-end;">
                <button type="submit">Update Reservasi</button>
            <a href="admin_hotel.php" class="btn-back-to-dashboard">Batal</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>