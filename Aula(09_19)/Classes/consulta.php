<?php


    class ContaBancaria {
        protected $nro_conta;
        protected $dt_abertura;
        protected $dt_encerramento = array();
        protected $situacao = 1;
        protected $senha;
        protected $saldo = 0.0;


        function __construct($nro_conta, $dt_abertura, $dt_encerramento, $situacao, $senha, $saldo) {

            $this->nro_conta = $nro_conta;
            $this->dt_abertura = $dt_abertura;
            $this->dt_encerramento = $dt_encerramento;
            $this->situacao = $situacao;
            $this->senha = $senha;
            $this->saldo = $saldo;

        }

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

        if(is_long($numConta) && ($numConta == $this->nro_conta)){

            return true;
           
        }else{

            return false;

        }
    }
/*-------------------------------------------------------------------------------------------------------------------------------------*/

    public function validar_senha($password){

            if(is_int($password) && ($password == $this->senha)){


                return true;



            }else{

                return false;

            }
        }

/*-------------------------------------------------------------------------------------------------------------------------------------*/

    public function saldo_Conta(){


     return  $this->saldo;


    }

/*-------------------------------------------------------------------------------------------------------------------------------------*/

    public function extrato_Conta(){

        return $this->situacao;

    }

    /*-------------------------------------------------------------------------------------------------------------------------------------*/

    public function sacar_Valor($quantia){

        if(is_numeric($quantia) &&($quantia > 0)){

          $this->saldo = $this->saldo - $quantia;
          return $quantia;
            

        }else{
            return false;
        }

    }

    /*-------------------------------------------------------------------------------------------------------------------------------------*/

    public function depositar_Valor($quantia){

        if(is_numeric($quantia) &&($quantia > 0)){
        $this->saldo = $this->saldo + $quantia;
          
        return $this->saldo;
        
        }else{

            return false;

        }
    }

    




    










    } // end of conta bancaria

?>