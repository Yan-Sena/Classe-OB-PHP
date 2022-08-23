<?php

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";




$con = mysqli_connect($localhost,$user_name,$senha,$db); // Erro constante nno login, revisar.

    if (mysqli_connect_errno()){

        echo "Falha ao conectar com o MySQL: " .mysqli_connect.error();

    }  
        $sql = "DELETE FROM pessoa WHERE nome = 'Carlos'";
        
        mysqli_query($con,$sql);

        echo "Registro Excluido com sucesso";

        mysqli_close($con); 



?>