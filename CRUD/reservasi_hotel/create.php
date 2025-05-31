<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room_type = $_POST['room_type'];
    $special_request = $_POST['special_request'] ?? '';

    // Hitung malam & total harga
    $sqlPrice = "SELECT price FROM room_types WHERE type_key = ?";
    $stmtPrice = $conn->prepare($sqlPrice);
    $stmtPrice->bind_param("s", $room_type);
    $stmtPrice->execute();
    $stmtPrice->bind_result($price);
    $stmtPrice->fetch();
    $stmtPrice->close();

    $start = new DateTime($checkin);
    $end = new DateTime($checkout);
    $nights = max(1, $start->diff($end)->days);
    $total = $price * $nights;

    $sql = "INSERT INTO hotel_reservations (name, email, phone, checkin, checkout, room_type, special_request, nights, total_price) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssii", $name, $email, $phone, $checkin, $checkout, $room_type, $special_request, $nights, $total);

    if ($stmt->execute()) {
        header("Location: ../../thankyou.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
