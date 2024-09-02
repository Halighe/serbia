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
const auth = document.querySelector(".auth");
const authClose = document.querySelector(".auth__close");

// btnHeader.addEventListener("click", (e) => {
//   e.preventDefault();
//   auth.style.display = "flex";
//   body.classList.add("noscroll");
// });

btnBurger.addEventListener("click", (e) => {
  e.preventDefault();
  auth.style.display = "flex";
  body.classList.add("noscroll");
});

authClose.addEventListener("click", (e) => {
  e.preventDefault();
  auth.style.display = "none";
  body.classList.remove("noscroll");
});

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

// Переворачивание карточек в Программе
const cards = document.querySelectorAll(".program-card");
const cardBtn = document.querySelectorAll(".card-btn");

cards.forEach((card) => {
  card.addEventListener("click", () => {
    card.classList.toggle("flipped");
  });
});

// Чтобы карточка не переворачивалась по клику на кнопку
cardBtn.forEach((el) => {
  el.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    // console.log("Нажали");
  });
});

// Слайдер модалки отзывов
const mobileMediaQueryList = window.matchMedia("(max-width: 700px)");

var swiperModal = new Swiper(".swiper-modal", {
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: "#swiper-button-next",
    prevEl: "#swiper-button-prev",
  },
  on: {
    slideChange(swiper) {
      console.log(swiper.realIndex);
    },
  },
  breakpoints: {
    320: {
      spaceBetween: 20,
    },
    700: {
      spaceBetween: 0,
    },
  },
});

// Слайдер отзывов
let swiperReviews = new Swiper(".swiper-review", {
  slidesPerView: 3,
  centeredSlides: true,
  loop: true,
  initialSlide: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    click(swiper) {
      swiperModal.slideToLoop(Number(swiper.clickedSlide.id), 0);
      reviewsModal.style.display = "flex";
      body.classList.add("noscroll");
    },
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 70,
    },
    701: {
      slidesPerView: 2.2,
      spaceBetween: 20,
    },
    820: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1201: {
      slidesPerView: 3,
    },
  },
});

const reviewsSlideClick = document.querySelectorAll(".reviews-slide-click"); //карточки, по которым кликаем
const swiperSlide = document.querySelectorAll(".swiper-slide");
const reviewsModal = document.querySelector(".reviews-modal-background");
const closeButton = document.querySelector(".close-button");
const body = document.body;

// Кнопки управления видео для модалки отзывов
const swiperSlideContent = document.querySelectorAll(".reviews-modal_left");

