//Valid reg form
// let regValidation = new JustValidate('#regform', {
//   focusInvalidField: false,
// });

// regValidation.addField('#participant_fio', [
//   {
//     rule: 'required',
//     errorMessage: 'Введите Ф.И.О.'
//   },
//   {
//     rule: "customRegexp",
//     value: /[a-zа-яё]/i,
//     errorMessage: "Введите корректное Ф.И.О.",
//   },
//   {
//     rule: "maxLength",
//     value: 100,
//     errorMessage: "Фамилия не может содержать больше 100 символов",
//   },
// ])
//   .addField('#participant_email', [
//     {
//       rule: 'required',
//       errorMessage: 'Введите Email'
//     },
//     {
//       rule: "email",
//       errorMessage: "Введите корректный E-mail",
//     },
//     {
//       rule: "maxLength",
//       value: 256,
//       errorMessage: "E-mail не может содержать больше 256 символов",
//     },
//   ])
//   .addField('#participant_city', [
//     {
//       rule: 'required',
//       errorMessage: 'Выберите город'
//     }
//   ])
//   .addField('#participant_category', [
//     {
//       rule: 'required',
//       errorMessage: 'Выберите категорию'
//     }
//   ])
//   .addField('#participant_school', [
//     {
//       rule: 'required',
//       errorMessage: 'Введите наименование учебного заведения'
//     },
//     {
//       rule: "customRegexp",
//       value: /[a-zа-яё]/i,
//       errorMessage: "Введите корректное наименование учебного заведения",
//     },
//     {
//       rule: "maxLength",
//       value: 100,
//       errorMessage: "Наименование учебного заведения не может содержать больше 156 символов",
//     },
//   ])
//   .addField('#participant_representative', [
//     {
//       rule: 'required',
//       errorMessage: 'Введите Ф.И.О. представителя'
//     },
//     {
//       rule: "customRegexp",
//       value: /[a-zа-яё]/i,
//       errorMessage: "Введите корректное Ф.И.О. представителя",
//     },
//     {
//       rule: "maxLength",
//       value: 100,
//       errorMessage: "Ф.И.О. представителя не может содержать больше 100 символов",
//     },
//   ])
//   .addField('#checkboxreg', [
//     {
//       rule: 'required',
//       errorMessage: " ",
//     }
//   ])
  // .onSuccess((e) => {
  //   e.preventDefault()
  //   reg.style.display = "none";
  //   window.location.href = 'regthanks.html';
  // })


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

for (let i = 0; i < li_item_city.length; i = i + 1) {
  li_item_city[i].addEventListener('click', function () {
    inp_city.value = this.dataset.value;
    regSelectCity.classList.add('reg-select-hidden')
  }, false)
}

//радокнопка снимает/навешивает required

const radioDisable = document.getElementById('participant_adult_0')
const radioEnable = document.getElementById('participant_adult_1')
const inputProfname = document.querySelector('.reg__input-profname')
const inputProfnameSelect = document.querySelector('.reg__input-label-last')

if (radioDisable) {
  radioDisable.addEventListener('click', function () {
    // inputProfname.removeAttribute('required')
    inputProfnameSelect.classList.remove('reg__input-label-last-enable')
  })
}

if (radioEnable) {
  radioEnable.addEventListener('click', function () {
    // inputProfname.setAttribute('required', 'required')
    inputProfnameSelect.classList.add('reg__input-label-last-enable')
    // regValidation.addField('#participant_representative', [
    //   {
    //     rule: 'required',
    //     errorMessage: 'Введите Ф.И.О. представителя'
    //   },
    //   {
    //     rule: "customRegexp",
    //     value: /[a-zа-яё]/i,
    //     errorMessage: "Введите корректное Ф.И.О. представителя",
    //   },
    //   {
    //     rule: "maxLength",
    //     value: 100,
    //     errorMessage: "Ф.И.О. представителя не может содержать больше 100 символов",
    //   },
    // ])
  })
}
