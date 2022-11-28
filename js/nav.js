"use strict";

let sideMenuActive = false;
// let activeTopDropDown = null;
// let activeSideDropDowns = [];
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
    console.log("closing: ", activeDropdown);
    activeDropdown.classList.remove("dropdown-active");
    activeDropdown.style.maxHeight = null;
    activeDropdown = null;
    return;
  }
};

const processTopNavClick = function (link, dropdown) {
  let show = true;
  if (activeDropdown) {
    console.log("closing dropdown: ", activeDropdown);
    show = dropdown !== activeDropdown;
    hideDropdown();
  }
  if (!show) return;
  console.log("opening top dropdown: ", dropdown);
  dropdown.classList.add("dropdown-active");
  const linkRect = link.getBoundingClientRect();
  dropdown.style.top = linkRect.bottom;
  dropdown.style.right = 0;
  dropdown.style.maxHeight = dropdown.scrollHeight + "px";
  activeDropdown = dropdown;
};

const processSideNavClick = function (link, dropdown) {
  // const idx = activeSideDropDowns.findIndex((el) => el === dropdown);
  // if (idx !== -1) {
  //   //this dropdown is active already - hide it
  //   console.log("closing side dropdown: ", dropdown);
  //   dropdown.classList.remove("dropdown-active");
  //   dropdown.style.maxHeight = null;
  //   activeSideDropDowns.splice(idx);
  //   return;
  // }
  let show = true;
  if (activeDropdown) {
    console.log("closing dropdown: ", activeDropdown);
    show = dropdown !== activeDropdown;
    hideDropdown();
  }
  if (!show) return;
  console.log("opening side dropdown: ", dropdown);
  dropdown.classList.add("dropdown-active");
  dropdown.style.maxHeight = dropdown.scrollHeight + "px";
  // const linkRect = link.getBoundingClientRect();
  // dropdown.style.top = linkRect.bottom;
  // dropdown.style.right = 0;
  // activeSideDropDowns.push(dropdown);
  activeDropdown = dropdown;
};

navList.addEventListener("click", function (e) {
  console.log("clicked on navlist");
  const link = e.target.closest(".activate-dropdown");
  if (!link) return;
  const dropdown = document.getElementById(link.dataset.target);
  // if (!dropdown) return;
  console.log("clicked on activate dropdown link");
  if (sideMenuActive) {
    processSideNavClick(link, dropdown);
  } else {
    processTopNavClick(link, dropdown);
  }
});

body.addEventListener("click", function (e) {
  if (e.target.closest(".activate-dropdown")) return;
  console.log("clicked on body");
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
    // causes page to go back to top, remains fixed if screen size increased
    // so that side nav disappears
    //main.style.position = "fixed";
    // nav.classList.add("responsive");
  } else {
    navList.classList.remove("sidenav-open");
    navList.style.transition = null;
    // main.style.position = "static";
    // nav.classList.remove("responsive");
  }
});

// Smooth scrolling - click on 'discover more' button
//THIS SHOULD ONLY BE INCLUDED IN INDEX.PHP SINCE ONLY IT HAS btnDiscover
const btnDiscover = document.querySelector("#btn-discover-more");
const homeSection1 = document.querySelector("#home-section1");

btnDiscover.addEventListener("click", function (e) {
  e.preventDefault();
  const s1coords = homeSection1.getBoundingClientRect();
  window.scrollTo({
    // This gives the absolute position of the element relative to the top left of the doc
    left: s1coords.left + window.pageXOffset,
    top: s1coords.top + window.pageYOffset - 80,
    behavior: "smooth",
  });
});

const testDiv = document.querySelector("#test");

// Setting style in JS directly takes priority over adding the class in JS.
// It also overrides any media query that would have otherwise activated.
// but won't override !important
//testDiv.style.backgroundColor = "green";

// testDiv.classList.add("test-blue");
