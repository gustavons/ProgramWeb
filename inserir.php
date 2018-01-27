<?php
include('dbconnect.php');
// INICIA LIGAÇÃO À BASE DE DADOS
//$con=mysqli_connect("localhost","username","password","database");

    $nome = $_POST['txtnome'];
    $txtlogin = $_POST["txtlogin"];
    $txtsenha = $_POST["txtsenha"];

    // Variável com a senha
    $senha = $txtsenha;
    $criptografada = md5($senha);
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="INSERT INTO usuario (nome, login, senha) VALUES ('$nome','$txtlogin','$criptografada')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($link,$sql))
{
    die('Error: ' . mysqli_error($link));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "1 record added";

//mysqli_close($con);

?>