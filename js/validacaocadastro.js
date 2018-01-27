
$().ready(function () {
    $("#formuCadas").validate({
        rules: {
            txtnome: "required",
            txtlogin: "required",
            txtsenha: {
                required: true
            },
            txtsenha2: {
                required: true
            }
        },
        messages: {
            txtnome: "Nome vazio, por favor insira o nome",
            txtlogin: "Login vazio, por favor insira o login",
            txtsenha: {
                required: "Senha vazia, por favor insira a senha"

            },
            txtsenha2: {
                required: "Senha vazia, por favor insira a senha"

            }
        }
    });
})