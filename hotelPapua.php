<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"  rel="stylesheet"/>
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <title>Hotel</title>
</head>
<body>

  <!-- Navbar -->
  <header class="header" id="header">
    <nav class="nav container">
        <a href="userhomepage.php" class="nav__logo">
            <img src="assets/logoerase.png" alt="Logo">
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list" id="nav-menu">
                <li class="nav__item">
                    <a href="userhomepage.php" class="nav__link active-link">Home</a>
                </li>

                <li class="nav__item">
                    <a href="#about" class="nav__link">About</a>
                </li>

                <li class="nav__item">
                    <a href="#popular" class="nav__link">Popular</a>
                </li>
                
                <li class="nav__item">
                    <a href="#explore" class="nav__link">Explore</a>
                </li>

                <li class="nav__item nav__item--desktop">
                    <div class="navbar-profile">
                      <img
                        src="about us/images/Foto apis.jpg"
                        alt="profile-image"
                        id="menu-image"
                      />
                    </div>
                  </li>
                
                  <li class="nav__item nav__item--mobile">
                    <a href="#myprofile" class="nav__link">My Profile</a>
                  </li>
            </ul>

            

              <div class="menu">
                <ul>
                  <li>
                    <i class="material-icons-outlined">account_circle</i>
                    My Profile
                  </li>
                  <li>
                    <i class="material-icons-outlined">settings</i>
                    Account Settings
                  </li>
                </ul>
                <hr />
        
                <ul>
                  <li>
                    <i class="material-icons-outlined">analytics</i>
                    Analytics
                  </li>
                  <li>
                    <i class="material-icons-outlined">mail</i>
                    Inbox
                  </li>
                </ul>
                <hr />
        
                <ul>
                  <span style="color: white; font-size: 1.1rem">Switch Accounts</span>
                  <li
                    style="
                      margin-top: 10px;
                      margin-bottom: 10px;
                      background-color: #31363f;
                    "
                  >
                    <img
                      src="about us/images/Foto apis.jpg"
                      alt="profile-image"
                      class="account-profile"
                    />
                    <div class="accounts">
                      <span style="color: white">Muhammad Hafizh Raharja</span>
                      <span>Hafizh@Gmail.com</span>
                    </div>
                  </li>
                  <li>
                    <img
                      src="about us/images/darren.jpeg"
                      alt="profile-image"
                      class="account-profile"
                    />
                    <div class="accounts">
                      <span style="color: white">Darren</span>
                      <span>Darren@Gmail.com</span>
                    </div>
                  </li>
                </ul>
        
                <ul>
                    <a href="Index.php">
                  <li class="all-account">
                    <i class="material-icons-outlined">logout</i>
                    Sign out all accounts
                  </li>
                </ul>
            </a>
              </div>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </nav>
</header>

    <!--search bar-->
    <div class="search">
        <div class="title-search">
            <div class="animated-text">
                Find <span></span>
            </div>
        </div>

        <div class="nav-search" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
            <div class="nav-item"><a href="streetpapua.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item on"><a href="hotelPapua.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mallPapua.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantPapua.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item"><a href="tourismpapua.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
        </div>
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Places to visit, things to do, hotels...">
            <button>Find</button>
        </div>
    </div>

    <div class="banner">
        <video autoplay loop muted>
            <source src="media/Papua.mp4">
        </video>
        <div class="banner-text" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
            <h1>PAPUA</h1>
            <p>Papua is a province located in the eastern part of Indonesia, covering the western part of Papua Island, the second largest island in the world. The region is known for its extraordinary natural beauty, including mountains, tropical rainforests, beaches, and underwater riches such as Raja Ampat. Papua also has a very diverse culture with hundreds of indigenous tribes, such as the Dani, Asmat, and Biak, each of which has its own unique language, customs, and traditions.
            </p>
        </div>
    </div>

 <div id="container">

 <h2 class="title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">Recommended Hotels in <Span style="color: maroon;">Papua</Span></h2>
 <!--content-->
