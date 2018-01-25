Dá aparencia ao negocio bootstrap
Aplicar filtro, cominhos incorretos(Senha incorreta, senha em branco) antes do recebimento creptografar
Validador de dados
inserir seção nas paginas com um pequeno exemplo





<?php
include('dbconnect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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