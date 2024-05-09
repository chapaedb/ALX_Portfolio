<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'db';

$connection = mysqli_connect($host, $username, $password, $database, 3307);
if (!$connection) {
    die("Couldn't connect to the database: " . mysqli_connect_error());
}

?>