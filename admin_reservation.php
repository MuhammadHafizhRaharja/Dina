<?php
// Include database connection
include 'db.php';

// Fetch all reservations from the database
$query = "SELECT * FROM reservation ORDER BY date DESC";
$result = $conn->query($query);

// Handle form submission to create a reservation
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $table = $_POST['table_number'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Insert the reservation into the database
    $stmt = $conn->prepare("INSERT INTO reservation (name, phone, people, date, table_number, time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissss", $name, $phone, $people, $date, $table, $time, $message);

    if ($stmt->execute()) {
        echo "<p>Reservation created successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Handle status updates (approve/reject)
if (isset($_POST['update_status'])) {
    $reservation_id = $_POST['reservation_id'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE reservation SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $reservation_id);

    if ($stmt->execute()) {
        echo "<p>Reservation status updated successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Handle delete reservation
if (isset($_POST['delete_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    $stmt = $conn->prepare("DELETE FROM reservation WHERE id = ?");
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

    <!-- Back to Dashboard Button -->
    <a href="dashboard.php" class="btn-back-to-dashboard">Back to Dashboard</a>

    <!-- Reservation Creation Form -->
    <h2>Tambah Reservasi</h2>
    <form method="POST">
      <input name="name" placeholder="Your Name" type="text" required>
      <input name="phone" placeholder="Phone Number" type="tel" required>
      <input name="people" placeholder="Number of People" type="number" required>
      <input name="date" type="date" required>
      <input name="table_number" placeholder="Table Number" type="number" required>
      <input name="time" type="time" required>
      <textarea name="message" placeholder="Message"></textarea>
      <button type="submit" name="create">Add Reservation</button>
    </form>

    <h2>Daftar Reservasi</h2>
    <div class="reservations-list">
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="reservation-card">
          <div class="card-header">
            <h2>Reservasi oleh: <?= $row['name'] ?></h2>
            <span class="status">Status: <?= $row['status'] ?></span>
          </div>
          
          <div class="card-body">
            <p><strong>Nomor Telepon:</strong> <?= $row['phone'] ?></p>
            <p><strong>Jumlah Orang:</strong> <?= $row['people'] ?> orang</p>
            <p><strong>Tanggal Reservasi:</strong> <?= $row['date'] ?></p>
            <p><strong>Jam Reservasi:</strong> <?= $row['time'] ?></p>
            <p><strong>Nomor Meja:</strong> Meja <?= $row['table_number'] ?></p>
            <p><strong>Pesan:</strong> <?= $row['message'] ?></p>
          </div>

          <div class="card-footer">
            <!-- Edit Reservation Link -->
            <a href="update_reservation.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>

            <!-- Update Status (Approve/Reject) -->
            <form method="POST" style="display:inline-block;">
              <input type="hidden" name="reservation_id" value="<?= $row['id'] ?>">
              <select name="status" required>
                <option value="approved" <?= ($row['status'] == 'approved') ? 'selected' : '' ?>>Approve</option>
                <option value="rejected" <?= ($row['status'] == 'rejected') ? 'selected' : '' ?>>Reject</option>
                <option value="pending" <?= ($row['status'] == 'pending') ? 'selected' : '' ?>>Pending</option>
              </select>
              <button type="submit" name="update_status">Update Status</button>
            </form>

            <!-- Delete Reservation -->
            <form method="POST" style="display:inline-block;">
              <input type="hidden" name="reservation_id" value="<?= $row['id'] ?>">
              <button type="submit" name="delete_reservation" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
            </form>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

</body>
</html>