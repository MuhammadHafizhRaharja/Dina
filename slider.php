<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: Signin.php");
    exit();
}

include 'CRUD/reservasi restoran/db.php';

$search  = strtolower(trim($_GET['search'] ?? ''));
$hotels  = [];                     // <-- inisialisasi di sini

if ($search === '') {
    $sql  = "SELECT reservasi,name,image,description,stars
             FROM hotels WHERE city='Bali'
             ORDER BY stars DESC, name";
    $stmt = $conn->prepare($sql);
} else {
    $sql  = "SELECT reservasi,name,image,description,stars
             FROM hotels
             WHERE city='Bali'
               AND (LOWER(name) LIKE ? OR LOWER(description) LIKE ?)
             ORDER BY stars DESC";
    $like = "%$search%";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $like, $like);
}

$stmt->execute();
$res = $stmt->get_result();
$hotels = $res->fetch_all(MYSQLI_ASSOC);    
$stmt->close();

?>


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
    
<?php
include 'views/header4.php';
?>

    <!--search bar-->
    <div class="search">
        <div class="title-search">
            <div class="animated-text">
                Find <span></span>
            </div>
        </div>

        <div class="nav-search" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
            <div class="nav-item"><a href="street.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item on"><a href="slider.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mall.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurant.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item"><a href="tourism.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
        </div>
        <form class="search-bar" method="get" action="slider.php">
            <i class="fas fa-search"></i>
            <input type="text" name="search"
                value="<?= htmlspecialchars($search) ?>" placeholder="Search hotels in Bali...">
            <button type="submit">Find</button>
        </form>

    </div>

    <div class="banner">
        <video autoplay loop muted>
            <source src="media/BALI.mp4">
        </video>
        <div class="banner-text" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
            <h1>BALI</h1>
            <p>Bali is a province in Indonesia located in the western part of the Nusa Tenggara Islands and its capital is Denpasar City. Bali Island, which is the largest island in the Bali Province, has several nicknames, including the Island of the Gods and the Island of a Thousand Temples. </p>
        </div>
    </div>

 <div id="container">

 <h2 class="title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">Recommended Resorts in <Span style="color: maroon;">Bali</Span></h2>
 <!--content-->
<div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <?php if (!$hotels): ?>
                <p style="padding:1rem">Tidak ada hasil untuk “<?= htmlspecialchars($search) ?>”.</p>
            <?php endif; ?>

                <?php foreach ($hotels as $h): ?>
                    <li class="card-item swiper-slide">
    <a href="<?= $h['reservasi'] ?>" class="card-link">
        <img src="<?= htmlspecialchars($h['image']) ?>"
             alt="<?= htmlspecialchars($h['name']) ?>"
             class="card-image">

        <!-- rating bintang -->
        <p class="badge designer">
            <?php for ($i = 0; $i < $h['stars']; $i++): ?>
                <span class="fa fa-star checked"></span>
            <?php endfor; ?>
            <?php for ($i = $h['stars']; $i < 5; $i++): ?>
                <span class="fa fa-star"></span>
            <?php endfor; ?>
        </p>

        <h2 class="card-title"><?= htmlspecialchars($h['name']) ?></h2><br>
        <p class="card-paragraph"><?= htmlspecialchars($h['description']) ?></p><br>
        <button class="card-button material-symbols-rounded" type="button">arrow_forward</button>
    </a>
</li>

                <?php endforeach; ?>
        </ul>


        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
    </div>
</div>

 <!--Rekomendasi-->
 <div class="main-content" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
    <div class="image-container">
        <img alt="Delicious dish with shrimp and garlic" height="700" src="media/resto.jpg" width="1200"/>
    <div class="text-content">
     <h1>Best restaurants in Bali 2025</h1>
     <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
     <a class="button" href="restaurant.php">Check out the list</a>
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