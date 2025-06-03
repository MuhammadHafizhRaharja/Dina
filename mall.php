<?php
include 'CRUD/reservasi restoran/db.php';

// Ambil keyword pencarian
$keyword = isset($_GET['search']) ? strtolower($_GET['search']) : '';

// Query dengan filter
$sql = "SELECT * FROM shopping_places WHERE city = 'Bali'";
if (!empty($keyword)) {
    $keyword = $conn->real_escape_string($keyword);
    $sql .= " AND (
        LOWER(name) LIKE '%$keyword%' OR 
        LOWER(location) LIKE '%$keyword%' OR 
        LOWER(description) LIKE '%$keyword%'
    )";
}
$sql .= " ORDER BY visitors DESC";

$result = $conn->query($sql);
$filtered = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $filtered[] = $row;
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
        <title>Shopping Place</title>
        <link rel="stylesheet" href="mall.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"  rel="stylesheet"/>
        <!--link font google-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
        <!--link swiper css-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <!--link rating-->
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
                <div class="nav-item"><a href="street.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
                <div class="nav-item"><a href="slider.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
                <div class="nav-item on"><a href="mall.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
                <div class="nav-item"><a href="restaurant.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
                <div class="nav-item"><a href="tourism.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
            </div>
            <div class="">
            <form method="get" class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" name="search" placeholder="Search malls..." value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit">Find</button>
            </form>
            </div>
        </div>

        <!--header-->
        <div class="main-content">
            <div class="image-container">
                <img alt="Delicious dish with shrimp and garlic" height="600" src="media/mallheader.jpg" width="1200"/>
                <div class="text-header" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400" style="margin-left: 85px;">
                    <h1>Recommended Shopping Places in Bali</h1>
                    <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
                    <div class="container-shadow"></div>
                </div>
            </div>
        </div>

        <div class="container-main">
        <?php if (empty($filtered)): ?>
            <p style="text-align:center; margin-top: 20px;">No results found for "<strong><?php echo htmlspecialchars($keyword); ?></strong>"</p>
        <?php endif; ?>

        <?php foreach ($filtered as $index => $mall): ?>
            <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <?php if ($index % 2 == 0): ?>
                    <div class="save-button-go-right">
                        <button type="button" onclick="location.href='<?php echo $mall['map']; ?>'">View on Map</button>
                    </div>
                    <div class="restaurant-details-right">
                <?php else: ?>
                    <img src="<?php echo $mall['image']; ?>" alt="<?php echo $mall['name']; ?>" height="400" width="200"/>
                    <div class="save-button-go">
                        <button type="button" onclick="location.href='<?php echo $mall['map']; ?>'">View on Map</button>
                    </div>
                    <div class="restaurant-details">
                <?php endif; ?>
                        <h2><?php echo $index + 1 . '. ' . $mall['name']; ?></h2>
                        <p><?php echo $mall['location']; ?></p>
                        <div class="rating<?php echo $index % 2 == 0 ? '-right' : ''; ?>">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span><?php echo $mall['visitors']; ?></span>
                        </div>
                        <div class="description<?php echo $index % 2 == 0 ? '-right' : ''; ?>">
                            <i class="fas fa-info-circle"></i> <?php echo $mall['description']; ?>
                        </div>
                    </div>
                <?php if ($index % 2 == 0): ?>
                    <img src="<?php echo $mall['image']; ?>" alt="<?php echo $mall['name']; ?>" height="400" width="200"/>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

        
        <!--ISi-->
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