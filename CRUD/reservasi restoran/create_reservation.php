<?php
include 'db.php'; // koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $table = $_POST['table_number'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $sql = "INSERT INTO reservation (name, phone, people, date, table_number, time, message) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssissss", $name, $phone, $people, $date, $table, $time, $message);
    
    if ($stmt->execute()) {
        echo "Reservation created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
