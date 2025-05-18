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
            <div class="nav-item"><a href="streetbandung.php" class="material-symbols-outlined">explore_nearby<p>Place To Go</p></a></div>
            <div class="nav-item"><a href="hotelBandung.php" class="material-symbols-outlined">hotel <p>Hotel</p></a></div>
            <div class="nav-item on"><a href="mallBandung.php" class="material-symbols-outlined">local_mall <p>Shopping Place</p></a></div>
            <div class="nav-item"><a href="restaurantBandung.php" class="material-symbols-outlined">restaurant <p>Restaurant</p></a></div>
            <div class="nav-item"><a href="tourismbandung.php" class="material-symbols-outlined">explore <p>Tourism</p></a></div>
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
            <img alt="Delicious dish with shrimp and garlic" height="600" src="media/mallBandung.jpeg" width="1200"/>
            <div class="text-header" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400" style="margin-left: 85px;">
                <h1>Recommended Shopping Places in Bandung</h1>
                <p>Plan a visit to the Best of the Best winners in our Travellers' Choice Awards.</p>
                <div class="container-shadow"></div>
            </div>
        </div>
    </div>

    <div class="container-main">
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/8FduJzLGpAimz3z97'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>1. Trans Studio Mall Bandung</h2>
                <p>Bandung, Indonesia</p>
                <div class="rating-right">
                    <span>9.875 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> One of the largest and most luxurious malls in Bandung, integrated with Trans Studio Bandung. This mall has various international brands, premium restaurants, and entertainment centers. Suitable for families, tourists, or those who want a luxurious shopping experience.  
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallBandung1.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallBandung2.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/CfVURA3Fk1sxS4M87'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>2. Paris Van Java (PVJ)</h2>
                    <p>Bandung, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.507 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> Iconic mall in Bandung with a semi-outdoor concept that blends with nature. PVJ is known for its unique design, rooftop area containing a garden and small farm, and many choices of fashion shops, cafes, and restaurants. 
                        </div>

                        <div class="facts">
                        <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

  
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='hhttps://maps.app.goo.gl/JrJXjpEbc6rUF44s8'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>3. Paskal 23 Shopping Center</h2>
                <p>Bandung, Indonesia</p>
                <div class="rating-right">
                    <span>9.328 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Located in the Paskal Hypersquare area, this mall offers a modern atmosphere with various international and local tenants. There is a food court area known as "Food Market 1001 Rasa" and a cinema with the latest technology. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallBandung3.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallBandung4.webp" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/oT4muU8BMrufxmkVA'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>4. Cihampelas Walk (Ciwalk)</h2>
                    <p>Bandung, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.907 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> A mall that offers a shopping experience in an open atmosphere. Located on Jalan Cihampelas, Ciwalk has many fashion stores, restaurants, and hangouts. Its pedestrian area is often a favorite for photos. 
                        </div>

                        <div class="facts">
                            <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                        <span>$$$$</span>
                </div>
        </div>
    </div>

    
        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="save-button-go-right">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/ESpD3BvxN4LgHNeM9'">View on Map</button>
            </div>
            <div class="restaurant-details-right">
                <h2>5. Braga CityWalk</h2>
                <p>Bandung, Indonesia</p>
                <div class="rating-right">
                    <span>8.899 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> This mall is located in the historical area of ​​Braga, with a design that combines classic and modern nuances. In addition to the shopping center, Braga CityWalk also has a cinema and culinary area that is perfect for relaxing after exploring Braga walk. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallBandung5.jpg" width="200"/>
        </div> 

        <div class="restaurant" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallBandung6.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/XPDRBxftJnzy4xWD7'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>6. Bandung Indah Plaza (BIP)</h2>
                    <p>Bandung, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.705 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> One of the first malls in Bandung that is still a favorite shopping destination to this day. BIP is located in the city center and offers a variety of fashion stores, electronics, restaurants, and cinemas. The location is strategic and easy to reach.
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
                <h2>7. Festival Citylink</h2>
                <p>Bandung, Indonesia</p>
                <div class="rating-right">
                    <span>8.599 Visitors</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="description-right">
                    <i class="fas fa-info-circle"></i> Located in the Kopo area, this mall is directly connected to a star-rated hotel. Festival Citylink provides various fashion stores, entertainment centers such as cinemas, and various restaurants, making it a complete destination. 
                </div>

                <div class="facts-right">
                    <span><i class="material-symbols-outlined" style="font-size: 15px;">local_mall</i> Contemporary, Luxurious, Spacious</span>
                    <span>$$$$</span>
                </div>
            </div>

            

            <img alt="Aerial view of a table set with plates of gourmet food and glasses of red wine" height="400" src="media/mallBandung7.jpg" width="200"/>
        </div> 

        <div class="restaurant" style="border-bottom: 2px solid maroon; padding-bottom: 100px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img alt="Interior view of a restaurant with elegantly set tables and large windows" height="400" src="media/mallBandung8.jpg" width="200"/>
            <div class="save-button-go">
                <button type="button" onclick="location.href='https://maps.app.goo.gl/FvWTiL7D9nJ4qYxAA'">View on Map</button>
            </div>
            <div class="restaurant-details">
                    <h2>8. Kings Shopping Center</h2>
                    <p>Bandung, Indonesia</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>8.255 Visitors</span>
                        </div>
                        
                        <div class="description">
                            <i class="fas fa-info-circle"></i> This mall is one of the oldest shopping centers in Bandung that has been renovated to be more modern. Kings Shopping Center is known for its affordable prices, making it suitable for families and travelers looking for quality goods on a friendly budget. 
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