<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

echo "Welcome, " . $_SESSION["username"] . "!<br>";
echo "Your account balance is: PHP 100,000"; // Replace with real data from database
?>

<br><a href="logout.php">Logout</a>
