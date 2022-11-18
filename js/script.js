////////////////////////////////
// DROPDOWN MENU
const body = document.querySelector("body");
const main = document.querySelector("main");
const header = document.querySelector("#header");
const nav = document.querySelector(".nav");
const dropdownMenus = document.querySelectorAll(".dropdown-menu");
const navList = document.querySelector(".nav-list");

const deactivateDropdown = function () {
  const activeDropdown = header.querySelector(".dropdown-active");
  if (activeDropdown) activeDropdown.classList.remove("dropdown-active");
};

navList.addEventListener("click", function (e) {
  const link = e.target.closest(".activate-dropdown");
  if (!link) return;
  const dropdown = document.getElementById(link.dataset.target);
  if (!dropdown) return;
  if (dropdown.classList.contains("dropdown-active")) {
    deactivateDropdown();
    return;
  }
  //Deactivate any active dropdown
  deactivateDropdown();
  //Activate the new dropdown
  const headerRect = header.getBoundingClientRect();
  const linkRect = link.getBoundingClientRect();
  dropdown.classList.add("dropdown-active");
  dropdown.style.top = headerRect.bottom;
  dropdown.style.right = `${headerRect.right - linkRect.right}px`;
});

body.addEventListener("click", function (e) {
  if (e.target.closest(".activate-dropdown")) return;
  deactivateDropdown();
});

////////////////////////////////
//MOBILE NAV
const btnMobileNavOpen = document.querySelector(".btn-mobile-nav-open");
const btnMobileNavClose = document.querySelector(".btn-mobile-nav-close");

btnMobileNavOpen.addEventListener("click", function (e) {
  navList.style.transition = "transform 0.3s ease-in-out";
  navList.classList.add("sidenav-open");
  // btnMobileNavOpen.classList.remove("show");
  // btnMobileNavClose.classList.add("show");

  btnMobileNavOpen.style.display = "none";
  btnMobileNavClose.style.display = "block";
  // main.height = "100vh";
  // main.style.position = "fixed";
  // main.style.overflow = "hidden";
});
btnMobileNavClose.addEventListener("click", function (e) {
  navList.classList.remove("sidenav-open");

  // btnMobileNavOpen.classList.add("show");
  // btnMobileNavClose.classList.remove("show");

  btnMobileNavOpen.style.display = "block";
  btnMobileNavClose.style.display = "none";
  navList.style.transition = null;
  // main.style.position = "static";
  // main.style.overflow = "auto";
});

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

////////////////////////////////
// MODAL
//The modal box
const modal = document.querySelector(".modal");
console.log("modal: ", modal);

//Button on the modal (x) to close the modal
const btnCloseModal = document.querySelector(".btn__close-modal");
console.log("close btn: ", btnCloseModal);

//Document overlay visible when modal is showing
const overlay = document.querySelector(".overlay");
console.log("overlay: ", overlay);

export const openModal = function (title, body) {
  if (body === "") return;
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};

btnCloseModal.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});
