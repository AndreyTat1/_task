var swiper = new Swiper(".swiper-container", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    820: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
