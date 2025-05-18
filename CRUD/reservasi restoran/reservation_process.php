<?php
// Koneksi ke database
include 'db.php';

// Ambil data dari form
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$people = $_POST['people'] ?? '';
$date = $_POST['date'] ?? '';
$table = $_POST['table'] ?? '';
$time = $_POST['time'] ?? '';
$message = $_POST['message'] ?? '';

// Validasi sederhana
if ($name == '' || $phone == '' || $people == '' || $date == '' || $table == '' || $time == '') {
    echo "Semua field harus diisi!";
    exit;
}

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO reservation (name, phone, people, date, table_number, time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $name, $phone, $people, $date, $table, $time, $message);

if ($stmt->execute()) {
    echo "<h2>Reservasi berhasil!</h2>";
    echo "<p>Terima kasih, $name. Kami telah menerima reservasi Anda untuk tanggal $date jam $time di meja nomor $table.</p>";
    echo '<a href="../../restaurant.php">Kembali ke Menu</a>';
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
