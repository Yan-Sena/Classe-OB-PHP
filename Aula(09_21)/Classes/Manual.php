<?php 

    class Manual {

        private $embreagem;

        
        public function __construct($status){

            if(is_bool($status)){

               $this->embreagem = $status;

            } else{
            
                return false;
            
            }


        }


        public function pisarNaEmbreagem(){

            return true; 

        }


        public function soltarEmbreagem(){

            return true;

        }


        public function acelerar($rpm){

            if (is_int($rpm)){
                return true;
            }else{
                return false;
            }

        }




    } 


?>