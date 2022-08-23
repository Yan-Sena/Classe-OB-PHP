<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Realizado</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="0-Style.css" media="screen" />
    
    <style>
        body{background-color: gray;}
    </style>
</head>
<body>

<div id="container">

    

    <form method="post" action="inserir_dados.php" class="formulario">

    <img src="imagens/d20.png" id= "img-up"> <h1 class="Inline">Login</h1> <br><br>

    <p><b>Usuário:</b></p> <input type="text" name="usuario" class="form-control" placeholder="Digite seu Nome de Usuário"> <br>
        
    
    <p><b>Senha:</b></p> <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha"> <br>
    



    <input type="submit" value="Enviar" class="btn btn-primary"> <a href="index.php">Não Tenho Cadastro</a>
        

            
        </form>




</div>



</body>
</html>