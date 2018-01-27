<?php
include('dbconnect.php');
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['txtlogin'];

$senha = $_POST['txtsenha'];
$criptografada = md5($senha);
// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql="SELECT * FROM usuario WHERE login = '$login' AND senha= '$criptografada'";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
$result= mysqli_query($link,$sql);

//echo mysqli_num_rows($result);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows($result) > 0 )
{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:site.php');
}
else{

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');

}

?>