'use strict';
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

/* DISCOUNT POPUP  */
// $(document).ready(function() {
// let i = 0;
// $(document).on("mousewheel", function (e) {
//   i++;
//   console.log(i);
//   if (i == 10) {
//     $(".discount").addClass("active");
//   }
// });
// $(document).on("DOMMouseScroll", function (e) {
//   if (i == 10) {
//     $(".discount").addClass("active");
//     i++;
//   }
// });
// $(document).on("touchmove", function () {
//   if (i == 10) {
//     $(".discount").addClass("active");
//     i++;
//   }
// });

// $(document).on("click", ".discount a", function (e) {
//   e.preventDefault();
//   console.log("click");
//   $(this).parent().removeClass("active");
// });
// });