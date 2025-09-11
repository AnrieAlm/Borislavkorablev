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
<?php
// Start session to store messages if needed (optional, for future use)
session_start();

// Include database connection
require_once 'db.php';

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Basic validation
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    // Redirect back with error
    header('Location: contact.php?status=error');
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.php?status=error');
    exit;
}

// Prepare email
$to = 'mrkorablev91@gmail.com';
$email_subject = "New Contact Form Submission: " . $subject;
$email_body = "You have received a new message from your website contact form.\n\n" .
              "Here are the details:\n\n" .
              "Name: $name\n" .
              "Email: $email\n" .
              "Subject: $subject\n" .
              "Message:\n$message";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
if (mail($to, $email_subject, $email_body, $headers)) {
    // Email sent successfully, now save to database
    $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
    
    try {
        $stmt->execute([$name, $email, $subject, $message]);
        // Redirect with success message
        header('Location: contact.php?status=success');
        exit;
    } catch (PDOException $e) {
        // Email sent but DB failed. You might want to log this error.
        // For now, we'll still show success since the primary goal (email) was achieved.
        header('Location: contact.php?status=success');
        exit;
    }

} else {
    // Email sending failed
    header('Location: contact.php?status=error');
    exit;
}
?>