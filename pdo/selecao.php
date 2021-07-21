<?php 
include("header.php"); 
include("ClassCrud.php");

?>

<div class="Content"><table class="TabelaCrud">
     <tr>
         <td>Nome</td>
         <td>Sexo</td>
         <td>Cidade</td>
         <td>Ações</td>
     </tr>

     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrud();
     $BFetch=$Crud->selectDB(
         "*",
         "cadastro",
         "",
         array()
     );

     while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
     ?>
     <tr>
         <td><?php echo $Fetch['Nome']; ?></td>
         <td><?php echo $Fetch['Sexo']; ?></td>
         <td><?php echo $Fetch['Cidade']; ?></td>
         <td>
             <a href="<?php echo "visualizar.php?id={$Fetch['Id']}"; ?>"><img src="Images/visualizar.png" alt="Visualizar"></a>
             <a href="<?php echo "cadastro.php?id={$Fetch['Id']}"; ?>"><img src="Images/editar.png" alt="Editar"></a>
             <a class="Deletar" href="<?php echo "remover.php?id={$Fetch['Id']}"; ?>"><img src="Images/remover.png" alt="Remover"></a>

         </td>
     </tr>
     <?php } ?>
</table>
</div>

<?php include("footer.php"); ?>