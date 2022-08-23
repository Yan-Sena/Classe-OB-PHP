<?php

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";




$con = mysqli_connect($localhost,$user_name,$senha,$db); // Erro constante nno login, revisar.

    if (mysqli_connect_errno($con)){

        echo "Erro: " . mysqli_connect_errno();

    }  else{
        $sql = "SELECT * FROM Pessoa ORDER BY sobrenome DESC";
        
        $resultado = mysqli_query($con,$sql);

        echo "<h2>Pessoas</h2>";

        while($pessoa = mysqli_fetch_array($resultado)){

        echo $pessoa ['Nome'] . " " . $pessoa['Sobrenome']. "<br><br>";

        }

        mysqli_close($con); 

}

?>