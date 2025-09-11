<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Get in touch with Borislav Korablev, a Product Media Designer specializing in beer branding and packaging. Fill out the contact form or reach out via email or phone.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   
  <title>Contact Me | Product Media Designer</title>
  <style>

 /* Main Navigation Container */
 /* Main Navigation Container */
nav {
  background-color: #000; /* Dark slate blue background */
  color: #fff; /* White text */
  margin: 20px auto;
  padding: 0;
  max-width: 1200px;
  width: 100%;


}

/* Navigation List Styling */
header nav ul {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  gap: 30px;
  padding: 0;
  margin: 0;
  align-items: center;
}

/* Link Styling */
header nav ul li a {
  display: inline-block;
  color: #ecf0f1c1; /* Light gray text (matches dark background) */
  text-decoration: none;
  font-weight: 600;
  font-size: 1rem;
  padding: 16px 20px;
  transition: all 0.3s ease;
  position: relative;
  border-bottom: 2px solid transparent; /* Transparent underline by default */
}

/* Animated Underline */
header nav ul li a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #fff; /* White underline */
  transition: width 0.3s ease;
}

/* Hover Effect */
header nav ul li a:hover {
  color: #fff; /* Bright white on hover */
}

header nav ul li a:hover::after {
  width: 100%; /* Full underline on hover */
}

/* Active State (Current Page) */
header nav ul li a.active {
  color: #fff; /* White text for active link */
  border-bottom: 2px solid #fff; /* Persistent underline */
}

header nav ul li a.active::after {
  width: 100%; /* Full underline for active state */
}


/* Hamburger Menu ===================================================================*/
.hamburger-menu {
  display: none; /* Hidden by default */
  flex-direction: column;
  gap: 5px;
  cursor: pointer;
   z-index: 1001;    
   position: absolute;
    top: 15px;
    right: 15px;


}

.hamburger-menu span {
  width: 25px;
  height: 3px;
  background-color: #fff;
  transition: all 0.3s ease;

   
}

/* Navigation Links */
.nav-links {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  gap: 30px;
  align-items: center;
  padding-top: 30px;
}

.nav-links li a {
  color:  #2c3e50;
  text-decoration: none;
  font-weight: 600;
  font-size: 1rem;
  padding: 16px 20px;
  transition: color 0.3s ease;
}

.nav-links li a:hover {
  color: #2c3e50;
}

/* Responsive Design */
@media (max-width: 768px) {
  .hamburger-menu {
    display: flex; /* Show hamburger menu */
  }

  .nav-links {
    display: none; /* Hide regular nav links */
    flex-direction: column;
    background-color: #f4f4f4;
     z-index: 1000;
    position: absolute;
    top: 60px;
    right: 0;
    width: 200px;
    padding: 100px 50px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
     /* Start hidden (off-screen to the left) */
    transform: translateX(-100%);
    opacity: 0;
    pointer-events: none;
    transition: transform 0.3s ease, opacity 0.3s ease;
  }

  .nav-links.active {
    display: flex; /* Show nav links when active */
     /* Slide in from left */
    transform: translateX(0);
    opacity: 1;
    pointer-events: auto;
  }

  .nav-links li {
    text-align: center;
    margin: 10px 0;
  }

  .nav-links li a {
    padding: 10px;
  }
}

    /* Basic Styling */
    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      color: #333;
      background-color: #f9f9f9;
    }

    header {
      background: #000;
      color: #fff;
      text-align: center;
      padding: 40px 20px;
    }

    header h1 {
      font-size: 2rem;
      margin: 0;
    }

    header p {
      font-size: 1rem;
      margin-top: 10px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    section {
      margin-bottom: 40px;
    }

    h2 {
      font-size: 1 rem;
      color: #111;
      margin-bottom: 20px;
    }

    p {
      font-size: 1rem;
      margin-bottom: 15px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
    }

    input, textarea {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
    }

    button {
      background: #000;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #34495e;
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .contact-info a {
      color: #3498db;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    footer {
      background: #000;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    footer p {
      margin: 0;
    }

    /* Alert Messages */
    .alert {
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .alert-success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
    .alert-error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <header>
    <nav>
  <div class="hamburger-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
   <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="aboutus.php">About Me</a></li>
            <?php if ($is_admin): ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="#" class="login-btn">Login</a></li>
            <?php endif; ?>
        </ul>
</nav> 

    <h1>Contact Me</h1>
    <p>Let’s collaborate on your next beer branding or design project!</p>
  </header>

  <!-- Main Content -->
  <div class="container">

    <!-- Display Success or Error Message -->
    <?php if (isset($_GET['status'])): ?>
      <?php if ($_GET['status'] === 'success'): ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Your message has been sent. I will get back to you soon.
        </div>
      <?php elseif ($_GET['status'] === 'error'): ?>
        <div class="alert alert-error">
          <strong>Error!</strong> There was a problem sending your message. Please try again.
        </div>
      <?php endif; ?>
    <?php endif; ?>

    <!-- Contact Form Section -->
    <section id="contact-form">
      <h2>Send Me a Message</h2>
      <form action="send_contact.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </section>

    <!-- Contact Information Section -->
    <section id="contact-info">
      <h2>Contact Information</h2>
      <div class="contact-info">
        <p><strong>Email:</strong> <a href="mailto:mrkorablev91@gmail.com">mrkorablev91@gmail.com</a></p>
        <p><strong>Phone:</strong> <a href="tel:+353 87 337 2142">+353 87 337 2142</a></p>
        <p><strong>Location:</strong> Dublin, Ireland</p>
        <p><strong>Social Media:</strong></p>
        <ul style="list-style: none; padding: 0;">
          <li><a href="https://www.linkedin.com/in/borislavkorablev/" target="_blank">LinkedIn</a></li>
          <li><a href="https://www.instagram.com/borislavkorablev/" target="_blank">Instagram</a></li>
          <li><a href="https://www.behance.net/borislavkorablev" target="_blank">Behance</a></li>
        </ul>
      </div>
    </section>

  </div>
<
  <!-- Footer -->
  <footer>
    <p>&copy; 2023 Borislav Korablev. All Rights Reserved.</p>
  </footer>


<script src="layout.js"></script>

</body>
</html>