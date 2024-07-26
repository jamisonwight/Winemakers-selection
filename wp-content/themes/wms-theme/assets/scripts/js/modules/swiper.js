import Swiper from 'swiper/bundle'
import 'swiper/swiper-bundle.css'

// Featured Slider
var feature_slider = new Swiper('.feature-slider-container', {
    direction: 'horizontal',
    autoHeight: false,
    loop: false,
    watchOverflow: true,
    // autoplay: {
    //   delay: 8000,
    // },
    effect: 'slide',
    pagination: {
      el: '.feature-slider-controls',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">0' + (index + 1) + '</span>';
      },
    },
});
// Wine Slider
var wine_content_slider = new Swiper('.wine-swiper-container', {
  direction: 'horizontal',
  autoHeight: false,
  loop: true,
  watchOverflow: true,
  effect: 'slide',
  breakpoints: {
    '320': {
      slidesPerView: 1,
      spaceBetween: 0
    },
    '750': {
      slidesPerView: 3,
      spaceBetween: 0
    },
    '1440': {
      slidesPerView: 4,
      spaceBetween: 0
    },
    '1860': {
      slidesPerView: 5,
      spaceBetween: 0
    },
  },
  //centeredSlides: true,
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },
});
// Product Slider
var product_slider = new Swiper('.swiper-container', {
  direction: 'horizontal',
  autoHeight: false,
  loop: true,
  watchOverflow: true,
  // autoplay: {
  //   delay: 8000,
  // },
  effect: 'slide',
  pagination: {
      el: '.swiper-nav',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">0' + (index + 1) + '</span>';
      },
    },
});