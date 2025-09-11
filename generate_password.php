<?php
$password = 'your_strong_password'; // 👈 REPLACE THIS with your actual desired password
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Plain Password: " . $password . "\n";
echo "Hashed Password: " . $hash . "\n";
echo "\nCopy the hashed password above and paste it into your SQL INSERT statement.\n";
?>