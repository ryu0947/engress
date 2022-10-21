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
