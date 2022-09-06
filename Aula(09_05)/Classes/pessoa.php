<?php 

    class Pessoa
    {
        public $nome;
        public $endereco;
        public $idade;


    

   function __construct($nome,$endereco,$idade){

    $this->nome = $nome;
	$this->endereco = $endereco;
	$this->idade = $idade;
  

    }


  
	function imprimeDados(){

		echo "Nome: " . $this->nome . "<br>";
		echo "Endereco: " . $this->endereco . "<br>";
		echo "Idade: " . $this->idade . "<br>";

	}	
   
	function _destruct() {

        echo "<br>Objeto {$this->nome} finalizado... <br>"; 

    }
}

?>