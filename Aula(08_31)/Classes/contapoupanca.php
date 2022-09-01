<?php


class ContaPoupanca extends Contas
{

    var $aniversario;
    //método construtor (sobrescrito) agora, também inicializa a

    function __construct(
        $agencia,
        $codigo,
        $dataDeCriacao,
        $titular,
        $senha,
        $saldo,
        $aniversario
    ) {

        //chamada do método construtor da classe-pai. 

        parent::__construct(
            $agencia,
            $codigo,
            $dataDeCriacao,
            $titular,
            $senha,
            $saldo
        );

        $this->aniversario = $aniversario;
    }


    function retirar($quantia)
    {
        if ($this->saldo >= $quantia) {
            parent::retirar($quantia);
        } else {
            echo "<br>Retirada não permitida ... <br>";
            return false;
        }
        return true;
    }
} ?>
