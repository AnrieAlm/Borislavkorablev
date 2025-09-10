<?php
$host = "localhost";
$user = "11";   // change to your DB username
$pass = "11";       // change to your DB password
$db   = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
