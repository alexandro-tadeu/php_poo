<?php

session_start();
echo "<h2 style='text-align: right;'>Olá, " . $_SESSION['usuario'] . "</h2>";

date_default_timezone_set('America/Sao_Paulo');
header("Content-type: text/html; charset=utf-8");
include_once "conexao.php";

echo "<meta charset='UTF-8'>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>CODIGO</th>";
echo "<th>NOME</th>";
echo "<th>SENHA</th>";
echo "<th>AÇÃO</th>";
echo "</tr>";

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

echo "<CENTER>Registro cadastrados na base de dados.<br/></CENTER> ";
echo "</br>";

while ($registro = mysqli_fetch_array($resultado)) {
    $id = $registro['user_id'];
    $login = $registro['login'];
    $senha = $registro['senha'];

    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $login . "</td>";
    echo "<td>" . $senha . "</td>";
    echo "<td><a href='delete_login.php?acao=deletar&id=$id'><img src='delete_crud.png' alt='Deletar' title='Deletar registro'></a><a href='update_lo.php?acao=atualizar&id=$id'><img src='update_crud.png' alt='Atualizar' title='Atualizar registro'></a><a href='cadastro_login.php'><img src='insert_crud.png' alt='Inserir' title='Inserir registro'></a><a href='painel.php'><img src='panel_crud.png' alt='Painel' title='Painel de Controle'></a>";
    echo "</tr>";
}

mysqli_close($conn);

echo "</table></center>";
echo "</br>";
