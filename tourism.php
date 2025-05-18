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
        <div class="search-bar" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Tempat untuk dikunjungi, hal yang dapat dilakukan, hotel...">
            <button>Cari</button>
        </div>
    </div>

 <!--top 1 of the week bar-->
 <div class="background" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
  <div class="overlay"></div>
  <div class="content">
      <h1>This Week's Top Tourism Destination</h1>
      <a href="https://maps.app.goo.gl/4yeYbzcsf45B7CJi6"  style="color: maroon;">Nusa Dua Beach </a>
  </div>
</div>

<!--Content-->
<h2 class="title" data-aos="fade-up">Wonderful <Span style="color: maroon;">Bali</Span></h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="kutatourism.php" class="card-link">
                    <img src="Assets/kuta.jpg" alt="Kuta" class="card-image">
                    <i href="https://maps.app.goo.gl/4yeYbzcsf45B7CJi6" class="material-symbols-outlined" style="position: absolute;">explore</i>
                    <h2 class="card-title">Pantai Kuta</h2><br>
                    <h3>Pantai populer dengan ombak yang cocok untuk berselancar dan pemandangan matahari terbenam yang indah.</h3>
                </a>
                
            </li>
            <li class="card-item swiper-slide">
                <a href="tanahlottourism.php" class="card-link">
                    <img src="Assets/tanah lot.jpg" alt="Tanah Lot" class="card-image">
                    <h2 class="card-title">Tanah Lot</h2><br>
                    <h3>Pura ikonik yang terletak di atas batu karang di tepi laut, populer untuk melihat matahari terbenam.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="uluwatutourism.php" class="card-link">
                    <img src="Assets/uluwatu.jpg" alt="uluwatu" class="card-image">
                    <h2 class="card-title">Uluwatu</h2><br>
                    <h3>Pura yang berada di tebing tinggi dengan pemandangan samudra dan pertunjukan tari Kecak.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="gunungbaturtourism.php" class="card-link">
                    <img src="Assets/gunung batur.jpg" alt="gunung batur" class="card-image">
                    <h2 class="card-title">Gunung Batur</h2><br>
                    <h3>Tempat trekking favorit untuk melihat matahari terbit dari puncak gunung berapi.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
              <a href="nusaduatourism.php" class="card-link">
                  <img src="Assets/nusa dua.jpg" alt="nusa dua" class="card-image">
                  <h2 class="card-title">Pantai Nusa Dua</h2><br>
                  <h3>Kawasan resor dengan pantai pasir putih yang cocok untuk bersantai, snorkeling, dan berbagai aktivitas air.</h3>
               </a>   
          </li>
        </ul>


        <div class="swiper-pagination"></div>
    </div>
</div>

<!--Content2-->
<h2 class="title" data-aos="fade-up"><Span style="color: maroon;">Discover </Span>Bali</h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="tirtaempultourism.php" class="card-link">
                    <img src="Assets/tirta empul.jpg" alt="Tirta empul" class="card-image">
                    <h2 class="card-title">Tirta Empul</h2><br>
                    <h3>Pura suci dengan kolam pemandian alami yang digunakan untuk ritual pembersihan spiritual.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="jimbarantourism.php" class="card-link">
                    <img src="Assets/jimbaran.jpg" alt="Jimbaran" class="card-image">
                    <h2 class="card-title">Pantai Jimbaran</h2><br>
                    <h3>Terkenal dengan restoran seafood di tepi pantai, ideal untuk makan malam romantis saat matahari terbenam.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="penidatourism.php" class="card-link">
                    <img src="Assets/nusa penida.jpg" alt="Nusa Penida" class="card-image">
                    <h2 class="card-title">Nusa Penida</h2><br>
                    <h3>Pulau di lepas pantai Bali yang populer dengan tebing dan pantai indah seperti Kelingking Beach dan Angel’s Billabong.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="sanurtourism.php" class="card-link">
                    <img src="Assets/sanur.jpg" alt="sanur" class="card-image">
                    <h2 class="card-title">Pantai Sanur</h2><br>
                    <h3>Pantai yang lebih tenang dengan air yang jernih, cocok untuk berjalan-jalan santai, snorkeling, dan menikmati matahari terbit.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
              <a href="sekumpultourism.php" class="card-link">
                  <img src="Assets/sekumpul.jpg" alt="Sekumpul Waterfall" class="card-image">
                  <h2 class="card-title">Sekumpul Waterfall</h2><br>
                  <h3>Air terjun yang terletak di daerah utara Bali, dikenal sebagai salah satu air terjun paling indah di Bali.</h3>
              </a>
          </li>
        </ul>


        <div class="swiper-pagination"></div>
    </div>
</div>

<?php
include 'views/footer5.php';
?>