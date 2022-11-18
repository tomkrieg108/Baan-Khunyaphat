"use strict";

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
