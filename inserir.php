<?php
include('dbconnect.php');


    $nome = $_POST['txtnome'];
    $txtlogin = $_POST["txtlogin"];
    $txtsenha = $_POST["txtsenha"];

    $senha = $txtsenha;
    $criptografada = md5($senha);


if (mysqli_connect_errno())
{

    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql="INSERT INTO usuario (nome, login, senha) VALUES ('$nome','$txtlogin','$criptografada')";


if (!mysqli_query($link,$sql))
{
    die('Error: ' . mysqli_error($link));
}

echo 'Usuário cadastrado';
header('Refresh: 1; URL = index.php');

?>