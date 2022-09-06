<?php 

    class Funcionario extends Pessoa {

        protected $salario;
        public $cargo;




        function obterSalario($valor){


            if(is_numeric($valor)&&($valor > 0)){

                $this->salario = $valor;

            }



        } //obSalario

        function imprimeDados(){
            

        echo "Nome: " . $this->nome . "<br>";
		echo "Endereco: " . $this->endereco . "<br>";
		echo "Idade: " . $this->idade . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: " . $this->salario . "<br>";


        } //imprimeDados





    } //Class FDuncionario


?>