<?php 

$servidor = "localhost";
$banco = "db_login";
$usuario = "root";
$senha = "";
$porta = "3306";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}

?>