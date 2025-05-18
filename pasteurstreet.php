<html>
<head>
    <title>Pasteur, Bandung Street</title>
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
include 'header1.php';
?>

    <!--Content-->
   <div class="gallery" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">
    <div class="main-photo">
        <img src="Assets/pasteur2.jpg" height="600" width="2000">
        <div class="overlay">
            Pasteur, Bandung
        </div>
    </div>
    <div class="photo">
        <img src="Assets/pasteur3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/pasteur 4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Pasteur in Bandung is a prominent and bustling street that serves as the main gateway to the city, especially for 
        travelers coming from Jakarta and other regions. Located to the west of Bandung, it is a key route 
        for both locals and visitors arriving by car or bus. What makes Jalan Pasteur interesting is its 
        dynamic mix of commercial and residential areas, as well as its proximity to various important 
        landmarks. The street is lined with numerous hotels, restaurants, shopping malls, and entertainment 
        venues, making it a convenient place for travelers to stay and explore the city. One of the notable 
        attractions on Jalan Pasteur is the Bandung Trade Center (BTC), a popular shopping mall that offers
         a wide range of products, from clothing to electronics. Additionally, Jalan Pasteur is also known 
         for its easy access to the Pasteur Toll Gate, which connects to other parts of the city and beyond. 
         With its strategic location, commercial establishments, and accessibility, Jalan Pasteur is an 
         essential part of Bandung's infrastructure and an important spot for those exploring the city.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9183562495546!2d107.5983877745406!3d-6.900367467527683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6682a7dc9d5%3A0xe8d0e461a9384b30!2sJl.%20Pasteur%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736275725763!5m2!1sid!2sid"
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