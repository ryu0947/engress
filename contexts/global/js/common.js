"use strict";

// ドロワーメニュー
const drawBtn = document.getElementById("js-draw-btn");
const drawNav = document.getElementById("js-draw-nav");
const body = document.body;

drawBtn.addEventListener("click", () => {
  drawBtn.classList.toggle("is-active");
  drawNav.classList.toggle("is-show");
  body.classList.toggle("is-fixed");
});

// アコーディオンメニュー
const faqTitle = document.querySelectorAll(".js-faq__title");
const faqInner = document.querySelectorAll(".js-faq__item-inner");
const faqText = document.querySelectorAll(".js-faq__text");

faqTitle.forEach((title) => {
  title.addEventListener("click", () => {
    if (title.dataset.isOpen === "false") {
      const targetHeight =
        title.nextElementSibling.firstElementChild.clientHeight;
      title.nextElementSibling.style.height = `${targetHeight}px`;

      setTimeout(function () {
        title.nextElementSibling.style.height = "auto";
        title.dataset.isOpen = "true";
      }, 500);

      title.classList.add("is-open");
    }

    if (title.dataset.isOpen === "true") {
      const targetHeight =
        title.nextElementSibling.firstElementChild.clientHeight;
      title.nextElementSibling.style.height = `${targetHeight}px`;

      setTimeout(function () {
        title.nextElementSibling.style.height = 0;
        title.dataset.isOpen = "false";
      }, 10);

      title.classList.remove("is-open");
    }
  });
});
