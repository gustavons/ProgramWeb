<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'Seção encerrada';
header('Refresh: 1; URL = index.php');
?>