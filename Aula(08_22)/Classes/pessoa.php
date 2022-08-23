<?php 
$anos = 0;

    class Pessoa 
    {
        var $codigo;
        var $nome;
        var $altura;
        var $idade;
        var $nascimento;
        var $escolaridade;
        var $salario;

    
        //aumenta a altura em centimetros
    function crescer($centimetros)
    { 
        if ($centimetros > 0) {
            $this->altura += $centimetros;
        }
    }

    function formar($titulacao){

        $this->escolaridade = $titulacao;

    }
        //aumenta a idade em anos

    function envelhecer(){

        if ($anos > 0) {
            $this->idade += $anos;
        }

    }

}









?>