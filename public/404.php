<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404</title>
  <script defer src="js/menu-modals.js"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/401_404.css" />
  <link rel="stylesheet" href="css/media.css" />
  <link rel="stylesheet" href="css/modals.css" />
</head>

<body class="boby-404">

  <!-- Модальное окно бургер-меню -->
  <div class="burger-menu">
    <div class="header-burger flex">
      <div class="burger-logo-block flex">
        <a href="/index.php" class="logo">
          <img src="img/logo_mobile.svg" alt="logo">
        </a>
        <a href="https://rs.gov.ru/" class="logo" target="_blank">
          <img src="img/logo-ros.png" class="burger-logo2" alt="logo">
        </a>
        <a href="https://concord.ac/" class="logo" target="_blank">
          <img src="img/logo-sodruzestvo.png" class="burger-logo3" alt="logo">
        </a>
      </div>
      <button class="btn-reset burger-close">
        <img src="img/close.svg" alt="">
      </button>
    </div>

    <div class="main-burger">
      <ul class="list-reset burger-list">
        <li class="burger-item">
          <a href="#" class="burger__link">Карта будущего</a>
        </li>
        <li class="burger-item">
          <a href="tests.html" class="burger__link">Профтест</a>
        </li>
        <li class="burger-item">
          <a href="materials.php" class="burger__link">Материалы</a>
        </li>
        <li class="burger-item">
          <a href="#" class="burger__link">Контакты</a>
        </li>
      </ul>

      <button class="btn-reset btn btn-color burger__btn flex">Войти</button>
    </div>

    <div class="burger-footer flex">
      <div class="footer_contacts">
        <a class="burger_contacts_text phone-burger flex" href="tel:+74951651508">
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M15.052 20.133C13.612 20.08 9.531 19.516 5.257 15.243C0.984 10.969 0.421 6.88897 0.367 5.44797C0.287 3.25197 1.969 1.11897 3.912 0.285971C4.14598 0.184938 4.4022 0.146472 4.65553 0.174347C4.90886 0.202222 5.15059 0.29548 5.357 0.444971C6.957 1.61097 8.061 3.37497 9.009 4.76197C9.21758 5.0667 9.30677 5.43752 9.25956 5.80377C9.21235 6.17002 9.03204 6.5061 8.753 6.74797L6.802 8.19697C6.70774 8.26504 6.64139 8.365 6.61528 8.47829C6.58916 8.59159 6.60505 8.71051 6.66 8.81297C7.102 9.61597 7.888 10.812 8.788 11.712C9.689 12.612 10.941 13.45 11.8 13.942C11.9077 14.0024 12.0345 14.0193 12.1543 13.9892C12.274 13.9591 12.3777 13.8842 12.444 13.78L13.714 11.847C13.9475 11.5368 14.2919 11.329 14.6752 11.2672C15.0584 11.2053 15.4508 11.2941 15.77 11.515C17.177 12.489 18.819 13.574 20.021 15.113C20.1826 15.3209 20.2854 15.5684 20.3187 15.8296C20.3519 16.0908 20.3144 16.3562 20.21 16.598C19.373 18.551 17.255 20.214 15.052 20.133Z"
              fill="white" />
          </svg>
          +7 (495) 165-15-08</a>
      </div>
      <div class="footer_contacts">
        <a class="burger_contacts_text flex" href="mailto:vr-rs@concord.ac">
          <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2.5 16C1.95 16 1.47933 15.8043 1.088 15.413C0.696667 15.0217 0.500667 14.5507 0.5 14V2C0.5 1.45 0.696 0.979333 1.088 0.588C1.48 0.196666 1.95067 0.000666667 2.5 0H18.5C19.05 0 19.521 0.196 19.913 0.588C20.305 0.98 20.5007 1.45067 20.5 2V14C20.5 14.55 20.3043 15.021 19.913 15.413C19.5217 15.805 19.0507 16.0007 18.5 16H2.5ZM10.5 9L18.5 4V2L10.5 7L2.5 2V4L10.5 9Z"
              fill="white" />
          </svg>
          vr-rs@concord.ac</a>
      </div>
    </div>
  </div>

  <!-- Модальное окно авторизации -->
  <div class="auth">
    <div class="auth__modal flex">
      <div class="auth__close"></div>
      <div class="auth__container">
        <hi class="auth__title">АВТОРИЗАЦИЯ</hi>
        <form class="auth__form">
          <label class="auth__input-label">E-mail</label>
          <div class="auth__input-border">
            <input class="auth__input" placeholder="Введите E-mail">
          </div>
          <label class="auth__input-label">Пароль</label>
          <div class="auth__input-border">
            <input class="auth__input" placeholder="Введите пароль">
          </div>
          <a class="auth__miss-pass">Забыли пароль?</a>
          <span class="auth__text">Еще нет аккаунта? <a class="auth__link-reg">Зарегистрироваться</a></span>
          <button class="auth__button">Войти</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Модальное окно регистрации -->
  <div class="reg">
    <div class="reg__modal">
      <div class="reg__mask">
        <div class="reg__close"></div>
        <div class="reg__info-container">
          <h1 class="reg__title">ОТКРОЙ МИР НОВЫХ ВОЗМОЖНОСТЕЙ</h1>
          <h3 class="reg__text">При авторизации вы получите сертификат участника, программу мероприятий и
            эксклюзивные бонусы. Успейте забрать ваш ключ к новым знаниям, навыкам и незабываемым впечатлениям!</h3>
          <div class="reg__robot-image"></div>
          <div class="reg__info-figure"></div>
        </div>
        <form class="reg__form">
          <label class="reg__input-label">Ф.И.О.</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Введите Ф.И.О">
          </div>
          <label class="reg__input-label">Email</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Введите Email">
          </div>
          <label class="reg__input-label">Телефон</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Введите телефон">
          </div>
          <label class="reg__input-label">Город</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Выберите город">
          </div>
          <label class="reg__input-label">Категория</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Выберите категорию">
          </div>
          <label class="reg__input-label">Наименование учебного заведения</label>
          <div class="reg__input-border">
            <input class="reg__input reg__input-360" placeholder="Введите наименование учебного заведения">
          </div>
          <label class="reg__input-label">Вам есть 14 лет?</label>
          <div class="reg__radio-container reg__radio-container-first">
            <label class="reg__radio-label">
              <input class="reg__radio" name="age" type="radio">
              <span class="reg__fake-radio"></span>
              <span class="reg__input-label-rad">Да</span>
            </label>
          </div>
          <div class="reg__radio-container">
            <label class="reg__radio-label">
              <input class="reg__radio" name="age" type="radio" checked>
              <span class="reg__fake-radio"></span>
              <span class="reg__input-label-rad">Нет</span>
            </label>
          </div>
          <label class="reg__input-label reg__input-label-last">ФИО представителя</label>
          <div class="reg__input-border reg__input-border-last">
            <input class="reg__input" placeholder="Введите ФИО представителя">
          </div>
          <div class="reg__checkbox-container">

            <label class="reg__checkbox-label">
              <input class="reg__checkbox" type="checkbox">
              <span class="reg__fake-checkbox"></span>
              <span class="reg__checkbox-text">Соглашаюсь с условиями <span class="reg__checkbox-text-span">Политики
                  конфиденциальности,
                  Согласия на обработку персональных данных</span> и <span class="reg__checkbox-text-span">Согласия
                  Пользователя на обработку персональных
                  данных</span></span>
            </label>
          </div>
          <div class="reg__button-container">
            <button class="reg__button">Зарегистрироваться</button>
            <div class="reg__button-figure"></div>
          </div>
        </form>
      </div>
    </div>

    <div class="reg__notice">
      <div class="reg__notice-close"></div>
      <h1 class="reg__notice-title">ВЫ УСПЕШНО ЗАРЕГИСТРИРОВАЛИСЬ</h1>
      <span class="reg__notice-text">В ближайшее время на вашу электронную почту придёт письмо с логином и паролем для
        входа в
        аккаунт. Проверьте папку «Входящие» или «Спам», чтобы получить доступ к личному кабинету.</span>
      <img class="reg__notice-robot" src="img/robot-phone.svg" alt="">
    </div>

  </div>

  <!-- Модальное окно обратной связи -->
  <div class="fb">
    <div class="fb__modal">
      <div class="fb__close"></div>
      <div class="fb__container">
        <h1 class="fb__title">НЕ НАШЛИ ОТВЕТА НА СВОЙ ВОПРОС?</h1>
        <h3 class="fb__text">Воспользуйтесь формой, задайте вопрос, и мы лично свяжемся с вами в ближайшее время.</h3>
        <form class="fb__form">
          <label class="fb__input-label">Ф.И.О.*</label>
          <div class="fb__input-border">
            <input class="fb__input" placeholder="Введите Ф.И.О">
          </div>
          <label class="fb__input-label">E-mail*</label>
          <div class="fb__input-border">
            <input class="fb__input" placeholder="Введите E-mail">
          </div>
          <label class="fb__input-label">Телефон*</label>
          <div class="fb__input-border">
            <input class="fb__input" placeholder="Введите телефон">
          </div>
          <label class="fb__input-label">Задать вопрос *</label>
          <div class="fb__input-border">
            <textarea class="fb__input fb__input-textarea"></textarea>
          </div>
          <label class="fb__checkbox-label">
            <input class="fb__checkbox" type="checkbox">
            <span class="fb__fake-checkbox"></span>
            <span class="fb__checkbox-text">Соглашаюсь с условиями <span class="fb__checkbox-text-span">Политики
                конфиденциальности</span></span>
          </label>
          <label class="fb__checkbox-label fb__checkbox-label-second">
            <input class="fb__checkbox" type="checkbox">
            <span class="fb__fake-checkbox"></span>
            <span class="fb__checkbox-text">Соглашаюсь с условиями <span class="fb__checkbox-text-span">
                Согласия на обработку персональных данных, Согласия Пользователя на обработку персональных данных
              </span></span>
          </label>
          <button class="fb__button">Задать вопрос</button>
        </form>
      </div>
    </div>

    <div class="fb__notice fb__notice-display-none">
      <div class="fb__notice-close"></div>
      <h1 class="fb__notice-title">СПАСИБО!</h1>
      <span class="fb__notice-text">Мы ценим каждое обращение и ответим в ближайшее время на e-mail</span>
    </div>
  </div>

  <!-- ------------------------- -->

  <section class="main-block-404">
    <?php
    include 'components/header/header.php';
    ?>

    <div class="p404 container flex">
      <div>

        <picture style="display: flex;">
          <source srcset="img/404-robot-mobile.webp" media="(max-width: 480px)">
          <source srcset="img/404-robot-tablet.webp" media="(max-width: 768px)">
          <img class="p404-img" src="img/404-robot.webp" alt="404Planet">
        </picture>

        <div class="p404-stripes-pic">
          <picture style="display: flex; align-self: center; width: 1010%">
            <source srcset="img/404-stripes-mobile.webp" media="(max-width: 480px)">
            <source srcset="img/404-stripes-tablet.webp" media="(max-width: 768px)">
            <img class="" src="img/404-stripes.webp" alt="404Planet">
          </picture>
        </div>

        <div class="hero-btn-wrap" style="margin-bottom: 30px; margin-top: 20px;">
          <button onclick="window.location.href ='index.html'" class="btn-reset btn p401-btn"
            style="width: 100%;">Вернуться на главную</button>
        </div>

      </div>
    </div>

  </section>

  <?php
  include 'components/footer/footer.php';
  ?>
</body>

</html>