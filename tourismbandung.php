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
    <link rel="stylesheet" href="tourismbandung.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>Tourism in Bandung</title>
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
            <div class="nav-item"><a href="streetbandung.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelBandung.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mallBandung.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantBandung.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item on"><a href="tourismbandung.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
      <a href="https://maps.app.goo.gl/4yeYbzcsf45B7CJi6"  style="color: maroon;">Braga Citywalk </a>
  </div>
</div>

<!--Content-->
<h2 class="title" data-aos="fade-up">Wonderful <Span style="color: maroon;">Bandung</Span></h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="tangkubantourism.php" class="card-link">
                    <img src="Assets/Tangkuban Perahu_ Java.jpg" alt="Tangkuban Perahu" class="card-image">
                    <h2 class="card-title">Tangkuban Perahu</h2><br>
                    <h3>A popular volcanic crater located just outside Bandung, Tangkuban Perahu offers visitors a chance to see the bubbling craters and enjoy the cool mountain air. </h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="kawahtourism.php" class="card-link">
                    <img src="Assets/Kawah putih ciwidey.jpg" alt="kawah putih" class="card-image">
                    <h2 class="card-title">Kawah Putih</h2><br>
                    <h3>A stunning white crater lake located in Ciwidey, Kawah Putih is known for its ethereal, turquoise-colored water and surreal landscape.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="tsmtourism.php" class="card-link">
                    <img src="Assets/tsm.jpg" alt="TSM" class="card-image">
                    <h2 class="card-title">Trans Studio Bandung</h2><br>
                    <h3>One of the largest indoor theme parks in Indonesia, Trans Studio Bandung offers a variety of thrilling rides and attractions suitable for all ages.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="farmhousetourism.php" class="card-link">
                    <img src="Assets/farmhouse lembang.jpg" alt="Farmhouse" class="card-image">
                    <h2 class="card-title">Farmhouse Lembang</h2><br>
                    <h3>Farmhouse offers a European-style village experience with photo opportunities in charming cottages, a petting zoo, and delicious food and beverages.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
              <a href="udjotourism.php" class="card-link">
                  <img src="Assets/udjo.jpg" alt="Udjo" class="card-image">
                  <h2 class="card-title">Saung Angklung Udjo</h2><br>
                  <h3>A cultural performance center dedicated to the traditional Indonesian musical instrument, angklung.</h3>
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
                <a href="dakartourism.php" class="card-link">
                    <img src="Assets/dakar.jpg" alt="dakar" class="card-image">
                    <h2 class="card-title">Dago Pakar</h2><br>
                    <h3>A natural park located on the hills of Dago, Dago Pakar is known for its lush green landscapes, jogging tracks, and panoramic views of Bandung.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="gedungsatetourism.php" class="card-link">
                    <img src="Assets/gedungsate.jpg" alt="Gedung Sate" class="card-image">
                    <h2 class="card-title">Gedung Sate</h2><br>
                    <h3>A historic building and one of Bandung’s most iconic landmarks, Gedung Sate is an architectural marvel that houses the Governor’s office.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="ciwalktourism.php" class="card-link">
                    <img src="Assets/Cihampelas walk.jpg" alt="Ciwalk" class="card-image">
                    <h2 class="card-title">Cihampelas Walk</h2><br>
                    <h3>A modern shopping mall located on Cihampelas Street, Ciwalk is popular for its retail shops, dining options, and entertainment facilities.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="bragatourism.php" class="card-link">
                    <img src="Assets/Braga City Walk.jpg" alt="Braga" class="card-image">
                    <h2 class="card-title">Braga Citywalk</h2><br>
                    <h3>Known for its colonial architecture, Jalan Braga is a historic street in Bandung filled with cafes, galleries, and shops</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
              <a href="tahuratourism.php" class="card-link">
                  <img src="Assets/tahura.jpg" alt="Tahura" class="card-image">
                  <h2 class="card-title">Taman Hutan Raya</h2><br>
                  <h3>A large botanical garden and conservation area located in Dago, Taman Hutan Raya is perfect for nature lovers.</h3>
              </a>
          </li>
        </ul>


        <div class="swiper-pagination"></div>
    </div>
</div>

<?php
include 'views/footer5.php';
?>