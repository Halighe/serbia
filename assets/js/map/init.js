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
                center: [83.192714167740135, 55.90543197646718],
                zoom: 3
            },
        },
        [
            new YMapDefaultSchemeLayer({}),
            new YMapDefaultFeaturesLayer({})
        ]
    );
    const markerProps = async () => {
        const res = await axios.get('https://vr-rs.ru/api/universities')
        return res.data['hydra:member'];
    }

    class CustomMenuControl extends YMapGroupEntity {
        constructor(props) {
            super();
            this._props = [];
            this._activeFilter = [];
            this._markers = []
        }

        async _onAttach() {
            this._props = await markerProps();
            this._createMenu();
        }

        _createMenu() {
            const checkbox = document.querySelectorAll('.tab_map__checkbox')
            this._props.forEach((item) => {
                console.log()
                const markerElement = document.createElement('img');
                markerElement.className = 'icon-marker';
                markerElement.src = '/img/star.svg';
                const marker = new YMapMarker({coordinates: [parseFloat(item.longitude.replace(/,/g, ".")),
                parseFloat(item.latitude.replace(/,/g, "."))]}, markerElement);
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
                        console.log(item.filter.split(' '))
                        if (elem.checked) {
                            const values = elem.value.split(' ');
                            if (values.some(value => item.filter.includes(value))) {
                                const markerElement = document.createElement('img');
                                markerElement.className = 'icon-marker';
                                markerElement.src = '/img/star.svg';
                                const marker = new YMapMarker({coordinates: [parseFloat(item.longitude.replace(/,/g, ".")),
                                parseFloat(item.latitude.replace(/,/g, "."))]}, markerElement);
                                this._markers.push(marker);
                                markerElement.classList.add('cursor-pointer')
                                markerElement.addEventListener('click', () => {
                                    this._openDetailModal(item)
                                })
                                map.addChild(marker)
                            }

                        } else {
                            if (!elem.checked) {
                                const values = elem.value.split(' ');
                                if (values.some(value => item.filter.includes(value))) {
                                    const markerIndex = this._markers.findIndex(marker =>
                                        marker._props.coordinates[0] === parseFloat(item.longitude.replace(/,/g, ".")) && marker._props.coordinates[1] === parseFloat(item.latitude.replace(/,/g, "."))
                                    );
                                    if (markerIndex !== -1) {
                                        // Удаляем маркер с карты
                                        map.removeChild(this._markers[markerIndex]);
                                        this._markers.splice(markerIndex, 1)
                                    }
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
            
            // Массив с изображениями
            const images = [item.img1, item.img2, item.img3];
            let currentImageIndex = 0;
            function loadImage() {
                if (currentImageIndex < images.length) {
                    const img = new Image();
                    img.src = images[currentImageIndex];
                    img.onload = function () {
                        console.log('Картинка успех')
                        modalContent.src = img.src;
                    };
                    img.onerror = function () {
                        currentImageIndex++;
                        loadImage();
                    };
                } else {
                    console.log('Картинка офф')
                    modalContent.src = 'img/default-image.jpg';
                }
            }
            loadImage();
            // Заполнение модалки данными из item
            modal.querySelector('#modalCity').innerText = item.city
            modal.querySelector('#modalTitle').innerText = item.shortname || 'Название не указано';
            modal.querySelector('#modalDescription').innerText = item.description || 'Описание не указано';
            modal.querySelector('#modalDirection').innerText = item.direction || 'Направление не указано';
            modal.querySelector('#modalFormat').innerText = item.format || 'Формат не указан';

            // modalContent.src = item.image || 'img/default-image.jpg'; // Путь к изображению по умолчанию

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

const sliderContainer = document.querySelector('.tab_map');

let isDown = false; // Флаг для отслеживания состояния мыши
let startX; // Начальная позиция курсора
let scrollLeft; // Текущее положение прокрутки

// Обработчик события нажатия кнопки мыши
sliderContainer.addEventListener('mousedown', (e) => {
    isDown = true; // Устанавливаем флаг
    sliderContainer.classList.add('dragging'); // Добавляем класс для активного состояния
    startX = e.pageX - sliderContainer.offsetLeft; // Получаем начальную позицию курсора
    scrollLeft = sliderContainer.scrollLeft; // Получаем текущее положение прокрутки
});

// Обработчик события отпускания кнопки мыши
sliderContainer.addEventListener('mouseup', () => {
    isDown = false; // Сбрасываем флаг
    sliderContainer.classList.remove('dragging'); // Убираем класс активного состояния
});

// Обработчик события движения мыши
sliderContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return; // Если не нажато, ничего не делаем
    e.preventDefault(); // Предотвращаем стандартное поведение
    const x = e.pageX - sliderContainer.offsetLeft; // Получаем текущую позицию курсора
    const walk = (x - startX) * 2; // Скорость прокрутки
    sliderContainer.scrollLeft = scrollLeft - walk; // Обновляем положение прокрутки
});

// Обработчик события выхода мыши за пределы контейнера
sliderContainer.addEventListener('mouseleave', () => {
    if (isDown) {
        isDown = false; // Сбрасываем флаг
        sliderContainer.classList.remove('dragging'); // Убираем класс активного состояния
    }
});
window.onload = initMap()