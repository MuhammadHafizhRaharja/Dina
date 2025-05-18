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
    <link rel="stylesheet" href="tourismjakarta.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>Tourism in Jakarta</title>
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
            <div class="nav-item"><a href="streetjakarta.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelJakarta.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mallJakarta.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantJakarta.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item on"><a href="tourismjakarta.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
      <a href="https://maps.app.goo.gl/4yeYbzcsf45B7CJi6"  style="color: maroon;">Ragunan Zoo </a>
  </div>
</div>

<!--Content-->
<h2 class="title" data-aos="fade-up">Wonderful <Span style="color: maroon;">Bali</Span></h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="monastourism.php" class="card-link">
                    <img src="Assets/monas.jpg" alt="monas" class="card-image">
                    <h2 class="card-title">Monas (Monumen National)</h2><br>
                    <h3>A towering symbol of Indonesia’s independence, offering panoramic views of Jakarta from the top.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="tmiitourism.php" class="card-link">
                    <img src="Assets/tmii.jpg" alt="Taman Mini" class="card-image">
                    <h2 class="card-title">Taman Mini Indonesia Indah</h2><br>
                    <h3>A cultural park featuring pavilions showcasing Indonesia's diverse cultures, along with museums and traditional houses.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="kotatuatourism.php" class="card-link">
                    <img src="Assets/kotatua.jpg" alt="kota tua" class="card-image">
                    <h2 class="card-title">Kota Tua (Old Town)</h2><br>
                    <h3>A historical area with colonial architecture, museums, and iconic landmarks like Fatahillah Square and the Jakarta History Museum.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="museumnasionaltourism.php" class="card-link">
                    <img src="Assets/Museum Nasional.jpg" alt="Museum nasional" class="card-image">
                    <h2 class="card-title">Museum National</h2><br>
                    <h3>A vast collection of Indonesian artifacts, including art, prehistoric items, and cultural exhibits.</h3>
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
                <a href="ragunantourism.php" class="card-link">
                    <img src="Assets/ragunan.jpg" alt="ragunan" class="card-image">
                    <h2 class="card-title">Ragunan Zoo</h2><br>
                    <h3>A large zoo featuring native Indonesian animals like orangutans and tigers, as well as beautiful natural landscapes.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="ancoltourism.php" class="card-link">
                    <img src="Assets/ancol.jpg" alt="ancol" class="card-image">
                    <h2 class="card-title">Ancol Dreamland</h2><br>
                    <h3>A massive recreational complex with beaches, amusement parks, a water park, and an aquarium.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="grandindonesiatourism.php" class="card-link">
                    <img src="Assets/grand indonesia east mall.jpg" alt="Grand Indonesia" class="card-image">
                    <h2 class="card-title">Grand Indonesia Shopping Mall</h2><br>
                    <h3>A high-end shopping mall offering international brands, gourmet dining, and entertainment options.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="manggaduatourism.php" class="card-link">
                    <img src="Assets/manggaaadua.jpg" alt="mangga dua" class="card-image">
                    <h2 class="card-title">Mangga Dua Store</h2><br>
                    <h3>A popular shopping area known for its wholesale markets, offering great deals on electronics, fashion, and accessories.</h3>
                </a>
            </li>
        </ul>


        <div class="swiper-pagination"></div>
    </div>
</div>

<?php
include 'views/footer5.php';
?>