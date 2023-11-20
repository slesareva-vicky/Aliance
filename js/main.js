const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoDark = document.querySelector(".logo-dark");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const body = document.querySelector("body");
const listModal = {
  list: [],
  open: modal => { 
    listModal.list.push(modal); 
    modal.classList.add("is-open");
    document.body.style.overflow = "hidden"; 
    return modal; 
  },
  close: () => { 
    let modal = (listModal.list.length > 0 )? listModal.list.pop() : null; 
    if(modal) {modal.classList.remove("is-open");}
    if (listModal.list.length == 0) document.body.style.overflow = ""; 
    return modal; 
  }
};
const isFront = document.body.classList.contains("front-page");

const swiper = new Swiper('.features-slider', {
  speed: 400,
  autoHeight: true,
  navigation: {
    nextEl: '.features-button-next',
    prevEl: '.features-button-prev',
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
    1461: {
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
  slidesPerView: 'auto',
  breakpoints: {
    720: {
      slidesPerView: 2,
    },
    860: {
      slidesPerView: 3,
    },
    1461: {
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
  slidesPerView: 'auto',
  spaceBetween: 30,
});

const swiperCentr = new Swiper(".centr-slider", {
  speed: 600,
  navigation: {
    nextEl: '.centr-button-next',
    prevEl: '.centr-button-prev',
  },
  slidesPerView: 'auto',
  spaceBetween: 12,
  centeredSlides: true,
  breakpoints: {
    576: {
      centeredSlides: false,
      spaceBetween: 30,
    },
  }
});

const swiperBlogs = new Swiper(".blogs-slider", {
  speed: 400,
  slidesPerView: 1,
  pagination: {
    el: ".blogs-slider-pagination",
    clickable: true,
    renderBullet: (index, className) => {
      return '<span class="' + className + ' blogs-slider-bullet">' + (index + 1) + "</span>";
    },
  },
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

body.addEventListener("click", e => {
  let button = e.target.closest('[data-modal]');
  let modal = button ? document.getElementById(button.dataset.modal) : e.target.closest('.modal');
  let modalDialog = modal ? modal.querySelector(".modal-dialog") : null;
  
  if (button ||
    (modal && !e.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))) {
    e.preventDefault();
    
    modal.classList.contains("is-open") ? listModal.close() : listModal.open(modal);
  }
});

document.addEventListener("keyup", event => {
  if (event.key == "Escape" && listModal.list.length) {
    event.preventDefault();
    listModal.close();
  }
});

document.querySelectorAll('input[name="userphone"]').forEach(input => {
  input.maskPhone = new Picture('+7 (ddd) ddd-dd-dd');
});

body.addEventListener('input', (e) => {
  // ввод телефона 
  if (e.target.closest('input[name="userphone"]')) {
    e.target.maskPhone.edit(e.target, e.inputType);
  }
});

const forms = document.querySelectorAll('form'); // Собираем все формы 
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
  });
  validation
    .addField("[name=username]", [
      {
        rule: 'required',
        errorMessage: "Укажите имя",
      },
      {
        rule: 'maxLength',
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])    
    .addField("[name=userphone]", [
      {
        validator: (value) => {
          return value.replace(/[^\d]+/g, '').length === 11;
        },
        errorMessage: 'Укажите телефон',
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // Наша форма 
      const formData = new FormData(thisForm); //Данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            listModal.close();
            listModal.open(document.getElementById("modal-thanks"));
          } else {
            alert("Ошибка. Текст ошибки: " + response.statusText);
          }
        })
          .catch(error => {
            console.log(error);
          });
      };
      ajaxSend(formData);
    });
});