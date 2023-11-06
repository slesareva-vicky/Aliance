const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
const isFront = document.body.classList.contains("front-page");

const swiper = new Swiper('.header-features-slider', {
  speed: 400,
  autoHeight: true,
  navigation: {
    nextEl: '.header-features-button-next',
    prevEl: '.header-features-button-prev',
  },
  slidesPerView: 'auto',

  breakpoints: {
    // when window width is >= 768px
    940: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1200: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1460: {
      slidesPerView: 5,
    },
  }
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
  },
  spaceBetween: 30,
  slidesPerView: 'auto',
  breakpoints: {
    576: {
      slidesPerView: 2,
    },
    1170: {
      slidesPerView: 3,
    },
    1460: {
      slidesPerView: 4,
    },
  }
});

const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  slidesPerView: 1,
  breakpoints: {
    800: {
      spaceBetween: 10,
      slidesPerView: 1.25,
    },
    880: {
      spaceBetween: 150,
      slidesPerView: 1.5,
    },
    992: {
      spaceBetween: 20,
      slidesPerView: 1.75,
    },
    1200: {
      spaceBetween: 30,
      slidesPerView: 2,
    },
  }
});

const lightModeOn = () => {  // включаем светлый вариант меню
  navbar.classList.add("navbar-light");
}

const lightModeOff = () => {  // выключаем светлый вариант меню
  navbar.classList.remove("navbar-light");
}

const changeNavbarHeight = scroll => {
  scroll ?
    navbar.classList.add("navbar-scroll") :
    navbar.classList.remove("navbar-scroll");
}
const switchMode = () => {  // переключатель вариантов меню 
  const isScroll = window.scrollY > 1;
  if (isFront) {
    isScroll ? lightModeOn() : lightModeOff();
    changeNavbarHeight(isScroll);
  }
}

const openMenu = () => {  // открытие меню
  menu.classList.add("is-open");  // подключаем класс (стили)
  mMenuToggle.classList.add("close-menu");   // устанавливаем стиль кнопки - крестик
  document.body.style.overflow = "hidden";   // запрет прокрутки документа
  lightModeOn();
}

const closeMenu = () => {  // закрытие меню
  menu.classList.remove("is-open");  // отключаем класс (стили)
  mMenuToggle.classList.remove("close-menu");   // восстанавливаем стиль кнопки - три полоски
  document.body.style.overflow = "";   // восстанавливаем по-умол. прокрутку документа  
  switchMode();
}

window.addEventListener("scroll", () => {
  switchMode();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
})


document.addEventListener("click", event => {
  if (event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", event => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    event.preventDefault();
    modal.classList.remove("is-open");
  }
});


