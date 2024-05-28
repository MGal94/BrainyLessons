//Constantes para menu hamburgesa

const logoMenu = document.querySelector("#logo-menu");
const navBar = document.querySelector("#nav");
const cruz = document.querySelector(".cruz-menu");

//Función para deslizar opciones de menú y aparición de X para cerrar el menú

const menuToggle = () => {
  console.log("holi");
  logoMenu.style.display = "none";
  navBar.classList.toggle("menu-show");
  cruz.classList.toggle("cruz-show");
};

logoMenu.addEventListener("click", menuToggle);

//Reset

const cruzClose = document.querySelector("#nav");

//Función para cerrar el menú hamburguesa

const closeX = () => {
  console.log("Holu");
  logoMenu.style.display = "block";
  navBar.classList.remove("menu-show");
  cruz.classList.remove("cruz-show");
};

cruzClose.addEventListener("click", closeX);
