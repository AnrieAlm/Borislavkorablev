// =============================
// FILTERING SYSTEM
// =============================

const checkboxes = document.querySelectorAll('.navbar input[type="checkbox"]');
const items = document.querySelectorAll('.grid-item');

checkboxes.forEach(cb => {
  cb.addEventListener('change', () => {
    const activeFilters = Array.from(checkboxes)
      .filter(c => c.checked)
      .map(c => c.value);

    items.forEach(item => {
      const category = item.dataset.category;
      if (activeFilters.length === 0 || activeFilters.includes(category)) {
        item.classList.remove('hidden');
      } else {
        item.classList.add('hidden');
      }
    });
  });
});


// =============================
// KEEP NAVIGATION LINK ACTIVE BASED ON CURRENT PAGE (FIXED)
// =============================

const currentPage = window.location.pathname
  .split('/')
  .filter(Boolean)
  .pop()
  ?.split('?')[0]
  .split('#')[0]
  .replace(/\.[^/.]+$/, "") || 'index';

document.querySelectorAll("nav ul li a").forEach(link => {
  const href = link.getAttribute("href")
    ?.split('/')
    .filter(Boolean)
    .pop()
    ?.split('?')[0]
    .split('#')[0]
    .replace(/\.[^/.]+$/, "") || 'index';

  if (currentPage === href) {
    link.classList.add("active");
  }
});

// ✅ Removed "active on click" — it conflicts with page reloads unless you're building an SPA.


// =============================
// HAMBURGER MENU (Mobile Navigation)
// =============================

const hamburgerMenu = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.nav-links');

hamburgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  hamburgerMenu.classList.toggle('active');
});

document.querySelectorAll('.nav-links li a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('active');
    hamburgerMenu.classList.remove('active');
  });
});


// =============================
// Login
// =============================

document.addEventListener('DOMContentLoaded', function() {
    // Create login button and add to header
    const headerNav = document.querySelector("header nav ul");
    if (headerNav) {
        const loginBtn = document.createElement("li");
        loginBtn.innerHTML = '<a href="#" class="login-btn">Login</a>';
        headerNav.appendChild(loginBtn);

        // Open modal when clicked
        loginBtn.addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("loginModal").style.display = "block";
        });
    }

    // Close modal when clicking X
    document.querySelector(".close").onclick = function() {
        document.getElementById("loginModal").style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById("loginModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Optional: Show error if redirected back
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('error')) {
        document.getElementById("loginError").innerText = urlParams.get('error');
        document.getElementById("loginModal").style.display = "block";
    }
});
