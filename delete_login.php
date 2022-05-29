<?php
include_once "conexao.php";
$acao = $_GET['acao'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "DELETE FROM usuarios WHERE user_id = '" . $id . "'";

if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
} else {
    echo "<script language='javascript' type='text/javascript'>
			alert('Dados atualizados com sucesso!');window.location.
			href='crud.php?acao=selecionar'</script>";
}
mysqli_close($conn);
header("Location:select_login.php");
