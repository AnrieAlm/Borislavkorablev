<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Learn more about Borislav Korablev, Product Media Designer specializing in beer branding and packaging with 10+ years of experience.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>About Me | Product Media Designer</title>
  <!-- Reference the shared CSS file -->
  <style>
   /* Main Navigation Container */
nav {
  background-color: #111; /* Dark slate blue background */
  color: #fff; /* White text */
  margin: 20px auto;
  padding: 0;
  max-width: 1200px;
  width: 100%;


}


.nav-links {
 padding-top: 10px;
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
  color: #fff; /* Light gray text (matches dark background) */
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

/* Hamburger Menu */
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

header nav ul li a {
  display: inline-block;
  color: #4a5f74ff; /* Light gray text (matches dark background) */
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
  background-color: #111; /* White underline */
  transition: width 0.3s ease;
}

/* Hover Effect */
header nav ul li a:hover {
  color: #fff; /* Bright white on hover */
}

header nav ul li a:hover::after {
  width: 100%; /* Full underline on hover */
  color: #fff;
}

/* Active State (Current Page) */
header nav ul li a.active {
  color: #111; /* White text for active link */
  border-bottom: 2px solid #111; /* Persistent underline */}


}

    body {
      font-family: 'Lexend','Arial', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      color: #111;
      background-color: #fff;
    }

    header {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 60px 20px;
    }

    header h1 {
      font-size: 2rem;
      margin: 0;
    }

    header p {
      font-size: 1 rem;
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
      font-size: 2rem;
      color: #111;
      margin-bottom: 20px;
    }

    p {
      font-size: 1rem;
      margin-bottom: 15px;
    }

    .skills-list, .experience-list {
      list-style: none;
      padding: 0;
    }

    .skills-list li, .experience-list li {
      background: #f4f4f4;
      margin-bottom: 10px;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;}
      /* Hamburger Menu ================================================================*/
    
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
  background-color: #111;
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

    

    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .portfolio-item {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .portfolio-item:hover {
      transform: scale(1.05);
    }

    .portfolio-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    footer a {
      color: #3498db;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
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
      

  <div class="page-header">
    <h1>Hi, I'm Borislav</h1>
    <p>Product Media Designer | 10+ Years Crafting Visual Stories for Beer Brands</p>
  </div>
  </header>

  <div class="container">

    <!-- About Section -->
    <section id="about">
      <h2>About Me</h2>
      <p>
        With over a decade of experience as a Product Media Designer, I specialize in creating compelling visual narratives for beer brands. 
        My work spans branding, packaging, marketing campaigns, and digital media, helping breweries stand out in a competitive market.
      </p>
      <p>
        From designing eye-catching labels to developing cohesive brand identities, I bring passion and precision to every project. 
        My goal is to elevate your product’s story through thoughtful and impactful design.
      </p>
    </section>

    <!-- Skills Section -->
    <section id="skills">
      <h2>Skills</h2>
      <ul class="skills-list">
        <li>Beer Branding & Packaging Design</li>
        <li>Digital Marketing Campaigns</li>
        <li>Print & Digital Media Design</li>
        <li>Adobe Creative Suite (Photoshop, Illustrator, InDesign)</li>
        <li>Typography & Layout Design</li>
        <li>Prototyping & Mockups</li>
      </ul>
    </section>

    <!-- Experience Section -->
    <section id="experience">
      <h2>Experience</h2>
      <ul class="experience-list">
        <li><strong>Baltika's</strong> - Senior Product Media Designer (20XX - Present)</li>
        <li><strong>[Beer Company]</strong> - Lead Designer (20XX - 20XX)</li>
        <li><strong>Freelance Projects</strong> - Product Media Designer (20XX - Present)</li>
      </ul>
    </section>

    <!-- Portfolio Highlights -->
    <section id="portfolio">
      <h2>Portfolio Highlights</h2>
      <div class="portfolio-grid">
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/400x300" alt="Beer Label Design">
        </div>
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/400x300" alt="Branding Mockup">
        </div>
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/400x300" alt="Packaging Design">
        </div>
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/400x300" alt="Digital Ad Campaign">
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section id="cta">
      <p>Interested in collaborating? Let’s create something unforgettable for your beer brand!</p>
      <p>
        Email me at <a href="mailto:mrkorablev91@gmail.com">mrkorablev91@gmail.com</a> or connect on 
        <a href="https://www.linkedin.com/in/borislavkorablev/" target="_blank">LinkedIn</a>.
      </p>
    </section>

  </div>

  <?php include 'footer.php'; ?>
<script src="layout.js"></script>
</body>
</html>