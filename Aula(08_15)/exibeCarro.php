<?php 

//insere a classe
include_once 'Classes/carro.php';


//Cria um Objeto
    $carro1 = new Carro;
    $carro2 = new Carro;


    $carro1->cor = "Branco";
    $carro2->cor = "Preto";



//Imprimindo Informações na etiqueta
$carro1->Acelerar(); 
$carro2->InformarCor();



?>
