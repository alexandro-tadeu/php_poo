<?php
include_once "conexao.php"; 

$login = $_POST['login'];
$senha = MD5($_POST['senha']);

$sql = "SELECT * FROM usuarios";

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
$array = mysqli_fetch_array($resultado);

$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro_login.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro_login.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($conn, $query) or die("Erro ao retornar dados");
        
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro_login.php'</script>";
        }
      }
    }
?>