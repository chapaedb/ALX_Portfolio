<?php
include("database.php");
include("login.html");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row['password'];

        if (password_verify($password, $storedHashedPassword)) {
            echo "Login successful";
            header("Location: index.php");
            exit();
        }
    }

    echo "Invalid username or password";

    mysqli_stmt_close($stmt);
}

mysqli_close($connection);
?>