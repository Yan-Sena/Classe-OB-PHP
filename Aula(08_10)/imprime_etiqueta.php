<?php 

//insere a classe
include_once 'Classes/produto.php';

//Cria um Objeto
$produto1 = new Produto;
$produto2 = new Produto;

//Atribuir Valores
$produto1->Codigo = 4001;
$produto1->Descricao = "CD - The Best Of Eric Clapton";

$produto2->Codigo = 4002;
$produto2->Descricao = "CD - The Eagles Hotel California";

//Imprimindo Informações na etiqueta
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();

?>
