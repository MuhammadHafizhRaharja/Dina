<html>
<head>
    <title>Hayam Wuruk, Jakarta Street</title>
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
        <img src="Assets/hayamwaruk2.jpg" height="600" width="2000">
        <div class="overlay">
            Hayam Wuruk, Jakarta
        </div>
    </div>
    <div class="photo">
        <img src="Assets/hayamwaruk3.jpg" height="300" width="700" alt="">
    </div>
    <div class="photo">
        <img src="Assets/hayamwaruk4.jpg" height="290" width="700" alt="">
    </div>
   </div>

   <div class="desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
    <h1>About The Street</h1>
    <p>Jalan Hayam Wuruk in Jakarta is a lively and historic street that runs through the Glodok 
        area, which is the city’s Chinatown. This road is known for its rich cultural heritage, 
        bustling markets, and a mix of traditional and modern establishments. Visitors are drawn 
        to its vibrant atmosphere, with numerous shops, restaurants, and street vendors offering 
        everything from electronics to Chinese herbal medicines. Hayam Wuruk is particularly famous 
        for its culinary scene, featuring authentic Chinese and Indonesian dishes, such as dim sum, 
        bakmi, and nasi campur, served at iconic eateries and food stalls. The street’s charm lies 
        in its seamless blend of history and urban energy. Traditional shophouses and temples like 
        the Jin De Yuan Temple coexist with contemporary office buildings and hotels, offering a 
        unique visual and cultural experience. Jalan Hayam Wuruk’s proximity to Kota Tua (Old Town) 
        and landmarks like Fatahillah Square adds to its appeal, making it an ideal starting point 
        for exploring Jakarta’s historical treasures. Whether for shopping, dining, or cultural 
        exploration, Jalan Hayam Wuruk offers an immersive experience that reflects the dynamic 
        spirit of Jakarta.</p>
   </div>

<!--Location-->
   <section id="location">
    <div class="location">
      <div class="map" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8181014925203!2d106.81563737453025!3d-6.155111260328429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e02f70d4b9%3A0xcf13c4209c7e4037!2sJl.%20Hayam%20Wuruk%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1736307129694!5m2!1sid!2sid"
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