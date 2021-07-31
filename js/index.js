// SHOP SLIDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide(".splide", {
    type: "loop",
    autoplay: true,
    arrows: "slider",
    perPage: 1,
    lazyLoad: true,
  }).mount();
});

let elms = document.getElementsByClassName("slideshow__slide");
for (let i = 0, len = elms.length; i < len; i++) {
  new Splide(elms[i]).mount();
}

// TESTIMONY SLIDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#splide", {
    type: "loop",
    padding: {
      right: "5rem",
      left: "5rem",
    },
    gap: '2rem',
    autoplay: true,
    arrows: "slider",
    perPage: 2,
    perMove: 1,
    pauseOnHover: true,
    lazyLoad: true,
    focus    : 'center',
    trimSpace: false,
  }).mount();
});

let slides = document.getElementsByClassName("splide__slide");
for (let i = 0, len = slides.length; i < len; i++) {
  new Splide(slides[i]).mount();
}