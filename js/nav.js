"use strict";

let sideMenuActive = false;
let activeDropdown = null;

////////////////////////////////
// DROPDOWN MENU
const body = document.querySelector("body");
const main = document.querySelector("main");
const header = document.querySelector("#header");
const nav = document.querySelector(".nav");
const dropdownMenus = document.querySelectorAll(".dropdown-menu");
const navList = document.querySelector(".nav-list");

const hideDropdown = function () {
  if (activeDropdown) {
    // console.log("closing: ", activeDropdown);
    activeDropdown.classList.remove("dropdown-active");
    activeDropdown.style.maxHeight = null;
    activeDropdown = null;
    return;
  }
};

const processTopNavClick = function (link, dropdown) {
  let show = true;
  if (activeDropdown) {
    // console.log("closing dropdown: ", activeDropdown);
    show = dropdown !== activeDropdown;
    hideDropdown();
  }
  if (!show) return;
  // console.log("opening top dropdown: ", dropdown);
  dropdown.classList.add("dropdown-active");
  const linkRect = link.getBoundingClientRect();
  dropdown.style.top = linkRect.bottom;
  dropdown.style.right = 0;
  dropdown.style.maxHeight = dropdown.scrollHeight + "px";
  activeDropdown = dropdown;
};

const processSideNavClick = function (link, dropdown) {
  let show = true;
  if (activeDropdown) {
    // console.log("closing dropdown: ", activeDropdown);
    show = dropdown !== activeDropdown;
    hideDropdown();
  }
  if (!show) return;
  // console.log("opening side dropdown: ", dropdown);
  dropdown.classList.add("dropdown-active");
  dropdown.style.maxHeight = dropdown.scrollHeight + "px";
  activeDropdown = dropdown;
};

navList.addEventListener("click", function (e) {
  // console.log("clicked on navlist");
  const link = e.target.closest(".activate-dropdown");
  if (!link) return;
  const dropdown = document.getElementById(link.dataset.target);
  // if (!dropdown) return;
  // console.log("clicked on activate dropdown link");
  if (sideMenuActive) {
    processSideNavClick(link, dropdown);
  } else {
    processTopNavClick(link, dropdown);
  }
});

body.addEventListener("click", function (e) {
  if (e.target.closest(".activate-dropdown")) return;
  // console.log("clicked on body");
  hideDropdown();
});

////////////////////////////////
//MOBILE NAV

const btnMobileNav = document.querySelector(".btn-mobile-nav");
btnMobileNav.addEventListener("click", function (e) {
  sideMenuActive = false;
  const icons = btnMobileNav.querySelectorAll("i");
  icons.forEach((el) => el.classList.toggle("active"));
  if (btnMobileNav.querySelector(".fa-times").classList.contains("active")) {
    navList.style.transition = "transform 0.3s ease-in-out";
    navList.classList.add("sidenav-open");
    sideMenuActive = true;
  } else {
    navList.classList.remove("sidenav-open");
    navList.style.transition = null;
  }
});

//const testDiv = document.querySelector("#test");

// Setting style in JS directly takes priority over adding the class in JS.
// It also overrides any media query that would have otherwise activated.
// but won't override !important
//testDiv.style.backgroundColor = "green";

// testDiv.classList.add("test-blue");
