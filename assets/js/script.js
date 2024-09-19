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
// const body = document.body;

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

// Трансляции
const broadcastPlay = document.querySelector(".broadcast-play");
const broadcastVideo = document.querySelectorAll(".broadcast-video");
const dateSelect = document.querySelector(".broadcast-select");
const broadcastImg = document.querySelector(".broadcast-img");

broadcastPlay.disabled = true;
broadcastVideo[0].classList.add("broadcast-video--active");

dateSelect.addEventListener("change", () => {
  const selectedVideoId = dateSelect.value;
  const selectedVideo = document.getElementById(`video-${selectedVideoId}`);

  broadcastPlay.disabled = false;

  broadcastVideo.forEach((video) => {
    if (video !== selectedVideo) {
      if (video.contentWindow) {
        video.contentWindow.postMessage(
          '{"event":"command","func":"pauseVideo","args":""}',
          "*"
        );
      }
    }

    video.classList.remove("broadcast-video--active");
  });

  selectedVideo.classList.add("broadcast-video--active");
});

// Запуск видео
jQuery(document).ready(function ($) {
  (function initPlayVideo() {
    var $videoCover = $(".broadcast-img");
    var $videoPlay = $(".broadcast-play");

    $(".broadcast-select").on("change", function () {
      $videoCover.show();
      $videoPlay.show();
    });

    $videoPlay.on("click", function () {
      var selectedVideoId = $(".broadcast-select").val();
      var $selectedVideo = $(`#video-${selectedVideoId}`);

      $videoCover.hide();
      $videoPlay.hide();
      $selectedVideo.attr("src", $selectedVideo.attr("src") + "&autoplay=1");
    });
  })();
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
    const cardText = document.querySelector(".card-1--text");
    broadcastTitleWrap.append(broadcastVideoFlex);
    cardText.classList.add("hidden");
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
