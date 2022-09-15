<?php


    class ContaBancaria {
        protected $nro_conta;
        protected $dt_abertura;
        protected $dt_encerramento = array();
        protected $situacao = 1;
        protected $senha;
        protected $saldo = 0.0;


/*----------------------------------------------------------------------------------------------------------------------------------*/ 
        public function abrir_Conta($numConta){

            if(is_int($numConta) && ($numConta == $this->nro_conta)){


                echo "Bem Vindo. Iniciando conta ". $this->nro_conta . "<br>";



            }else{

                echo "Essa conta não existe ou seu número está incorreto";

            }
        }
/*-------------------------------------------------------------------------------------------------------------------------------------*/

    public function consultar_Conta($numConta){

        






    }










    } // end of conta bancaria

?>