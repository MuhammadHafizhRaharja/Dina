<html>
<head>
    <title>Kebon Sirih, Jakarta Street</title>
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
        <img src="Assets/kebonsirih2.jpg" height="600" width="2000">
        <div class="overlay">
            Kebon Sirih, Jakarta
        </div>
    </div>
    <div class="photo">
        <img src="Assets/kebonsirih3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/kebonsirih4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Kebon Sirih in Central Jakarta is a historically significant and strategically located 
        street that blends Jakarta’s rich heritage with its modern urban vibe. Known for its proximity 
        to key government buildings, including the Jakarta City Hall, this road has long been a center 
        of administration and public affairs. It is also home to several media outlets, making it a hub 
        for journalists and professionals in the communication industry. One of the street’s iconic 
        attractions is the renowned Sate Khas Senayan restaurant, where visitors can enjoy authentic 
        Indonesian cuisine in a traditional yet contemporary setting. What makes Jalan Kebon Sirih 
        particularly appealing is its accessibility and central location, connecting major thoroughfares 
        like Jalan Thamrin and Jalan Menteng. The area also boasts various traditional markets and small 
        eateries offering local delicacies, providing a glimpse into Jakarta’s culinary heritage. 
        With its unique mix of history, culture, and modernity, Jalan Kebon Sirih offers an enriching 
        experience for both locals and visitors exploring the heart of Jakarta.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.608297877366!2d106.8227274745307!3d-6.183147560582816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42eddd1bd8d%3A0x4c6a9e4dc5821e2e!2sJl.%20Kebon%20Sirih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1736306024997!5m2!1sid!2sid"
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