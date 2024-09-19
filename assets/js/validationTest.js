let testValidation = new JustValidate('#Testform',{
    validateBeforeSubmitting: true,
    focusInvalidField: false,
});

testValidation.addField('#us_naming',[
    {
        rule: 'required',
        errorMessage: 'Введите Имя',
      },
      {
        rule: "customRegexp",
        value: /[a-zа-яё]/i,
        errorMessage: "Введите корректное Имя",
      },
      {
        rule: "maxLength",
        value: 100,
        errorMessage: "Имя не может содержать больше 100 символов",

      },
    
],
{
    errorsContainer: document.getElementById('first_error'),
}
)
.addField('#us_mail',[
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

],
{
  errorsContainer: document.getElementById('second_error'),
}
)
