<!DOCTYPE html>
<?php
header("Content-type: text/html; charset=utf-8");
session_start();

?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8" />
  <title>Validação de formulários</title>
</head>

<body>
  <?php
  if (isset($_SESSION['nao_autenticado'])) :
  ?>
    <div class="notification is-danger">
      <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
  <?php
  endif;
  unset($_SESSION['nao_autenticado']);
  ?>
  <form method="post" name="login" action="login.php" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
      <tr>
        <td width="118">
          <font size="1" face="Verdana, Arial, Helvetica, sans-serif">login:</font>
        </td>
        <td width="460">
          <input name="usuario" type="text" class="formbutton" id="usuario" size="10" maxlength="150" autofocus="">
        </td>
      </tr>

      <tr>
        <td width="118">
          <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font>
        </td>
        <td width="460">
          <input name="senha" type="password" class="formbutton" id="login" size="10" maxlength="150">
        </td>
      </tr>


      <tr>
        <td height="85">
          <p><strong>
              <font face="Verdana, Arial, Helvetica, sans-serif">
                <font size="1">
                </font>
              </font>
            </strong></p>
        </td>
      </tr>
      <tr>
        <td height="22"></td>
        <td>
          <input name="Submit" type="submit" class="formobjects" value="Login">
          
          <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
          <button type='submit' formaction='cadastro_login.php'>Criar sua conta</button>
          <button type='submit' formaction='logout.php'>Sair</button>
        </td>
      </tr>
    </table>
  </form>

</body>

</html>