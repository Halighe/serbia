<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта будущего</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script defer src="js/script.js"></script>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/future_map.css"/>
    <script src="https://api-maps.yandex.ru/v3/?apikey=409c56c9-7868-499c-af77-f29e4cde70d9&lang=ru_RU"></script>


</head>

<body>

<main class="">
    <section class="title_block">
        <?php include 'components/header/header.php'; ?>
        <div class="container">
            <h1 class="section-subtitle ">Карта будущего</h1>
            <p class="section-text">
                Твой гид в мире образования завтрашнего дня. Здесь ты сможешь познакомиться с ведущими образовательными
                учреждениями России, предлагающими обучение по специальностям робототехника, мехатроника, VR и AR.
            </p>
        </div>
    </section>
    <section class="map_block">
        <div class="tab_map_wrapper container">
            <p class="section-text">Направление:</p>
            <div class="tab_map">
                <input type="checkbox" id="vr" class="tab_map__checkbox" checked value="vr">
                <label for="vr" class="tab_map__button">
                    <img src="img/vr_btn.svg" alt="br_btn">
                    VR
                </label>

                <input type="checkbox" id="ar" class="tab_map__checkbox" checked value="ar">
                <label for="ar" class="tab_map__button">
                    <img src="img/vr_btn.svg" alt="br_btn">
                    AR
                </label>

                <input type="checkbox" id="robotics" class="tab_map__checkbox" checked value="robot">
                <label for="robotics" class="tab_map__button">
                    <img src="img/vr_btn.svg" alt="br_btn">
                    Робототехника
                </label>
            </div>
        </div>

        <div class="container map_wrapper ">
            <div class=""></div>
            <div id="map">
            </div>
            <svg viewBox="0 0 1360 760" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M688.225 0H0L0.5 117L60.5 57.5H634L688.225 0Z" fill="#0E0214"/>
                <path d="M1359.5 0L1360 265L1302.5 208.5L1300.03 2.5H1300L1298 0H1300H1359.5Z" fill="#0E0214"/>
                <path
                    d="M446 758H165.5H6C3.79086 758 2 756.209 2 754V659V117.501C2 116.434 2.42622 115.411 3.18391 114.66L1.78445 113.248L3.18391 114.66L59.1695 59.1593C59.9187 58.4167 60.9308 58 61.9856 58H630.384C632.608 58 634.732 57.0737 636.246 55.4436L684.685 3.2782C685.442 2.46313 686.504 2 687.616 2H1298C1300.21 2 1302 3.79086 1302 6V205.483C1302 207.63 1302.86 209.686 1304.39 211.191L1356.8 262.663C1357.57 263.415 1358 264.444 1358 265.517V754C1358 756.209 1356.21 758 1354 758H446Z"
                    stroke="url(#paint0_linear_2254_24991)" stroke-width="4"/>
                <path d="M115 0H649L621 28H87L115 0Z" fill="url(#paint1_linear_2254_24991)"/>
                <path d="M1332 197L1360 225V0H1332V197Z" fill="url(#paint2_linear_2254_24991)"/>
                <defs>
                    <linearGradient id="paint0_linear_2254_24991" x1="0" y1="380" x2="1360" y2="380"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFAA00"/>
                        <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_2254_24991" x1="87" y1="14" x2="649" y2="14"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFAA00"/>
                        <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_2254_24991" x1="1332" y1="112.5" x2="1360" y2="112.5"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFAA00"/>
                        <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                </defs>
            </svg>
            <span class="help-modal-btn">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30 54.9999C43.75 54.9999 55 43.7499 55 29.9999C55 16.2499 43.75 4.99988 30 4.99988C16.25 4.99988 5 16.2499 5 29.9999C5 43.7499 16.25 54.9999 30 54.9999Z"
                        fill="#0E0214" fill-opacity="0.5" stroke="url(#paint0_linear_2111_52721)" stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M28.0075 35.4957V34.8054C28.016 33.4588 28.1651 32.3636 28.4549 31.5199C28.7447 30.6761 29.1708 29.9645 29.7333 29.3849C30.3043 28.7969 31.0117 28.2344 31.8555 27.6974C32.4862 27.2883 33.0146 26.8579 33.4407 26.4062C33.8754 25.946 34.2035 25.4432 34.4251 24.8977C34.6552 24.3437 34.7702 23.7429 34.7702 23.0951C34.7702 22.1747 34.5529 21.3693 34.1183 20.679C33.6921 19.9886 33.1126 19.4559 32.3796 19.0809C31.6467 18.6974 30.8327 18.5057 29.9379 18.5057C29.0856 18.5057 28.2887 18.6932 27.5472 19.0682C26.8143 19.4346 26.2134 19.9801 25.7447 20.7045C25.2844 21.4204 25.033 22.3068 24.9904 23.3636H22.5742C22.6168 21.9574 22.9663 20.7386 23.6225 19.7074C24.2788 18.6761 25.1566 17.8792 26.256 17.3167C27.3555 16.7457 28.5827 16.4602 29.9379 16.4602C31.3526 16.4602 32.5969 16.7542 33.6708 17.3423C34.7447 17.9219 35.5842 18.7187 36.1893 19.7329C36.7944 20.7386 37.0969 21.8934 37.0969 23.1974C37.0969 24.0582 36.9606 24.8423 36.6879 25.5497C36.4151 26.2571 36.006 26.9091 35.4606 27.5057C34.9237 28.1023 34.2504 28.6648 33.4407 29.1932C32.6737 29.7045 32.0643 30.2116 31.6126 30.7145C31.1609 31.2173 30.837 31.7926 30.641 32.4403C30.445 33.0795 30.3384 33.8679 30.3214 34.8054V35.4957H28.0075ZM29.2347 43.1917C28.7319 43.1917 28.2972 43.0128 27.9308 42.6548C27.5728 42.2883 27.3938 41.8537 27.3938 41.3508C27.3938 40.8395 27.5728 40.4048 27.9308 40.0469C28.2972 39.6889 28.7319 39.5099 29.2347 39.5099C29.7376 39.5099 30.168 39.6889 30.5259 40.0469C30.8924 40.4048 31.0756 40.8395 31.0756 41.3508C31.0756 41.6832 30.9904 41.99 30.82 42.2713C30.658 42.5525 30.4364 42.7784 30.1552 42.9488C29.8825 43.1108 29.5756 43.1917 29.2347 43.1917Z"
                        fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_2111_52721" x1="5" y1="29.9999" x2="55" y2="29.9999"
                                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFAA00"/>
                    <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                    </defs>
                    </svg>
            </span>
            <div class="help-modal">
                <img src="./img/container_info.svg" alt="info_block">
                <p>Пользоваться картой легко и удобно: достаточно указать направление обучения и тип учебного заведения,
                    и карта покажет их расположение в России. Выбери место обучения в нужном регионе, и карта
                    предоставит краткую информацию о нем.</p>
            </div>

            <div class="detail-modal">
                <svg viewBox="0 0 348 658" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-modal__bg">
                    <rect x="1" y="1" width="316" height="656" fill="#0E0214"/>
                    <rect x="1" y="1" width="316" height="656" stroke="url(#paint0_linear_4001_24673)" stroke-width="2"/>
                    <rect x="306" y="117" width="4" height="63" fill="url(#paint1_linear_4001_24673)"/>
                    <mask id="path-3-inside-1_4001_24673" fill="white">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M348 0H316V32V64L348 32V0Z"/>
                    </mask>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M348 0H316V32V64L348 32V0Z" fill="#0E0214"/>
                    <path d="M316 0V-2H314V0H316ZM348 0H350V-2H348V0ZM316 64H314V68.8284L317.414 65.4142L316 64ZM348 32L349.414 33.4142L350 32.8284V32H348ZM316 2H348V-2H316V2ZM318 32V0H314V32H318ZM318 64V32H314V64H318ZM346.586 30.5858L314.586 62.5858L317.414 65.4142L349.414 33.4142L346.586 30.5858ZM346 0V32H350V0H346Z" fill="url(#paint2_linear_4001_24673)" mask="url(#path-3-inside-1_4001_24673)"/>
                    <path d="M322 26L341.799 6.20101" stroke="url(#paint3_linear_4001_24673)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" id="closeDetail"/>
                    <path d="M341.799 25.799L322 6" stroke="url(#paint4_linear_4001_24673)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_4001_24673" x1="0" y1="329" x2="357.735" y2="78.0358" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="0.789328" stop-color="#AA00FF"/>
                            <stop offset="0.965" stop-color="#AA00FF"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4001_24673" x1="306" y1="148.5" x2="310" y2="148.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="1" stop-color="#AA00FF"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_4001_24673" x1="316" y1="32" x2="348" y2="32" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#AA00FF"/>
                            <stop offset="0.445417" stop-color="#FFAA00"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear_4001_24673" x1="322.354" y1="26.3536" x2="342.153" y2="6.55456" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="1" stop-color="#AA00FF"/>
                        </linearGradient>
                        <linearGradient id="paint4_linear_4001_24673" x1="331.899" y1="15.8995" x2="332.607" y2="15.1924" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="1" stop-color="#AA00FF"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="detail-modal__body">
                    <div class="modal__body__img">
                        <img src="#" alt="info_block">
                    </div>
                    <div class="pb-40">
                        <p id="modalCity" class="font-16 pb-10 pt-10">г.Жатай</p>
                        <span id="modalTitle" class="font-24">
                        Федеральное государственное автономное образовательное учреждение высшего образования «Новосибирский национальный исследовательский государственный университет»
                        </span>
                    </div>
                    <div class="pb-40"">
                        <p class="font-20 pb-10">Направление профессиональной подготовки:</p>
                        <span id="modalDirection" class="font-16 pb-40">15.03.06 «Мехатроника и робототехника. Искусственный интеллект» («Когнитивная робототехника»)</span>
                    </div>
                    <div class="pb-40"">
                        <p class="font-20 pb-10">О программе:</p>
                        <span id="modalDescription" class="font-16 pb-40">
                        Программа бакалавриата «Когнитивная робототехника» готовит к тому, что будет завтра: беспилотный транспорт, умные и ловкие роботы, производство будущего. Студенты изучают и создают продукты на базе глубокого машинного обучения.
                        </span>
                    </div>
                    <div class="pb-40"">
                        <p class="font-20 pb-10">Формат и сроки обучения:</p>
                        <span id="modalFormat" class="font-16 pb-10">бакалавриат, 4 года</span>
                    </div>
                </div>

            </div>


        </div>
    </section>
</main>


<?php include 'components/footer/footer.php'; ?>
<script defer src="js/map/init.js"></script>
</body>

</html>