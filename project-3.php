<?php
// Hardcoded credentials
$username = "admin";
$password = "1234";

// Input values (simulate user input)
$inputUsername = "admin";
$inputPassword = "1234";

// Authentication check
if ($inputUsername == $username && $inputPassword == $password) {
    echo "Login Successful";
} else {
    echo "Invalid username or password";
}
?>