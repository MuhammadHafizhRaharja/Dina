<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Redirect if the user is not an admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Fetch the user's data to edit
if (isset($_GET['edit_user'])) {
    $id_user = $_GET['edit_user'];
    $sql = "SELECT * FROM users WHERE id_user = $id_user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $edit_username = $row['username'];
        $edit_email = $row['email'];
        $edit_fullname = $row['fullname'];
        $edit_gender = $row['gender'];
        $edit_profile_picture = $row['foto_profil'];
    }
}

// Handle Update user
if (isset($_POST['update_user'])) {
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $profile_picture = $_POST['profile_picture']; // Keep the current image if not updated

    // Check if a new image is uploaded
    if (isset($_FILES['foto_profil']) && $_FILES['foto_profil']['error'] == 0) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES["foto_profil"]["name"]);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($_FILES["foto_profil"]["tmp_name"], $target_file)) {
            $profile_picture = $target_file;
        }
    }

    // Check if password is provided
    $password = $_POST['password'];
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);  // Hash the password if it's updated
        $sql = "UPDATE users SET username = '$username', email = '$email', fullname = '$fullname', gender = '$gender', password = '$hashed_password', foto_profil = '$profile_picture' WHERE id_user = $id_user";
    } else {
        // Don't change the password if it's not provided
        $sql = "UPDATE users SET username = '$username', email = '$email', fullname = '$fullname', gender = '$gender', foto_profil = '$profile_picture' WHERE id_user = $id_user";
    }

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "User updated successfully.";
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
    <title>Edit User</title>
    <link rel="stylesheet" href="edit_user.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Edit User</h1>

        <!-- Success Message -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert-success">
                <?= $_SESSION['success_message']; ?>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php endif; ?>

        <!-- Form to edit user inside a card -->
        <div class="card">
            <form action="edit_user.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?= $row['id_user']; ?>">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" value="<?= $edit_username; ?>" required><br>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?= $edit_email; ?>" required><br>
                </div>

                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" value="<?= $edit_fullname; ?>" required><br>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select name="gender" required>
                        <option value="Male" <?= $edit_gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?= $edit_gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                    </select><br>
                </div>

                <!-- Display current profile image -->
                <div class="form-group">
                    <label>Current Profile Picture:</label><br>
                    <?php if ($edit_profile_picture): ?>
                        <img src="<?= $edit_profile_picture; ?>" alt="Profile Image" width="100" height="100"><br>
                    <?php else: ?>
                        <p>No image available.</p>
                    <?php endif; ?>
                </div>

                <!-- File input for new image -->
                <div class="form-group">
                    <label for="foto_profil">Upload New Profile Picture:</label>
                    <input type="file" name="foto_profil"><br>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label for="password">New Password (Leave blank to keep current):</label>
                    <input type="password" name="password" placeholder="Enter new password"><br>
                </div>

                <div class="form-group">
                    <button type="submit" name="update_user">Update User</button>
                </div>
            </form>

            <!-- Button to go back to the user list -->
            <a href="member_edit.php" class="btn btn-secondary">Back to Manage Users</a>
        </div>
    </div>
</div>

</body>
</html>