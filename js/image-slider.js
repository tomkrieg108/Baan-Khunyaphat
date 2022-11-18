"use strict";

////////////////////////////////
//IMAGE SLIDER FOR HERO SECTION
const slideContainer = document.querySelector(".slider-container");
const slides = document.querySelectorAll(".slide");
const dotContainer = document.querySelector(".dots");

let activeSlide = 0;
let dotList;
let timer;

const createDots = function () {
  slides.forEach(function (el, i) {
    const html = `
    <div class="dots__dot" data-id=${i}></div>
    `;
    dotContainer.insertAdjacentHTML("beforeend", html);
  });
  dotList = document.querySelectorAll(".dots__dot");
  setActiveSlide();
};

function setActiveSlide() {
  slides.forEach((slide) => slide.classList.remove("active"));
  dotList.forEach((el) => el.classList.remove("dots__dot--active"));

  slides[activeSlide].classList.add("active");
  dotList[activeSlide].classList.add("dots__dot--active");

  //set background style
  slideContainer.style.backgroundImage =
    slides[activeSlide].style.backgroundImage;
}

dotContainer.addEventListener("click", function (e) {
  if (!e.target.classList.contains("dots__dot")) return;
  // console.log("dot pressed");
  // console.log(e.target.dataset.id);
  activeSlide = e.target.dataset.id;
  setActiveSlide();
  clearInterval(timer);
  timer = setInterval(switchSlide, 5000);
});

const switchSlide = function () {
  activeSlide++;
  activeSlide %= slides.length;
  setActiveSlide();
};

timer = setInterval(switchSlide, 5000);

createDots();
