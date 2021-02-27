const menuButton = document.getElementById("nav-btn");
const headerNavbar = document.getElementById("header__navbar");

menuButton.addEventListener("click", function (e) {
    headerNavbar.classList.toggle("header__navbar--open");
    document.body.classList.toggle("page-scroll-lock");
});
