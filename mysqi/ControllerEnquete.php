<?php

include("Variaveis.php");
include("ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB("enquete", "?,?,iss", array($Id, $Radio));
echo "Voto realizado com sucesso";

?>