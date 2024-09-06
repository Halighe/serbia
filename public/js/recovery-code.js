const passModalClose = document.querySelector('.pass__close')

passModalClose.addEventListener('click', (e) => {
  window.location.href = '/login';
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
    window.location.href = 'recovery-password.html'
  })