// https://youtu.be/OjVK055CTNI


export const swiperDish = new Swiper('.swiper.swiper-dish', {
   direction: 'horizontal',

   breakpoints: {
      1250: {
         direction: 'vertical',
      }
   },

   loop: true,
   autoplay: {
      delay: 5000,
   },
   effect: 'fade',
   fadeEffect: {
      crossFade: true,
   },
   pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
         return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
      },
   },
   mousewheel: {
      invert: true,
   },
});

export const swiperToday = new Swiper('.swiper.swiper-today', {
   direction: 'horizontal',
   loop: true,

   autoplay: {
      delay: 10000,
   },
   effect: 'fade',
   fadeEffect: {
      crossFade: true,
   },
   pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
         return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
      },
   },
   mousewheel: {
      invert: true,
   },
});