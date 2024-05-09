<?php

include("database.php");

?> 

<?php

include("register.html");

?> 

<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        echo "Please enter a username";
    } elseif (empty($password)) {
        echo "Please enter a password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$hash')";
        if (mysqli_query($connection, $sql)) {
            echo "Registered successfully";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}

mysqli_close($connection);
?>