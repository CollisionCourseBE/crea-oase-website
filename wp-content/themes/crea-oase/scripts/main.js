/**
 * Main JS file for theme
 */

console.log("Init loaded."); // Confirmation

document.addEventListener('DOMContentLoaded', function () {
  // === Swiper ===
  if (typeof Swiper !== 'undefined') {
    console.log("Swiper loaded."); // Confirmation

    new Swiper(".homeSwiper", {
      autoplay: {
        delay: 4000,
      },
      loop: true,
      pauseOnMouseEnter: true,
      effect: 'fade',
      pagination: {
        el: ".swiper-pagination",
      },
      grabCursor: true
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

  // === Mobile Menu ===
  const mobileNav = document.getElementById("MobileNav");
  const openBtn = document.getElementById("MobileNavOpen");
  const closeBtn = document.getElementById("MobileNavClose");

  if (openBtn && mobileNav) {
    openBtn.addEventListener("click", function () {
      mobileNav.classList.add("active");
    });
  }

  if (closeBtn && mobileNav) {
    closeBtn.addEventListener("click", function () {
      mobileNav.classList.remove("active");
    });
  }

  // === Submenu Toggle ===
  const submenuParents = document.querySelectorAll(
    ".mainmenu-nav-mobile ul.mainmenu-nav-wp li:has(ul)"
  );

  submenuParents.forEach((item) => {
    const link = item.querySelector("a");

    link.addEventListener("click", function (e) {
      e.preventDefault(); // prevent following the link
      item.classList.toggle("open"); // toggle submenu visibility
    });
  });
});
