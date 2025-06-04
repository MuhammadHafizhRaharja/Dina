<?php

session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'CRUD/reservasi restoran/db.php';

// Misal hotel yang dipilih/ditampilkan adalah hotel_id = 1
$hotel_id = 1;

$id_user = $_SESSION['id_user'];
$id_hotel = $_GET['id'] ?? 1;

$username = $_SESSION['username']; // Pastikan username disimpan di session saat login

$stmt = $conn->prepare("SELECT name, image, location FROM hotels WHERE id = ?");
$stmt->bind_param("i", $id_hotel);
$stmt->execute();
$stmt->bind_result($name, $image, $location);
$stmt->fetch();
$stmt->close();

// Ambil room types dari database untuk hotel ini
$sql = "SELECT type_key, name, price FROM room_types WHERE hotel_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $hotel_id);
$stmt->execute();
$result = $stmt->get_result();

$roomTypes = [];
while ($row = $result->fetch_assoc()) {
    $roomTypes[$row['type_key']] = [
        'name' => $row['name'],
        'price' => $row['price']
    ];
}
$stmt->close();

// Ambil data dari form / default
$selectedType = $_POST['room_type'] ?? array_key_first($roomTypes); // default ke key pertama
$checkin = $_POST['checkin'] ?? '';
$checkout = $_POST['checkout'] ?? '';

$pricePerNight = $roomTypes[$selectedType]['price'] ?? 0;

$nightCount = 0;
$totalPrice = 0;

if ($checkin && $checkout) {
    $start = new DateTime($checkin);
    $end = new DateTime($checkout);
    $interval = $start->diff($end);
    $nightCount = max(1, $interval->days);
    $totalPrice = $nightCount * $pricePerNight;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <title>DINA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="reservation.css">
</head>

<?php include 'views/header2.php'; ?>

<section class="checkout py-5" style="background-color: #000; color: white;">
    <div class="container px-4">
        <div class="row align-items-center">
            <!-- Info Hotel -->
            <div class="col-md-3 mb-4 text-center" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
                <h2 class="mb-3" style="text-align: center"><?= htmlspecialchars($name) ?></h2>
                <img src="<?= htmlspecialchars($image) ?>" alt="Room Image" class="img-fluid rounded mb-3" width="300px">
                <p><strong>Location:</strong><br><?= htmlspecialchars($location) ?></p>
                <p><strong>Opening Hours:</strong><br>24 Hours, Monday to Sunday</p>
            </div>

            <!-- Form -->
            <div class="col-md-7" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
                <h3 class="mb-4 border-start border-danger ps-3 text-center">Reservation Hotel</h3>
                <form method="POST" action="CRUD/reservasi_hotel/detail_pembayaran.php">
                    <input type="text" name="name" class="form-control mb-3 bg-dark text-white" placeholder="Your Name" required value="<?= htmlspecialchars($username) ?>" readonly>
                    <input type="email" name="email" class="form-control mb-3 bg-dark text-white" placeholder="Your Email" required>
                    <input type="tel" name="phone" class="form-control mb-3 bg-dark text-white" placeholder="Phone Number" required>

                    <div class="row">
                        <div class="col">
                            <input type="date" name="checkin" class="form-control mb-3 bg-dark text-white"  value="<?= $checkin ?>" required>
                        </div>
                        <div class="col">
                            <input type="date" name="checkout" class="form-control mb-3 bg-dark text-white" value="<?= $checkout ?>" required>
                        </div>
                    </div>

                    <select name="room_type" class="form-select mb-3 bg-dark text-white" required>
                        <?php foreach ($roomTypes as $key => $room): ?>
                            <option value="<?= htmlspecialchars($key) ?>" <?= $selectedType == $key ? 'selected' : '' ?>>
                                <?= htmlspecialchars($room['name']) ?> - Rp<?= number_format($room['price'], 0, ',', '.') ?>/night
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <!-- Tambahan penting -->
                    <input type="hidden" name="hotel_id" value="<?= $hotel_id ?>">

                    <textarea class="form-control mb-3 bg-dark text-white" name="special_request" placeholder="Special Request (optional)" rows="3"></textarea>

                    <div class="d-flex justify-content-end">
                        <a href="slider.php" class="btn btn-grey me-2">Back to Menu</a>
                        <button type="submit" class="btn btn-maroon">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--Review-->
<h1 class="review-h1">Ulasan Terbaru</h1>
<div class="reviews-container" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
    <?php
    $ulasan = $conn->query("
        SELECT uh.*, u.fullname, u.foto_profil 
        FROM ulasan_hotel uh
        JOIN users u ON uh.id_user = u.id_user
        WHERE uh.id_hotel = $hotel_id
        ORDER BY uh.tanggal DESC
        LIMIT 3
    ");
    while ($row = $ulasan->fetch_assoc()):
    ?>
    <div class="review-card">
        <div class="review-header">
            <div class="stars">
                <?php 
                $rating = (int)($row['rating'] ?? 0);
                for ($i = 1; $i <= 5; $i++): ?>
                    <i class="fas fa-star <?= $i <= $rating ? '' : 'inactive' ?>"></i>
                <?php endfor; ?>
            </div>
        </div>
        <div class="review-content">
            <?= htmlspecialchars($row['komentar']) ?>
        </div>
        <div class="review-footer">
            <img src="<?= $row['foto_profil'] ?>" width="40" height="40" alt="Foto profil">
            <div class="username"><?= $row['fullname'] ?></div>
            <div class="date"><?= date('d M Y', strtotime($row['tanggal'])) ?></div>
        </div>
        
        <div class="review-replies">
            <?php
            $balasan = $conn->query("SELECT bh.*, u.fullname FROM balasan_ulasan_hotel bh
                                     JOIN users u ON bh.id_user = u.id_user
                                     WHERE bh.id_ulasan = " . $row['id_ulasan']);
            while ($balas = $balasan->fetch_assoc()):
            ?>
                <div class="reply">
                    <strong><?= $balas['fullname'] ?></strong>: <?= htmlspecialchars($balas['komentar']) ?>
                    <div class="reply-date"><?= date('d M Y', strtotime($balas['tanggal'])) ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<div class="actions">
    <a href="semua_ulasan_hotel.php?id_hotel=<?= $hotel_id ?>" class="btn">See More</a>
    <a href="tambah_ulasan_hotel.php?id_hotel=<?= $hotel_id ?>" class="btn">Review</a>
</div>
   

<?php include 'views/footer3.php'; ?>
