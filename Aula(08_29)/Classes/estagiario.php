<?php

    class Estagiario extends Funcionario{


            // sobrescrever método
        function getSalario()
        {
            return $this->salario *1.12;
        }



    }
    ?>
