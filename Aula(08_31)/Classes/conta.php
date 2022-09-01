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
    $this->saldo = $saldo;

    //chamada a outro método da classe
    }
    
    function retirar($quantia)
		{
			if ($quantia > 0) {
				$this->saldo-=$quantia;
			}
		}

		//aumenta o saldo em quantia
		function depositar($quantia){
			if ($quantia > 0) {
				$this->saldo+=$quantia;
			}
		}

		//retorna o saldo atual
		function obterSaldo(){
			return $this->saldo;
		}

  
}









?>