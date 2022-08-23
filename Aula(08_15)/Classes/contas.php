<?php 

    class Contas 
    {
        var $numAge;
        var $numConta;
        var $nome;
        var $saldo;

    

    function ExibeDados()
    { 
        print 'Número da Agência: ' . $this->numAge . "<br>";
        print 'Número da Conta: ' . $this->numConta . "<br>";
        print 'Nome: ' . $this->nome . "<br>";
        print 'Saldo: ' . $this->saldo . "<br>";
    
    }
}









?>