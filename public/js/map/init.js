async function initMap() {

    // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
    await ymaps3.ready;

    const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapControls, YMapMarker, YMapGroupEntity} = ymaps3;
    const {YMapZoomControl, YMapGeolocationControl} = await ymaps3.import('@yandex/ymaps3-controls@0.0.1');


    // Иницилиазируем карту
    const map = new YMap(
        // Передаём ссылку на HTMLElement контейнера
        document.getElementById('map'),

        // Передаём параметры инициализации карты
        {
            location: {
                // Координаты центра карты
                center: [83.192714167740135, 55.90543197646718],

                // Уровень масштабирования
                zoom: 3
            },

        },
        [
            new YMapDefaultSchemeLayer({}),
            new YMapDefaultFeaturesLayer({})
        ]
    );
    const markerProps = [
        {
            title: "ФИНЭК",
            desk: "adasasdasd",
            latitude: 15.06252622511122,
            longitude: 98.99731322616615,
            rang: 'vr',
            type: 'add'
        },
        {
            title: "ФИНЭ",
            desk: "adasasdasd",
            latitude: 34.90765560419258,
            longitude: 62.274258541957394,
            rang: 'ar',
            type: 'add'
        },
        {
            title: "ФИНЭ",
            desk: "adasasdasd",
            latitude: 36.90765560419258,
            longitude: 64.274258541957394,
            rang: 'robot',
            type: 'add'
        },
        {
            title: "СПБГУ",
            desk: "aa",
            latitude: 45.06252622511122,
            longitude: 38.99731322616615,
            rang: 'vr',
            type: 'aver'
        },
        {
            title: "СПБГУ",
            desk: "aa",
            latitude: 48.06252622511122,
            longitude: 33.99731322616615,
            rang: 'robot',
            type: 'aver'
        },

        {
            title: "СПБГУ",
            desk: "aaa",
            latitude: 54.90765560419258,
            longitude: 52.274258541957394,
            rang: 'ar',
            type: 'aver'
        },
        {
            title: "ФГАОУ ВО «Национальный исследовательский ядерный университет «МИФИ»",
            city: 'Москва',
            subtitle: "Федеральное государственное автономное образовательное учреждение высшего образования «Национальный исследовательский ядерный университет «МИФИ»",
            direction: "15.03.06 – Мехатроника и робототехника",
            description: "Осуществляется практическая подготовка бакалавров, способных успешно работать в сфере деятельности, связанной с разработкой и сопровождением эксплуатации мехатронных, киберфизических и робототехнических систем в атомной промышленности и других высокотехнологичных отраслях.",
            format: "бакалавриат - 4 года",
            citizen: 'https://eng.mephi.ru/academics/admissions',
            latitude: 50.582061,
            longitude: 36.596484,
            rang: 'vr',
            type: 'high'
        },
        {
            title: "ФГАОУ ВО «Белгородский государственный технологический университет им. В.Г. Шухова»",
            city: 'Белгород',
            subtitle: "Федеральное государственное автономное образовательное учреждение высшего образования «Национальный исследовательский ядерный университет «МИФИ»",
            direction: "15.03.06 – Мехатроника и робототехника",
            description: "Область профессиональной деятельности выпускников, освоивших программу: цифровые методы и средства проектирования, математического, физического и компьютерного моделирования технологических процессов. Выпускники разрабатывают инновационные технологии и их цифровые двойники для самых перспективных отраслей промышленности – автомобиле-, авиа-, ракетостроения, энергетики и атомной промышленности и эффективно их внедряют на производстве.",
            format: "бакалавриат - 4 года",
            citizen: 'https://eng.mephi.ru/academics/admissions',
            latitude: 55.649803162,
            longitude: 37.664463043,
            rang: 'ar',
            type: 'high'
        },
        {
            title: "ФГАОУ ВО «Белгородский государственный технологический университет им. В.Г. Шухова»",
            city: 'Белгород',
            subtitle: "Федеральное государственное автономное образовательное учреждение высшего образования «Национальный исследовательский ядерный университет «МИФИ»",
            direction: "15.03.06 – Мехатроника и робототехника",
            description: "Область профессиональной деятельности выпускников, освоивших программу: цифровые методы и средства проектирования, математического, физического и компьютерного моделирования технологических процессов. Выпускники разрабатывают инновационные технологии и их цифровые двойники для самых перспективных отраслей промышленности – автомобиле-, авиа-, ракетостроения, энергетики и атомной промышленности и эффективно их внедряют на производстве.",
            format: "бакалавриат - 4 года",
            citizen: 'https://eng.mephi.ru/academics/admissions',
            latitude: 15.649803162,
            longitude: 57.664463043,
            rang: 'robot',
            type: 'high'
        }
    ]

    class CustomMenuControl extends YMapGroupEntity {
        constructor(props) {
            super();
            this._props = markerProps;
            this._activeFilter = [];
            this._markers = []
        }

        _onAttach() {
            this._createMenu();
        }

        _createMenu() {
            const checkbox = document.querySelectorAll('.tab_map__checkbox')
            this._props.forEach((item) => {
                const markerElement = document.createElement('img');
                markerElement.className = 'icon-marker';
                markerElement.src = '/img/star.svg';
                const marker = new YMapMarker({coordinates: [item.latitude, item.longitude]}, markerElement);
                markerElement.classList.add('cursor-pointer')
                this._markers.push(marker);

                markerElement.addEventListener('click', () => {
                    this._openDetailModal(item)
                    this._openCustomPopup(item, marker);
                })
                map.addChild(marker)
            })
            checkbox.forEach((elem) => {
                elem.addEventListener('change', () => {
                    this._props.forEach((item) => {
                        if (elem.checked && item.rang === elem.value) {
                            const markerElement = document.createElement('img');
                            markerElement.className = 'icon-marker';
                            markerElement.src = '/img/star.svg';
                            const marker = new YMapMarker({coordinates: [item.latitude, item.longitude]}, markerElement);
                            this._markers.push(marker);
                            markerElement.classList.add('cursor-pointer')
                            markerElement.addEventListener('click', () => {
                                this._openDetailModal(item)
                            })

                            map.addChild(marker)
                        } else {
                            if (!elem.checked && elem.value === item.rang) {
                                const markerIndex = this._markers.findIndex(marker =>
                                    marker._props.coordinates[0] === item.latitude && marker._props.coordinates[1] === item.longitude
                                );
                                if (markerIndex !== -1) {
                                    // Удаляем маркер с карты
                                    map.removeChild(this._markers[markerIndex]);
                                    this._markers.splice(markerIndex, 1)
                                }
                            }
                        }
                    })
                })
            })
        }

        _openDetailModal(item) {
            const modal = document.querySelector('.detail-modal');
            const modalContent = modal.querySelector('.modal__body__img img');
            const customPopup = document.querySelector('.add-modal');

            // Заполнение модалки данными из item
            modal.querySelector('#modalTitle').innerText = item.title || 'Название не указано';
            modal.querySelector('#modalDescription').innerText = item.description || 'Описание не указано';
            modal.querySelector('#modalDirection').innerText = item.direction || 'Направление не указано';
            modal.querySelector('#modalFormat').innerText = item.format || 'Формат не указан';

            modalContent.src = item.image || 'img/default-image.jpg'; // Путь к изображению по умолчанию

            // Показать модалку
            modal.style.display = 'block';

            modal.addEventListener('click', () => {
                modal.style.display = 'none'
                customPopup.style.display = 'none'
            })

        }

        _openCustomPopup(item, marker) {
            // Получаем координаты маркера
            const coordinates = marker.coordinates;
            console.log(coordinates)

            // Вычисляем новые координаты для позиционирования окна справа от маркера
            const offsetX = 0; // Смещение по оси X
            const offsetY = 0; // Смещение по оси Y (можно изменить для вертикального смещения)

            const popupCoordinates = [coordinates[0] + offsetX, coordinates[1] + offsetY];

            // Создаем и отображаем ваше кастомное окно
            const customPopup = document.querySelector('.add-modal');
            customPopup.querySelector('p').textContent = item.title
            customPopup.style.display = 'flex'
            const popupMarker = new YMapMarker({coordinates: popupCoordinates}, customPopup);
            map.addChild(popupMarker);

            // Можно добавить обработчик для закрытия окна
            customPopup.addEventListener('click', () => {
                map.removeChild(popupMarker); // Удаляем окно при клике
            });
        }
    }

    const menuControl = new CustomMenuControl(markerProps);
    menuControl._onAttach();
    map.addChild(new YMapDefaultSchemeLayer());
    map.addChild(
        // Here we place the control on the right
        new YMapControls({position: 'right'})
            // Add the first zoom control to the map
            .addChild(new YMapZoomControl({}))
            .addChild(new YMapGeolocationControl({}))
    );
    // help modal
    const helpModal = document.querySelector('.help-modal')
    helpModal.addEventListener('click', () => {
        helpModal.classList.add('d-none')
        helpModal.classList.remove('d-block')
    })
    const helpModalBtn = document.querySelector('.help-modal-btn')
    helpModalBtn.addEventListener('click', () => {
        helpModal.classList.add('d-block')
        helpModal.classList.remove('d-none')
    })
    // detail Modal

}

window.onload = initMap()