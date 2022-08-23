<?php 

    class Contas
    {
        var $agencia;
        var $codigo;
        var $dataDeCriacao;
        var $titular;
        var $senha;
        var $saldo;


    
        //metodo construtor inicializa propiedades
   function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo){

    $this->agencia = $agencia;
    $this->codigo = $codigo;
    $this->dataDeCriacao = $dataDeCriacao;
    $this->titular = $titular;
    $this->senha = $senha;

    //chamada a outro método da classe
    }
    
    function __destruct()
    {
        echo "<br>Objeto Conta {$this->codigo} de {$this->this->nome} finalizada ...<br>";
    } 
   

}









?>