<html>
<head>
    <title>Sunset Road, Bali Street</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--link font google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!--link swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!--link rating-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="detailstreet.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="icon" type="logoshape/png" href="Assets/logoerase.png">
</head>

<?php
include 'views/header1.php';
?>

    <!--Content-->
   <div class="gallery" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">
    <div class="main-photo">
        <img src="Assets/sunsetroad2.jpg" height="600" width="2000">
        <div class="overlay">
            Sunset Road, Bali
        </div>
    </div>
    <div class="photo">
        <img src="Assets/sunsetroad3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/sunsetroad4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Sunset Road in Bali is a major thoroughfare that connects Kuta, Seminyak, 
        and other popular tourist destinations. Known for its lively and vibrant atmosphere, 
        this road is a hub for shopping, dining, and entertainment. The street is lined with 
        a wide range of shops, from international retail brands to local boutiques offering 
        unique Balinese crafts. One of its key attractions is the vibrant array of restaurants 
        and cafes, where visitors can enjoy both traditional Balinese and international cuisines. 
        Sunset Road is also home to popular shopping centers like the Bali Galeria Mall, which 
        features a mix of shops, cinemas, and dining options. The street’s proximity to other 
        attractions, such as the beach resorts of Seminyak and the nightlife of Kuta, makes it 
        a central point for tourists seeking a balance of shopping, dining, and relaxation. 
        Its convenient location and diverse offerings make Jalan Sunset Road a favorite spot 
        for those exploring the southern part of Bali.</p>
   </div>

   <!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.9053472331857!2d115.17378387591594!3d-8.700538466318127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246cbb03c6125%3A0xb16c7dc5d9237394!2sJl.%20Sunset%20Road%2C%20Bali%2080361!5e0!3m2!1sid!2sid!4v1736262543633!5m2!1sid!2sid"
   width="100%"
   height="500"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <br>

   <!--app choose-->
   <div class="aplikasi" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <div class="ojekapp" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <h1>Download in PlayStore or AppStore</h1>
        <img class="img-ojek" src="Assets/gojekpng.png" alt="">
        <img class="img-ojek" src="Assets/grab-logo.png" alt="">
    </div>
   </div>

   <?php
    include 'views/footer1.php';
    ?>