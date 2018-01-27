<?php
include('dbconnect.php')
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>BCC</title>
<link rel='stylesheet' type='text/css' href='css/login.css'>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/cadastro.js"></script>
<!--<script src="js/jquery-2.1.1.min.js"></script>-->
<script src="js/jquery.validate.js"></script>
<script src="js/validacaocadastro.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>

<?php
if (!$_POST) {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-6 text-center">
                <div class="search-box">
                    <div class="caption">
                        <h3>Cadastro</h3>
                    </div>
                    <form action="inserir.php" method="post" id="formuCadas" class="loginForm" >
                        <div class="row">
                            <input type="text" id="nome" class="form-control" placeholder="Usuário" name="txtnome">

                            <input type="text" id="login" class="form-control" placeholder="Login" name="txtlogin">
                            <input  type="password" id="psw" class="form-control" placeholder="Senha" name="txtsenha">
                            <input  type="password" id="psw2" class="form-control" placeholder="Repita a senha" name="txtsenha2">

                            <div <div class="row">
                                <div class="col-md-12">
                                <input type="submit" id="submit" class="form-control" value="Cadastrar">
                                </div>


                            </div>


                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aro-pswd_info">
                    <div id="pswd_info">
                        <h4>Regras da senha</h4>
                        <ul>
                            <li id="letter" class="invalid">Pelo menos <strong>uma Letra</strong></li>
<!--                            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>-->
<!--                            <li id="number" class="invalid">At least <strong>one number</strong></li>-->
<!--                            <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>-->
<!--                            <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
else
{
//    $nome = $_POST['txtnome'];
//    $txtlogin = $_POST["txtlogin"];
//    $txtsenha = $_POST["txtsenha"];
//
//    // Variável com a senha
//    $senha = $txtsenha;
//    $criptografada = md5($senha);
//    $sql = "INSERT INTO usuario (nome, login, senha) VALUES ";
//    if (mysqli_connect_errno())
//    {
//        // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
//        echo "Failed to connect to MySQL: " . mysqli_connect_error();
//    }
//
//// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
//    $sql="INSERT INTO suites (nome, telefone, email) VALUES ('$_POST[nome]','$_POST[telefone]','$_POST')";
//

}
?>
</body>
</html>
