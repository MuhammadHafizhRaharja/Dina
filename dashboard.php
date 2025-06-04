<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}
echo "Welcome to the Admin Dashboard!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        DINA Admin
    </title>
    <link rel="shortcut icon" href="/images/logoerase.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="./images/logoerase.png" alt="DINA logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="./images/user-image.jpg" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    MinNa
                </div>
            </div>
            <button class="btn btn-outline">
                <a href="Signin.php">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
                </a>
            </button>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="dashboard.php" class="active">
                    <i class='bx bx-home'></i>
                    <span>dashboard</span>
                </a>
            </li>
            <!-- <li>
                <a href="sales.php">
                    <i class='bx bx-shopping-bag'></i>
                    <span>sales</span>
                </a>
            </li>
            <li>
                <a href="analytics.php">
                    <i class='bx bx-chart'></i>
                    <span>analytic</span>
                </a>
            </li> -->
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-user-circle'></i>
                    <span>account</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="member_edit.php">
                            edit profile
                        </a>
                    </li>
                    <li>
                        <a href="Management_ulasan_dan_rating.php">
                            Ulasan & Rating Restoran
                        </a>
                    </li>
                    <li>
                        <a href="management_ulasan_wisata.php">
                            Ulasan & Rating Wisata
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>Aksi</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="admin_reservation.php">
                            Reservation
                        </a>
                    </li>
                    
                    <li>
                        <a href="admin_pesanan.php">
                            Pesanan Tiket
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>e-commerce</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            list city
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            add city
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            orders
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-mail-send'></i>
                    <span>mail</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span>chat</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-calendar'></i>
                    <span>calendar</span>
                </a>
            </li>
        </ul>
    </div> -->

    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                dashboard
            </div>
        </div>
        <!-- <div class="main-content">
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                total order
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    6578
                                </div>
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                conversion rate
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    30.5%
                                </div>
                                <i class='bx bx-chat'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                total profit
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    $9,780
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                daily visitors
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    690
                                </div>x
                                <i class='bx bx-user'></i>
        <div class="main-content">
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                total order
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    6578
                                </div>
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                conversion rate
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    30.5%
                                </div>
                                <i class='bx bx-chat'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                total profit
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    $9,780
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                daily visitors
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    690
                                </div>
                                <i class='bx bx-user'></i>
            <div class="main-content">
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                total order
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    6578
                                </div>
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                conversion rate
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    30.5%
                                </div>
                                <i class='bx bx-chat'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                total profit
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    $9,780
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">

                        <div class="counter">
                            <div class="counter-title">
                                daily visitors
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    690
                                </div>
                                <i class='bx bx-user'></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">

                    <div class="box f-height">
                        <div class="box-header">
                            top city
                        </div>
                        <div class="box-body">
                            <ul class="city-list">
                                <li class="city-list-item">
                                    <div class="item-info">
                                        <img src="./images/bali.jpg" alt="city image">
                                        <div class="item-name">
                                            <div class="city-name">Jogja-Bali</div>
                                            <div class="text-second">Car</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="city-sales">$5,930</div>
                                    </div>
                                </li>
                                <li class="city-list-item">
                                    <div class="item-info">
                                        <img src="./images/jakarta.jpg" alt="city image">
                                        <div class="item-name">
                                            <div class="city-name">Bali-Jakarta</div>
                                            <div class="text-second">Airplane</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="city-sales">$5,930</div>
                                    </div>
                                </li>
                                <li class="city-list-item">
                                    <div class="item-info">
                                        <img src="./images/balistatue2.jpg" alt="city image">
                                        <div class="item-name">
                                            <div class="city-name">Malaysia-Medan</div>
                                            <div class="text-second">Ship</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="city-sales">$5,930</div>
                                    </div>
                                </li>
                                <li class="city-list-item">
                                    <div class="item-info">
                                        <img src="./images/bandung.png" alt="city image">
                                        <div class="item-name">
                                            <div class="city-name">Singapore-Batam</div>
                                            <div class="text-second">Ship</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="city-sales">$5,930</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-4 col-md-6 col-sm-12">

                    <div class="box f-height">
                        <div class="box-header">
                           Trending Places visited
                        </div>
                        <div class="box-body">
                            <div id="category-chart"></div>
                        </div>
                    </div>

                </div>
                <div class="col-5 col-md-12 col-sm-12">

                    <div class="box f-height">
                        <div class="box-header">
                            customers
                        </div>
                        <div class="box-body">
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        
                <div class="col-12">

                    <div class="box">
                        <div class="box-header">
                            Recent orders
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Order status</th>
                                        <th>Payment status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./images/user-image.jpg" alt="user image">
                                                <span>Muhammad Hafizh Raharja</span>
                                            </div>
                                        </td>
                                        <td>2025-05-09</td>
                                        <td>
                                            <span class="order-status order-ready">
                                                Ready
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-pending">
                                                <div class="dot"></div>
                                                <span>Pending</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./images/user-image-2.png" alt="user image">
                                                <span>John doe</span>
                                            </div>
                                        </td>
                                        <td>2025-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Shipped
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Paid</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./images/user-image-3.png" alt="user image">
                                                <span>evelyn</span>
                                            </div>
                                        </td>
                                        <td>2025-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Shipped
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Paid</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./images/user-image-2.png" alt="user image">
                                                <span>John doe</span>
                                            </div>
                                        </td>
                                        <td>2025-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Flyed
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Paid</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./images/user-image-3.png" alt="user image">
                                                <span>evelyn</span>
                                            </div>
                                        </td>
                                        <td>2025-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Flyed
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Paid</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="overlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="./js/app.js"></script>

</body>

</html>