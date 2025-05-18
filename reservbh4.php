
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <title>DINA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="reservation.css">
</head>

<?php
include 'views/header2.php';
?>


    <!-- reservation -->
    <section class="checkout py-5">
        <div class="container-form">
            <div class="page-title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
                <h1>Reservation</h1>
            </div>

            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="col-md-6 p-4">
                    <div class="card border-0">
                        <img src="media/hotel4.jpeg" class="card-img-top" alt="Room Image">
                        <div class="card-body px-0">
                            <h2 class="card-title ls-3">De Braga by Artotel</h2>
                            <p class="card-text mb-0">Max Guests: 2</p>
                            <p class="card-text mb-0">Tipe : Luxury Room</p>
                            <p class="card-text mb-0">Price: Rp850.000/night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-4">
                    <form action="hotelBandung.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="checkin" class="form-label">Check-in Date</label>
                                    <input type="date" class="form-control" id="checkin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="checkout" class="form-label">Check-out Date</label>
                                    <input type="date" class="form-control" id="checkout">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="expiration" class="form-label">Night</label>
                                    <input type="number" class="form-control" id="expiration">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cardnumber" class="form-label">Credit Card Number</label>
                                    <input type="text" class="form-control" id="cardnumber">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="hotelBandung.php">
                                <button type="submit" class="btn btn-back mt-4" style="margin-right: 15px;">Back to menu</button>
                            </a>
                                <button type="submit" class="btn btn-orange mt-4">Complete Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- reservation -->

    <!--Review-->
    <div class="reviews-container" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
        <div class="review-card" >
            <div class="review-header">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="review-content">
                Hotel ini sangat memuaskan. Kamar bersih, pelayanan ramah, fasilitas lengkap, dan sarapan lezat. Lokasi strategis memudahkan akses ke berbagai tempat wisata.
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @R450GCarnauld" height="40" src="about us/images/Foto apis.jpg" width="40"/>
                    <div class="username">apis@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
             </div>

            <div class="review-content">
                Lokasi hotel sangat strategis, dekat tempat wisata. Pelayanan staf sangat profesional, kamar selalu bersih dan nyaman, serta suasana hotel tenang. Ingin kembali lagi
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @846rapha_lm" height="40" src="about us/images/darren2.jpg" width="40"/>
                    <div class="username">daren@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>

        <div class="review-card">
            <div class="review-header">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="review-content">
                Pengalaman menginap yang menyenangkan. Kamar nyaman dengan pemandangan indah. Wi-Fi stabil, kolam renang bersih. Sangat direkomendasikan!
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @R450GCarnauld" height="40" src="about us/images/dwiki.jpg" width="40"/>
                    <div class="username">afdikk@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>
    </div>
    
    <?php
     include 'views/footer3.php';
    ?>
