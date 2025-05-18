<?php
include 'db.php';

$reservation_id = $_POST['reservation_id'] ?? null;

if ($reservation_id) {
    $stmt = $conn->prepare("UPDATE reservation SET status = 'rejected' WHERE id = ?");
    $stmt->bind_param("i", $reservation_id);
    
    if ($stmt->execute()) {
        header("Location: admin_reservation.php"); // Redirect to the admin reservation page
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>