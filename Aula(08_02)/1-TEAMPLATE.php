<?php   
   
   echo "<h3>Recuperando os dados - Função GET</h3>";

       echo "Nome: ".$_GET['nome'];
       echo "<br>";
       echo "Senha: ".$_GET['senha'];


?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>


        #Container {
            padding: 2%;
            text-align: left;
            background-color: lightblue;
            border: 3px solid black;
            width: 100%;
            height: 2000px;
        }

        button{

            border: 2px solid black;
            padding: 10px;
            margin-left: 1.5%;

        }

        .cad{

            margin: 1.5%;
            padding: 1%;
            border: 2px solid black;

        }
        

    </style>

</head>
<body>

/*
<div id="Container">
<!--primeiro--->
    <h2>Formulário - Checkbox - Estado Civil</h2>

    <form name="cadastro" method="post" action="estado_civil.php" style="background-color: whitesmoke;" class="cad">
        
        <img src="Imgens/estado2.png"> Estado Civil <br><br>
        <input type="radio" name="estado_civil" value="Casado"> Casado <br>
        <input type="radio" name="estado_civil" value="Solteiro"> Solteiro <br>

        <br>
        <input type="submit" name="Enviar"> <br>

        
    </form>

<!--segundo---><br>
    <h2>Formulário - Recebendo dados - Elementos ocultos</h2>

    <form name="cadastro" method="post" action="elementos_ocultos.php" style="background-color: whitesmoke;" class="cad">
        
        <img src="Imgens/hidden.png"> Enviando Dados Ocultos. <br><br>
        <input type="hidden" name="user" value="admin">
        <input type="hidden" name="nivel" value="2">

        <br>
        <input type="submit" name="Enviar"> <br>


    </form>

<!--terceiro---><br>
    <h2>Formulário - Recebendo dados - Elemento option</h2>

    <form name="cadastro" method="post" action="elementos_option.php" style="background-color: whitesmoke;" class="cad">
        
        <img src="Imgens/option.png"> Estados: <br><br>
        <select name="estados">
         <option value="SP">São Paulo</option>
         <option value="RJ">Rio de Janeiro</option>
         <option value="MG">Minas Gerais</option>
         <option value="BA">Bahia</option>
        </select>
        

        <br><br>
        <input type="submit" name="Enviar"> <br>

        
    </form>
<!--quarto---><br>

<h2>Formulário - Recebendo dados - Elemento Text</h2>

    <form name="cadastro" method="post" action="elementos_text.php" style="background-color: whitesmoke;" class="cad">
        
        <img src="Imgens/mensagem.png"> Mensagem: <br>
        <textarea name="mensagem" cols="80" rows="7"></textarea>
        <br><br>

        <input type="submit" name="Enviar"> <br>

        
    </form>


    <!--quinto---><br>

<h2>Formulário - Funçâo GET</h2>

<form name="cadastro" method="get" action="funcao_get.php" style="background-color: whitesmoke;" class="cad">
    
    <img src="Imgens/login.png"> Login:
    <input type="text" name="nome"><br><br>

    <img src="Imgens/password.png"> Senha: 
    <input type="text" name="senha"><br><br>

    <input type="submit" name="Enviar"> <br>

    
</form>

 <!--sexto---><br>

<form name="cadastro" method="post" action="Request.php" style="background-color: whitesmoke;" class="cad">
    
    <img src="Imgens/login.png"> Login:
    <input type="text" name="nome"><br><br>

    <img src="Imgens/password.png"> Senha: 
    <input type="text" name="senha"><br><br>

    <input type="submit" name="Enviar"> <br>

    
</form>

*/





</div> <!--Container--->
</body>
</html>