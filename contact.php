<?php include 'header.php'; ?>

<div class="container">
  <h1>Contact Me</h1>
  <p>Have a project in mind? Let’s talk!</p>

  <form action="send_message.php" method="POST" class="contact-form">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
  </form>
</div>

<?php include 'footer.php'; ?>
