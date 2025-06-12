<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'db.php';

// Pastikan hanya admin yang bisa menghapus
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Proses hapus jika ada parameter id
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM hotel_reservations WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Reservation deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error: " . $conn->error;
    }
}

header("Location: admin_hotel.php");
exit();