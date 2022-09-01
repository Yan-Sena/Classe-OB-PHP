<?php

    include_once 'Classes/funcionario.php';

     $pedro = new Funcionario();

     //Atribui um novo salario
     $pedro->setSalario(23000);

     echo 'Salário: R$'. $pedro->getSalario();

?>