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
    <link rel="stylesheet" href="tourismpapua.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>Tourism in Papua</title>
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
            <div class="nav-item"><a href="streetpapua.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelPapua.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mallPapua.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantPapua.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item on"><a href="tourismpapua.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
      <a href="https://maps.app.goo.gl/4yeYbzcsf45B7CJi6"  style="color: maroon;">Raja Ampat </a>
  </div>
</div>

<!--Content-->
<h2 class="title" data-aos="fade-up">Wonderful <Span style="color: maroon;">Papua</Span></h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="rajaampattourism.php" class="card-link">
                    <img src="Assets/raja ampat.jpg" alt="raja Ampat" class="card-image">
                    <h2 class="card-title">Raja Ampat Island</h2><br>
                    <h3>Raja Ampat is a world-renowned destination for its stunning marine biodiversity, crystal-clear waters, and pristine coral reefs. It is considered one of the best diving spots in the world.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="sentanitourism.php" class="card-link">
                    <img src="Assets/sentanilake.jpg" alt="Sentani Lake" class="card-image">
                    <h2 class="card-title">Sentani Lake</h2><br>
                    <h3>Lake Sentani is a picturesque freshwater lake surrounded by lush mountains and traditional villages. The lake is known for its serene beauty and cultural significance.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="baliemvalleytourism.php" class="card-link">
                    <img src="Assets/baliem valley.jpg" alt="Baliem Valley" class="card-image">
                    <h2 class="card-title">Baliem Valley</h2><br>
                    <h3>Located in the highlands of Papua, Baliem Valley is famous for its stunning landscapes and the indigenous Dani, Lani, and Yali tribes. Visitors can experience the unique way of life of these tribes.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="wasurtourism.php" class="card-link">
                    <img src="Assets/wasur.jpg" alt="Wasur National Park" class="card-image">
                    <h2 class="card-title">Wasur National Park</h2><br>
                    <h3>Wasur National Park is a vast wildlife sanctuary known for its diverse ecosystems, including wetlands, savannas, and forests. It is home to a wide variety of flora and fauna</h3>
                </a>
            </li>
        </ul>


        <div class="swiper-pagination"></div>
    </div>
</div>

<!--Content2-->
<h2 class="title" data-aos="fade-up"><Span style="color: maroon;">Discover </Span>Papua</h2>
<div class="container swiper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="paniaitourism.php" class="card-link">
                    <img src="Assets/paniai_lake.jpg" alt="Paniai Lake" class="card-image">
                    <h2 class="card-title">Paniai Lake</h2><br>
                    <h3>Paniai Lake is a tranquil lake in the highlands, surrounded by mountains and lush forests. It is known for its scenic beauty and the serene atmosphere that envelops the area.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="cendrawasitourism.php" class="card-link">
                    <img src="Assets/cendrawasihbay.jpg" alt="Cenderawasih" class="card-image">
                    <h2 class="card-title">Cenderawasih Bay</h2><br>
                    <h3>Cenderawasih Bay is a marine park offering incredible diving and snorkeling opportunities, with coral reefs teeming with diverse marine life. It is also known for the chance to see whale sharks.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="asmattourism.php" class="card-link">
                    <img src="Assets/asmatregion.jpg" alt="Asmat" class="card-image">
                    <h2 class="card-title">Asmat Region</h2><br>
                    <h3>The Asmat Region is renowned for its unique culture, art, and history. The indigenous Asmat people are famous for their wood carvings, traditional rituals, and their deep connection to nature.</h3>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="arfaktourism.php" class="card-link">
                    <img src="Assets/arfakmountain.jpg" alt="arfak" class="card-image">
                    <h2 class="card-title">Arfak Mountain</h2><br>
                    <h3>The Arfak Mountains offer breathtaking landscapes, dense forests, and the opportunity to see rare species such as the bird of paradise. It is also a great spot for birdwatching and trekking.</h3>
                </a>
            </li>
        </ul>


        <div class="swiper-pagination"></div>
    </div>
</div>

<?php
include 'views/footer5.php';
?>