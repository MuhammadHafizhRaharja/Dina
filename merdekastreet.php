<html>
<head>
    <title>Merdeka, Bandung Street</title>
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
        <img src="Assets/merdeka2.jpg" height="600" width="2000">
        <div class="overlay">
            Merdeka, Bandung
        </div>
    </div>
    <div class="photo">
        <img src="Assets/merdeka3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/merdeka4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Merdeka in Bandung is a central and vibrant street that holds historical and cultural 
        significance. Located in the heart of the city, it is surrounded by key landmarks, including 
        government buildings and commercial hubs. What makes Jalan Merdeka particularly attractive is 
        its accessibility and strategic location, making it a popular spot for both locals and tourists. 
        The street is home to a variety of shops, restaurants, and cafes, offering a blend of local and 
        international flavors. One of the main attractions on Jalan Merdeka is the Balai Kota Bandung 
        (Bandung City Hall), an iconic building that adds to the street's charm and serves as a symbol 
        of the city's civic life. The area is also often visited for its vibrant atmosphere, with events, 
        exhibitions, and cultural activities frequently held in nearby public spaces. With its rich 
        history, central location, and lively atmosphere, Jalan Merdeka is an essential part of Bandung's 
        urban landscape.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.822839995706!2d107.60790137454084!3d-6.911774967644927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6377047e5ad%3A0xaa4229d538d71bbe!2sJl.%20Merdeka%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1736276031634!5m2!1sid!2sid"
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