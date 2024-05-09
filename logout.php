<?php
session_start();
require_once 'auth.php';


logoutUser();

header("Location: index.php");
exit();
?>