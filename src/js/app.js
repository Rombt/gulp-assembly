// import { isWebp } from "./modules/isWebp.js";     // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday } from "./modules/swiper.js"; // файл для слайдеров
import { isWebp, isTouchScreen } from "./modules/scripts.js";
import { Burger } from "./modules/burger.js";


window.onload = function() {
    isWebp();


    let burgerMenu = {

        conteiner: 'menu',
        menuList: 'menu__list',
        classActive: 'active',
        burgerOpen: 'menu__burger',
        burgerClose: 'burger__close',

    }

    const myBurger = new Burger(burgerMenu);
    myBurger.run();


    // burger_menu
    // let burgerMenu = document.querySelector('.menu__burger');
    // let hederMenu = document.querySelector('.heder-menu');
    // burgerMenu.addEventListener("click", () => {
    //    hederMenu.classList.toggle('menu__sm');
    //    burgerMenu.classList.toggle('menu__burger-close');
    // });;


}