<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Send an email (configure properly for your hosting)
    $to = "your.email@example.com";  
    $subject = "New Contact Form Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you, $name! Your message has been sent.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
}
?>
