window.onload = function () {
    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');
    const nav_links = document.querySelectorAll('.mobile-nav a');


    menu_btn.addEventListener('click', function () {
        const isActive = mobile_menu.classList.contains('is-active');
        menu_btn.classList.toggle('is-active', !isActive);
        mobile_menu.classList.toggle('is-active', !isActive);
    });

    nav_links.forEach(link => {
        link.addEventListener('click', () => {
            mobile_menu.classList.remove('is-active');
            menu_btn.classList.remove('is-active');
        });
    });

}