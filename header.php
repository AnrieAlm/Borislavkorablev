<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borislav's Portfolio</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header> 
    <nav>
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About Me</a></li>
        </ul>
    </nav>    
</header>

<main>