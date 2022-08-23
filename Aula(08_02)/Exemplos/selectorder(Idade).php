<?php

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";




$con = mysqli_connect($localhost,$user_name,$senha,$db); // Erro constante nno login, revisar.

    if (mysqli_connect_errno($con)){

        echo "Erro: " . mysqli_connect_errno();

    }  else{
        $sql1 = "UPDATE pessoa SET idade = 23 WHERE idade = 19";
        
        mysqli_query($con,$sql1);

        $sql2 = "SELECT * FROM pessoa WHERE idade = 23";

        $resultado = mysqli_query($con,$sql2);

        echo "<h2>Pessoas</h2>";

        while($pessoa = mysqli_fetch_array($resultado)){

        echo $pessoa ['Nome'] . " " . $pessoa['Sobrenome'].", " .$pessoa['idade']." anos<br>";

        }

        mysqli_close($con); 

}

?>