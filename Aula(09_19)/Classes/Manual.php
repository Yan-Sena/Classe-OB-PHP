<?php 

    class Manual {

        private $embreagem;

        
        public function Manual(){}


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