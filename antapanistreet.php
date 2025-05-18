<html>
<head>
    <title>Antapani, Bandung Street</title>
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
        <img src="Assets/antapani2.jpg" height="600" width="2000">
        <div class="overlay">
            Antapani, Bandung
        </div>
    </div>
    <div class="photo">
        <img src="Assets/antapani3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/antapani4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Antapani in Bandung is a vibrant and bustling street known for its dynamic mix of urban 
        life and local culture. Located to the southeast of Bandung's city center, this area is 
        characterized by its lively atmosphere, with various shopping centers, street food vendors, 
        and local businesses. One of the highlights of Jalan Antapani is its colorful murals that 
        adorn the walls of buildings and bridges, creating a unique urban art scene that attracts both 
        locals and visitors. The street is also home to a variety of dining options, from local 
        Indonesian eateries to modern cafes, making it a popular spot for food lovers. The Antapani 
        area is often visited for its community-oriented vibe, with parks and public spaces providing 
        a place for leisure and socializing. With its blend of artistic expression, local food, and 
        vibrant community life, Jalan Antapani offers a distinctive experience for those exploring the 
        diverse sides of Bandung.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8528738254054!2d107.65275267576165!3d-6.908190049768427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7f28dada24f%3A0xfdb4201737ff67ab!2sJl.%20Antapani%20Lama%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736275431790!5m2!1sid!2sid"
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