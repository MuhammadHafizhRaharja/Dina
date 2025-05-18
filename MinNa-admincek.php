<?php
// The password you want to hash
$password = 'mina1';

// Hash the password using bcrypt (the default algorithm)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Output the hashed password
echo $hashed_password;
?>
