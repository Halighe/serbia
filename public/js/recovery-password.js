const passModalClose = document.querySelector('.pass__close')

passModalClose.addEventListener('click', (e) => {
  window.location.href = '/login';
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
    window.location.href = '/login';
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