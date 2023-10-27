import './bootstrap';

// Uncomment if you need Alpine.js
import Alpine from 'alpinejs'
import example from './components/AlpineExample'
Alpine.data('example', example)
window.Alpine = Alpine
Alpine.start()

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
const swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 60,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    // Cuando el ancho de la ventana sea igual o menor a 768px (móviles)
    768: {
      slidesPerView: 3, // Mostrar solo 1 slide por vista
      spaceBetween: 20, // Opcional: Espacio entre slides en dispositivos móviles
    },
  },
});


// Uncomment if you need Vue
// window.Vue = require('vue');
// Vue.component('example', require('./components/Example.vue').default);
// new Vue({
//     el: '#app'
// });