<div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="reservpapua1.php" class="card-link">
                    <img src="media/hotelP1.jpeg" alt="Card Image" class="card-image">
                    <p class="badge designer">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <h2 class="card-title">Swiss-Belhotel Merauke</h2><br>
                    <p class="card-paragraph">Strategically located in Merauke, this hotel offers complete facilities.</p><br>
                    <button class="card-button
                    material-symbols-rounded" type="button" onclick="location.href='https://maps.app.goo.gl/7vszya5GZdRFgg4q9?g_st=com.google.maps.preview.copy'">arrow_forward</button>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="reservpapua2.php" class="card-link">
                    <img src="media/hotelP2.jpg" alt="Card Image" class="card-image">
                    <p class="badge developer">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <h2 class="card-title">Swiss-Belhotel Manokwari</h2><br>
                    <p class="card-paragraph">Situated in the heart of Manokwari. It provides comfortable rooms with views of Doreri Bay.</p><br>
                    <button class="card-button
                    material-symbols-rounded" type="button" onclick="location.href='https://maps.app.goo.gl/DVqi6jwRYasPmT386?g_st=com.google.maps.preview.copy'">arrow_forward</button>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="reservpapua3.php" class="card-link">
                    <img src="media/hotelP3.jpg" alt="Card Image" class="card-image">
                    <p class="badge marketer">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <h2 class="card-title">Aston Niu Manokwari Hotel</h2><br> 
                    <p class="card-paragraph">Located on an elevated site with views of the sea and mountains, Aston Niu offers a luxurious stay.</p><br>
                    <button class="card-button
                    material-symbols-rounded" type="button" onclick="location.href='https://maps.app.goo.gl/8S2xq4vzGDoC6xz18?g_st=com.google.maps.preview.copy'">arrow_forward</button>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="reservpapua4.php" class="card-link">
                    <img src="media/hotelP4.webp" alt="Card Image" class="card-image">
                    <p class="badge gamer">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <h2 class="card-title">Hotel Horison Kotaraja, Jayapura</h2><br>
                    <p class="card-paragraph">It offers facilities such as a fitness center, meeting rooms, and rooms with contemporary designs.</p><br>
                    <button class="card-button
                    material-symbols-rounded" type="button" onclick="location.href='https://maps.app.goo.gl/ucdRRcYwqxNQxmDr8?g_st=com.google.maps.preview.copy'">arrow_forward</button>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="reservpapua5.php" class="card-link">
                    <img src="media/hotelP5.webp" alt="Card Image" class="card-image">
                    <p class="badge editor">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <h2 class="card-title">Swiss-Belhotel Jayapura</h2><br>
                    <p class="card-paragraph">This hotel provides maximum comfort with direct views of Yos Sudarso Bay.</p><br>
                    <button class="card-button
                    material-symbols-rounded" type="button" onclick="location.href='https://maps.app.goo.gl/LoQtFDPL2nJQQFuD9?g_st=com.google.maps.preview.copy'">arrow_forward</button>
                </a>
            </li>
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
    </div>
</div>

 <!--Rekomendasi-->
 <div class="main-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="image-container">
        <img alt="Delicious dish with shrimp and garlic" height="700" src="media/restopapua.jpg" width="1200"/>
    <div class="text-content">
     <h1>Best restaurants in Papua 2024</h1>
     <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
     <a class="button" href="restaurantBandung.php">Check out the list</a>
    </div>
   </div>
  </div>
</div>


<h2 class="title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">Recommendations in other<Span style="color: maroon;"> Cities</Span></h2>
        <!--content-->
<div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="card-wrapper">
        <ul class="card-list-city swiper-wrapper">
            <li class="card-item-city swiper-slide">
                <a href="slider.php" class="card-link-city">
                    <img src="media/Bali.jpg" alt="Card Image" class="card-image">
                    <h2 class="card-title-city">BALI</h2><br>
                </a>
            </li>
            <li class="card-item-city swiper-slide">
                <a href="hotelBandung.php" class="card-link-city">
                    <img src="media/bandung2.webp" alt="Card Image" class="card-image">
                    <h2 class="card-title-city">BANDUNG</h2><br>
                </a>
            </li>
            <li class="card-item-city swiper-slide">
                <a href="hotelJakarta.php" class="card-link-city">
                    <img src="media/monas.jpg" alt="Card Image" class="card-image">
                    <h2 class="card-title-city">JAKARTA</h2>
                </a>
            </li>
            <li class="card-item-city swiper-slide">
                <a href="hotelPapua.php" class="card-link-city">
                    <img src="media/papua.jpg" alt="Card Image" class="card-image">
                    <h2 class="card-title-city">PAPUA</h2><br>
                </a>
            </li>
            <li class="card-item-city swiper-slide">
                <a href="#" class="card-link-city">
                    <img src="media/Yogyakarta_Indonesia_Tugu-Yogyakarta-02.jpg" alt="Card Image" class="card-image">
                    <h2 class="card-title-city">YOGYAKARTA</h2>
                </a>
            </li>
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
    </div>
</div>



    <!--footer-->
    <footer class="footer">
        <div class="footer__container container grid" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <div class="footer__content grid" >
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
                                <a href="about us/about us.php" class="footer__link">About Us</a>
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
                                <a href="about us/contact.php" class="footer__link">Contact Us</a>
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
                    <a href="https://www.facebook.com" target="blank" class="footer__social-link">
                        <i class="ri-facebook-line"></i>
                    </a>

                    <a href="https://www.instagram.com" target="blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    
                    <a href="#" target="blank" class="footer__social-link">
                        <i class="ri-whatsapp-line"></i>
                    </a>
                    
                    <a href="https://www.youtube.com" target="blank" class="footer__social-link">
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

<script src="slider.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="main.js"></script>
    
</body>
</html>