// Make nav links active when clicked
document.querySelectorAll('header nav ul li a').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();

    // Remove active from all links
    document.querySelectorAll('header nav ul li a').forEach(l => {
      l.classList.remove('active');
    });

    // Add active to clicked link
    this.classList.add('active');
  });
});

// prettier-ignore
const itemSizes = [
  "2em", "3em", "1.6em", "4em", "3.2em",
  "3em", "4.5em", "1em", "3.5em", "2.8em",
];
const items = document.querySelectorAll(".item");
for (let i = 0; i < items.length; i++) {
  items[i].style.blockSize = itemSizes[i];
}

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
