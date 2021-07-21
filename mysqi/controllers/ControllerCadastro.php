<?php

include("../includes/Variaveis.php");
include("../class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB(
        "cadastro",
        "?,?,?,?",
        array(
            $Id,
            $Nome,
            $Sexo,
            $Cidade
        )
);

echo "Cadastro Realizado com Sucesso!";


?>