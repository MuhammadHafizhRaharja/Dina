<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
  <title>Reservation</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="reservasiresto.css">

 </head>
 <?php
include 'views/header2.php';
include 'CRUD/reservasi restoran/db.php';
?>

    <div class="container-resto">
        <div class="contact-resto" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
            <h2>CORK Bali Bistro & Wine</h2>
           <img alt="Restaurant exterior with tables and chairs" height="200" src="media/restoo1.jpeg" width="300"/>
           <div >
               <p style="padding-top: 20px; color: white;"><strong>Location</strong></p>
               <p style="font-size: 14px;">Jl. Danau Tamblingan No.140, Sanur, Denpasar Selatan, Kota Denpasar, Bali 80228</p>
               <p style="padding-top: 10px; color: white;"><strong> Opening Hours</strong></p>
               <p style="font-size: 14px;">Monday to Sunday</p>
               <p style="font-size: 14px;">08.00 - 22.00</p>
              
           </div>
       </div>

       <div class="reservation" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
    <form action="CRUD/reservasi restoran/detail_pembayaran.php" method="POST">
        <div style="border-left: 2px solid maroon; padding-left: 10px;">
            <h1>Reservation Restaurant</h1>
            <p>Booking Now</p>
        </div>

        <input name="name" placeholder="Your Name" type="text" required />
        <input name="phone" placeholder="Phone Number" type="tel" required />

        <div style="display: flex; gap: 10px;">
            <select name="people" required>
                <option value="1">1 Person</option>
                <option value="2">2 People</option>
                <option value="3">3 People</option>
                <option value="4">4 People</option>
                <option value="5">5 People</option>
                <option value="6">6 People</option>
                <option value="7">7 People</option>
                <option value="8">8 People</option>
                <option value="9">9 People</option>
                <option value="10">10 People</option>
            </select>
            <input name="date" placeholder="HH/BB/TTTT" type="date" required />
        </div>

        <div style="display: flex; gap: 10px;">
            <select name="table" required>
                <option value="1">Table 1</option>
                <option value="2">Table 2</option>
                <option value="3">Table 3</option>
                <option value="4">Table 4</option>
                <option value="5">Table 5</option>
                <option value="6">Table 6</option>
                <option value="7">Table 7</option>
                <option value="8">Table 8</option>
                <option value="9">Table 9</option>
                <option value="10">Table 10</option>
            </select>
            <select name="time" required>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
            </select>
        </div>

        <textarea name="message" placeholder="Message" style="max-width: 650px;"></textarea>

        <div class="button-resto">
            <button type="submit" style="background-color: maroon;">BOOK A TABLE</button>
            <a href="restaurant.php">
                <button type="button">Back to Menu</button>
            </a>
        </div>
    </form>
</div>
</div>




    <div style="border-top: 2px solid maroon; padding-top: 115px; margin-left: 300px; margin-right: 300px;" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"></div>

     <!--Review-->
     <?php
    // $conn = new mysqli("localhost", "root", "", "dina");
    // if ($conn->connect_error) {
    //     die("Koneksi gagal: " . $conn->connect_error);
    // }

// Tambah ulasan
if (isset($_POST['tambah'])) {
    $id_user = $_POST['id_user'];
    $id_restoran = $_POST['id_restoran'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("INSERT INTO ulasan (id_user, id_restoran, rating, komentar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $id_user, $id_restoran, $rating, $komentar);
    $stmt->execute();
}

// Hapus ulasan
if (isset($_GET['hapus'])) {
    $id_ulasan = $_GET['hapus'];
    $conn->query("DELETE FROM ulasan WHERE id_ulasan = $id_ulasan");
}
?> 
    <h1 class="review-h1">Ulasan Terbaru</h1>
   
        <div class="review-container"> 
            <?php
        $ulasan = $conn->query("
            SELECT u.*, us.fullname, us.foto_profil 
            FROM ulasan u
            JOIN users us ON u.id_user = us.id_user
            ORDER BY u.tanggal DESC
            LIMIT 3
        ");
        while ($row = $ulasan->fetch_assoc()):
        

        ?>
        <div class="review-card">
            <div class="review-header">
            <div class="stars">
            <?php 
                $rating = isset($row['rating']) ? (int)$row['rating'] : 0;
                for ($i = 1; $i <= 5; $i++): ?>
                    <i class="fas fa-star <?= ($i <= $rating) ? '' : 'inactive' ?>"></i>
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
        </div>
        <?php endwhile; ?>
    </div>

    <div class="actions">
        <a href="semua_ulasan.php" class="btn">See More</a>
        <a href="tambah_ulasan.php" class="btn">Review</a>
    </div>

    <?php
    include 'views/footer4.php';
    ?>