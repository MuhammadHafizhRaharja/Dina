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
            <div class="nav-item"><a href="streetjakarta.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelJakarta.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item on"><a href="mallJakarta.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantJakarta.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item"><a href="tourismjakarta.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
            <img alt="Delicious dish with shrimp and garlic" height="600" src="media/mj.jpg" width="1200"/>
            <div class="text-header" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400" style="margin-left: 85px;">
                <h1>Recommended Shopping Places in Jakarta</h1>
                <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
                <div class="container-shadow"></div>
            </div>
        </div>
    </div>

    <div class="container-main">
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/T963NX2MxTnyYYyx9'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>1. Grand Indonesia</h2>
                <p>Jakarta, Indonesia</p>
                <div class="rating-right">
                    <span>9.875 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Located in the heart of Jakarta, this mall is one of the largest and most luxurious in Indonesia. Grand Indonesia consists of two sections, East Mall and West Mall, connected by a Skybridge. It features various international brand stores, themed restaurants, and entertainment facilities such as a cinema and play areas.  
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mj1.webp" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mj2.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/H3bckwMkFfTB72k28'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>2. Plaza Indonesia</h2>
                    <p>Jakarta, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.507 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Known as a high-end shopping center, Plaza Indonesia offers luxury boutiques from world-famous brands. This mall is also a lifestyle destination with fine dining restaurants, exclusive lounges, and premium fitness facilities. Its strategic location at Bundaran HI makes it easily accessible from all parts of the city. 
                        </div>

                        <div class="facts">
                        <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

  
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/AC1ZCYAc25bQ6Pbb9'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>3. Pacific Place</h2>
                <p>Jakarta, Indonesia</p>
                <div class="rating-right">
                    <span>9.328 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Located in the Sudirman Central Business District (SCBD), this mall exudes elegance with its modern interiors. Pacific Place features a wide selection of branded boutiques, international cuisine restaurants, and entertainment venues like KidZania, making it ideal for families with children.
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mj3.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mj4.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/A6V3MLGqdEoJBK5i6'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>4. Mall Taman Anggrek</h2>
                    <p>Jakarta, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.907 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> A landmark in West Jakarta, this mall is famous for its giant LED facade that holds a world record. Mall Taman Anggrek also boasts an ice skating rink, which is a unique attraction. It offers a variety of retail stores, restaurants, and other entertainment options.
                        </div>

                        <div class="facts">
                            <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

    
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/oR8K2XFQiWFxtL6T7'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>5. Senayan City</h2>
                <p>Jakarta, Indonesia</p>
                <div class="rating-right">
                    <span>8.899 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Known as the "mall for the younger generation," Senayan City combines shopping, entertainment, and dining in a modern atmosphere. Strategically located in the Senayan area, this mall hosts numerous international brand stores, a cinema, and a vibrant dining area, making it perfect for social gatherings. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mj5.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mj6.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/727QvWRuga2TMFpr7'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>6. Kota Kasablanka</h2>
                    <p>Jakarta, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.705 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> A popular shopping destination in South Jakarta, Kota Kasablanka provides a complete shopping experience, from fashion and electronics to daily essentials. The mall is also well-known for its spacious food court and a wide selection of restaurants serving diverse cuisines. Its integrated access with offices and apartments makes it a bustling hub.
                        </div>

                        <div class="facts">
                            <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

  
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/R2Xu6JHp9LmPrrzdA'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>7. Pondok Indah Mall (PIM)</h2>
                <p>Jakarta, Indonesia</p>
                <div class="rating-right">
                    <span>8.599 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Situated in the upscale Pondok Indah area, this mall comprises several interconnected buildings. Pondok Indah Mall offers various facilities, including cinemas, children’s play areas, fitness centers, and stores featuring international brands. It’s a favorite destination for families to spend quality time together. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mj7.jpg" width="200"/>
        </div> 

        <div class="restaurant" style="border-bottom: 2px solid maroon; padding-bottom: 100px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mj8.webp" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/UEwZs32Mk8bXEcvY9'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>8. Central Park Mall</h2>
                    <p>Jakarta, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.255 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> This mall stands out with its unique concept featuring an open garden called Tribeca Park, which serves as a major attraction. Located in West Jakarta, Central Park Mall provides a comfortable shopping experience with a range of local and international brands, restaurants, and community events often held in its park area. 
                        </div>

                        <div class="facts">
                            <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>
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