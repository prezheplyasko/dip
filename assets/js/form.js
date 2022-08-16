$().ready(function () {
    $("#reg-form").validate({
        rules: {
            exampleInputEmail1: {
                required:true,
                email: true
            },
            exampleInputName: {
                required:true,
                minlength: 2
            },
            exampleInputLast: {
                required:true,
                minlength: 2
            },
            exampleInputPassword1: {
                required:true,
                minlength: 6
            },
            exampleInputPassword2: {
                required:true,
                minlength: 6,
                equalTo: "#exampleInputPassword1"
            }
        },
        messages: {
            exampleInputEmail1: {
                required:"Необходимо ввести email",
                email: "это не email"
            },
            exampleInputName: {
                required:"Необходимо ввести Имя",
                minlength: "Имя должно быть введено полностью"
            },
            exampleInputLast: {
                required:"Необходимо ввести Фамилию",
                minlength: "Фамилия должна быть введена полностью"
            },
            exampleInputPassword1: {
                required:"Необходимо ввести пароль",
                minlength: "Пароль должен быть не меньше 6 символов"
            },
            exampleInputPassword2: {
                required:"Необходимо повторить пароль",
                minlength: "Пароль должен быть не меньше 6 символов",
                equalTo: "Пароли должны совпадать"
            }
}
});
});