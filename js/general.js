// hamburguer menu
const menu = document.getElementById('btn_menu');
const navbar = document.querySelector('.header_nav ul');

menu.addEventListener('click', () => {
    navbar.classList.toggle('menu_active');
    console.log(navbar);
});