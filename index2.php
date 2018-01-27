Dá aparencia ao negocio bootstrap
Aplicar filtro, cominhos incorretos(Senha incorreta, senha em branco) antes do recebimento creptografar
Validador de dados
inserir seção nas paginas com um pequeno exemplo



<?php
include('dbconnect.php')
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>BCC</title>
<script src="js/bootstrap.min.js"></script>
<script src="js/login.js"></script>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='css/login.css'>

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
                        <h3>Advance Password Validation</h3>
                        <p>Find to All</p>
                    </div>
                    <form action="" class="loginForm">
                        <div class="input-group">
                            <input type="text" id="name" class="form-control" placeholder="Full Name">
                            <input type="password" id="paw" class="form-control" placeholder="Password">
                            <input type="submit" id="submit" class="form-control" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aro-pswd_info">
                    <div id="pswd_info">
                        <h4>Password must be requirements</h4>
                        <ul>
                            <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                            <li id="number" class="invalid">At least <strong>one number</strong></li>
                            <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                            <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
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

    $consulta = mysqli_query($link, "SELECT * FROM usuarios WHERE login='$txtlogin' AND senha='$txtsenha'");

    $resultado = mysqli_fetch_array($consulta);


    echo "Olá, " .$resultado['nome_completo'];

//            echo $consulta;
}
?>
</body>
</html>

<?php
include('dbconnect.php')
?>

<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <title>BCC</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
</head>
<body>

    <?php
        if (!$_POST) {
            ?>

            <form action="index.php" method="post" name="autenticacao">
                Login: <input type="text" maxlength="10" name="txtlogin">

                <br><br>

                Senha: <input type="password" maxlength="50" name="txtsenha">

                <br><br>

                <button type="submit">Enviar</button>
                <button type="reset"> Limpar</button>

            </form>
            
            <?php
        }
        else
        {
            $txtlogin = $_POST["txtlogin"];
            $txtsenha = $_POST["txtsenha"];

            $consulta = mysqli_query($link, "SELECT * FROM usuarios WHERE login='$txtlogin' AND senha='$txtsenha'");

            $resultado = mysqli_fetch_array($consulta);


            echo "Olá, " .$resultado['nome_completo'];

//            echo $consulta;
        }
    ?>
</body>
</html>