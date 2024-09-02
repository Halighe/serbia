// Бургер меню
const btnMenuHeader = document.querySelector(".header-profile__menu-btn");
const burgerMenuHeader = document.querySelector(".header-profile__burger");
const burgerCloseHeader = document.querySelector(".burger-close");

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
