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
    <title>Place to Go in Bali</title>
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
        <div class="nav-item on"><a href="street.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
        <div class="nav-item"><a href="slider.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
        <div class="nav-item"><a href="mall.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
        <div class="nav-item"><a href="restaurant.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
        <div class="nav-item"><a href="tourism.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
 data-aos-delay="100">Street in <Span style="color: maroon;">Bali</Span></h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/9c7WAMWMPXJnRMdw7" class="card-link">
                    <img src="Assets/ngurah rai.webp" alt="Bypass Ngurah Rai" class="card-image">
                    <h2 class="card-title">Jl. Ngurah Rai</h2><br>
                    <h3>Jalan utama di Bali, menghubungkan bandara dan kawasan wisata dengan nama diambil dari pahlawan I Gusti Ngurah Rai.</h3>
                </a>
                <button class="button" onclick="window.location.href='ngurahraistreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/bnDNnRK6Ex9f5QGL8" class="card-link">
                    <img src="Assets/tukad badung.webp" alt="Tukad Badung" class="card-image">
                    <h2 class="card-title">Jl. Tukad Badung</h2><br>
                    <h3>Berlokasi di Denpasar, dinamai dari sungai besar Tukad Badung dan dikelilingi area bisnis dan perkantoran.</h3>
                   </a> 
                   <button class="button" onclick="window.location.href='tukadbadungstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/yiQr4D2sAzQuvzU1A" class="card-link">
                    <img src="Assets/tukad balian.webp" alt="Tukad Balian" class="card-image">
                    <h2 class="card-title">Jl. Tukad Balian</h2><br>
                    <h3>Jalan ini juga dinamai dari sungai Tukad Balian, dikelilingi area perumahan dan tempat kuliner.</h3>
                </a>
                <button class="button" onclick="window.location.href='tukadbalianstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/jpj8B37N28T5uSSX7" class="card-link">
                    <img src="Assets/kertasari.webp" alt="Kertasari" class="card-image">
                    <h2 class="card-title">Jl. Kertasari</h2><br>
                    <h3>Terletak di area permukiman dan bisnis di Denpasar, dengan nama yang bermakna "makmur" atau "sejahtera."</h3>
                </a>
                <button class="button" onclick="window.location.href='kertasaristreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/wgo5L6dX6Znc1VfcA" class="card-link">
                    <img src="Assets/raya sesetan.webp" alt="Raya Sesetan" class="card-image">
                    <h2 class="card-title">Jl. Raya Sesetan</h2><br>
                    <h3>Jalan utama di wilayah Sesetan, Denpasar Selatan, dikenal dengan deretan toko, restoran, dan kantor.</h3>
                </a>
                <button class="button" onclick="window.location.href='rayasesetanstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
              <a href="https://maps.app.goo.gl/1BbkoTbwYeDW5Kqv5" class="card-link">
                  <img src="Assets/pulau saelus.jpeg" alt="Pulau Saelus" class="card-image">
                  <h2 class="card-title">Jl. Pulau Saelus</h2><br>
                  <h3>Jalan di Denpasar yang menggunakan nama pulau di Indonesia, didominasi perumahan dan pusat bisnis.</h3>
                </a>
                <button class="button" onclick="window.location.href='saelusstreet.php';">view more</button>
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
data-aos-delay="100"><Span style="color:maroon;">Bali </Span>on The Way</h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/LTqPn7xJHbLBXgGv7" class="card-link">
                    <img src="Assets/legian.jpg" alt="Legian" class="card-image">
                    <h2 class="card-title">Jl. Legian</h2><br>
                    <h3>Terletak di Kuta, terkenal dengan kehidupan malam, klub, restoran, dan area perbelanjaan.</h3>
                </a>
                <button class="button" onclick="window.location.href='legianstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/ELNrw4b3YfVnaUtX8" class="card-link">
                    <img src="Assets/raya ubud.jpg" alt="Raya Ubud" class="card-image">
                    <h2 class="card-title">Jl. Raya Ubud</h2><br>
                    <h3>Jalan utama di Ubud yang dipenuhi galeri seni, kafe, dan toko kerajinan, menarik wisatawan lokal dan mancanegara.</h3>
                </a>
                <button class="button" onclick="window.location.href='rayaubudstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/RANysebgAFZANmxh7" class="card-link">
                    <img src="Assets/sunset road.jpg" alt="Sunset Road" class="card-image">
                    <h2 class="card-title">Jl. Sunset Road</h2><br>
                    <h3>Jalan besar di Kuta yang menghubungkan daerah wisata utama seperti Seminyak dan Legian, dipenuhi hotel dan restoran.</h3>
                </a>
                <button class="button" onclick="window.location.href='sunsetroadstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/z6qCHDeaopgH9cdSA" class="card-link">
                    <img src="Assets/raya seminyak.jpg" alt="Raya Seminyak" class="card-image">
                    <h2 class="card-title">Jl. Raya Seminyak</h2><br>
                    <h3>Jalan utama di Seminyak yang dipenuhi kafe, butik, dan toko-toko mode yang populer di kalangan wisatawan.</h3>
                </a>
                <button class="button" onclick="window.location.href='seminyakstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/k1YwJhUC8XMjKwVUA" class="card-link">
                    <img src="Assets/petitenget.jpeg" alt="Petitenget" class="card-image">
                    <h2 class="card-title">Jl. Petitenget</h2><br>
                    <h3>Berada di Seminyak, dikenal dengan restoran kelas atas, butik, dan akses ke Pantai Petitenget.</h3>
                </a>
                <button class="button" onclick="window.location.href='petitengetstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
              <a href="https://maps.app.goo.gl/4yeYbzcsf45B7CJi6" class="card-link">
                  <img src="Assets/oberoi.jpg" alt="Oberoi" class="card-image">
                  <h2 class="card-title">Jl. Oberoi (Kayu Aya)</h2><br>
                  <h3>Terkenal di Seminyak sebagai pusat hiburan malam dan restoran, sering disebut "Eat Street."</h3>
                </a>
                <button class="button" onclick="window.location.href='oberoistreet.php';">view more</button>
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
     <img alt="Garuda Wisnu Kencana" height="500" src="Assets/kuta2.jpg" width="1350"/>
     <div class="badge">DINA</div>
     <div class="text-content">
      <h1>This is Bali</h1>
      <p>Come to Bali and got the best experience in Indonesia, Wonderful Indonesia.</p>
      <a class="tombol" href="tourism.php">Wisata Bali terbaik di tahun ini</a>
     </div>
    </div>
   </div>

<?php
include 'views/footer5.php';
?>