<?php

class Cambio {

    private $marcha;


    public function __construct($m){

        if(is_int($m)){

            $this->marcha = $m;
        }
        
        else{
            return false;
        }

    }

    
    public function getMarcha(){

        return $this->marcha;

    }

    public function setMarcha($num){

        if(is_int($num)){

            $this->marcha = $num;
        }
        
        else{
            return false;
        }

    }

}




?>