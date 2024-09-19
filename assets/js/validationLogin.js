const auth = document.querySelector(".auth");
const authClose = document.querySelector(".auth__close");

authClose.addEventListener("click", (e) => {
  e.preventDefault();
  window.location.href = '/';
});

const missPassButton = document.querySelector('.auth__miss-pass')

missPassButton.addEventListener('click', (e) => {
  window.location.href = 'recovery.html';
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


// let authValidation = new JustValidate('#authform', {
//   focusInvalidField: false,
// });

// authValidation.addField('#username', [
//   {
//     rule: 'required',
//     errorMessage: 'Введите Email'
//   },
//   {
//     rule: "email",
//     errorMessage: "Введите корректный E-mail",
//   },
//   {
//     rule: "maxLength",
//     value: 256,
//     errorMessage: "E-mail не может содержать больше 256 символов",
//   },
// ])
//   .addField('#password', [
//     {
//       rule: 'required',
//       errorMessage: 'Введите пароль'
//     },
//     {
//       rule: "maxLength",
//       value: 64,
//       errorMessage: "Пароль не может содержать больше 64 символов",
//     },
//     {
//       rule: "minLength",
//       value: 6,
//       errorMessage: "Пароль не может содержать меньше 6 символов",
//     }
//   ])
//   .onSuccess((e) => {
//     e.preventDefault()
//     window.location.href = '/';
//   })

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