<?php

    class Funcionario
    {
        private $Codigo;
        public $Nome;
        private $Nascimento;
        protected $Salario;




        function setSalario($valor){

            if(is_numeric($valor)&&($valor > 0)){

                $this->Salario = $valor;

            }

        }

        function getSalario(){
            return $this->Salario;
        }



    }
    



?>