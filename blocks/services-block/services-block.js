new Swiper(".services__slider", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".services-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  },
});
