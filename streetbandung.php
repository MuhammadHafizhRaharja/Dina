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
        <div class="nav-item"><a href="tourismbandung.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
 data-aos-delay="100">Street in <Span style="color: maroon;">Bandung</Span></h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/1PbxJYsSVhaccCvQ9" class="card-link">
                    <img src="Assets/Braga.jpg" alt="Braga" class="card-image">
                    <h2 class="card-title">Jl. Braga</h2><br>
                    <h3>Ikon kota Bandung yang dikenal sejak masa Hindia Belanda, menawarkan suasana klasik dengan deretan kafe, restoran, dan galeri seni.</h3>
                </a>
                <button class="button" onclick="window.location.href='bragastreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/t8y144TzDTBVHXAK7" class="card-link">
                    <img src="Assets/asiaafrika.jpg" alt="Asia afrika" class="card-image">
                    <h2 class="card-title">Jl. Asia Afrika</h2><br>
                    <h3>Memiliki nilai sejarah tinggi sebagai lokasi Konferensi Asia Afrika 1955, dengan bangunan bergaya kolonial yang menarik untuk dikunjungi.</h3>
                   </a> 
                   <button class="button" onclick="window.location.href='asiaafrikastreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/yiQr4D2sAzQuvzU1A" class="card-link">
                    <img src="Assets/dago.jpg" alt="Dago" class="card-image">
                    <h2 class="card-title">Jl. Dago</h2><br>
                    <h3>Kawasan populer dengan berbagai pusat perbelanjaan, kafe, dan tempat hiburan, serta suasana yang asri dengan deretan pohon rindang.</h3>
                </a>
                <button class="button" onclick="window.location.href='dagostreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/3ywiWndn7WX5pw476" class="card-link">
                    <img src="Assets/cihampelas.jpg" alt="Cihampelas" class="card-image">
                    <h2 class="card-title">Jl. Cihampelas</h2><br>
                    <h3>Dikenal sebagai pusat penjualan pakaian dan oleh-oleh, dengan suasana malam yang semarak dan adanya pusat perbelanjaan Cihampelas Walk (Ciwalk).</h3>
                </a>
                <button class="button" onclick="window.location.href='cihampelasstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/FtcfNgr4YdjcqNxV8" class="card-link">
                    <img src="Assets/riau.jpg" alt="Jalan Riau (RE Martadinata)" class="card-image">
                    <h2 class="card-title">Jl. Riau (RE Martadinata)</h2><br>
                    <h3>Terkenal dengan factory outlet dan tempat nongkrong yang menarik, serta trotoar luas yang nyaman untuk pejalan kaki.</h3>
                </a>
                <button class="button" onclick="window.location.href='riaustreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
              <a href="https://maps.app.goo.gl/j5MAhceyVnMUT5HZ8" class="card-link">
                  <img src="Assets/cipaganti.jpg" alt="Cipaganti" class="card-image">
                  <h2 class="card-title">Jl. Cipaganti</h2><br>
                  <h3>Memiliki deretan rumah dengan arsitektur khas Belanda dan suasana asri, sering dijadikan lokasi syuting film. </h3>
                </a>
                <button class="button" onclick="window.location.href='cipagantistreet.php';">view more</button>
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
data-aos-delay="100"><Span style="color:maroon;">Bandung </Span>on The Way</h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/fkirwetoaZ4rsehB7" class="card-link">
                    <img src="Assets/antapani.jpg" alt="Antapani" class="card-image">
                    <h2 class="card-title">Jl. Antapani</h2><br>
                    <h3>Menampilkan jembatan dengan mural berwarna-warni yang indah, terutama saat malam hari, serta area perbelanjaan dan lapangan untuk acara seni.</h3>
                </a>
                <button class="button" onclick="window.location.href='antapanistreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/ZotcvoY55sKHP8K78" class="card-link">
                    <img src="Assets/setiabudi.jpg" alt="Setiabudi" class="card-image">
                    <h2 class="card-title">Jl. Setiabudi</h2><br>
                    <h3>Merupakan akses utama menuju Lembang, dengan berbagai tempat kuliner dan pusat oleh-oleh khas Bandung.</h3>
                </a>
                <button class="button" onclick="window.location.href='setiabudistreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/3qrf9f4FkgUV3pRQA" class="card-link">
                    <img src="Assets/pasteur.jpg" alt="Pasteur" class="card-image">
                    <h2 class="card-title">Jl. Pasteur</h2><br>
                    <h3>Gerbang masuk kota Bandung dari arah Jakarta, sering dilalui wisatawan dengan berbagai hotel dan pusat perbelanjaan di sekitarnya.</h3>
                </a>
                <button class="button" onclick="window.location.href='pasteurstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/XjSq9wRxuR298XWP9" class="card-link">
                    <img src="Assets/sudirman.jpg" alt="Sudirman" class="card-image">
                    <h2 class="card-title">Jl. Sudirman</h2><br>
                    <h3>Menjadi lokasi Sudirman Street Day and Night Market, pasar malam yang menawarkan berbagai kuliner dan hiburan.</h3>
                </a>
                <button class="button" onclick="window.location.href='sudirmanstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
              <a href="https://maps.app.goo.gl/RgL2AVi1E9AV7XiQ8" class="card-link">
                  <img src="Assets/merdeka.jpg" alt="Merdeka" class="card-image">
                  <h2 class="card-title">Jl. Merdeka</h2><br>
                  <h3>Lokasi strategis dengan berbagai pusat perbelanjaan dan dekat dengan Balai Kota Bandung, sering menjadi tempat berkumpulnya warga dan wisatawan.</h3>
                </a>
                <button class="button" onclick="window.location.href='merdekastreet.php';">view more</button>
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
     <img alt="Garuda Wisnu Kencana" height="500" src="Assets/bandung recomend.jpg" width="1350"/>
     <div class="badge">DINA</div>
     <div class="text-content">
      <h1>This is Bandung</h1>
      <p>Come to Bandung and got the best experience in Indonesia, Wonderful Indonesia.</p>
      <a class="tombol" href="tourismbandung.php">The Best Bandung Destination in this Year</a>
     </div>
    </div>
   </div>

   <?php
include 'views/footer5.php';
?>