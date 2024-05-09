<?php
ob_start();
session_start();

// Check if the user is already logged in and redirect to the budget calculator if true
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php"); // Include the database connection file
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Budget Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h2 {
            margin-top: 0;
        }

        .login-container p {
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
        }

        .login-container a {
            color: #0000ff;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Access Budget Calculator</h2>
    <p>Please log in or sign up to access the Budget Calculator feature.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="text" name="username" placeholder="Username or Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log In</button>
        <?php if (isset($error)) { ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php } ?>
    </form>
    <p>Don't have an account? <a href="register.php">Sign Up</a></p>
</div>
</body>
</html>