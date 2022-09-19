const carrusel = document.querySelector(".carrusel-items");
const controlLeft = document.getElementById("control-left");
const controlRight = document.getElementById("control-right");
console.log(controlLeft, controlRight);

let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
let intervalo = null;
let step = 1;
const start = () => {
  intervalo = setInterval(function () {
    carrusel.scrollLeft = carrusel.scrollLeft + step;
    if (carrusel.scrollLeft === maxScrollLeft) {
      step = step * -1;
    } else if (carrusel.scrollLeft === 0) {
      step = step * -1;
    }
  }, 50);
};

const stop = () => {
  clearInterval(intervalo);
};

carrusel.addEventListener("mouseover", () => {
  stop();
});

carrusel.addEventListener("mouseout", () => {
  start();
});

controlRight.addEventListener("click", () => {
  carrusel.scrollLeft += 200;
  console.log("clickeaste");
});

controlLeft.addEventListener("click", () => {
  carrusel.scrollLeft -= 200;
  console.log("clickeaste");
});

start();
