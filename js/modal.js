"use strict";

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

const openModal = function (title, body) {
  if (body === "") return;
  modal.querySelector(".modal__title").textContent = title;
  modal.querySelector(".modal__body").textContent = body;
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
