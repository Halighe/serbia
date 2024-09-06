const passModalClose = document.querySelector('.pass__close')

// passModalClose.addEventListener('click', (e) => {
//   window.location.href = '/login';
// })

// let passwordsValidation = new JustValidate('#passwords', {
//   focusInvalidField: false,
// });

// passwordsValidation.addField('#change_password_newpass', [
//   {
//     rule: 'required',
//     errorMessage: 'Введите новый пароль'
//   },
//   {
//     rule: "maxLength",
//     value: 64,
//     errorMessage: "Новый пароль не может содержать больше 64 символов",
//   },
//   {
//     rule: "minLength",
//     value: 6,
//     errorMessage: "Новый пароль не может содержать меньше 6 символов",
//   }
// ])
//   .addField('#repchange_password_newpass', [
//     {
//       rule: 'required',
//       errorMessage: 'Повторите новый пароль'
//     },
//     {
//       validator: (value, fields) => {
//         if (
//           fields['#change_password_newpass'] &&
//           fields['#repchange_password_newpass'].elem
//         ) {
//           const repeatPasswordValue =
//             fields['#change_password_newpass'].elem.value;

//           return value === repeatPasswordValue;
//         }

//         return true;
//       },
//       errorMessage: 'Пароли не совпадают',
//     }
//   ])
  // .onSuccess((e) => {
  //   e.preventDefault()
  //   window.location.href = '/login';
  // }
// )

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