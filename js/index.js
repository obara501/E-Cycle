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


function toggle(){
  let x = document.getElementById("navigation");
  let y = document.getElementById("icon-bar");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }

}