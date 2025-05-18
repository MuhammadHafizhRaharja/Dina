<html>
<head>
    <title>Cipaganti, Bandung Street</title>
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
        <img src="Assets/cipaganti2.jpg" height="600" width="2000">
        <div class="overlay">
            Cipaganti, Bandung
        </div>
    </div>
    <div class="photo">
        <img src="Assets/cipaganti3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/cipaganti4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Cipaganti in Bandung is a charming and scenic street that offers a blend of historical 
        architecture, natural beauty, and local culture. Located near the city center, it is well-known 
        for its picturesque surroundings, with tree-lined streets and cool weather due to its elevated 
        position. The area is home to several old colonial-style buildings, adding a vintage touch to 
        the street's ambiance. Jalan Cipaganti is also popular for its cozy cafes, boutique shops, and 
        art spaces, making it a great spot for those looking to enjoy a peaceful atmosphere while 
        indulging in local food and drinks. One of the must-visit places in this area is the Cipaganti 
        Mosque, which offers both spiritual significance and architectural beauty. The combination of 
        nature, history, and modern attractions makes Jalan Cipaganti a hidden gem in Bandung, ideal for 
        both relaxation and exploration.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.976149782046!2d107.60002917454044!3d-6.893456067456782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65c125cf44f%3A0x9e4b992d887ec155!2sJl.%20Cipaganti%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736273679946!5m2!1sid!2sid"
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