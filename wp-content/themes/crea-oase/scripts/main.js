/**
 * Main JS file for theme
 */

console.log("Init loaded."); // Confirmation

document.addEventListener('DOMContentLoaded', function () {
  // === Swiper ===
  if (typeof Swiper !== 'undefined') {
    console.log("Swiper loaded."); // Confirmation

    new Swiper('.swiper', {
      direction: 'vertical',
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  } else {
    console.warn('Swiper not found.');
  }

  // === Owl Carousel ===
  if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel === 'function') {
    console.log("Owl loaded."); // Confirmation

    jQuery('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 },
      },
    });
  } else {
    console.warn('Owl Carousel not found or jQuery is missing.');
  }

});
