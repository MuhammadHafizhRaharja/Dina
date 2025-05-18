<html>
<head>
    <title>Jendral Sudirman, Bandung Street</title>
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
        <img src="Assets/sudirman2.jpg" height="600" width="2000">
        <div class="overlay">
            Sudirman, Bandung
        </div>
    </div>
    <div class="photo">
        <img src="Assets/sudirman3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/sudirman4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Jenderal Sudirman in Bandung is a bustling and vibrant street that serves as a major 
        thoroughfare in the city, connecting various key areas and offering a variety of attractions. 
        The street is known for its lively atmosphere, with numerous shops, cafes, and restaurants that 
        attract both locals and tourists. One of the main draws of Jalan Sudirman is its night market, 
        which transforms the street into a lively hub of food stalls, offering a wide range of local 
        delicacies and snacks. This makes it a popular spot for food enthusiasts looking to sample 
        authentic Indonesian cuisine. In addition to the night market, Jalan Sudirman is also home 
        to various offices, shopping centers, and entertainment venues, making it a central location 
        for both business and leisure. The street’s dynamic atmosphere, combined with its culinary 
        offerings and central location, makes Jalan Jenderal Sudirman an essential part of the Bandung 
        experience.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7653374438105!2d107.58368727454086!3d-6.918633467715513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e611d4aa9863%3A0xb04735fea5fa81f4!2sJl.%20Jend.%20Sudirman%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736275918323!5m2!1sid!2sid"
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