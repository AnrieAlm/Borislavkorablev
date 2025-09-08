
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

// Make nav links active when clicked
document.querySelectorAll('header nav ul li a').forEach(link => {
  link.addEventListener('click', function () {
   

    // Remove active from all links
    document.querySelectorAll('header nav ul li a').forEach(l => {
      l.classList.remove('active');
    });

    // Add active to clicked link
    this.classList.add('active');
  });
});

const currentPage = window.location.pathname.split("/").pop();
document.querySelectorAll("nav ul li a").forEach(link => {
  if (link.getAttribute("href") === currentPage) {
    link.classList.add("active");
  }
});






//////// hamburger menu
const hamburgerMenu = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.nav-links');

// Toggle menu
hamburgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  hamburgerMenu.classList.toggle('active'); // animate hamburger
});

// Close menu when a link is clicked
document.querySelectorAll('.nav-links li a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('active');
    hamburgerMenu.classList.remove('active');
  });
});



// const items = document.querySelectorAll(".item"); //was commented because of repetition in declaring the same purpose for variable items
for (let i = 0; i < items.length; i++) {
  items[i].style.blockSize = itemSizes[i];
}
