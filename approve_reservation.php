<?php
include 'db.php';

if (isset($_GET['id'])) {
    $reservation_id = $_GET['id'];

    // Get current reservation data
    $stmt = $conn->prepare("SELECT * FROM reservation WHERE id = ?");
    $stmt->bind_param("i", $reservation_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $reservation = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Process the form
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $people = $_POST['people'];
        $date = $_POST['date'];
        $table = $_POST['table_number'];
        $time = $_POST['time'];
        $message = $_POST['message'];

        $update_stmt = $conn->prepare("UPDATE reservation SET name=?, phone=?, people=?, date=?, table_number=?, time=?, message=? WHERE id=?");
        $update_stmt->bind_param("ssissssi", $name, $phone, $people, $date, $table, $time, $message, $reservation_id);
        
        if ($update_stmt->execute()) {
            echo "Reservation updated successfully!";
        } else {
            echo "Error: " . $update_stmt->error;
        }

        $update_stmt->close();
    }
}
?>

<form action="update_reservation.php?id=<?= $reservation['id'] ?>" method="POST">
    <input name="name" value="<?= $reservation['name'] ?>" type="text" required>
    <input name="phone" value="<?= $reservation['phone'] ?>" type="tel" required>
    <input name="people" value="<?= $reservation['people'] ?>" type="number" required>
    <input name="date" value="<?= $reservation['date'] ?>" type="date" required>
    <input name="table_number" value="<?= $reservation['table_number'] ?>" type="number" required>
    <input name="time" value="<?= $reservation['time'] ?>" type="time" required>
    <textarea name="message"><?= $reservation['message'] ?></textarea>
    <button type="submit">Update Reservation</button>
</form>
