<?php 

    class Pessoa
    {
        var $nome;
        var $endereco;
        var $idade;


    
        //metodo construtor inicializa propiedades
   function __construct($nome,$endereco,$idade){

    $this->nome = $nome;
	$this->endereco = $endereco;
	$this->idade = $idade;
  
    //chamada a outro método da classe
    }
  
	function imprimeDados(){

		echo "Nome: " . $this->nome;


	}	





   

  
}

?>