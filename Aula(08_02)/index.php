<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="0-Style.css" media="screen">
    
    
</head>
<body>

<div id="container">

    

    <form method="post" action="conexao.php" class="formulario">

    <img src="imagens/d20.png" id= "img-up"> <h1 class="Inline">Cadastro de Usuário</h1> <br><br>
            
    <p><b>Nome:</b></p> <input type="text" name="nome" class="form-control" placeholder="Digite seu Nome"> <br>
        
    
    <p><b>Email:</b></p> <input type="text"  name="email" class="form-control" placeholder="Digite seu Email"><br>


    <p><b>CPF:</b></p> <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF"><br>


    <p><b>Sexo: </b></p>   <input type="radio" name="sexo"   value="Masculino"> Masculino  <input type="radio" name="sexo"   value="Feminino"> Feminino <br><br>


    <p><b>Usuário:</b></p> <input type="text" name="usuario" class="form-control" placeholder="Digite seu Nome de Usuário"> <br>
        
    
    <p><b>Senha:</b></p> <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha"> <br>
    

    <input type="submit" value="Enviar" id="submit" class="btn btn-primary">                 <a href="login.php">Já Tenho Cadastro</a>
            
        </form>




</div>


</body>
</html>