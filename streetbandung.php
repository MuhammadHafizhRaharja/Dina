<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link font google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!--link swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!--link rating-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="street.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>Place to Go in Bandung</title>
    <link rel="icon" type="logoshape/png" href="Assets/logoerase.png">

</head>
<?php
include 'CRUD/reservasi restoran/db.php';

$search  = strtolower(trim($_GET['search'] ?? ''));
$streets = [];
$city   = 'Bandung';

if ($search === '') {
    $sql  = "SELECT nama_jalan, deskripsi, gambar, link_maps
             FROM dina_streets
             WHERE LOWER(city) = ?
             ORDER BY nama_jalan ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $city);
} else {
    $sql  = "SELECT nama_jalan, deskripsi, gambar, link_maps
             FROM dina_streets
             WHERE LOWER(city) = ? AND (LOWER(nama_jalan) LIKE ? OR LOWER(deskripsi) LIKE ?)
             ORDER BY nama_jalan ASC";
    $like = "%$search%";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $city, $like, $like);
}

$stmt->execute();
$res = $stmt->get_result();
$streets = $res->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<?php
include 'views/header1.php';
?>

<!--fitur-->
<!--search bar-->
<div class="search">
    <div class="title-search">
        <div class="animated-text" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
            Cari <span></span>
        </div>
    </div>

    <div class="nav-search" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
        <div class="nav-item on"><a href="streetbandung.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
        <div class="nav-item"><a href="hotelBandung.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
        <div class="nav-item"><a href="mallBandung.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
        <div class="nav-item"><a href="restaurantBandung.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
        <div class="nav-item"><a href="tourismBandung.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
    </div>
    <form class="search-bar" method="get" action="streetbandung.php">
            <i class="fas fa-search"></i>
            <input type="text" name="search"
                value="<?= htmlspecialchars($search) ?>" placeholder="Search streets in Bandung...">
            <button type="submit">Find</button>
        </form>
</div>
 <!-- content -->
<div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <?php if (!$streets): ?>
                <p style="padding:1rem">Tidak ada hasil untuk “<?= htmlspecialchars($search) ?>”.</p>
            <?php endif; ?>

            <?php foreach ($streets as $s): ?>
                <li class="card-item swiper-slide">
                    <a href="<?= htmlspecialchars($s['link_maps']) ?>" class="card-link" target="_blank">
                        <img src="<?= htmlspecialchars($s['gambar']) ?>"
                             alt="<?= htmlspecialchars($s['nama_jalan']) ?>"
                             class="card-image">

                        <h2 class="card-title"><?= htmlspecialchars($s['nama_jalan']) ?></h2><br>
                        <p class="card-paragraph"><?= htmlspecialchars($s['deskripsi']) ?></p><br>
                        <button class="card-button material-symbols-rounded" type="button">arrow_forward</button>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
    </div>
</div>

<!--Recommendation-->
<h3 class="title" data-aos="fade-up"
data-aos-duration="600"
data-aos-delay="200"><span style="color: maroon;">DINA </span>Recommendation</h3>
<div class="main-content" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="image-container">
     <img alt="Bandung" height="500" src="Assets/bandung recomend.jpg" width="1350"/>
     <div class="badge">DINA</div>
     <div class="text-content">
      <h1>This is Bandung</h1>
      <p>Come to Badnung and got the best experience in Indonesia, Wonderful Indonesia.</p>
      <a class="tombol" href="tourismbandung.php">Wisata Bandung terbaik di tahun ini</a>
     </div>
    </div>
   </div>

<?php
include 'views/footer5.php';
?>