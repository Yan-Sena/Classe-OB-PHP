<?php 

//insere a classe
include_once 'Classes/produto.php';

//Cria Dois Objetos
$valor = new Produto();

//Atribuir Valores
$valor->Codigo = 4011;

$valor->Descricao = "CD The Best Of Eric Clapton";

//Imprimindo Valores
echo $valor->Codigo  . " = " . $valor->Descricao;


?>
