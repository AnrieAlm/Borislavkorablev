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
    const modal = document.getElementById("loginModal");
    const loginTrigger = document.querySelector(".login-btn");
    const closeBtn = document.querySelector(".close");

    if (loginTrigger) {
        loginTrigger.addEventListener("click", function(e) {
            // prevent default link behavior
            e.preventDefault();
            modal.style.display = "block";
        });
    }

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Show error if redirected back
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('error')) {
        document.getElementById("loginError").innerText = urlParams.get('error');
        modal.style.display = "block";
    }
});

