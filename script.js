let items = document.querySelectorAll(".slider .item");
let next = document.getElementById("next");
let prev = document.getElementById("prev");

let active = 3;
function loadShow() {
  let stt = 0;
  items[active].style.transform = `none`;
  items[active].style.zIndex = 1;
  items[active].style.filter = "none";
  items[active].style.opacity = 1;
  for (var i = active + 1; i < items.length; i++) {
    stt++;
    items[i].style.transform = `translateX(${120 * stt}px) scale(${
      1 - 0.2 * stt
    }) perspective(16px) rotateY(-1deg)`;
    items[i].style.zIndex = -stt;
    items[i].style.filter = "blur(5px)";
    items[i].style.opacity = stt > 2 ? 0 : 0.6;
  }
  stt = 0;
  for (var i = active - 1; i >= 0; i--) {
    stt++;
    items[i].style.transform = `translateX(${-120 * stt}px) scale(${
      1 - 0.2 * stt
    }) perspective(16px) rotateY(1deg)`;
    items[i].style.zIndex = -stt;
    items[i].style.filter = "blur(5px)";
    items[i].style.opacity = stt > 2 ? 0 : 0.6;
  }
}
loadShow();
next.onclick = function () {
  active = active + 1 < items.length ? active + 1 : active;
  loadShow();
};
prev.onclick = function () {
  active = active - 1 >= 0 ? active - 1 : active;
  loadShow();
};

window.onload = function () {
  let slides = document.getElementsByClassName("slider");

  function addActive(slide) {
    slide.classList.add("active");
  }

  function removeActive(slide) {
    slide.classList.remove("active");
  }

  addActive(slides[0]);
  setInterval(function () {
    for (let i = 0; i < slides.length; i++) {
      if (i + 1 == slides.length) {
        addActive(slides[0]);
        setTimeout(removeActive, 350, slides[i]);
        break;
      }
      if (slides[i].classList.contains("active")) {
        setTimeout(removeActive, 350, slides[i]);
        addActive(slides[i + 1]);
        break;
      }
    }
  }, 1500);
};
//livros----------------------------------------------
let items_livro = document.querySelectorAll(".slider-livros .item-livro");
let next_livro = document.getElementById("next-livro");
let prev_livro = document.getElementById("prev-livro");

let active_livro = 3;
function loadShow_livro() {
  let stt_livro = 0;
  items_livro[active_livro].style.transform = `none`;
  items_livro[active_livro].style.zIndex = 1;
  items_livro[active_livro].style.filter = "none";
  items_livro[active_livro].style.opacity = 1;
  for (var i = active_livro + 1; i < items_livro.length; i++) {
    stt_livro++;
    items_livro[i].style.transform = `translateX(${120 * stt_livro}px) scale(${
      1 - 0.2 * stt_livro
    }) perspective(16px) rotateY(-1deg)`;
    items_livro[i].style.zIndex = -stt_livro;
    items_livro[i].style.filter = "blur(5px)";
    items_livro[i].style.opacity = stt_livro > 2 ? 0 : 0.6;
  }
  stt_livro = 0;
  for (var i = active_livro - 1; i >= 0; i--) {
    stt_livro++;
    items_livro[i].style.transform = `translateX(${-120 * stt_livro}px) scale(${
      1 - 0.2 * stt_livro
    }) perspective(16px) rotateY(1deg)`;
    items_livro[i].style.zIndex = -stt_livro;
    items_livro[i].style.filter = "blur(5px)";
    items_livro[i].style.opacity = stt_livro > 2 ? 0 : 0.6;
  }
}
loadShow_livro();
next_livro.onclick = function () {
  active_livro =
    active_livro + 1 < items_livro.length ? active_livro + 1 : active_livro;
  loadShow_livro();
};
prev_livro.onclick = function () {
  active_livro = active_livro - 1 >= 0 ? active_livro - 1 : active_livro;
  loadShow_livro();
};

window.onload = function () {
  let slides_livro = document.getElementsByClassName("slider-livros");

  function addActive(slide_livro) {
    slide_livro.classList.add("active_livro");
  }

  function removeActive(slide_livro) {
    slide_livro.classList.remove("active_livro");
  }

  addActive(slides_livro[0]);
  setInterval(function () {
    for (let i = 0; i < slides_livro.length; i++) {
      if (i + 1 == slides_livro.length) {
        addActive(slides_livro[0]);
        setTimeout(removeActive, 350, slides_livro[i]);
        break;
      }
      if (slides_livro[i].classList.contains("active_livro")) {
        setTimeout(removeActive, 350, slides_livro[i]);
        addActive(slides_livro[i + 1]);
        break;
      }
    }
  }, 1500);
};