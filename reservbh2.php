<?php

session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'CRUD/reservasi restoran/db.php';

// Misal hotel yang dipilih/ditampilkan adalah hotel_id = 1
$hotel_id = 7;

$id_user = $_SESSION['id_user'];
$id_hotel = $_GET['id'] ?? 7;

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
    <div class="reviews-container" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
        <div class="review-card" >
            <div class="review-header">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="review-content">
                Hotel ini sangat memuaskan. Kamar bersih, pelayanan ramah, fasilitas lengkap, dan sarapan lezat. Lokasi strategis memudahkan akses ke berbagai tempat wisata.
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @R450GCarnauld" height="40" src="about us/images/Foto apis.jpg" width="40"/>
                    <div class="username">apis@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
             </div>

            <div class="review-content">
                Lokasi hotel sangat strategis, dekat tempat wisata. Pelayanan staf sangat profesional, kamar selalu bersih dan nyaman, serta suasana hotel tenang. Ingin kembali lagi
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @846rapha_lm" height="40" src="about us/images/darren2.jpg" width="40"/>
                    <div class="username">daren@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="review-content">
                Pengalaman menginap yang menyenangkan. Kamar nyaman dengan pemandangan indah. Wi-Fi stabil, kolam renang bersih. Sangat direkomendasikan!
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @R450GCarnauld" height="40" src="about us/images/dwiki.jpg" width="40"/>
                    <div class="username">afdikk@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>
    </div>

<?php include 'views/footer3.php'; ?>
