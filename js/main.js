const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector (".mobile-menu-toggle");
const menu= document.querySelector (".mobile-menu");

const lightModeOn = () => { // Включаем светлый вариант меню
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
}
const lightModeOff = () => { // ВЫключаем светлый вариант меню
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
}
const switchMode = () => {  //Переключатель вариантов меню 
  window.scrollY > 1 ? lightModeOn() : lightModeOff();
}
const openMenu = () => { //Открытие меню 
 menu.classList.add("is-open") //Подключаем стили открытого меню
 mMenuToggle.classList.add("close-menu"); //Устанавливает стиль кнопки "крестик"
 document.body.style.overflow = "hidden";  //запрет прокрутки документа
 lightModeOn();
}
const closeMenu = () => { //Закрытие меню 
  menu.classList.remove("is-open") //Отключаем стили открытого меню
  mMenuToggle.classList.remove("close-menu"); //Восстанавливаем стиль кнопки "3 полоски"
  document.body.style.overflow = "" ; //восстанавливаем по умолчанию прокрутку документа
  switchMode();
}

window.addEventListener("scroll", () => {
  switchMode();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
})