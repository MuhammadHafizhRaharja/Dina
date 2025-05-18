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
            <div class="nav-item"><a href="streetpapua.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelPapua.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item on"><a href="mallPapua.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantPapua.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item"><a href="tourismpapua.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
            <img alt="Delicious dish with shrimp and garlic" height="600" src="media/mallpapua.jpg" width="1200"/>
            <div class="text-header" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400" style="margin-left: 85px;">
                <h1>Recommended Shopping Places in Papua</h1>
                <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
                <div class="container-shadow"></div>
            </div>
        </div>
    </div>

    <div class="container-main">
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/wvNjGQQmsWxAnrR5A'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>1. Jayapura Mall</h2>
                <p>Papua, Indonesia</p>
                <div class="rating-right">
                    <span>9.785 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> As the largest mall in Jayapura, Jayapura Mall offers a complete shopping and entertainment experience. It features various stores for fashion, electronics, and well-known restaurants. Equipped with a modern cinema, this mall serves as a hub for residents to shop or relax.  
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallp1.webp" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallp2.png" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/AyCbynUMSCVvMqHG8'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>2. Saga Mall</h2>
                    <p>Papua, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.107 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Located in the Abepura area, Saga Mall is a favorite shopping destination for the local community. It has a large supermarket for daily necessities, along with several stores selling clothing and accessories. Its dining area also offers various food options, perfect for families. 
                        </div>

                        <div class="facts">
                        <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

  
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/DHv2UEsCCTTrpNEdA'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>3. Ramayana Jayapura Mall</h2>
                <p>Papua, Indonesia</p>
                <div class="rating-right">
                    <span>8.328 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> This mall is known for its affordable shopping options. Situated in the city center, Ramayana Jayapura houses a variety of stores selling clothing, shoes, and household items. Frequent discounts make this mall a popular spot for visitors. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallp3.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallp4.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/ZGqPouJhD2WGTvNx9'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>4. Papua Trade Center (PTC)</h2>
                    <p>Papua, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.907 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Papua Trade Center is a modern shopping complex that offers a wide range of facilities, including electronics stores, restaurants, and entertainment venues. With a modern design and spacious parking area, PTC is a convenient shopping destination for Papua residents.
                        </div>

                        <div class="facts">
                            <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

    
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/WV8tGQcKUGQ7pvt49'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>5. Hypermart Sentani</h2>
                <p>Papua, Indonesia</p>
                <div class="rating-right">
                    <span>8.899 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Strategically located near Sentani Airport, this mall provides various essentials, electronics, and clothing. Hypermart Sentani is frequently visited by locals and travelers looking for quality products. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallp5.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallp6.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/Sk4nB8H8mX6wBjrX6'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>6. Abepura Shopping Center</h2>
                    <p>Papua, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.705 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> This modest shopping center offers a variety of local goods at affordable prices. Located in the Abepura area, it is a favorite for nearby residents to fulfill their daily needs.
                        </div>

                        <div class="facts">
                            <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

  
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/P8sEyQn3dnT1c8cG9'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>7. Skyland Mall</h2>
                <p>Papua, Indonesia</p>
                <div class="rating-right">
                    <span>8.599 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Skyland Mall is a small shopping center with local tenants offering clothing, food, and other necessities. Although not large, it is a comfortable and easily accessible place for nearby residents. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallp7.jpg" width="200"/>
        </div> 

        <div class="restaurant" style="border-bottom: 2px solid maroon; padding-bottom: 100px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallp8.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/FvWTiL7D9nJ4qYxAA'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>8. Fresh Market Entrop</h2>
                    <p>Papua, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.255 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Fresh Market Entrop is a modern market in the Entrop area that provides fresh produce, such as vegetables, meat, and other kitchen essentials. Combining the concept of a traditional market with modern facilities, it offers a more convenient shopping experience. 
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