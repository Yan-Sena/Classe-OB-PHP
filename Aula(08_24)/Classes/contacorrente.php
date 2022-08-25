<?php 

    class ContaCorrente extends Contas
    {
        var $limite;

    
        //metodo construtor (sobrescrito), agora, tambem inicializa a variavel $Limite
   function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo,$limite){

   parent:: __construct($agencia,$codigo, $dataDeCriacao, $titular, $senha, $saldo);
   $this->limite = $limite;

    //chamada a outro método da classe
    }
    
    function Retirar($quantia){

        $cpmf = 0.05;

        if (($this->saldo + $this-> limite) >= $quantia)
        {
            parent::retirar(); //CONTINUAR----AQUI
        }

    }//retirar

} // class









?>