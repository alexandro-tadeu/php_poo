<?php
include_once "conexao.php";

$codigo = $_POST['id']; 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);


// Convertendo Data
$data = implode("",array_reverse(explode("/",$data)));

$sql= "UPDATE usuarios SET login = '$login', senha = '$senha' WHERE user_id = '$codigo'";
// Caso haja algum erro na string SQl ou na conexao do banco de dados  finaliza a operação
if (!mysqli_query($conn,$sql))
{
    die('Erro ao atualizar o registro:' . mysqli_error($conn));
} 
// Caso esteja tudo correto com a string SQl e na conexão com o banco de dados imprime uma mensagem para o usuário
echo "Registro atualizado com sucesso.<br/>";
//Fecha a conexão com o banco de dados
mysqli_close($conn);

// Redireciona para a página mostrando dos os registros cadastrados no banco
header("Location: select_login.php");
