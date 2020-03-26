var btn = document.querySelector('.toggle_btn');
var nav_burger = document.querySelector('.nav_burger');

btn.onclick = function() {
    nav_burger.classList.toggle('nav_burger_open');
};