swiperSlideContent.forEach((sideContent) => {
  const play = sideContent.querySelector(".control-play");
  const back = sideContent.querySelector(".control-back");
  const forward = sideContent.querySelector(".control-forward");
  const video = sideContent.querySelector(".reviews-modal_video");
  const timeline = sideContent.querySelector(".timeline");
  const volumeTimeline = sideContent.querySelector(".volume-timeline");
  const volumeWrap = sideContent.querySelector(".volume-wrap");
  const muteButton = sideContent.querySelector(".mute-button");

  play.addEventListener("click", function (e) {
    e.preventDefault();

    if (play.classList.contains("active")) {
      video.pause();
      play.classList.remove("active");
    } else {
      play.classList.add("active");
      video.play();
    }
  });

  // видео ставится на паузу при смене слайда
  swiperModal.on("slideChange", function () {
    video.pause();
    play.classList.remove("active");
  });

  // прогресс-бар
  video.addEventListener("timeupdate", function () {
    const currentTime = video.currentTime;
    const duration = video.duration;
    const progressWidth = (currentTime / duration) * 100;
    timeline.style.width = progressWidth + "%";
  });

  timeline.addEventListener("click", function (e) {
    const timelineWidth = timeline.offsetWidth;
    const clickPosition = e.clientX - timeline.offsetLeft;
    const clickedTime = (clickPosition / timelineWidth) * video.duration;
    video.currentTime = clickedTime;
  });

  // Кнопки Вперед и Назад
  back.addEventListener("click", function () {
    video.currentTime -= 10;
    updateTimeline();
  });

  forward.addEventListener("click", function () {
    video.currentTime += 10;
    updateTimeline();
  });

  function updateTimeline() {
    const currentTime = video.currentTime;
    const duration = video.duration;
    const progressWidth = (currentTime / duration) * 100;
    timeline.style.width = progressWidth + "%";
  }

  // Громкость видео
  const tabletMediaQueryList = window.matchMedia("(max-width: 1024px)");

  let isDragging = false;
  let isMuted = false;
  let savedVolume = 0.3;

  video.volume = savedVolume;
  volumeTimeline.style.width = video.volume * 100 + "%";

  // Кнопка выключения звука
  muteButton.addEventListener("click", function () {
    if (isMuted) {
      video.volume = savedVolume;
      volumeTimeline.style.width = video.volume * 100 + "%";
      isMuted = false;
      muteButton.src = "img/volume-on.svg";
    } else {
      savedVolume = video.volume;
      video.volume = 0;
      volumeTimeline.style.width = 0;
      isMuted = true;
      muteButton.src = "img/volume-off.svg";
    }
  });

  // регулятор громкости звука
  function adjustVolume(event) {
    if (isDragging) {
      const rect = volumeWrap.getBoundingClientRect();
      const moveX = tabletMediaQueryList.matches
        ? event.touches[0].clientX - rect.left
        : event.clientX - rect.left;
      const percentage = Math.max(0, Math.min(100, (moveX / rect.width) * 100));

      volumeTimeline.style.width = percentage + "%";
      video.volume = percentage / 100;
    }
  }

  if (tabletMediaQueryList.matches) {
    volumeWrap.addEventListener("touchstart", () => {
      isDragging = true;
      adjustVolume(event);
    });
    volumeWrap.addEventListener("touchmove", adjustVolume);
    volumeWrap.addEventListener("touchend", () => {
      isDragging = false;
    });
    volumeWrap.addEventListener("touchleave", () => {
      isDragging = false;
    });
    volumeWrap.addEventListener("touchcancel", () => {
      isDragging = false;
    });
  } else {
    volumeWrap.addEventListener("mousedown", function (event) {
      isDragging = true;
      adjustVolume(event);

      volumeWrap.addEventListener("mousemove", adjustVolume);
    });

    document.addEventListener("mouseup", function () {
      isDragging = false;
      volumeWrap.removeEventListener("mousemove", adjustVolume);
    });

    volumeWrap.addEventListener("mouseleave", function () {
      isDragging = false;
      volumeWrap.removeEventListener("mousemove", adjustVolume);
    });
  }

  // Закрытие модального окна
  closeButton.addEventListener("click", function (e) {
    e.preventDefault();
    reviewsModal.style.display = "none";
    body.classList.remove("noscroll");
    video.pause();
  });
});

// Открытие модального окна
reviewsSlideClick.forEach((slide, index) => {
  slide.addEventListener("click", function (e) {
    e.preventDefault();
    reviewsModal.style.display = "flex";
    body.classList.add("noscroll");
    swiperModal.slideTo(index);
  });
});

// Трансляции
// Выпадающий список
const select = document.querySelector(".broadcast-select");
const choices = new Choices(select, {
  searchEnabled: false,
  itemSelectText: "",
});

// Слайдер партнеров
var swiperPartners = new Swiper(".swiper-partners", {
  slidesPerView: 3,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    376: {
      slidesPerView: 2,
    },
    577: {
      slidesPerView: 3,
    },
  },
});

// Кнопка play в трансляциях
const broadcastPlay = document.querySelector(".broadcast-play");
const broadcastVideo = document.querySelectorAll(".broadcast-video");
const dateSelect = document.querySelector(".broadcast-select");

broadcastPlay.disabled = true;

