// Toggle class Active
const navbarNav = document.querySelector(".navbar-nav");
// ketika hamburger-menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik diluar sidebar u' menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// const navbarLink = document.querySelector(".navbar-link");
navbarNav.addEventListener("click", function () {
  navbarNav.classList.remove("active");
});
