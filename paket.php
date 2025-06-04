<?php
// filepath: c:\xampp\htdocs\DINA bareng\Dina\paket.php
include 'db_connection.php';

// Ambil semua paket dari database
$paket = $conn->query("SELECT * FROM paket_perjalanan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paket Liburan Diskon</title>
    <link rel="stylesheet" href="paket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        /* Optional: agar carousel tidak terlalu mepet di mobile */
        .paket__carousel { padding-bottom: 32px; }
    </style>
</head>
<body>
    <section class="paket__section">
        <h2 class="section__title">
            Paket Liburan <br> Diskon Terbaik
        </h2>
        <div class="paket__carousel swiper">
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    <?php while($row = $paket->fetch_assoc()): ?>
                    <li class="card-item swiper-slide">
                        <div class="paket__card">
                            <div class="paket__image">
                                <img class="paket__img" src="<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['nama_paket']) ?>" />
                            </div>
                            <h2 class="paket__title"><?= htmlspecialchars($row['nama_paket']) ?></h2>
                            <p class="paket__desc"><?= htmlspecialchars($row['deskripsi']) ?></p>
                            <div class="paket__harga">
                                <?php if (!empty($row['harga_asli']) && $row['harga_asli'] > $row['harga']): ?>
                                    <span class="harga-asli">Rp <?= number_format($row['harga_asli'],0,',','.') ?></span>
                                <?php endif; ?>
                                <span class="harga-diskon">Rp <?= number_format($row['harga'],0,',','.') ?></span>
                            </div>
                            <a href="pesan_paket.php?id_paket=<?= $row['id_paket'] ?>" class="button">Pesan Sekarang</a>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.paket__carousel', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
        breakpoints: {
            1024: { slidesPerView: 3 },
            768: { slidesPerView: 2 },
            320: { slidesPerView: 1 }
        }
    });
    </script>
</body>
</html>