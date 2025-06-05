<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            // Redirect berdasarkan role
            if ($row['role'] === 'admin') {
                header("Location: dashboard.php");
            } else {
                header("Location: userhomepage.php");
            }
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/Signin.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="l-form">
        <div class="form">
            <img src="assets/img/tourism.webp" alt="" class="form__img">

            <!-- Display Error Popup -->
            <?php if (!empty($error_message)): ?>
                <div class="error-popup" id="error-popup">
                    <?= htmlspecialchars($error_message); ?>
                </div>
            <?php endif; ?>

            <form action="Signin.php" method="POST" class="form__content">
                <h1 class="form__title">Login</h1>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="username" class="form__label">Username</label>
                        <input type="text" name="username" id="username" class="form__input" required>
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__icon">
                        <i class='bx bx-lock'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="password" class="form__label">Password</label>
                        <input type="password" name="password" id="password" class="form__input" required>
                    </div>
                </div>

                <button type="submit" class="form__button">Login</button>

                <a href="signup.php" class="form__register">Don't have an account?</a>

                <a href="index.php" class="form__register">Back to home</a>
            </form>
        </div>
    </div> 

    <script src="assets/js/Signin.js"></script>

    <!-- JavaScript to Show Popup -->
    <script>
        // Show error or success message popup
        <?php if (!empty($error_message)): ?>
            document.getElementById('error-popup').style.display = 'block';
            setTimeout(function() {
                document.getElementById('error-popup').style.display = 'none';
            }, 5000);
        <?php endif; ?>
    </script>

    <!-- Admin Dashboard Link (Visible only to admin) -->
    <?php if ($_SESSION['role'] === 'admin'): ?>
        <a href="dashboard.php">Admin Dashboard</a>
    <?php endif; ?>
</body>
</html>