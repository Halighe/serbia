
//Valid reg form
let regValidation = new JustValidate('#regform', {
  focusInvalidField: false,
});

regValidation.addField('#namereg', [
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
  .addField('#emailreg', [
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
  .addField('#phonereg', [
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
  .addField('#cityreg', [
    {
      rule: 'required',
      errorMessage: 'Выберите город'
    }
  ])
  .addField('#catreg', [
    {
      rule: 'required',
      errorMessage: 'Выберите категорию'
    }
  ])
  .addField('#schoolreg', [
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
  .addField('#profnamereg', [
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
    regNotice.style.display = "flex";
  })

let authValidation = new JustValidate('#authform', {
  focusInvalidField: false,
});

authValidation.addField('#emailauth', [
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
  .addField('#passauth', [
    {
      rule: 'required',
      errorMessage: 'Введите пароль'
    },
    {
      rule: "maxLength",
      value: 64,
      errorMessage: "Пароль не может содержать больше 64 символов",
    },
    {
      rule: "minLength",
      value: 6,
      errorMessage: "Пароль не может содержать меньше 6 символов",
    }
  ])
  .onSuccess((e) => {
    e.preventDefault()
  })

// валидация формы обратной связи
const inputWithClearFb = document.querySelectorAll('.input__clear-fb')

let fbValidation = new JustValidate('#fb-form', {
  focusInvalidField: false,
});

fbValidation.addField('#namefb', [
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
  .addField('#emailfb', [
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
  .addField('#phonefb', [
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
  .addField('#textarea', [
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
    fbNotice.style.display = "flex";
    fb.style.display = "none";
    inputWithClearFb.forEach((item) => {
      clearFields(item);
    });
  });


const passwordBtns = document.querySelectorAll(".input-figure-eye");
const inputPasswords = document.querySelectorAll(".input__pass");

for (let i = 0; i < passwordBtns.length; i++) {
  passwordBtns[i].addEventListener("click", function (e) {
    e.preventDefault();

    const inputPassword = inputPasswords[i];
    if (inputPassword.getAttribute("type") === "password") {
      inputPassword.setAttribute("type", "text");
    } else {
      inputPassword.setAttribute("type", "password");
    }
  });
}
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

const radioDisable = document.getElementById('disable')
const radioEnable = document.getElementById('enable')
const inputProfname = document.querySelector('.reg__input-profname')

if (radioDisable) {
  radioDisable.addEventListener('click', function () {
    inputProfname.removeAttribute('required')
    regValidation.removeField('#profname')
  })
}

if (radioEnable) {
  radioEnable.addEventListener('click', function () {
    inputProfname.setAttribute('required', 'required')
    regValidation.addField('#profname', [
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

// Модалка авторизации открытие/закрытие
const btnBurger = document.querySelector(".burger__btn");
const btnHeader = document.querySelector(".header__btn");
const auth = document.querySelector(".auth");
const authClose = document.querySelector(".auth__close");

btnHeader.addEventListener("click", (e) => {
  e.preventDefault();
  auth.style.display = "flex";
  body.classList.add("noscroll");
});

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

// Модалка регистрации открытие/закрытие
const btnHero = document.querySelector(".hero-btn");
const btnCard = document.querySelectorAll(".card-btn");
const reg = document.querySelector(".reg");
const regClose = document.querySelector(".reg__close");
const regNoticeClose = document.querySelector('.reg__notice-close')
const regButton = document.querySelector('.reg__button')
const regNotice = document.querySelector('.reg__notice-container')

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

regNoticeClose.addEventListener("click", (e) => {
  e.preventDefault();
  regNotice.style.display = "none";
  body.classList.remove("overflow-body");
});

// Модалка обратной связи открытие/закрытие
const btnFooter = document.querySelector(".footer__btn");
const fb = document.querySelector(".fb");
const fbClose = document.querySelector(".fb__close");
const fbNotice = document.querySelector('.fb__notice-container')
const fbNoticeClose = document.querySelector('.fb__notice-close')

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

fbNoticeClose.addEventListener("click", (e) => {
  e.preventDefault();
  fbNotice.style.display = "none";
  body.classList.remove("overflow-body");
});



// Модалка "Забли пароль"

const missPassButton = document.querySelector('.auth__miss-pass')
const passModal = document.querySelector('.pass__modal-z')
const passModalEmail = document.querySelector('.pass__container-email')

const passModalCode = document.querySelector('.pass__container-code')

const passModalPasswords = document.querySelector('.pass__container-pass')

const passModalClose = document.querySelector('.pass__close')

missPassButton.addEventListener('click', (e) => {
  auth.style.display = "none";
  passModal.style.display = "flex";
  passModalEmail.style.display = "flex";
})

passModalClose.addEventListener('click', (e) => {
  body.classList.remove("noscroll");
  passModal.style.display = "none";
  passModalCode.style.display = "none";
})

// PassForms

let passValidation = new JustValidate('#passform', {
  focusInvalidField: false,
});

passValidation.addField('#emailpassform', [
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
  .onSuccess((e) => {
    e.preventDefault()
    passModalEmail.style.display = "none";
    passModalCode.style.display = "flex";
  })


let codeValidation = new JustValidate('#codeform', {
  focusInvalidField: false,
});

codeValidation.addField('#code', [
  {
    rule: 'required',
    errorMessage: ' '
  },
])
  .onSuccess((e) => {
    e.preventDefault()
    passModalCode.style.display = "none";
    passModalPasswords.style.display = "flex";
  })


let passwordsValidation = new JustValidate('#passwords', {
  focusInvalidField: false,
});

passwordsValidation.addField('#newpass-passform', [
  {
    rule: 'required',
    errorMessage: 'Введите новый пароль'
  },
  {
    rule: "maxLength",
    value: 64,
    errorMessage: "Новый пароль не может содержать больше 64 символов",
  },
  {
    rule: "minLength",
    value: 6,
    errorMessage: "Новый пароль не может содержать меньше 6 символов",
  }
])
  .addField('#repnewpass-passform', [
    {
      rule: 'required',
      errorMessage: 'Повторите новый пароль'
    },
    {
      validator: (value, fields) => {
        if (
          fields['#newpass'] &&
          fields['#repnewpass'].elem
        ) {
          const repeatPasswordValue =
            fields['#newpass'].elem.value;

          return value === repeatPasswordValue;
        }

        return true;
      },
      errorMessage: 'Пароли не совпадают',
    }
  ])
  .onSuccess((e) => {
    e.preventDefault()
    body.classList.remove("noscroll");
    passModal.style.display = "none";
    passModalPasswords.style.display = "none";
  })