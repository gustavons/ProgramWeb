<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
///* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
    }

$logado = $_SESSION['login'];
?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href='css/login.css'>
    <script src="js/login.js"></script>
    <!--<script src="js/jquery-2.1.1.min.js"></script>-->
    <script src="js/jquery.validate.js"></script>
    <script src="js/validacao.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bem Vindo</title>
</head>


<body>

<?php $logado?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <div class="search-box">
                <div class="caption">
                    <?php
                    echo" <h3>Bem vindo $logado</h3>";
                    ?>
                </div>
                <form action="logout.php">
                    <div  class="col-md-12">
                        <input type="submit" id="submit" class="form-control" value="Logout">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


</body>
</html>
