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
                    <li>
                        <a href="management_ulasan_hotel.php">
                            Ulasan & Rating Hotel
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

                    <li>
                        <a href="admin_hotel.php">
                            Pesanan Hotel
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div> 

    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                dashboard
            </div>
        </div>
        
        <div style="display: flex; justify-content: center; align-items: center; height: 60vh;">
            <div style="text-align: center;">
                <h1>Selamat Datang di Dashboard Admin</h1>
            </div>
        </div>

    <div class="overlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="./js/app.js"></script>

</body>

</html>