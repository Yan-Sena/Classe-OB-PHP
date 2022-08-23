<?php 

//insere a classe
include_once 'Classes/contas.php';


//Cria um Objeto
    $contaX = new Contas;
    
    $contaX->numAge = 3301;
    $contaX->numConta = 40028922;
    $contaX->nome = "Astrogildo Ferreira";
    $contaX->saldo = 100;




//Imprimindo Informações na etiqueta
$contaX->ExibeDados();




?>