broadcastPlay.addEventListener("click", function (e) {
  e.preventDefault();

  const selectedVideo = document.querySelector(".broadcast-video--active");

  if (selectedVideo.paused) {
    selectedVideo.play();
    broadcastPlay.classList.add("hidden");
  } else {
    selectedVideo.pause();
    broadcastPlay.classList.remove("hidden");
  }
});

// Видео в трансляциях
dateSelect.addEventListener("change", () => {
  const selectedDate = dateSelect.value;
  const selectedVideo = document.querySelector(`#video-${selectedDate}`);
  const currentVideo = document.querySelector(".broadcast-video--active");

  if (currentVideo) {
    currentVideo.pause();
  }

  broadcastVideo.forEach((video) =>
    video.classList.remove("broadcast-video--active")
  );

  if (selectedVideo) {
    selectedVideo.classList.add("broadcast-video--active");
    broadcastPlay.disabled = false;

    if (selectedVideo.paused) {
      broadcastPlay.classList.remove("hidden");
    } else {
      broadcastPlay.classList.add("hidden");
    }
  }
  console.log(selectedVideo);
});

broadcastVideo.forEach((video) => {
  video.addEventListener("ended", function () {
    broadcastPlay.classList.remove("hidden");
    broadcastPlay.classList.remove("active");
    broadcastPlay.disabled = false;
  });
});

// Адаптив
const mediaQuery = window.matchMedia("(max-width: 1366px)");
function handleTabletChange(e) {
  if (e.matches) {
    const previewFoto1 = document.querySelector(".preview-foto1");
    const previewRightBottom = document.querySelector(".preview-right_bottom");
    previewRightBottom.append(previewFoto1);
  }
}
mediaQuery.addListener(handleTabletChange);
handleTabletChange(mediaQuery);

const mediaQuery3 = window.matchMedia("(max-width: 700px)");
function handleTabletChange3(e) {
  if (e.matches) {
    const heroContent = document.querySelector(".hero-content");
    const heroImg = document.querySelector(".hero-img");
    heroContent.append(heroImg);
  }
}
mediaQuery3.addListener(handleTabletChange3);
handleTabletChange3(mediaQuery3);

const mediaQuery4 = window.matchMedia("(max-width: 576px)");
function handleTabletChange4(e) {
  if (e.matches) {
    const broadcastTitleWrap = document.querySelector(".broadcast-title-wrap");
    const broadcastVideoFlex = document.querySelector(".broadcast-video_flex");
    broadcastTitleWrap.append(broadcastVideoFlex);
  }
}
mediaQuery4.addListener(handleTabletChange4);
handleTabletChange4(mediaQuery4);

const mediaQuery5 = window.matchMedia("(max-width: 480px)");
function handleTabletChange5(e) {
  if (e.matches) {
    const previewTitle = document.querySelector(".preview-title");
    previewTitle.textContent = "Дни робототехники и инноваций";
  }
}
mediaQuery5.addListener(handleTabletChange5);
handleTabletChange5(mediaQuery5);

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

// Модалка авторизации открытие/закрытие
// const btnBurger = document.querySelector(".burger__btn");
const btnHeader = document.querySelector('.header__btn');

btnHeader.addEventListener("click", (e) => {
  e.preventDefault();
  window.location.href = 'login.html';
});

btnBurger.addEventListener("click", (e) => {
  e.preventDefault();
  window.location.href = 'login.html';
});

// Модалка регистрации открытие/закрытие
// const btnHero = document.querySelector(".hero-btn");
// const btnCard = document.querySelectorAll(".card-btn");
// const reg = document.querySelector(".reg");
// const regClose = document.querySelector(".reg__close");
const regButton = document.querySelector('.reg__button')

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

// Модалка обратной связи открытие/закрытие
// const btnFooter = document.querySelector(".footer__btn");
// const fb = document.querySelector(".fb");
// const fbClose = document.querySelector(".fb__close");

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




