const auth = document.querySelector(".auth");
const authClose = document.querySelector(".auth__close");

authClose.addEventListener("click", (e) => {
  e.preventDefault();
  window.location.href = '/';
});

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
  passModal.style.display = "none";
  passModalCode.style.display = "none";
  window.location.href = '/';
})

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
    window.location.href = '/';
  })

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
          fields['#newpass-passform'] &&
          fields['#repnewpass-passform'].elem
        ) {
          const repeatPasswordValue =
            fields['#newpass-passform'].elem.value;

          return value === repeatPasswordValue;
        }

        return true;
      },
      errorMessage: 'Пароли не совпадают',
    }
  ])
  .onSuccess((e) => {
    e.preventDefault()
    passModalPasswords.style.display = "none";
    window.location.href = '/';
  })

let codeValidation = new JustValidate('#codeform', {
  focusInvalidField: false,
});

codeValidation.addField('#code', [
  {
    rule: 'required',
    errorMessage: ' '
  },
  {
    rule: 'minLength',
    value: 10,
    errorMessage: "Код содержит минимум 10 симоволов",
  }
])
  .onSuccess((e) => {
    e.preventDefault()
    passModalCode.style.display = "none";
    passModalPasswords.style.display = "flex";
  })


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