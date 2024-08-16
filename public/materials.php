<?php
  // $url = 'http://localhost/api/materials/';
  // $curl = curl_init();
  // curl_setopt($curl, CURLOPT_URL, $url);
  // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  // $out = curl_exec($curl);
  // curl_close($curl);

  // var_dump($out);
  // $curl = curl_init(); 
  // curl_setopt($curl, CURLOPT_URL, $url); 
  // curl_setopt($curl, CURLOPT_POST, 1); 
  // // curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($url_params))); 
  // // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
  // // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
  // $result = curl_exec($curl); 
  // curl_close($curl); 
  // $userInfo = json_decode($result, true); 
  // // $userInfo = file_get_contents($url);
  // var_dump($userInfo);
  // // var_dump($result);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Материалы</title>
  <script defer src="js/materials.js"></script>
  <script defer src="js/menu-modals.js"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css" />
  <link rel="stylesheet" href="css/modals.css">
  <link rel="stylesheet" href="css/materials.css" />
</head>

<body>

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
          <a href="/future_map.php" class="burger__link">Карта будущего</a>
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

  <!-- -------------------- --------->
  <div class="materials_img_close"> <img src="img/close.svg" alt=""></div>

  <section class="main-block-materials">
    <?php
    include 'components/header/header.php';
    ?>

    <div class="materials-hero container flex">
      <div class="materials-hero-content">
        <div class="materials-hero-wrap">
          <p class="section-title materials-hero-title">Инновации</p>
          <p class="section-title materials-hero-title">вокруг нас</p>
          <p class="materials-hero-subtitle">погрузись в мир робототехники, VR и AR</p>
        </div>

        <div class="materials-hero-about">
          <picture>
            <source srcset="img/materials-hero-tablet.png" media="(max-width: 1024px)">
            <img src="img/material-hero.png" alt="">
          </picture>

          <p class="materials-hero-text">Робототехника, мехатроника, VR и AR — передовые технологии, которые
            стремительно развиваются, меняя мир.
            В материалах раздела представлены статьи о достижениях в указанных областях. Будьте готовы углубиться
            в мир роботов, умных машин, виртуальной и дополненной реальности.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- --------------------------- -->

  <div class="materials-footer-background">
    <section class="materials">
      <div class="container">
        <div class="caption-position">
          <div class="caption-top">
            <p class="caption-name">Рубрики</p>
          </div>
          <div class="caption-bottom opacity">
            <label class="reg__radio-label caption-label">
              <input class="reg__radio" name="age" type="radio" checked>
              <span class="reg__fake-radio"></span>
              <span class="caption-text">История развития робототехники</span>
            </label>
            <label class="reg__radio-label caption-label">
              <input class="reg__radio" name="age" type="radio">
              <span class="reg__fake-radio"></span>
              <span class="caption-text">Робототехника: прорывные технологии</span>
            </label>
            <label class="reg__radio-label caption-label">
              <input class="reg__radio" name="age" type="radio">
              <span class="reg__fake-radio"></span>
              <span class="caption-text">Занимательная робототехника</span>
            </label>
            <label class="reg__radio-label caption-label">
              <input class="reg__radio" name="age" type="radio">
              <span class="reg__fake-radio"></span>
              <span class="caption-text">Технологии будущего</span>
            </label>
            <label class="reg__radio-label caption-label">
              <input class="reg__radio" name="age" type="radio">
              <span class="reg__fake-radio"></span>
              <span class="caption-text">Тренды робототехники в России</span>
            </label>
          </div>
        </div>

        <div class="materials-info flex">
          <div class="materials_name">
            <div class="cards-wrap">
              <div class="materials_cards materials_cards--active">
                <img class="materials-cards-img" src="img/name1.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься1:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name2.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься2:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name3.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься3:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name4.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься4:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name5.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься5:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name6.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься6:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name1.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься7:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

              <div class="materials_cards">
                <img class="materials-cards-img" src="img/name2.png" alt="">
                <div>
                  <h3 class="materials-cards-name">Есть над чем задуматься8:</h3>
                  <p class="materials-cards-about">Есть над чем задуматься: явные признаки победы институционализации
                    призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                    образом
                    мышления.</p>
                </div>
              </div>

            </div>
          </div>

          <div id="start" class="materials_information">
            <div class="materials_content materials_content--active">
              <!-- <div class="materials_img_close"> <img src="img/close.svg" alt=""></div> -->

              <div class="materials-information-about">
                <h2 class="materials-information-title">Есть над чем задуматься: явные признаки победы</h2>
              </div>

              <div class="materials-information-about">
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. </p>
                <p class="materials-text-weight materials-information-text">Есть над чем задуматься:</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. </p>
              </div>

              <div class="materials-information-img">
                <img class="materials_foto" src="img/foto_1.jpg" alt="">
              </div>

              <div class="materials-information-img_link">
                <a class="materials-information-photo_caption" href="#" target="_blank">Рисунок 1</a>
              </div>

              <div class="materials-information-about information-outside">
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
              </div>

              <div class="materials-information-end">
                <a href="#start" class="materials-information-link">К началу статьи</a>
                <div class="details-top flex">
                  <p class="details-title">Читать подробно</p>
                  <i class="arrow_down-white"></i>
                </div>
              </div>

              <div class="details-bottom flex opacity">
                <ul class="details-list list-reset">
                  <li class="details-item">
                    <a href="#" class="details-link" target="_blank">Открыть файл</a>
                  </li>
                  <li class="details-item">
                    <a href="#" class="details-link" target="_blank">Открыть презентацию</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="materials_content">
              <!-- <div class="materials_img_close"> <img src="img/close.svg" alt=""></div> -->

              <div class="materials-information-about">
                <h2 class="materials-information-title">Заголовок 2</h2>
              </div>

              <div class="materials-information-about">
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. </p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. </p>
              </div>

              <div class="materials-information-img">
                <img class="materials_foto" src="img/foto_1.jpg" alt="">
              </div>

              <div class="materials-information-img_link">
                <a class="materials-information-photo_caption" href="#" target="_blank">Рисунок 1</a>
              </div>

              <div class="materials-information-about">
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления. Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
                <p class="materials-information-text">Есть над чем задуматься: явные признаки победы институционализации
                  призывают нас к новым свершениям, которые, в свою очередь, должны быть ограничены исключительно
                  образом
                  мышления.</p>
              </div>

              <div class="materials-information-end">
                <a href="#start" class="materials-information-link">К началу статьи</a>
                <div class="details-top flex">
                  <p class="details-title">Читать подробно</p>
                  <i class="arrow_down-white"></i>
                </div>
              </div>

              <div class="details-bottom flex opacity">
                <ul class="details-list list-reset">
                  <li class="details-item">
                    <a href="#" class="details-link" target="_blank">Открыть файл</a>
                  </li>
                  <li class="details-item">
                    <a href="#" class="details-link" target="_blank">Открыть презентацию</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="materials_content">Вкладка 3</div>
            <div class="materials_content">Вкладка 4</div>
            <div class="materials_content">Вкладка 5</div>
            <div class="materials_content">Вкладка 6</div>
            <div class="materials_content">Вкладка 7</div>
            <div class="materials_content">Вкладка 8</div>
          </div>
          
        </div>
      </div>
    </section>

    <?php
    include 'components/footer/footer.php';
    ?>

  </div>

</body>

</html>