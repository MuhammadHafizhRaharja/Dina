<?php
include 'dinamemberdb.php'; // Database connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];

    // Set default role as 'member'
    $role = 'member';

    // Handle the file upload for the profile picture
    if (isset($_FILES['foto_profil']) && $_FILES['foto_profil']['error'] == 0) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES["foto_profil"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an image
        $check = getimagesize($_FILES["foto_profil"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            exit();
        }

        // Check if the file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            exit();
        }

        // Check file size (limit: 5MB)
        if ($_FILES["foto_profil"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            exit();
        }

        // Allow only certain file formats (e.g., JPG, PNG, JPEG)
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
            exit();
        }

        // Move the uploaded file to the 'uploads' folder
        if (!move_uploaded_file($_FILES["foto_profil"]["tmp_name"], $target_file)) {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }

        // File upload successful, store the file path in the database
        $profile_picture = $target_file;
    } else {
        $profile_picture = NULL; // No file uploaded
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Password and confirmation password do not match.";
        exit();
    }

    // Prevent SQL Injection by sanitizing input
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $gender = mysqli_real_escape_string($conn, $gender);

    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Username or email is already taken.";
    } else {
        // Hash the password before saving it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Save the user data into the database (role is set to member by default)
        $sql = "INSERT INTO users (username, email, password, fullname, gender, foto_profil, role) 
                VALUES ('$username', '$email', '$hashed_password', '$fullname', '$gender', '$profile_picture', '$role')";

        if ($conn->query($sql) === TRUE) {
            echo "Account successfully created. Please login.";
            header("Location: signin.php"); // Redirect to login page
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Signup.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign up</title>
</head>

<body class="custom-body">
    <div class="l-form">
        <div class="form">
            <form action="signup.php" method="POST" enctype="multipart/form-data" class="form__content">
                <h1 class="form__title">SIGN UP</h1>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="username" class="form__label">Username</label>
                        <input type="text" name="username" id="username" class="form__input" required>
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="email" class="form__label">Insert your email</label>
                        <input type="email" name="email" id="email" class="form__input" required>
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="fullname" class="form__label">Full Name</label>
                        <input type="text" name="fullname" id="fullname" class="form__input" required>
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-male'></i> <!-- Icon for Gender -->
                    </div>
                    <div class="form__div-input">
                        <label for="gender" class="form__label">Gender</label>
                        <select name="gender" id="gender" class="form__input" required>
                            <option value="#"></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-lock'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="password" class="form__label">Set a Password</label>
                        <input type="password" name="password" id="password" class="form__input" required>
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-lock'></i>
                    </div>
                    <div class="form__div-input">
                        <label for="confirm_password" class="form__label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form__input" required>
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-image'></i> <!-- Icon for file input -->
                    </div>
                    <div class="form__div-input">
                        <label for="foto_profil" class="form__label">Profile Picture</label>
                        <input type="file" name="foto_profil" id="foto_profil" class="form__input file-input">
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        I agree to the terms and conditions
                    </label>
                </div>

                <button type="submit" class="form__button">Sign up</button>

                <div class="form__social">
                    <a href="signin.php" class="form__register">Already have an account?</a>
                    <span class="form__social-text">Or sign up with</span>
                    <a href="#" class="form__social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="form__social-icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="form__social-icon"><i class='bx bxl-instagram'></i></a>
                </div>
            </form>

            <img src="assets/HappyKids.jpg" alt="kidimg" class="form__img">
        </div>
    </div>

    <script src="assets/js/Signin.js"></script>
</body>

</html>