<html>
<head>
    <title>Cihampelas, Bandung Street</title>
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="icon" type="logoshape/png" href="Assets/logoerase.png">
</head>

<?php
include 'header1.php';
?>

    <!--Content-->
   <div class="gallery" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">
    <div class="main-photo">
        <img src="Assets/cihampelas2.jpg" height="600" width="2000">
        <div class="overlay">
            Cihampelas, Bandung
        </div>
    </div>
    <div class="photo">
        <img src="Assets/cihampelas4.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/Cihampelas 3.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Cihampelas in Bandung is a lively and bustling street known for its vibrant shopping scene 
        and unique atmosphere. It is particularly famous for its numerous fashion outlets and is a 
        popular spot for both locals and tourists looking for trendy clothing and souvenirs. One of 
        the main attractions in Cihampelas is the Cihampelas Walk (Ciwalk), a large shopping mall 
        that offers a mix of retail stores, dining options, and entertainment facilities. The street 
        is also well-known for its distinctive "jeans" street art, where life-sized denim-clad 
        mannequins can be found along the road, adding a quirky touch to the area. Additionally, 
        Cihampelas is a popular destination for those looking for local snacks and street food, 
        making it a great place to explore Bandung's culinary scene. The lively atmosphere, diverse 
        shopping options, and fun street art make Jalan Cihampelas a must-visit place for anyone 
        exploring the city.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.962546555499!2d107.6014433745405!3d-6.895083467473452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65b79436863%3A0xbb5602a0ec12865b!2sJl.%20Cihampelas%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736272553289!5m2!1sid!2sid"
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