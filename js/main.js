document.addEventListener("DOMContentLoaded", function () {
    var menuBar = document.querySelector('#menu_bar');
    var navLinks = document.querySelector('.nav_links');

    menuBar.onclick = function () {
        navLinks.classList.toggle('active');
    }
});