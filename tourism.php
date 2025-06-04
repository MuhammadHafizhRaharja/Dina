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
    <link rel="stylesheet" href="tourism.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>Tourism in Bali</title>
    <link rel="icon" type="logoshape/png" href="Assets/logoerase.png">
</head>
<?php
include 'views/header1.php';
include 'CRUD/reservasi restoran/db.php';

$search  = strtolower(trim($_GET['search'] ?? ''));
$wisata = [];   

if ($search === '') {
    $sql  = "SELECT nama_wisata, deskripsi, foto_profil, link_maps, link_detail
             FROM wisata
             WHERE LOWER(city) = 'bali'
             ORDER BY nama_wisata ASC";
    $stmt = $conn->prepare($sql);
} else {
    $sql  = "SELECT nama_wisata, deskripsi, foto_profil, link_maps, link_detail
             FROM wisata
             WHERE LOWER(city) = 'bali' AND (LOWER(nama_wisata) LIKE ? OR LOWER(deskripsi) LIKE ?)
             ORDER BY nama_wisata ASC";
    $like = "%$search%";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $like, $like);
}

$stmt->execute();
$res = $stmt->get_result();
$wisata = $res->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// Logic Top 1 Destination This Week
$topWisata = [];
$sqlTop = "SELECT w.nama_wisata, w.link_maps, w.link_detail
            FROM pemesanan_tiket p
            JOIN wisata w ON p.id_wisata = w.id_wisata
            WHERE p.tanggal_pemesanan >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
            GROUP BY p.id_wisata
            ORDER BY COUNT(*) DESC
            LIMIT 1";

$resTop = $conn->query($sqlTop);
if ($resTop && $resTop -> num_rows > 0) {
    $topWisata = $resTop->fetch_assoc();
}
?>

<!--fitur-->
    <div class="search">
        <div class="title-search">
            <div class="animated-text">
                Cari <span></span>
            </div>
        </div>

        <div class="nav-search" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
            <div class="nav-item"><a href="street.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="slider.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mall.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurant.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item on"><a href="tourism.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
        </div>
        <form class="search-bar" method="get" action="tourism.php">
            <i class="fas fa-search"></i>
            <input type="text" name="search"
                value="<?= htmlspecialchars($search) ?>" placeholder="Search destinations in Bali...">
            <button type="submit">Find</button>
        </form>
    </div>

 <!--top 1 of the week bar-->
 <div class="background" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
  <div class="overlay"></div>
  <div class="content">
      <h1>This Week's Top Tourism Destination</h1>
      <?php if ($topWisata): ?>
        <a href="<?= htmlspecialchars($topWisata['link_detail']) ?>" style="color: maroon;">
            <?= htmlspecialchars($topWisata['nama_wisata']) ?>
        </a>
        <?php else: ?>
            <span style="color: maroon;">Belum ada Pemesanan Terbanyak Minggu ini.</span>
        <?php endif; ?>
  </div>
</div>

<!--Content-->
<h2 class="title" data-aos="fade-up">Wonderful <Span style="color: maroon;">Bali</Span></h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <?php if (!$wisata): ?>
                <p style="padding:1rem">Tidak ada hasil untul "<?= htmlspecialchars($search) ?>".</p>
                <?php endif; ?>

                <?php foreach ($wisata as $s) : ?>
                    <li class="card-item swiper-slide">
                        <a href="<?= htmlspecialchars($s['link_detail']) ?>" class="card-link" target="_blank">
                            <img src="<?= htmlspecialchars($s['foto_profil']) ?>" alt="<?= htmlspecialchars($s['nama_wisata']) ?>" class="card-image">
                            <h2 class="card-title"><?= htmlspecialchars($s['nama_wisata']) ?></h2><br>
                            <p class="card-paragraph"><?= htmlspecialchars($s['deskripsi']) ?> </p><br>
                        </a>
                    </li>
                    <?php endforeach; ?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>
</div>

<?php
include 'views/footer5.php';
?>