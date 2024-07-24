document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".navbar-toggle");
  const nav = document.querySelector(".navbar-nav");

  toggle.addEventListener("click", function () {
    nav.classList.toggle("show");
  });
});
