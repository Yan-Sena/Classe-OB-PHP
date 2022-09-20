<?php

class Cambio {

    private $marcha;


    public function Cambio(){} //Todos estes são construtores, Rever desenho do pdf

    
    public function getMarcha(){

        return $this->marcha;

    }

    public function setMarcha($num){

        if(is_int($num)){

            $this->marcha = $num;

        }else{
            return false;
        }


    }

}




?>