$(document).ready(function(){
function validateForms(form){
    $(form).validate({
      rules:{
        name: "required",
        phone: "required",
        email: {
          required: true,
          email: true,
        }
      },
      messages:{
        name: "Пожалуйста, введите свое имя",
        phone: "Пожалуйста, введите свой номер телефона",
        email: "Пожалуйста, введите свой адрес электронной почты"
      },
    });
  }
})