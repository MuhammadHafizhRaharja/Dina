<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
    rel="stylesheet"
  />
    <title>DINA</title>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav__logo">
                <img src="assets/logoerase.png" alt="Logo">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list" id="nav-menu">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
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
                            src="assets/User_Icon.png"
                            alt="profile-image"
                            id="menu-image"
                          />
                        </div>
                      </li>
                </ul>

                

                  <div class="menu">
                    <ul>
                      <li>
                        <i class="material-icons-outlined">account_circle</i>
                        My Profile
                      </li>
                    </ul>
                    <hr />
            
                    <ul>
                      <li>
                        <i class="material-icons-outlined">analytics</i>
                        Top Place To Go analytics
                      </li>
                      <li>
                        <i class="material-icons-outlined">mail</i>
                        Inbox
                      </li>
                    </ul>
                    <hr />
            
                    <ul>
                      <span style="color: white; font-size: 1.1rem">Account</span>
                      <li
                        style="
                          margin-top: 10px;
                          margin-bottom: 10px;
                          background-color: #31363f;
                        ">
                        
                        <div class="accounts">
                          <span style="color: white">Sign In</span>
                          <span>Pls sign in to continue</span>
                        </div>
                      </li>
                    </ul>
            
                    <ul>
                        <a href="Index.php">
                      <li class="all-account">
                        <i class="material-icons-outlined">logout</i>
                        Log in
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

    <main class="main">
        <section class="home section" id="home">
            <video src="assets/Cliplandingpage.mp4" muted autoplay loop class="home__bg"></video>
            <div class="home__shadow"></div>
            
            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">
                        Welcome To DINA
                    </h3>

                    <h1 class="home__title">
                        explore
                        Indonesia
                    </h1>

                    <p class="home__description">
                        Live the trips exploring the world, discover Indonesia nature, culture and history get your trip in DINA now.
                    </p>
                    <a href="#login" class="button">
                        Get Started <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__cards grid">
                        <article class="home__card">
                        <a href="slider.php">
                            <img src="assets/bali.jpg" alt="home image" class="home__card-img">
                            <h3 class="home__card-title">Bali</h3>
                            <div class="home__card-shadow"></div>
                            </a>
                        </article>
                    
                    <article class="home__card">
                        <img src="assets/bandung.png" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Bandung</h3>
                        <div class="home__card-shadow"></div>
                    </article>
                    
                    <article class="home__card">
                        <img src="assets/papua.jpg" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Papua</h3>
                        <div class="home__card-shadow"></div>
                    </article>

                    <article class="home__card">
                        <img src="assets/jakarta.jpg" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Jakarta</h3>
                        <div class="home__card-shadow"></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        Learn More <br>
                        About Indonesia
                    </h2>

                    <p class="about__description">
                        Live the trips exploring the world, discover Indonesia nature, culture and history get your trip in DINA now.
                    </p>

                    <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwiHto-ulLSKAxV-bGwGHdJNIqkQFnoECBkQAQ&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FIndonesia&usg=AOvVaw1GXpcLipyQDUO0ubxQOckS&opi=89978449" class="button">
                        Get Started <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                
                <div class="about__image">
                    <img src="assets/balistatue2.jpg" alt="about image" class="about__img">
                    <div class="about__shadow"></div>
                </div>
            </div>
        </section>

        <section class="popular section" id="popular">
            <h2 class="section__title">
                Popular <br>
                Destinations
            </h2>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="assets/kawahputih.jpg" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    
                    <h2 class="popular__tittle">
                        Kawah Putih
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Bandung</span>
                    </div>
                </article>

                <article class="popular__card">
                   <a href="kutatourism.php"> <div class="popular__image">
                        <img  src="assets/pantaiKuta.jpg" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div></a>
                    
                    <h2 class="popular__tittle">
                        Pantai Kuta
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Bali</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="assets/gunungbromo.jpg" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    
                    <h2 class="popular__tittle">
                        Mount Bromo
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Malang</span>
                    </div>
                </article>
            </div>
        </section>

        <section class="explore section" id="explore">
            <div class="explore__container">
                <div class="explore__image">
                    <img src="assets/balistatue.jpg" alt="explore image" class="explore__img">
                    <div class="explore__shadow"></div>
                </div>

                <div class="explore__content container grid">
                    <div class="explore__data">
                    <h2 class="explore__title">
                        Explore The <br> Best Destinations
                    </h2>

                    <p class="explore__description">
                        Live the trips exploring the world, discover Indonesia nature, culture and history get your trip in DINA now.
                    </p>
                    </div>

                    <div class="explore__user">
                        <img src="about us/images/Foto apis.jpg" alt="explore image" class="explore__perfil">
                        <span class="explore__name">Hafizh Raharja</span>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="login section" id="login">
            <div class="join__container container grid">
                <div class="join__data">
                    <h2 class="section__title">
                        Your Trip With DINA <br> Start Here 
                    </h2>

                    <p class="join__description">
                        Get up and going with DINA now, discover Indonesia nature, culture and history get your trip in DINA now.
                    </p>

                    <form action="" class="join__form">
                        <a href="Signin.php" class="join__button button">
                            Log In<i class="ri-arrow-right-line"></i>
                        </a>
                        
                    </form>
                </div>

                <div class="join__image">
                    <img src="assets/tarikecak.jpg" alt="join image" class="join__img">
                    <div class="join__shadow"></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
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

    <a href="" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <script src="scrollreveal.min.js"></script>
    <script src="main.js"></script>
</body>
</html>