<?php

    include_once 'Classes/funcionario.php';
    include_once 'Classes/estagiario.php';

     $pedrinho = new Estagiario();

     //Atribui um novo salario
     $pedrinho->setSalario(23000);

     echo 'O Salário do Pedrinho é R$ ' . $pedrinho->getSalario() . "<br>";

?>