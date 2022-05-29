<?php
include_once "conexao.php";
$id = $_GET['id'];
$sql = 'SELECT * FROM usuarios WHERE user_id =' . $id;
$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

// montando formulário
session_start();
echo "<h2 style='text-align: right;'>Olá, " . $_SESSION['usuario'] . "</h2>";
echo "<form method='post' name='dados' action='update_login.php?acao=atualizar' onSubmit='return enviardados();' >";
echo "<table width='588' border='0' align='center' >";

while ($registro = mysqli_fetch_array($resultado)) {
    echo "    <tr> ";
    echo "      <td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Código:</font></td> ";
    echo "       <td width='460'>";
    echo "        <input name='id' type='text' class='formbutton' id='id' size='5' maxlength='10' value=" . $id . " readonly> ";
    echo "      </td> ";
    echo "     </tr>";

    echo " <tr>";
    echo " <td><font face='Verdana, Arial, Helvetica, sans-serif'><font size='1'>Login<strong>:</strong></font></font></td>";
    echo " <td rowspan='2'><font size='2'>";
    echo "<style>textarea{resize:none;}</style>";
    echo "<textarea name='login' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['login']) . "</textarea>";
    echo "</font></td>";
    echo "</tr>";
    echo "<tr>";

    echo "    <tr> ";
    echo "      <td width='118'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>Senha:</font></td> ";
    echo "       <td width='460'>";
    echo "        <input name='senha' type='password' class='formbutton' id='senha' size='45' maxlength='150' value=" . $registro['senha'] . " ";
    echo "      </td> ";
    echo "     </tr>";

    echo "<tr>";
    echo " <td height='22'></td>";
    echo " <td>";
    echo "<input name='Submit' type='submit'  class='formobjects' value='Atualizar'> ";
    echo " <button type='submit' formaction='select_login.php?acao=selecionar'>Consultar</button>   ";
    echo " <input name='Reset' type='reset' class='formobjects' value='Limpar campos'>";
    echo "  </td>";
    echo "  </tr>";

    echo "</table>";
    echo "</form>   ";
}
mysqli_close($conn);
