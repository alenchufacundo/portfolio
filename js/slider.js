// const carrusel = document.querySelector(".carrusel-items");
// const controlLeft = document.getElementById("control-left");
// const controlRight = document.getElementById("control-right");
// const mediaQueryTablet = matchMedia("(min-width:768px)");
// console.log(mediaQueryTablet.matches);
// console.log(mediaQueryTablet);

// let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
// let intervalo = null;
// let step = 1;
// const start = () => {
//   intervalo = setInterval(function () {
//     carrusel.scrollLeft = carrusel.scrollLeft + step;
//     if (carrusel.scrollLeft === maxScrollLeft) {
//       step = step * -1;
//     } else if (carrusel.scrollLeft === 0) {
//       step = step * -1;
//     }
//   }, 50);
// };

// const stop = () => {
//   clearInterval(intervalo);
// };

// carrusel.addEventListener("mouseover", () => {
//   stop();
// });

// carrusel.addEventListener("mouseout", () => {
//   start();
// });

// controlRight.addEventListener("click", () => {
//   carrusel.scrollLeft += 200;
// });

// controlLeft.addEventListener("click", () => {
//   carrusel.scrollLeft -= 200;
// });


// //slider mobile



// if (mediaQueryTablet.matches == false){
//   console.log("estas en mobile, cambia el slider")
// } else {
//   start();
// }

$('.owl-carousel').owlCarousel({
  margin: 10,
  autoplay:true,
  loop:true,
  autoplayTimeout: 2500,
  autoplayHoverPause: true,
  margin:10,
  nav:true,
  dots: false,
  responsive:{
      0:{
          items:1,
      },
      600:{
          items:2,
      },
      1000:{
          items:3,
      }
  }
})