<?php

    class VeiculoRodoviario{

        protected $nrodas;
        protected $npassageiro;



        function __construct($nrodas,$npassageiro)
        {
            $this->$nrodas;
            $this->$npassageiro;
        }



       protected function setanrodas($quant){

        $this->nrodas = $quant;

       } //Usuario insere uma quantidade e a mesma é atribuida ao $nrodas


       protected function pegarodas(){

        

        return $this->nrodas;

       }  //INT


       protected function setanpassageiros(){} 


       protected function pegapassageiros(){} //INT


       public function veiculorodoviario(){}


    
       function _destruct() {

        echo "<br>Objeto {$this->nome} finalizado... <br>"; 

    }





    }



?>