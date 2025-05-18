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
    <link rel="stylesheet" href="streetpapua.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>Place to Go in Papua</title>
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
        <div class="nav-item on"><a href="streetpapua.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
        <div class="nav-item"><a href="hotelPapua.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
        <div class="nav-item"><a href="mallPapua.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
        <div class="nav-item"><a href="restaurantPapua.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
        <div class="nav-item"><a href="tourismpapua.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
 data-aos-delay="100">Street in <Span style="color: maroon;">Papua</Span></h2>
<div class="container swiper" data-aos="fade-up"
data-aos-duration="900"
data-aos-delay="400">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/nxM9ScqvKJn4LU1q6" class="card-link">
                    <img src="Assets/papua highway.jpg" alt="Trans Papua Highway" class="card-image">
                    <h2 class="card-title">Jl. Trans Papua Highway</h2><br>
                    <h3>a massive infrastructure project that connects various remote regions of Papua. It offers stunning views of Papua's diverse landscapes, from dense rainforests and rugged mountains to coastal areas.</h3>
                </a>
                <button class="button" onclick="window.location.href='transpapuastreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/wwFknHGab6jQkfSE7" class="card-link">
                    <img src="Assets/jayapura sentani.jpg" alt="Raya Jayapura-Sentani" class="card-image">
                    <h2 class="card-title">Jl. Raya Jayapura-Sentani</h2><br>
                    <h3>This road connects Jayapura, Papua’s capital, to Sentani, home to the famous Sentani Lake. The drive offers picturesque views of the lake and surrounding hills.</h3>
                   </a> 
                   <button class="button" onclick="window.location.href='jayapurastreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/DkGdft4mpFKUC8LYA" class="card-link">
                    <img src="Assets/nabire.jpg" alt="Raya Nabire-Enarotali" class="card-image">
                    <h2 class="card-title">Jl. Raya Nabire-Enarotali</h2><br>
                    <h3>This route connects Nabire to the highland region of Enarotali. It provides access to beautiful mountain vistas and traditional Papuan villages.</h3>
                </a>
                <button class="button" onclick="window.location.href='nabirestreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/KghsuwBUU2U3v7hz7" class="card-link">
                    <img src="Assets/sorong.jpg" alt="Raya Sorong-Manokwari" class="card-image">
                    <h2 class="card-title">Jl. Raya Sorong-Manokwari</h2><br>
                    <h3>Linking the cities of Sorong and Manokwari, this road is crucial for economic and cultural exchange. It passes through scenic coastal areas and lush forests.</h3>
                </a>
                <button class="button" onclick="window.location.href='sorongstreet.php';">view more</button>
            </li>
            <li class="card-item swiper-slide">
                <a href="https://maps.app.goo.gl/9AgAbs3pPZn2WTWaA" class="card-link">
                    <img src="Assets/meraukee.jpg" alt="Raya Merauke-Tanah Merah" class="card-image">
                    <h2 class="card-title">Jl. Raya Merauke-Tanah Merah</h2><br>
                    <h3>This road connects Merauke, one of Papua's southernmost cities, to the inland area of Tanah Merah. The journey showcases unique savanna landscapes and cultural heritage.</h3>
                </a>
                <button class="button" onclick="window.location.href='meraukestreet.php';">view more</button>
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
     <img alt="Garuda Wisnu Kencana" height="500" src="Assets/papuarecomend.jpg" width="1350"/>
     <div class="badge">DINA</div>
     <div class="text-content">
      <h1>This is Papua</h1>
      <p>Come to Papua and got the best experience in Indonesia, Wonderful Indonesia.</p>
      <a class="tombol" href="tourismpapua.php">Wisata Papua terbaik di tahun ini</a>
     </div>
    </div>
   </div>

   <!-- New Menu Carousel -->
   <h3 class="title" data-aos="fade-up"
   data-aos-duration="600"
   data-aos-delay="200"><span style="color: maroon;">Papua </span>Vibes</h3>
   <div class="main-content" data-aos="fade-up"
   data-aos-duration="900"
   data-aos-delay="400">
   <div
   class="menu-carousel new-menu-carousel"
   data-aos="fade-up"
   data-aos-duration="500"
   data-aos-delay="100"
 >
   <div class="menu-carousel-slide new-menu-carousel-slide">
     <span class="menu-img">
       <img src="Assets/papua vibes.jpg" alt="papua" />
       <span class="tooltip-text">
        </span> </span>

        <span class="menu-img">
       <img src="Assets/papua vibes2.jpg" alt="papua" />
       <span class="tooltip-text">
     </span> </span>

        <span class="menu-img">
       <img src="Assets/papua vibes3.jpg" alt="papua" />
       <span class="tooltip-text">
       </span> </span>

        <span class="menu-img">
       <img src="Assets/papua vibes4.jpg" alt="Papua" />
       <span class="tooltip-text">
    </span></span>

     <span class="menu-img">
       <img src="Assets/papua vibes5.jpg" alt="papua" />
       <span class="tooltip-text"></span></span>

       <span class="menu-img">
        <img src="Assets/papua vibes6.jpg" alt="papua" />
        <span class="tooltip-text">
      </span> </span>
 
         <span class="menu-img">
        <img src="Assets/papua vibes7.jpg" alt="papua" />
        <span class="tooltip-text">
        </span> </span>
 
         <span class="menu-img">
        <img src="Assets/papua vibes8.jpg" alt="Papua" />
        <span class="tooltip-text">
     </span></span>
     <span class="menu-img">
        <img src="Assets/papua vibes9.jpg" alt="papua" />
        <span class="tooltip-text">
        </span> </span>
 
         <span class="menu-img">
        <img src="Assets/papua vibes10.jpg" alt="Papua" />
        <span class="tooltip-text">
     </span></span>

     <span class="menu-img">
        <img src="Assets/papua vibes.jpg" alt="papua" />
        <span class="tooltip-text">
         </span> </span>
 
         <span class="menu-img">
        <img src="Assets/papua vibes2.jpg" alt="papua" />
        <span class="tooltip-text">
      </span> </span>
 
         <span class="menu-img">
        <img src="Assets/papua vibes3.jpg" alt="papua" />
        <span class="tooltip-text">
        </span> </span>
 
         <span class="menu-img">
        <img src="Assets/papua vibes4.jpg" alt="Papua" />
        <span class="tooltip-text">
     </span></span>
 
      <span class="menu-img">
        <img src="Assets/papua vibes5.jpg" alt="papua" />
        <span class="tooltip-text"></span></span>
 
        <span class="menu-img">
         <img src="Assets/papua vibes6.jpg" alt="papua" />
         <span class="tooltip-text">
       </span> </span>
  
          <span class="menu-img">
         <img src="Assets/papua vibes7.jpg" alt="papua" />
         <span class="tooltip-text">
         </span> </span>
  
          <span class="menu-img">
         <img src="Assets/papua vibes8.jpg" alt="Papua" />
         <span class="tooltip-text">
      </span></span>
      <span class="menu-img">
         <img src="Assets/papua vibes9.jpg" alt="papua" />
         <span class="tooltip-text">
         </span> </span>
  
          <span class="menu-img">
         <img src="Assets/papua vibes10.jpg" alt="Papua" />
         <span class="tooltip-text">
      </span></span>
   </div>
 </div>





