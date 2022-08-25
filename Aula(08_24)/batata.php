<?php 

//insere a classe
include_once 'Classes/pessoa.php';
include_once 'Classes/conta.php';

//Cria um Objeto
$carlos = new Pessoa;
$carlos->codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos ->Nome : \n";
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";

$carlos->Formar('Técnico em Eletricidade');
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

?>
