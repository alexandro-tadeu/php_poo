<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8" />
  <title>Validação de formulários</title>
</head>

<body>
  <form method="post" name="login" action="insert_login.php" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
      <tr>
        <td width="118">
          <font size="1" face="Verdana, Arial, Helvetica, sans-serif">login:</font>
        </td>
        <td width="460">
          <input name="login" type="text" class="formbutton" id="login" size="10" maxlength="150" autofocus="">
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
          <input name="Submit" type="submit" class="formobjects" value="Cadastar">
          <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
          <button type='submit' formaction='logout.php'>Sair</button>

        </td>
      </tr>
    </table>
  </form>

</body>

</html>