<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Redirect if the user is not an admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Handle Create (Add new user)
if (isset($_POST['create_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $role = 'member'; // Default role is member

    // Handle file upload for profile picture
    $profile_picture = NULL;
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

        // Move the uploaded file
        if (move_uploaded_file($_FILES["foto_profil"]["tmp_name"], $target_file)) {
            $profile_picture = $target_file;
        }
    }

    // Validate password match
    if ($password !== $confirm_password) {
        echo "Password and confirmation password do not match.";
        exit();
    }

    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $gender = mysqli_real_escape_string($conn, $gender);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into the database
    $sql = "INSERT INTO users (username, email, password, fullname, gender, foto_profil, role) 
            VALUES ('$username', '$email', '$hashed_password', '$fullname', '$gender', '$profile_picture', '$role')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "User created successfully.";
        header("Location: member_edit.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
    <link rel="stylesheet" href="create_user.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Create New User</h1>

        <!-- Form for creating new user inside a card -->
        <div class="card">
            <form action="create_user.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Username" required><br>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Email" required><br>
                </div>

                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" placeholder="Full Name" required><br>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select><br>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required><br>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                </div>

                <div class="form-group">
                    <label for="foto_profil">Profile Picture:</label>
                    <input type="file" name="foto_profil"><br>
                </div>

                <div class="form-group">
                    <button type="submit" name="create_user" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>

        <!-- Button to go back to the user list -->
        <a href="member_edit.php" class="btn btn-secondary">Back to Manage Users</a>
    </div>
</div>

</body>
</html>