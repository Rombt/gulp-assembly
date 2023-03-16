// import { isWebp } from "./modules/isWebp.js";     // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday } from "./modules/swiper.js"; // файл для слайдеров
import { isWebp, isTouchScreen } from "./modules/scripts.js";


window.onload = function () {
   isWebp();





   document.addEventListener("click", documentAction);
   function documentAction(e) {
      /**
       * слушает все события, если сайт отображается на мобильном устройстве выполняет что нибудь
       */
      const targetElement = e.target;
      let detect = new MobileDetect(window.navigator.userAgent);

      if (detect.mobile()) {

         if (targetElement.classList.contains('icon-menu-arrow')) {
            targetElement.closest('.menu__item').classList.toggle('_active');
         }
         if (!targetElement.closest('.menu__item') && document.querySelectorAll('.menu__item._active').length > 0) {
            // удаляет клас (закрыть меню) при клике на пустое место экрана
            let arr_activeEl = document.querySelectorAll('.menu__item._active');
            arr_activeEl.forEach((element) => { element.classList.remove('_active'); })

         }
      }
   };










   // burger_menu
   // let burgerMenu = document.querySelector('.menu__burger');
   // let hederMenu = document.querySelector('.heder-menu');
   // burgerMenu.addEventListener("click", () => {
   //    hederMenu.classList.toggle('menu__sm');
   //    burgerMenu.classList.toggle('menu__burger-close');
   // });;


}


