<?php
// Database configuration
$host = 'localhost';
$dbname = 'portfolio_db';
$username = '11';     // <-- Your MySQL username
$password = '11';     // <-- Your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>