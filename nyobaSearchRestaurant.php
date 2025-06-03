<?php
// Koneksi ke database
include 'CRUD/reservasi restoran/db.php';

// Ambil parameter pencarian
$search = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
$filteredRestaurants = [];

$sql = "SELECT * FROM restaurants WHERE city = 'Bandung'";

if (!empty($search)) {
    $search = $conn->real_escape_string(strtolower($search));
    $sql .= " AND (
        LOWER(name) LIKE '%$search%' OR 
        LOWER(description) LIKE '%$search%'
    )";
}
$sql .= " ORDER BY review DESC";

$result = $conn->query($sql);

// Ambil hasil query ke array
while ($row = $result->fetch_assoc()) {
    $filteredRestaurants[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <title>Restaurant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="restaurant.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"  rel="stylesheet"/>
    <!--link font google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!--link swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<?php
include 'views/header2.php';
?>

    <!--search bar-->
    <div class="search">
        <div class="title">
            <div class="animated-text">
                Find <span></span>
            </div>
        </div>
        <div class="nav-search" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400">
            <div class="nav-item"><a href="streetbandung.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelBandung.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item"><a href="mallBandung.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item on"><a href="restaurantBandung.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item"><a href="tourism.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
        </div>
        <div class="">
        <form method="GET" class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" name="search" placeholder="Search restaurant..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit">Find</button>
        </form>
    </div>
    </div>
    

    <!--header-->
    <div class="main-content">
        <div class="image-container">
            <img alt="Delicious dish with shrimp and garlic" height="600" src="media/restob.jpg" width="1200"/>
        <div class="text-content" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
         <h1>Best restaurants in Bandung 2025</h1>
         <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
         <div class="container-shadow"></div>
        </div>
       </div>
      </div>
    

    <!--about-->
    <div class="about">
        <div class="about-shadow"></div>
        <div class="text" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
            <h1>Luxury Restaurant - Bandung</h1>
            <p style="padding-bottom: 10px;">When searching for the crème-de-la-crème, these are the places waiters must visit.<br>
                Think: white tablecloths, top chefs, and unforgettable dishes.</p>
            <p>The Best of the Best Travellers’ Choice Awards designation signifies the highest level of excellence in travel.<br>
                The designation is given to those who receive the most complimentary reviews and opinions from our community over a 12-month period.<br>
                Of our 8 million listings, less than 1% achieve this distinction.</p>
        </div>
    </div>
      
      <!--isi 2-->
      <div class="container-restaurant">
    <?php if (count($filteredRestaurants) > 0): ?>
        <?php foreach ($filteredRestaurants as $resto): ?>
            <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <img src="<?= $resto['image'] ?>" alt="Image of <?= $resto['name'] ?>" height="400" width="200">
                
                <div class="restaurant-details">
                    <h2><?= $resto['name'] ?></h2>
                    <p><?= $resto['location'] ?></p>
                    
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <span><?= $resto['review'] ?></span>
                    </div>

                    <div class="description">
                        <i class="fas fa-info-circle"></i> <?= $resto['description'] ?>
                    </div>

                    <div class="facts">
                        <span><i class="fas fa-utensils"></i> Cuisine: Contemporary, Healthy Food, Bar Restaurant</span>
                        <span>$$$$</span>
                    </div>
                </div>

                <div class="save-button-go">
                    <a href="<?= $resto['link'] ?>">
                        <button type="button" onclick="location.href='<?= $resto['maps'] ?>'">Reservation</button>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p style="text-align: center; padding: 30px; font-weight: bold;">
            No restaurants found for "<strong><?= htmlspecialchars($search) ?></strong>"
        </p>
    <?php endif; ?>
</div>

      <h2 class="title-city" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">Recommendations in other<Span style="color: maroon;"> Cities</Span></h2>
            <!--content-->
<div class="container swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="card-wrapper">
        <ul class="card-list swiper-wrapper">
            <li class="card-item swiper-slide">
                <a href="mall.php" class="card-link">
                    <img src="media/Bali.jpg" alt="Card Image" class="card-image">
                    <h2 class="card-title">BALI</h2><br>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="mallBandung.php" class="card-link">
                    <img src="media/bandung2.webp" alt="Card Image" class="card-image">
                    <h2 class="card-title">BANDUNG</h2><br>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="mallJakarta.php" class="card-link">
                    <img src="media/monas.jpg" alt="Card Image" class="card-image">
                    <h2 class="card-title">JAKARTA</h2>
                </a>
            </li>
            <li class="card-item swiper-slide">
                <a href="mallPapua.php" class="card-link">
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
        </ul>

        <div class="swiper-pagination"></div>
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
    </div>
</div>

<?php
     include 'views/footer2.php';
    ?>