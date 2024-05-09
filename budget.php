<?php
require_once 'auth.php';

// Check if the user is logged in
if (!isUserLoggedIn()) {
    header("Location: loginb.php");
    exit();
}
else{
    include("budget.html");
}
?>
<?php
include("database.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected options
    $venue = $_POST["avenue"];
    $catering = $_POST["catering"];
    $photography = $_POST["photography"];

    // Retrieve the prices for the selected options
    $venueQuery = "SELECT price FROM venues WHERE name = '$venue'";
    $venueResult = $connection->query($venueQuery);
    $venuePrice = ($venueResult->num_rows > 0) ? $venueResult->fetch_assoc()["price"] : 0;

    $cateringQuery = "SELECT price FROM catering_services WHERE name = '$catering'";
    $cateringResult = $connection->query($cateringQuery);
    $cateringPrice = ($cateringResult->num_rows > 0) ? $cateringResult->fetch_assoc()["price"] : 0;

    $photographyQuery = "SELECT price FROM photography_services WHERE name = '$photography'";
    $photographyResult = $connection->query($photographyQuery);
    $photographyPrice = ($photographyResult->num_rows > 0) ? $photographyResult->fetch_assoc()["price"] : 0;

    // Calculate the total budget
    $totalBudget = $venuePrice + $cateringPrice + $photographyPrice;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/budget.css">
    <title>Budget Calculator - Result</title>
</head>
<body>
    <h2>Your Wedding Budget Calculation Result</h2>
    <div class="result">
        <h3>Selected Options and Prices:</h3>
        <ul>
            <li><strong>Avenue:</strong> <?php echo $venue; ?></li>
            <li><strong>Catering Service:</strong> <?php echo $catering; ?></li>
            <li><strong>Photography Service:</strong> <?php echo $photography; ?></li>
        </ul>
        <h3>Total Budget:</h3>
        <p>Your total budget is ETB: <?php echo $totalBudget; ?></p>
    </div>
</body>
</html>

<?php
}

$connection->close();
?>