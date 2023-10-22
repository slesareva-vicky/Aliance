const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector (".mobile-menu-toggle");
const menu= document.querySelector (".mobile-menu");
const swiper = new Swiper('.features-slider', {
  speed: 400,
  autoHeight: true,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  slidesPerView: 1,
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3, 
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
     // when window width is >= 1200px
     1200: {
      slidesPerView: 5,
    },
  }
});
 
const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
 /* autoHeight: true,*/
  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
  }, 
  slidesPerView: 1,
  breakpoints: {
        576: {
      slidesPerView: 2,
    },
      768: {
      slidesPerView: 3, 
    },
      1024: {
      slidesPerView: 4,
    },
  } 
});

const lightModeOn = () => { // Включаем светлый вариант меню
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
}
const lightModeOff = () => { // ВЫключаем светлый вариант меню
  navbar.classList.remove("navbar-light");
  logo.style.display = "";
  logoLight.style.display = "";
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