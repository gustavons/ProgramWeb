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

<script src="js/login.js"></script>
<!--<script src="js/jquery-2.1.1.min.js"></script>-->
<script src="js/jquery.validate.js"></script>
<script src="js/validacao.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>

<?php
if (!$_POST) {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <div class="search-box">
                    <div class="caption">
                        <h3>Cadastro</h3>
                    </div>
                    <form method="post" id="formu" class="loginForm" >
                        <div class="input-group">
                            <input type="text" id="name" class="form-control" placeholder="Usuário" name="txtlogin">
                            <input  type="password" id="paw" class="form-control" placeholder="Senha" name="txtsenha">
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

    $txtlogin = $_POST["txtlogin"];
    $txtsenha = $_POST["txtsenha"];

    // Variável com a senha guardada
    $senha = $txtsenha;
    $criptografada = md5($senha);
    echo $criptografada; // Exibe: 34819d7beeabb9260a5c854bc85b3e44


//
//    $consulta = mysqli_query($link, "SELECT * FROM usuarios WHERE login='$txtlogin' AND senha='$txtsenha'");
//
//    $resultado = mysqli_fetch_array($consulta);
//
//
//    echo "Olá, " .$resultado['nome_completo'];

//            echo $consulta;
}
?>
</body>
</html>
