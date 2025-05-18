<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
  <title>Reservation</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="reservasiresto.css">
 </head>
 <?php
include 'views/header2.php';
?>

    <div class="container-resto">
        <div class="reservation" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
            <div style="border-left: 2px solid maroon; padding-left: 10px;">
                <h1>Reservation Restaurant</h1>
                <p>Booking Now</p>
            </div>
                <input placeholder="Your Name" type="text"/>
                <input placeholder="Phone Number" type="tel"/>
            <div style="display: flex; gap: 10px;">
                <select>
                    <option>1 Person</option>
                    <option>2 People</option>
                    <option>3 People</option>
                    <option>4 People</option>
                    <option>5 People</option>
                    <option>6 People</option>
                    <option>7 People</option>
                    <option>8 People</option>
                    <option>9 People</option>
                    <option>10 People</option>
                </select>
                <input placeholder="HH/BB/TTTT" type="date"/>
            </div>
            <div style="display: flex; gap: 10px;">
                <select>
                    <option>Table 1</option>
                    <option>Table 2</option>
                    <option>Table 3</option>
                    <option>Table 4</option>
                    <option>Table 5</option>
                    <option>Table 6</option>
                    <option>Table 7</option>
                    <option>Table 8</option>
                    <option>Table 9</option>
                    <option>Table 10</option>
                </select>
                <select>
                    <option>08:00</option>
                    <option>09:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>12:00</option>
                    <option>13:00</option>
                    <option>14:00</option>
                    <option>15:00</option>
                    <option>16:00</option>
                    <option>17:00</option>
                    <option>18:00</option>
                    <option>19:00</option>
                    <option>20:00</option>
                    <option>21:00</option>
                    <option>22:00</option>

                </select>
             </div>
            <textarea placeholder="Message" style="max-width: 650px;"></textarea>
                <div class="button-resto">
                    <a href="">
                        <button style="background-color: maroon;" >BOOK A TABLE</button>
                    </a>
                    <a href="restaurant.php">
                        <button>Back to Menu</button>
                    </a>
                </div>
         </div>

        <div class="contact-resto" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
             <h2>Koral Restaurant</h2>
            <img alt="Restaurant exterior with tables and chairs" height="200" src="media/restoo5.jpg" width="300"/>
            <div >
                <p style="padding-top: 20px; color: white;"><strong>Location</strong></p>
                <p style="font-size: 14px;">Jl. Raya Nusa Dua Selatan, Sawangan, Nusa Dua, Kabupaten Badung, Bali</p>
                <p style="padding-top: 10px; color: white;"><strong> Opening Hours</strong></p>
                <p style="font-size: 14px;">Monday to Sunday</p>
                <p style="font-size: 14px;">08.00 - 22.00</p>
               
            </div>
        </div>
    </div>

    <div style="border-top: 2px solid maroon; padding-top: 115px; margin-left: 300px; margin-right: 300px;" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"></div>

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
                Fine dining khas Perancis dengan steak wagyu sempurna. Atmosfer elegan dan layanan premium, cocok untuk acara spesial.
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
                Menu degustasi Indonesia modern yang artistik. Suasana romantis dekat dengan pantai, ideal untuk momen istimewa.   
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
                Rooftop dengan pemandangan kota yang memukau. Menu fusion lezat, suasana mewah, dan layanan kelas atas.
            </div>

            <div class="review-footer">
                <img alt="Profile picture of @R450GCarnauld" height="40" src="about us/images/dwiki.jpg" width="40"/>
                    <div class="username">afdikk@gmail.com</div>
                    <div class="date">3 bulan lalu</div>
            </div>
        </div>
    </div>

    <?php
    include 'views/footer4.php';
    ?>
