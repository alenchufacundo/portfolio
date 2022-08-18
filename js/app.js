// Menu hamburguesa

const toggleMenuElement = document.querySelector('.hamburguer__figure');
const mainMenuElement = document.querySelector('.nav__menu');
const exit = document.querySelector('.hamburguer__img--cross');

toggleMenuElement.addEventListener('click', () => {
  exit.classList.add('hamburguer__img--cross--show');
  mainMenuElement.classList.add('nav__menu--show');
});

