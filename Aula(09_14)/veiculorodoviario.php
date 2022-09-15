<?php

    class VeiculoRodoviario{

        protected $nrodas;
        protected $npassageiro;



        function __construct($nrodas,$npassageiro)
        {
            $this->$nrodas;
            $this->$npassageiro;
        }


/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
       protected function setanrodas($quant){

        if(is_numeric($quant)&&($quant > 0)){

        $this->nrodas = $quant;

        }else{
            echo "Escreva um numero valido.";
        }

       } //Usuario insere uma quantidade e a mesma é atribuida ao $nrodas

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 


       protected function pegarodas(){

        if(is_numeric($this->nrodas)&&($this->nrodas > 0)){

            return $this->nrodas;

        }else{

            echo "Não há oque retornar ou é invalido";

        }

       }  //INT

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 


       protected function setanpassageiros($quant){

        if(is_numeric($quant)&&($quant > 0)){

            $this->npassageiro = $quant;
    
            }else{
                echo "Escreva um numero valido.";
            }

       } 

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 


       protected function pegapassageiros(){

        if(is_numeric($this->npassageiro)&&($this->npassageiro > 0)){

            return $this->npassageiro;

        }else{

            echo "Não há oque retornar ou é invalido";

        }
        



       } //INT


       public function veiculorodoviario(){

        echo "Vruuuuuuuuuuuummmmmmmmmmmmmmmmmmm <br>";
        echo "<img src='caminhao.gif'>";



       }

    
       function _destruct() {

        echo "<br>Objeto {$this->nome} finalizado... <br>"; 

    }





    }
