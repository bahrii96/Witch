if (document.querySelectorAll(".testimonials__slider").length >= 1) {
  const swiper = new Swiper(".testimonials__slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".testimonials-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
    allowSlideNext: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
}
