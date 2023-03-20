"use strict";

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

// can also use section1.scrollIntoView({behaviour: smooth}); //for modern browsers only
//should do the same thing
