<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Redirect if the user is not an admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Handle Delete reservation
if (isset($_GET['delete_reservation'])) {
    $id_pemesanan = $_GET['delete_reservation'];
    $sql = "DELETE FROM pemesanan_tiket WHERE id_pemesanan = $id_pemesanan";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Reservation deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error: " . $conn->error;
    }
    header("Location: admin_pesanan.php");
    exit();
}