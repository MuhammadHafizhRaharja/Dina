<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="authors" content="Laura Tejada, Deynni Almazan, Dilnaz Kaur" />
    <meta name="description" content="Software Company Website" />
    <meta name="keywords" content="html,css,web development, seo, services, projects" />
    <link rel="icon" type="logotype/png" href="images/logofinal.png">
    <title>About DINA's Team</title>
    <link 
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shorcut icon" href="images/logoerase.png" type="image/S-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">     
    <link rel="stylesheet" href="style/index.css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="script/index.js" defer></script>
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav__logo">
                <img src="images/logoerase.png" alt="Logo">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="" class="nav__link active-link">Home</a>
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
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>
    
    <main>
        <section id="hero-banner">
            <div class="container">
                <div class="h-text">
                    <div class="content">
                        <div class="animation one" data-animation-offset="first"> 
                            <h1 class="h-title">Discover Indonesia </h1>
                            <h2 class="h-title">Explore Wonders, Creat Memories </h2> 
                        </div>
                            <div class="animation two" data-animation-offset="third"> 
                            <a href="#our-services"><button class= h-button>Our services</button></a>
                        </div>
                    </div>
                </div>  
                </div>
            </div>
        </section>
        <section id="our-services">
            <div class="container" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
                <div>
                    <h2 class="section-heading">Our Services</h2>
                </div>
                <div class="vertical">
                    <div class="service-para">
                    <p>This company provides easy-to-use travel services such as destination selection, ticket purchase, booking, and lodging. With unique features and exclusive services, they ensure a memorable and enjoyable vacation experience.</p>
                    </div>
                </div>
                <div class="vertical">
                    <div class="horizontal">
                        <div class="board">
                            <div class="ikon-wrapper">
                            <i class="material-symbols-outlined">explore_nearby</i>
                            </div>
                            <h3 class="board-heading">Place to Go</h3>
                            <p class="board-para">
                                A complete guide for exploring important streets, popular locations, 
                                and must-see routes in certain destinations, 
                                resulting in a more enjoyable and well-directed journey.
                            </p>
                        </div>
                    </div>
                    <div class="horizontal">
                        <div class="board">
                            <div class="ikon-wrapper">
                            <i class="material-symbols-outlined">hotel </i>
                            </div>
                            <h3 class="board-heading">Stays</h3>
                            <p class="board-para">
                                Offers a diverse choice of accommodations, from luxury hotels 
                                to low-cost stays, with simple booking and thorough information to 
                                assist consumers choose the ideal location for their needs.
                            </p>
                        </div>
                    </div>
                    <div class="horizontal">
                        <div class="board">
                            <div class="ikon-wrapper">
                                <i class="material-symbols-outlined">local_mall</i>
                            </div>
                            <h3 class="board-heading">Shopping Center</h3>
                            <p class="board-para">
                                A comprehensive reference to well-known shopping malls, 
                                including information on deals, top businesses, 
                                and smart shopping suggestions for a pleasurable retail experience.
                            </p>
                        </div>
                    </div>
                    <div class="horizontal">
                        <div class="board">
                            <div class="ikon-wrapper">
                            <i class="material-symbols-outlined">restaurant </i>
                            </div>
                            <h3 class="board-heading">Restaurant</h3>
                            <p class="board-para">
                                Offers dining recommendations ranging from local 
                                food stalls with authentic flavors to high-end restaurants, complete 
                                with ratings and menu categories for a full gastronomic experience.
                            </p>
                        </div>
                    </div>
                    <div class="horizontal">
                        <div class="board">
                            <div class="ikon-wrapper">
                            <i class="material-symbols-outlined">explore </i>
                            </div>
                            <h3 class="board-heading">Tourism</h3>
                            <p class="board-para">
                                Provides extensive information about tourist attractions, 
                                cultural events, and fascinating things to do, 
                                allowing users to organize a more enriching and meaningful trip.
                            </p>
                        </div>
                    </div>
                    <div class="horizontal">
                        <div class="board">
                            <div class="ikon-wrapper">
                            <i class="fas fa-stopwatch-20"></i>
                            </div>
                            <h3 class="board-heading">Fast Response</h3>
                            <p class="board-para">
                                Equipped with 24-hour customer care ready to answer problems, 
                                provide speedy solutions, 
                                and assist users throughout their trip experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="intros">
            <div class="container" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
                <div class="rows">
                    <h1>DINA's Team</h1>
                </div>
                <div class="rows">
                    <!-- Hafiz -->
                    <div class="columns">
                        <div class="card">
                            <div class="img-container">
                                <img src="images/Foto apis.jpg" />
                            </div>
                            <h3>Muhammad Hafizh Raharja</h3>
                            <p>Founder of Discover Indonesia</p>
                            <div class="icons">
                                <a href="https://github.com/lauratejada">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Dwiky -->
                    <div class="columns">
                        <div class="card">
                            <div class="img-container">
                                <img src="images/dwiki.jpg" />
                            </div>
                            <h3>Afrisya Dwiky Mauliddinka</h3>
                            <p>Co-Founder of Discover Indonesia</p>
                            <div class="icons">
                                <a href="https://github.com/deynnialmazan">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Darren -->
                    <div class="columns">
                    <div class="card">
                        <div class="img-container">
                            <img src="images/darren2.jpg" />
                        </div>
                        <h3>Johanes Darren Yehuda</h3>
                        <p>CEO of Discover Indonesia</p>
                        <div class="icons">
                            <a href="https://github.com/Dilnaz-kaur22">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer class="footer">
        <div class="footer__container container grid" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
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
                                <a href="about us.php" class="footer__link">About Us</a>
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
                                <a href="contact.php" class="footer__link">Contact Us</a>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>