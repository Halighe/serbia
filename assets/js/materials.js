// const body = document.body;

// Вкладки (табы)
const tabs = document.querySelectorAll(".materials_cards");
const contents = document.querySelectorAll(".materials_content");

for (let i = 0; i < tabs.length; i++) {
  if (i == 0) {
    tabs[i].classList.add("materials_cards--active");
    contents[i].classList.add("materials_content--active");
  }

  tabs[i].addEventListener("click", (event) => {
    document.querySelectorAll(".materials_cards").forEach((el) => {
      if (el.classList.contains("materials_cards--active")) {
        el.classList.remove("materials_cards--active");
      }
    });
    tabs[i].classList.add("materials_cards--active");

    document.querySelectorAll(".materials_content").forEach((el) => {
      if (el.classList.contains("materials_content--active")) {
        el.classList.remove("materials_content--active");
      }
    });
    contents[i].classList.add("materials_content--active");
  });
}

// Открытие материалов в мобильной версии
const mediaQueryTablet = window.matchMedia("(max-width: 768px)");
const mediaQueryMobile = window.matchMedia("(max-width: 576px)");

const cards = document.querySelectorAll(".materials_cards");
const materials = document.querySelectorAll(".materials_content");
const materialsSection = document.querySelector(".materials");
const materialsInformation = document.querySelector(".materials_information");
const mainBlockMaterials = document.querySelector(".main-block-materials");
const footer = document.querySelector(".footer");
const close = document.querySelector(".materials_img_close");
const materialsInformationLink = document.querySelectorAll(
  ".materials-information-link"
);

if (mediaQueryTablet.matches) {
  materialsInformation.style.display = "none";
  materials.forEach((el) => {
    el.classList.remove("materials_content--active");
  });

  document.querySelectorAll(".materials_cards").forEach((el) => {
    el.classList.remove("materials_cards--active");
  });

  for (let i = 0; i < cards.length; i++) {
    cards[i].addEventListener("click", (e) => {
      e.preventDefault();
      materials[i].classList.add("materials_content--active");
      document.querySelector("body").style.padding = "20px 40px 52px";
      materialsInformation.style.display = "block";
      materialsSection.style.display = "none";
      mainBlockMaterials.style.display = "none";
      footer.style.display = "none";
      close.style.display = "flex";
      document.body.append(materialsInformation);

      if (mediaQueryMobile.matches) {
        document.querySelector("body").style.padding = "20px";
      }
    });
  }

  close.addEventListener("click", (e) => {
    for (let i = 0; i < cards.length; i++) {
      e.preventDefault();
      document.body.style = "";
      document.querySelector("body").style.padding = "0";
      materials[i].classList.remove("materials_content--active");
      cards[i].classList.remove("materials_cards--active");
      materialsInformation.style.display = "none";
      materialsSection.style.display = "block";
      mainBlockMaterials.style.display = "block";
      footer.style.display = "block";
      close.style.display = "none";
    }
  });
}

// Читать подробнее
const detailsTop = document.querySelectorAll(".details-top");
const detailsBottom = document.querySelectorAll(".details-bottom");
const arrowsDown = document.querySelectorAll(".arrow_down-white");

detailsTop.forEach((button, index) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    const detailBottom = detailsBottom[index];
    const arrowDown = arrowsDown[index];
    detailBottom.classList.toggle("open");
    arrowDown.classList.toggle("open");

    materialsInformationLink.forEach((link) => {
      link.classList.toggle("link-z");
    });
  });
});

// Рубрики
const captionTop = document.querySelector(".caption-top");
const captionBottom = document.querySelector(".caption-bottom");

captionTop.addEventListener("click", function (e) {
  e.preventDefault();
  captionBottom.classList.toggle("caption-bottom-open");
});