<!--Footer-->
<footer class="footer" data-aos="fade-up">
    <div class="footer__container container grid">
        <div class="footer__content grid">
            <div>
                <a href="#" class="footer__logo">DINA</a>

                <p class="footer__description">
                    Discover with us and explore <br>
                    Indonesia without limits.
                </p>
            </div>

            <div class="footer__data grid">
                <div>
                    <h3 class="footer__title">About</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        
                        <li>
                            <a href="#" class="footer__link">Features</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">News & Blog</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Company</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">FaQs</a>
                        </li>
                        
                        <li>
                            <a href="#" class="footer__link">History</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Testimonials</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Contact</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Call Center</a>
                        </li>
                        
                        <li>
                            <a href="#" class="footer__link">Support Center</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Support</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Privacy Policy</a>
                        </li>
                        
                        <li>
                            <a href="#" class="footer__link">Terms & Services</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Payments</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__group">
            <div class="footer__social">
                <a href="#" target="blank" class="footer__social-link">
                    <i class="ri-facebook-line"></i>
                </a>

                <a href="#" target="blank" class="footer__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
                
                <a href="#" target="blank" class="footer__social-link">
                    <i class="ri-whatsapp-line"></i>
                </a>
                
                <a href="#" target="blank" class="footer__social-link">
                    <i class="ri-youtube-line"></i>
                </a>

            </div>

            <span class="footer__copy">
                &#169; Copyright DINA. All rights reserved
            </span>

        </div>
    </div>
</footer>


<!--link swiperJS script-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
  function initCarousel() {
  const newMenu = document.querySelector(".new-menu-carousel");
  const bestSeller = document.querySelector(".best-seller-carousel");

  for (let i = 0; i < 5; i++) {
    const newMenuCarousel = document
      .querySelector(".new-menu-carousel-slide")
      .cloneNode(true);
    const bestSellerCarousel = document
      .querySelector(".best-seller-carousel-slide")
      .cloneNode(true);

    newMenu.appendChild(newMenuCarousel);
    bestSeller.appendChild(bestSellerCarousel);
  }
}

initCarousel();
</script>
<script src="street.js"></script>
    
</body>
</html>