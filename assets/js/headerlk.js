// Бургер меню
const btnMenuHeader = document.querySelector(".header-profile__menu-btn");
const burgerMenuHeader = document.querySelector(".header-profile__burger");
const burgerCloseHeader = document.querySelector(".burger-close");
const body = document.body;

if (btnMenuHeader) {
  btnMenuHeader.addEventListener("click", (e) => {
    e.preventDefault();
    burgerMenuHeader.classList.toggle("jp");
  });
}

if (burgerCloseHeader) {
  burgerCloseHeader.addEventListener("click", (e) => {
    e.preventDefault();
    burgerMenuHeader.classList.remove("appear");
  });
}

// Кнопка разварачивания меню
const navClickLk = document.querySelector(".nav__click");
const navListHiddenLk = document.querySelector(".nav__list-hidden");
const navListVisibleLk = document.querySelector(".nav__list-visible");
const navLk = document.querySelector(".nav");
const navTextLk = document.querySelector(".nav__text");
const arrowDownLk = document.querySelector(".arrow_down");
const navLinksHiddenLk = document.querySelectorAll(
  ".nav__list-hidden .nav__link"
);

navClickLk.addEventListener("click", (event) => {
  event.preventDefault();
  navClickLk.classList.toggle("open");
  navListHiddenLk.classList.toggle("opacity");
  navLk.classList.toggle("open");
  navListVisibleLk.classList.toggle("open");
  arrowDownLk.classList.toggle("open");
  navTextLk.classList.toggle("hidden");
});

navLinksHiddenLk.forEach((link) => {
  link.addEventListener("click", () => {
    navClickLk.classList.remove("open");
    navListHiddenLk.classList.add("opacity");
    navLk.classList.remove("open");
    navListVisibleLk.classList.remove("open");
    arrowDownLk.classList.remove("open");
    navTextLk.classList.remove("hidden");
  });
});

//

const avatarButton = document.querySelector('.header-profile__button')
const headerProfileSelect = document.querySelector('.header-profile__select')
const headerProfileOption = document.querySelectorAll('.header-profile__option')

if (avatarButton) {
  avatarButton.addEventListener("click", () => {
    headerProfileSelect.classList.toggle('header-profile__select-open')
  })
}

if (headerProfileOption) {
  headerProfileOption.forEach((button) => {
    button.addEventListener("click", () => {
      headerProfileSelect.classList.remove('header-profile__select-open')
    })
  })
}

// Бургер меню
const btnMenu = document.querySelector(".menu-btn");
const burgerMenu = document.querySelector(".burger-menu");
const burgerClose = document.querySelector(".burger-close");

btnMenu.addEventListener("click", (e) => {
  e.preventDefault();
  burgerMenu.classList.toggle("appear");
});

burgerClose.addEventListener("click", (e) => {
  e.preventDefault();
  burgerMenu.classList.remove("appear");
});

// Модалка авторизации
const btnBurger = document.querySelector(".burger__btn");
// const btnHeader = document.querySelector(".header__btn");
// const auth = document.querySelector(".auth");
// const authClose = document.querySelector(".auth__close");

// btnHeader.addEventListener("click", (e) => {
//   e.preventDefault();
//   auth.style.display = "flex";
//   body.classList.add("noscroll");
// });

btnBurger.addEventListener("click", (e) => {
  e.preventDefault();
  // auth.style.display = "flex";
  body.classList.add("noscroll");
});

// authClose.addEventListener("click", (e) => {
//   e.preventDefault();
//   auth.style.display = "none";
//   body.classList.remove("noscroll");
// });

// Модалка обратной связи
const btnFooter = document.querySelector(".footer__btn");
const fb = document.querySelector(".fb");
const fbClose = document.querySelector(".fb__close");

btnFooter.addEventListener("click", (e) => {
  e.preventDefault();
  fb.style.display = "flex";
  body.classList.add("overflow-body");
});

fbClose.addEventListener("click", (e) => {
  e.preventDefault();
  fb.style.display = "none";
  body.classList.remove("overflow-body");
});

// Адаптив
const mediaQuery2 = window.matchMedia("(max-width: 992px)");
function handleTabletChange2(e) {
  if (e.matches) {
    const footerCenter = document.querySelector(".footer-center");
    const footerRight = document.querySelector(".footer-right");
    footerRight.append(footerCenter);
  }
}
mediaQuery2.addListener(handleTabletChange2);
handleTabletChange2(mediaQuery2);
