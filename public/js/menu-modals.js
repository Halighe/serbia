// Кнопка разварачивания меню
const navClick = document.querySelector(".nav__click");
const navListHidden = document.querySelector(".nav__list-hidden");
const navListVisible = document.querySelector(".nav__list-visible");
const nav = document.querySelector(".nav");
const navText = document.querySelector(".nav__text");
const arrowDown = document.querySelector(".arrow_down");
const navLinksHidden = document.querySelectorAll(
  ".nav__list-hidden .nav__link"
);

navClick.addEventListener("click", (event) => {
  event.preventDefault();
  navClick.classList.toggle("open");
  navListHidden.classList.toggle("opacity");
  nav.classList.toggle("open");
  navListVisible.classList.toggle("open");
  arrowDown.classList.toggle("open");
  navText.classList.toggle("hidden");
});

navLinksHidden.forEach((link) => {
  link.addEventListener("click", () => {
    navClick.classList.remove("open");
    navListHidden.classList.add("opacity");
    nav.classList.remove("open");
    navListVisible.classList.remove("open");
    arrowDown.classList.remove("open");
    navText.classList.remove("hidden");
  });
});

// Выделение текущей ссылки в меню
document.addEventListener("DOMContentLoaded", function () {
  const currentUrl = window.location.pathname;
  const links = document.querySelectorAll("nav a");
  const navItems = document.querySelectorAll(".nav__item");

  links.forEach((link, index) => {
    if (link.getAttribute("href") === currentUrl) {
      navItems[index].setAttribute("aria-current", "page");
    } else {
      navItems[index].removeAttribute("aria-current");
    }
  });
  console.log(currentUrl);
});

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


// Модалка регистрации
const btnHero = document.querySelector(".hero-btn");
const btnCard = document.querySelectorAll(".card-btn");
const reg = document.querySelector(".reg");
const regClose = document.querySelector(".reg__close");

btnHero.addEventListener("click", (e) => {
  e.preventDefault();
  reg.style.display = "flex";
  body.classList.add("overflow-body");
});

btnCard.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    reg.style.display = "flex";
    body.classList.add("overflow-body");
  });
});

regClose.addEventListener("click", (e) => {
  e.preventDefault();
  reg.style.display = "none";
  body.classList.remove("overflow-body");
});