<?php
session_start();
include 'dinamemberdb.php'; // Database connection

// Redirect if the user is not an admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../Signin.php");
    exit();
}

// Fetch users from the database for display
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Handle Delete user
if (isset($_GET['delete_user'])) {
    // Sanitize the input
    $id_user = intval($_GET['delete_user']); // Ensure it's a number

    // Delete user using a prepared statement to avoid SQL injection
    $sql = "DELETE FROM users WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_user); // "i" for integer parameter
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "User deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error: " . $conn->error;
    }
    $stmt->close();
    header("Location: member_edit.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Manage Users</title>
    <link rel="stylesheet" href="member_edit.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card">
        <div class="header">
            <h1>Manage Users</h1>

            <!-- Success Message -->
            <?php if (isset($_SESSION['success_message'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success_message']; ?>
                    <?php unset($_SESSION['success_message']); ?>
                </div>
            <?php endif; ?>

            <!-- Error Message -->
            <?php if (isset($_SESSION['error_message'])): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error_message']; ?>
                    <?php unset($_SESSION['error_message']); ?>
                </div>
            <?php endif; ?>

            <!-- Users Table -->
            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Profile Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id_user']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['fullname']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['gender']; ?></td>
                                <td>
                                    <?php if ($row['foto_profil']): ?>
                                        <img src="<?= $row['foto_profil']; ?>" alt="Profile Image" width="50">
                                    <?php else: ?>
                                        No image
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="edit_user.php?edit_user=<?= $row['id_user']; ?>" class="btn btn-warning">Edit</a> |
                                    <a href="member_edit.php?delete_user=<?= $row['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Button to go to Create User Form -->
            <a href="create_user.php" class="btn btn-primary">Create New User</a>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="back-button-container">
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>