//Valid reg form
let regValidation = new JustValidate('#regform', {
  focusInvalidField: false,
});

regValidation.addField('#participant_fio', [
  {
    rule: 'required',
    errorMessage: 'Введите Ф.И.О.'
  },
  {
    rule: "customRegexp",
    value: /[a-zа-яё]/i,
    errorMessage: "Введите корректное Ф.И.О.",
  },
  {
    rule: "maxLength",
    value: 100,
    errorMessage: "Фамилия не может содержать больше 100 символов",
  },
])
  .addField('#participant_email', [
    {
      rule: 'required',
      errorMessage: 'Введите Email'
    },
    {
      rule: "email",
      errorMessage: "Введите корректный E-mail",
    },
    {
      rule: "maxLength",
      value: 256,
      errorMessage: "E-mail не может содержать больше 256 символов",
    },
  ])
  .addField('#participant_phone', [
    {
      rule: "required",
      errorMessage: "Введите ваш телефон",
    },
    {
      rule: "customRegexp",
      value: /\+?[0-9\s\-\+\(\)]+/i,
      errorMessage: "Введите корректный номер телефона",
    },
    {
      rule: "maxLength",
      value: 18,
      errorMessage: "Номер телефона не может содержать больше 18 символов",
    },
  ])
  .addField('#participant_city', [
    {
      rule: 'required',
      errorMessage: 'Выберите город'
    }
  ])
  .addField('#participant_category', [
    {
      rule: 'required',
      errorMessage: 'Выберите категорию'
    }
  ])
  .addField('#participant_school', [
    {
      rule: 'required',
      errorMessage: 'Введите наименование учебного заведения'
    },
    {
      rule: "customRegexp",
      value: /[a-zа-яё]/i,
      errorMessage: "Введите корректное наименование учебного заведения",
    },
    {
      rule: "maxLength",
      value: 100,
      errorMessage: "Наименование учебного заведения не может содержать больше 156 символов",
    },
  ])
  .addField('#participant_representative', [
    {
      rule: 'required',
      errorMessage: 'Введите Ф.И.О. представителя'
    },
    {
      rule: "customRegexp",
      value: /[a-zа-яё]/i,
      errorMessage: "Введите корректное Ф.И.О. представителя",
    },
    {
      rule: "maxLength",
      value: 100,
      errorMessage: "Ф.И.О. представителя не может содержать больше 100 символов",
    },
  ])
  .addField('#checkboxreg', [
    {
      rule: 'required',
      errorMessage: " ",
    }
  ])
  .onSuccess((e) => {
    e.preventDefault()
    reg.style.display = "none";
    window.location.href = 'regthanks.html';
  })


// валидация формы обратной связи
const inputWithClearFb = document.querySelectorAll('.input__clear-fb')

let fbValidation = new JustValidate('#fb-form', {
  focusInvalidField: false,
});

fbValidation.addField('#feedback_form_name', [
  {
    rule: 'required',
    errorMessage: 'Введите Ф.И.О.'
  },
  {
    rule: "customRegexp",
    value: /[a-zа-яё]/i,
    errorMessage: "Введите корректное Ф.И.О.",
  },
  {
    rule: "maxLength",
    value: 100,
    errorMessage: "Фамилия не может содержать больше 100 символов",
  },
])
  .addField('#feedback_form_email', [
    {
      rule: 'required',
      errorMessage: 'Введите Email'
    },
    {
      rule: "email",
      errorMessage: "Введите корректный E-mail",
    },
    {
      rule: "maxLength",
      value: 256,
      errorMessage: "E-mail не может содержать больше 256 символов",
    },
  ])
  .addField('#feedback_form_phone', [
    {
      rule: "required",
      errorMessage: "Введите ваш телефон",
    },
    {
      rule: "customRegexp",
      value: /\+?[0-9\s\-\+\(\)]+/i,
      errorMessage: "Введите корректный номер телефона",
    },
    {
      rule: "maxLength",
      value: 18,
      errorMessage: "Номер телефона не может содержать больше 18 символов",
    },
  ])
  .addField('#feedback_form_question', [
    {
      rule: 'required',
      errorMessage: 'Введите текст',
    },
    {
      rule: "maxLength",
      value: 4000,
      errorMessage: "Сообщение не может содержать больше 2000 символов",
    },
  ])
  .addField('#checkbox1', [
    {
      rule: 'required',
      errorMessage: ' ',
    }
  ])
  .addField('#checkbox2', [
    {
      rule: 'required',
      errorMessage: ' ',
    }
  ])
  .onSuccess((e) => {
    e.preventDefault()
    window.location.href = 'fbthanks.html';
    fb.style.display = "none";
    inputWithClearFb.forEach((item) => {
      clearFields(item);
    });
  });


