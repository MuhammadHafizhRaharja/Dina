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
    <title>Place to Go in Jakarta</title>
    <link rel="icon" type="logoshape/png" href="Assets/logoerase.png">

</head>
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
        <div class="nav-item on"><a href="streetjakarta.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
        <div class="nav-item"><a href="hotelJakarta.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
        <div class="nav-item"><a href="mallJakarta.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
        <div class="nav-item"><a href="restaurantJakarta.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
        <div class="nav-item"><a href="tourismjakarta.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
    </div>
    <div class="search-bar" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Tempat untuk dikunjungi, hal yang dapat dilakukan, hotel...">
        <button>Cari</button>
    </div>
</div>
 <!--content-->
 <h2 class="title" data-aos="fade-up"
 data-aos-duration="500"
 data-aos-delay="100">Street in <Span style="color: maroon;">Jakarta</Span></h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/Npa6g1LWRdscFH9t6" class="card-link">
                    <img src="Assets/jendral sudirman.jpg" alt="Jendral Sudirman" class="card-image">
                    <h2 class="card-title">Jl. Jendral Sudirman</h2><br>
                    <h3>A major thoroughfare running through Central and South Jakarta, it is lined with skyscrapers, corporate offices, and shopping centers, epitomizing the city's economic vigor.</h3>
                </a>
                <button class="button" onclick="window.location.href='jendralsudirmanstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/Mnx57iw9pVxh4Mgp8" class="card-link">
                    <img src="Assets/mh tharmin.jpg" alt="MH Tharmin" class="card-image">
                    <h2 class="card-title">Jl. M.H. Thamrin</h2><br>
                    <h3>Extending from Jalan Jenderal Sudirman, this street leads to the iconic Bundaran HI (Hotel Indonesia Roundabout) and is a central artery in Jakarta's business district.</h3>
                   </a> 
                   <button class="button" onclick="window.location.href='tharminstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/DgbdXYnBpSXMr7Nf6" class="card-link">
                    <img src="Assets/gatot subrto.jpg" alt="Gatot Subroto" class="card-image">
                    <h2 class="card-title">Jl. Gatot Subroto</h2><br>
                    <h3>An essential east-west route, it traverses the city's commercial zones and is home to several government buildings and embassies.</h3>
                </a>
                <button class="button" onclick="window.location.href='gatotsubrotostreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/bveYzKek7uxWStAdA" class="card-link">
                    <img src="Assets/rusana said.jpg" alt="H.R. Rasuna Said" class="card-image">
                    <h2 class="card-title">Jl. H.R. Rasuna Said</h2><br>
                    <h3>Situated in the Kuningan area, this street is part of Jakarta's Golden Triangle and hosts numerous multinational corporations and diplomatic missions."</h3>
                </a>
                <button class="button" onclick="window.location.href='rasunasaidstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/PCMYY5CUJjEYBYFu7" class="card-link">
                    <img src="Assets/ahmad yani.jpg" alt="Ahmad Yani" class="card-image">
                    <h2 class="card-title">Jl. Jenderal Ahmad Yani</h2><br>
                    <h3>Connecting Central Jakarta to the eastern suburbs, it is a vital corridor for daily commuters.</h3>
                </a>
                <button class="button" onclick="window.location.href='ahmadyanistreet.php';">view more</button>
            </li>
        </ul>


        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
    </div>
</div>

<!--Content2-->
<h2 class="title"data-aos="fade-up"
data-aos-duration="500"
data-aos-delay="100"><Span style="color:maroon;">Jakarta </Span>on The Way</h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/Dtx8k7BDvJPqXuPV8" class="card-link">
                    <img src="Assets/drsatrio.jpg" alt="Dr. Satrio" class="card-image">
                    <h2 class="card-title">Jl. Prof. Dr. Satrio</h2><br>
                    <h3>Located in the bustling Kuningan area, it is renowned for its shopping centers, including the popular Lotte Shopping Avenue.</h3>
                </a>
                <button class="button" onclick="window.location.href='drsatriostreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/oK8E4MA5raYXyg687" class="card-link">
                    <img src="Assets/kebonsirih.jpg" alt="Kebon Sirih" class="card-image">
                    <h2 class="card-title">Jl. Kebon Sirih</h2><br>
                    <h3>Situated in Central Jakarta, this street is notable for housing various media companies and government offices.</h3>
                </a>
                <button class="button" onclick="window.location.href='kebonsirihstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/ykq4V7ykci2pmywS7" class="card-link">
                    <img src="Assets/medanmerdeka.jpg" alt="Medan Merdeka" class="card-image">
                    <h2 class="card-title">Jl. Medan Merdeka</h2><br>
                    <h3>Encircling Merdeka Square, it provides access to landmarks such as the National Monument (Monas) and the Presidential Palace.</h3>
                </a>
                <button class="button" onclick="window.location.href='medanmerdekastreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/wVadgSY68pUJMnKU7" class="card-link">
                    <img src="Assets/manggadua.jpg" alt="Mangga Dua" class="card-image">
                    <h2 class="card-title">Jl. Mangga Dua</h2><br>
                    <h3>A prominent shopping destination in North Jakarta, famous for its wholesale markets offering electronics, textiles, and fashion items.</h3>
                </a>
                <button class="button" onclick="window.location.href='manggaduastreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/QXvLa5emvUMWyG9y8" class="card-link">
                    <img src="Assets/hayam wuruk.jpg" alt="hayam wuruk" class="card-image">
                    <h2 class="card-title">Jl. Hayam Wuruk</h2><br>
                    <h3>Running through the Glodok area, Jakarta's Chinatown, it is vibrant with traditional markets, eateries, and cultural sites.</h3>
                </a>
                <button class="button" onclick="window.location.href='hayamwurukstreet.php';">view more</button>
            </li>
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
     <img alt="Garuda Wisnu Kencana" height="500" src="Assets/jakardah.jpg" width="1350"/>
     <div class="badge">DINA</div>
     <div class="text-content">
      <h1>This is Jakarta</h1>
      <p>Come to Jakarta and got the best experience in Indonesia, Wonderful Indonesia.</p>
      <a class="tombol" href="tourismjakarta.php">Wisata Bali terbaik di tahun ini</a>
     </div>
    </div>
   </div>





   <?php
include 'views/footer5.php';
?>