<?php

if (!isset($_SESSION['id_user'])) { // <-- perbaiki di sini
    header("Location: Signin.php"); // Redirect to login page if not logged in
    exit();
}

// Include database connection file
include 'dinamemberdb.php';

// Retrieve user ID from session
$user_id = $_SESSION['id_user']; // <-- perbaiki di sini

// Fetch user details from the database
$sql = "SELECT * FROM users WHERE id_user = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User data is available
    $user = $result->fetch_assoc();
    $username = $user['username'];
    $email = $user['email'];
    $fullname = $user['fullname'];
    $gender = $user['gender'];
    $profile_picture = $user['foto_profil'];
} else {
    echo "User not found!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="logotype/png" href="Assets/logoerase.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
        rel="stylesheet" />
    <!--link font google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
    <!--link swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!--link rating-->
    <title>DINA</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav__logo">
                <img src="assets/logoerase.png" alt="Logo">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list" id="nav-menu">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>

                    <li class="nav__item">
                        <a href="#explore" class="nav__link">Explore</a>
                    </li>

                    <li class="nav__item">
                        <div class="navbar-profile">
                            <img src="<?= $profile_picture ?>" alt="profile-image" id="menu-image" class="profile-image">
                        </div>
                    </li>
                </ul>



                <div class="menu">
                    <ul>
                        <li>
                            <!-- Check if user is logged in and is a member -->
                            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'member'): ?>
                                <a href="edit_profile.php" class="nav__link">
                                    <i class="material-icons-outlined">account_circle</i>
                                    My Profile
                                </a>
                            <?php else: ?>
                                <!-- Optionally, you can hide or show something else if the user is not a member -->
                                <a href="signin.php" class="nav__link">
                                    <i class="material-icons-outlined">account_circle</i>
                                    Sign In
                                </a>
                            <?php endif; ?>
                        </li>

                    </ul>
                    <hr />

                    <hr/>
                    <ul>
                        <a href="Index.php">
                            <li class="all-account">
                                <i class="material-icons-outlined">logout</i>
                                Log out
                            </li>
                    </ul>
                    </a>
                </div>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <script src="scrollreveal.min.js"></script>
    <script src="main.js"></script>
    <!--link swiperJS script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="carousel.js"></script>
</body>