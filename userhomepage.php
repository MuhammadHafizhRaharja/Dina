<?php
session_start();

if (!isset($_SESSION['id_user'])) { // <-- perbaiki di sini
    header("Location: Signin.php"); // Redirect to login page if not logged in
    exit();
}

// Include database connection file
include 'dinamemberdb.php';

// Retrieve user ID from session
$id_user = $_SESSION['id_user']; // <-- perbaiki di sini

// Fetch user details from the database
$sql = "SELECT * FROM users WHERE id_user = $id_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User data is available
    $user = $result->fetch_assoc();
    $username = $user['username'];
    $email = $user['email'];
    $fullname = $user['fullname'];
    $gender = $user['gender'];
    $profile_picture = $user['foto_profil'];
} else {
    echo "User not found!";
    exit();
}

// Ambil 8 paket perjalanan dari database
$paketQuery = $conn->query("SELECT * FROM paket_perjalanan LIMIT 8");
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
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
        rel="stylesheet" />
    <!--link font google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!--link swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!--link rating-->
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

                    <li class="nav__item">
                        <div class="navbar-profile">
                            <img src="<?= $profile_picture ?>" alt="profile-image" id="menu-image" class="profile-image">
                        </div>
                    </li>
                </ul>



                <div class="menu">
                    <ul>
                        <li>
                            <!-- Check if user is logged in and is a member -->
                            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'member'): ?>
                                <a href="edit_profile.php" class="nav__link">
                                    <i class="material-icons-outlined">account_circle</i>
                                    My Profile
                                </a>
                            <?php else: ?>
                                <!-- Optionally, you can hide or show something else if the user is not a member -->
                                <a href="signin.php" class="nav__link">
                                    <i class="material-icons-outlined">account_circle</i>
                                    Sign In
                                </a>
                            <?php endif; ?>
                        </li>

                
                    </ul>
                    <hr/>
                    <ul>
                        <a href="Index.php">
                            <li class="all-account">
                                <i class="material-icons-outlined">logout</i>
                                Log out
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
        <img src="assets/sindoro.jpg" alt="foto sindoro" class="home__bg">
            <div class="home__shadow"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">Welcome <?= $username ?> To DINA</h3>
                    <h1 class="home__title">Explore Indonesia</h1>
                    <p class="home__description">Live the trips exploring the world, discover Indonesia's nature, culture, and history. Get your trip in DINA now.</p>
                    <a href="#login" class="button">
                        Get Started <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="home__cards grid">
                <div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card-wrapper">
                        <ul class="card-list swiper-wrapper">
                            <li class="card-item swiper-slide">
                                <a href="slider.php" class="card-link">
                                    <img src="media/Bali.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">BALI</h2><br>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="hotelBandung.php" class="card-link">
                                    <img src="media/bandung2.webp" alt="Card Image" class="card-image">
                                    <h2 class="card-title">BANDUNG</h2><br>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="hotelJakarta.php" class="card-link">
                                    <img src="media/monas.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">JAKARTA</h2>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="hotelPapua.php" class="card-link">
                                    <img src="media/papua.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">PAPUA</h2><br>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="media/Yogyakarta_Indonesia_Tugu-Yogyakarta-02.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">YOGYAKARTA</h2>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="Assets/medan.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">MEDAN</h2>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="Assets/Banjarmasin.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">BANJARMASIN</h2>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="Assets/NTT.jpg" alt="Card Image" class="card-image">
                                    <h2 class="card-title">NUSA TENGGARA TIMUR</h2>
                                </a>
                            </li>
                        </ul>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                    </div>
                </div>
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

                    <a href="aboutIndonesia.php" class="button">
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
                    <img src="assets/beachlombok.jpg" alt="explore image" class="explore__img">
                    <div class="explore__shadow"></div>
                </div>

                <div class="explore__content container grid">
                    <div class="explore__data">
                        <h2 class="explore__title">
                            Exploring <br> Lombok Beach
                        </h2>

                        <p class="explore__description">
                            I really like when exploring the world, discover Indonesia nature, culture and history get your trip in DINA now.
                        </p>
                    </div>

                    <div class="explore__user">
                        <img src="assets/HappyKids.jpg" alt="explore image" class="explore__perfil">
                        <span class="explore__name">Hafizh Raharja</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="login section" id="login">
            <div class="join__container container grid">
                <div class="join__data">
                    <h2 class="section__title">
                        Recommendation to Beach Kuta<br> BALI
                    </h2>

                    <p class="join__description">
                        Beach Kuta is a popular tourist destination in Bali, Indonesia. It is known for its white sand beaches, crystal-clear water, and stunning sunsets.
                    </p>

                    <form action="" class="join__form">


                        <a href="slider.php" class="join__button button">
                            Book Now! <i class="ri-arrow-right-line"></i>
                        </a>

                    </form>
                </div>

                <div class="join__image">
                    <img src="assets/Kuta_beach.jpg" alt="join image" class="join__img">
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

    <a href="" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <script src="scrollreveal.min.js"></script>
    <script src="main.js"></script>
    <!--link swiperJS script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="carousel.js"></script>
</body>

</html>