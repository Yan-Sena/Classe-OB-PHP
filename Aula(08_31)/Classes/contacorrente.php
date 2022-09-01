<?php

class ContaCorrente extends Contas
{
    var $limite;


    //metodo construtor (sobrescrito), agora, tambem inicializa a variavel $Limite
    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite)
    {

        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
        $this->limite = $limite;

        //chamada a outro método da classe
    }

    function Retirar($quantia)
    {

        $cpmf = 0.05;

        if (($this->saldo + $this->limite) >= $quantia) {
            //Execulta método da classe-pai.
            parent::retirar($quantia);
            //debita o imposto
            parent::retirar($quantia * $cpmf);
        } else {
            echo "<br>Retirada não permitida ... <br>";
            return false;
        }

        return true;
    } //retirar

} // class