//Кнопка очистки инпута
function updateButtonVisibility(input) {
  const button = input.nextElementSibling;
  if (input.value.length === 0) {
    button.classList.add("input-figure-hidden");
  } else {
    button.classList.remove("input-figure-hidden");
  }
}

function clearField(input) {
  input.value = "";
  updateButtonVisibility(input);
}

function clearFields(input) {
  input.value = "";
}

const inputWithClear = document.querySelectorAll(".input__clear");

inputWithClear.forEach((item) => {
  item.addEventListener("input", () => {
    updateButtonVisibility(item);
  });

  const clearButton = item.nextElementSibling;
  if (clearButton) {
    clearButton.addEventListener("click", () => {
      clearField(item);
    });
  }
});
// открытие/закрытие всплывающих окон
const cityButton = document.querySelector('.city-button')

cityButton.addEventListener("click", () => {
  const regSelect = document.querySelector('.reg-select')
  regSelect.classList.toggle('reg-select-hidden')
})

const catButton = document.querySelector('.cat-button')

catButton.addEventListener("click", () => {
  const regSelectCat = document.querySelector('.reg-select-cat')
  regSelectCat.classList.toggle('reg-select-cat-hidden')
})

//получение в инпут значения из всплывающего окна
const regSelectCat = document.querySelector('.reg-select-cat')
const inp_cat = document.querySelector('.reg__input-cat');
const li_item_cat = document.querySelectorAll('.reg-select-cat-option');

for (let i = 0; i < li_item_cat.length; i = i + 1) {
  li_item_cat[i].addEventListener('click', function () {
    inp_cat.value = this.dataset.value;
    regSelectCat.classList.add('reg-select-cat-hidden')
  }, false)
}

const regSelectCity = document.querySelector('.reg-select-city')
const inp_city = document.querySelector('.reg__input-city');
const li_item_city = document.querySelectorAll('.reg-select-option');

for (let i = 0; i < li_item_cat.length; i = i + 1) {
  li_item_city[i].addEventListener('click', function () {
    inp_city.value = this.dataset.value;
    regSelectCity.classList.add('reg-select-hidden')
  }, false)
}

//радокнопка снимает/навешивает required

const radioDisable = document.getElementById('participant_adult')
const radioEnable = document.getElementById('enable')
const inputProfname = document.querySelector('.reg__input-profname')

if (radioDisable) {
  radioDisable.addEventListener('click', function () {
    inputProfname.removeAttribute('required')
    regValidation.removeField('#participant_representative')
  })
}

if (radioEnable) {
  radioEnable.addEventListener('click', function () {
    inputProfname.setAttribute('required', 'required')
    regValidation.addField('#participant_representative', [
      {
        rule: 'required',
        errorMessage: 'Введите Ф.И.О. представителя'
      },
      {
        rule: "customRegexp",
        value: /[a-zа-яё]/i,
        errorMessage: "Введите корректное Ф.И.О. представителя",
      },
      {
        rule: "maxLength",
        value: 100,
        errorMessage: "Ф.И.О. представителя не может содержать больше 100 символов",
      },
    ])
  })
}
