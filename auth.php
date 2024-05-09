<?php
session_start();

// Function to check if the user is logged in
function isUserLoggedIn() {
    return isset($_SESSION['username']);
}

// Function to log in the user
function loginUser($username) {
    $_SESSION['username'] = $username;
}

// Function to log out the user
function logoutUser() {
    session_unset();
    session_destroy();
}
?>