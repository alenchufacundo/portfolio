// Menu hamburguesa

const hamburguer = document.querySelector('.nav__menu--mobile');
const menu__nav = document.querySelector('.nav__menu');
const nav__list = document.querySelectorAll('.nav__list');
const lines = document.querySelectorAll('.nav__mobile--line');
const header = document.querySelector('.header')

// Funcionalidad para agregar las clases de css
hamburguer.addEventListener('click', () => {
  menu__nav.classList.toggle('active');
  hamburguer.classList.toggle('active');
  lines.forEach(child => {child.classList.toggle('animated')})
});


// Funcionalidad para quitar las clases de css
nav__list.forEach(child => {
  child.addEventListener('click', () => {
    menu__nav.classList.remove('active');
    hamburguer.classList.remove('active');
    lines.forEach(item => {item.classList.remove('animated')}); 
  });
});


window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    header.classList.add('show');
  } else {
    header.classList.remove('show');
  }
});


