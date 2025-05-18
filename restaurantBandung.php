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
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Places to visit, things to do, hotels....">
            <button>Find</button>
        </div>
    </div>
    

    <!--header-->
    <div class="main-content">
        <div class="image-container">
            <img alt="Delicious dish with shrimp and garlic" height="600" src="media/restob.jpg" width="1200"/>
        <div class="text-content" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
         <h1>Best restaurants in Bandung 2024</h1>
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


    <!--isi-->
    <div class="container-main" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="image-container">
        <img alt="Interior of Restaurant Pic with elegantly set tables and chairs" height="400" src="media/restob1.jpg" width="800"/>
        </div>
            <div class="content">
            <div class="title">
                <h1>1. The 18th Restaurant and Lounge</h1></div>
            <p style="color: black;">Bandung, Indonesia</p>
            <p class="description" style="padding-bottom: 30px;">
                Located in the scenic Lembang area, The 18th Restaurant and Lounge is one of the top dining spots in Bandung, known for its stunning panoramic views and luxurious setting. Situated on the 18th floor of the Hill Side Villa Resort, this restaurant offers breathtaking views of the surrounding mountains and the city below, making it a perfect destination for those seeking a picturesque dining experience.
                The restaurant’s elegant ambiance, combined with soft lighting and chic décor, creates a sophisticated atmosphere, ideal for romantic dinners, family gatherings, or business meetings. Additionally, the lounge area provides a more relaxed setting for guests to enjoy cocktails or an afternoon tea while taking in the incredible views.
                <a class="read-more" href="#"></a>
            </p>
    
            <div class="facts">
                <div class="fact-item">
                <i class="fas fa-star"></i>
                <span>Bintang 5</span>
            </div>
    
            <div class="fact-item">
            <i class="fas fa-utensils"></i>
            <span style="padding-left: 5px;">Masakan: Eropa, Makanan Sehat</span>
            </div>
    
            <div class="fact-item">
            <i class="fas fa-dollar-sign"></i>
            <span style="padding-left: 8px;">$$$$</span>
            </div>
    
        </div>
        
        <div class="ratings">
            <div class="rating-value" style="color: black;">5.0</div>
                <div class="rating-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <div class="rating-count">13.228 ulasan</div>
        </div>
        
        <div class="ratings">
            <div class="material-symbols-outlined" style="color: black; size: 20px;">lunch_dining</div>
                <div class="rating-stars" style="padding-left: 10px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <div class="rating-count">5.0</div>
        </div>
    
        <div class="ratings" style="padding-bottom: 25px;">
            <div class="material-symbols-outlined" style="color: black; size: 20px;">liquor</div>
                <div class="rating-stars" style="padding-left: 10px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <div class="rating-count">5.0</div>
        </div>
    
        
    
        <div class="save-button">
            <a href="restorb1.php">
            <button class="button-go" type="button" onclick="location.href='https://maps.app.goo.gl/mheAF6DiiyVWM3tr6'" style="width: 100%; height: 100%; background: transparent; border: 0; cursor: pointer;">Reservation</button>
        </a>
        </div>
       </div>
      </div>
      
      <!--isi 2-->
      <div class="container-restaurant">
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/restob2.webp" width="200"/>
            <div class="restaurant-details">
                <h2>02. Café D'Pakar</h2>
                <p>Bandung, Indonesia</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>10.582</span>
                </div>
                
                <div class="description">
                    <i class="fas fa-info-circle"></i> Situated in Dago Pakar, this café offers a natural ambiance with cool air and scenic views of the forest. The menu is varied, ranging from Indonesian to Western dishes, making it a great place to relax while enjoying nature. 
                </div>

                <div class="facts">
                    <span><i class="fas fa-utensils"></i> Cuisine: Contemporary, Healthy Food, Bar Restaurant</span>
                    <span>$$$$</span>
                </div>
            </div>

            <div class="save-button-go">
                <a href="restorb2.php">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/gn7omTBU6DcgH4xTA'">Reservation</button>
            </a>
            </div>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/restob3.jpg" width="200"/>
                <div class="restaurant-details">
                    <h2>03. Tropical Bistro</h2>
                    <p>Bandung, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>9.856 ulasan</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Located in Setiabudi, Bandung, this tropical-themed restaurant serves creative fusion dishes made with fresh ingredients. The relaxed atmosphere is perfect for dining with family or friends. 
                        </div>

                        <div class="facts">
                        <span><i class="fas fa-utensils"></i> Cuisine: Contemporary, Healthy Food, Bar Restaurant</span>
                        <span>$$$$</span>
                </div>
        </div>

        <div class="save-button-go">
            <a href="restorb3.php">
            <button type="button" onclick="location.href='https://maps.app.goo.gl/nCkYs34wHbDhhXqD6'">Reservation</button>
        </a>
        </div>

        
    </div>

    
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="200" src="media/restob4.jpg" width="200"/>
            <div class="restaurant-details">
                <h2>04. Sierra Café & Lounge</h2>
                <p>Bandung, Indonesia</p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>8.986 ulasan</span>
                </div>
                
                <div class="description">
                    <i class="fas fa-info-circle"></i> In Punclut, this restaurant offers spectacular views of Bandung city from above, with a romantic setting and delicious Western menu options. It's ideal for special dinners or celebrations.
                </div>

                <div class="facts">
                    <span><i class="fas fa-utensils"></i> Cuisine: Contemporary, Healthy Food, Bar Restaurant</span>
                    <span>$$$$</span>
                </div>
            </div>

            <div class="save-button-go">
                <a href="restorb4.php">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/mzBKdTYRtHQnKKpp7'">Reservation</button>
            </a>
            </div>
        </div> 

        <div class="restaurant" style="border-bottom: 2px solid maroon; padding-bottom: 100px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="200" src="media/restob5.jpg" width="200"/>
                <div class="restaurant-details">
                    <h2>05. Altitude Grill</h2>
                    <p>Bandung, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>9.252 ulasan</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Situated in the prestigious The Trans Luxury Hotel, Altitude Grill offers a luxurious steakhouse experience with top-grade steaks, seafood, and a variety of fine wines. The restaurant’s contemporary and stylish décor, combined with exceptional service, provides a sophisticated dining experience with a great view of the city.

                        </div>

                        <div class="facts">
                        <span><i class="fas fa-utensils"></i> Cuisine: Contemporary, Healthy Food, Bar Restaurant</span>
                        <span>$$$$</span>
                </div>
        </div>
 
        <div class="save-button-go">
            <a href="restorb5.php">
            <button type="button" onclick="location.href='https://maps.app.goo.gl/rWUvzdVdLS6oifKm8'">Reservation</button>
        </a>
        </div>
        </div>
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