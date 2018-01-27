
$().ready(function () {
    $("#formu").validate({
        rules: {
            txtlogin: "required",
            txtsenha: {
                required: true
            }
        },
        messages: {
            txtlogin: "Login vazio, por favor insira o login",
            txtsenha: {
                required: "Senha vazia, por favor insira a senha",

            }
        }
    });
})