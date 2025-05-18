<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: Signin.php"); // Redirect if the user is not logged in
    exit();
}

// Retrieve user details from the database
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id_user = $user_id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Handle profile picture upload
    $profile_picture = $user['foto_profil']; // Keep current picture if no new file is uploaded
    if (isset($_FILES['foto_profil']) && $_FILES['foto_profil']['error'] == 0) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES["foto_profil"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an image
        $check = getimagesize($_FILES["foto_profil"]["tmp_name"]);
        if ($check !== false) {
            // Move the uploaded file
            if (move_uploaded_file($_FILES["foto_profil"]["tmp_name"], $target_file)) {
                $profile_picture = $target_file;
            } else {
                echo "Error uploading the file.";
                exit();
            }
        } else {
            echo "File is not an image.";
            exit();
        }
    }

    // Password hashing (only update if password is provided)
    $password = $user['password'];  // Default to the current password
    if (!empty($_POST['password'])) {
        // Hash the new password
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    // Update the user profile in the database
    $sql = "UPDATE users SET username = '$username', fullname = '$fullname', email = '$email', gender = '$gender', foto_profil = '$profile_picture', password = '$password' WHERE id_user = $user_id";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Profile updated successfully!";
        header("Location: edit_profile.php");
        exit();
    } else {
        echo "Error updating profile: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit</title>
    <link rel="stylesheet" href="edit_profile.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="header">
        <!-- Success Message -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success">
                <?= $_SESSION['success_message']; ?>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>

        <!-- Profile Edit Form in a Card Layout -->
        <div class="card">
        <h1 class="tekspropil">Profile</h1>
            <form action="edit_profile.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" value="<?= $user['username'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" value="<?= $user['fullname'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender" required>
                        <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                        <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="foto_profil">Profile Picture:</label>
                    <input type="file" name="foto_profil" id="foto_profil">
                    <p>Current Picture:</p>
                    <?php if ($user['foto_profil']): ?>
                        <img src="<?= $user['foto_profil'] ?>" alt="Profile Picture" width="100" height="100">
                    <?php else: ?>
                        <p>No image uploaded</p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Change Password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Save Changes</button>
                    <a href="userhomepage.php" class="btn btn-secondary">Back to Profile</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>