<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; // ID yang akan diupdate
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $table = $_POST['table_number'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $sql = "UPDATE reservation SET name=?, phone=?, people=?, date=?, table_number=?, time=?, message=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssissssi", $name, $phone, $people, $date, $table, $time, $message, $id);

    if ($stmt->execute()) {
        echo "Reservation updated successfully!";
    } else {
        echo "Update failed: " . $stmt->error;
    }
}
?>
