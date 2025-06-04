<?php
// Include database connection
include 'db.php';

// Fetch all reservations from the database
$query = "SELECT * FROM reservasi ORDER BY tanggal DESC";
$result = $conn->query($query);

// Handle form submission to create a reservation
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    // Collect form data
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $tanggal = $_POST['tanggal'];
    $id_meja = $_POST['id_meja'];
    $jam = $_POST['jam'];
    $pesan = $_POST['pesan'];

    // Insert the reservation into the database
    $stmt = $conn->prepare("INSERT INTO reservasi (nama, telepon, jumlah_orang, tanggal, id_meja, jam, pesan, total_biaya) VALUES (?, ?, ?, ?, ?, ?, ?, 0)");
    $stmt->bind_param("ssissss", $nama, $telepon, $jumlah_orang, $tanggal, $id_meja, $jam, $pesan);

    if ($stmt->execute()) {
        echo "<p>Reservation created successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Handle delete reservation
if (isset($_POST['delete_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    $stmt = $conn->prepare("DELETE FROM reservasi WHERE id_reservasi = ?");
    $stmt->bind_param("i", $reservation_id);

    if ($stmt->execute()) {
        echo "<p>Reservation deleted successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Reservasi</title>
  <link rel="stylesheet" href="admin_reservation.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
  <div class="admin-container">
    <h1>Pengelolaan Reservasi</h1>

    <h2>Daftar Reservasi</h2>
    <div class="reservations-list">
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="reservation-card">
          <div class="card-header">
            <h2>Reservasi oleh: <?= htmlspecialchars($row['nama']) ?></h2>
          </div>
          
          <div class="card-body">
            <p><strong>Nomor Telepon:</strong> <?= htmlspecialchars($row['telepon']) ?></p>
            <p><strong>Jumlah Orang:</strong> <?= htmlspecialchars($row['jumlah_orang']) ?> orang</p>
            <p><strong>Tanggal Reservasi:</strong> <?= htmlspecialchars($row['tanggal']) ?></p>
            <p><strong>Jam Reservasi:</strong> <?= htmlspecialchars($row['jam']) ?></p>
            <p><strong>Nomor Meja:</strong> Meja <?= htmlspecialchars($row['id_meja']) ?></p>
            <p><strong>Pesan:</strong> <?= htmlspecialchars($row['pesan']) ?></p>
          </div>

          <div class="card-footer">
            <!-- Edit Reservation Link -->
            <a href="update_reservation.php?id=<?= $row['id_reservasi'] ?>" class="btn-edit">Edit</a>

            <!-- Delete Reservation -->
            <form method="POST" style="display:inline-block;">
              <input type="hidden" name="reservation_id" value="<?= $row['id_reservasi'] ?>">
              <button type="submit" name="delete_reservation" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
            </form>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <a href="dashboard.php" class="btn-back-to-dashboard">Back to Dashboard</a>
  </div>
</body>
</html>