<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Halley - Casa de Carnes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="slate.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<main class="container">
	<header>
	<img src="imagens\banner-Recuperado.png" class="img-circle img-responsive"
	width="304" height="236">
	<h1 class="text-info" style="color: #BDBDBD;" id="tito">HALLEY CARNES<h2 class="text-info" style="color:#bdbdbd;" id="subtit">Casa de carnes</h2></h1>
	
	<nav id="nav2">  
			<ul class="menu clearfix"> <!-- Esse é o 1 nivel ou o nivel principal -->
				<li><a href="index.html"  id="home">Home</a></li>
    			<li><a href="#" id="rec">Receitas</a><br><br>
    				<ul class="sub-menu clearfix" id="mostra">	
						<li><a href="#">Picanha</a>
    						<ul class="sub-menu">
    							<li><a href="picanha.html">Picanha na manteiga</a></li>
        	 					<li><a href="escondidinho.html">Escondidinho de picanha</a></li>
                				<li><a href="picanha_sal.html">Picanha no Sal Grosso</a></li>
                			</ul>
                		</li>
                	                	
                		<li><a href="#">Alcatra</a>
		          			<ul class="sub-menu">
                        		<li><a href="alcatra.html">Alcatra ao forno</a></li>
                         		<li><a href="picadinho_alcatra.html">Picadinho de Alcatra </a></li>
                          		<li><a href="farofa.html">alcatra com farofa de feijão</a></li>
                          	</ul>
                        </li></ul>
			    <li><a href="quem-somos.html" class="navbar-link" id="quem"> Quem somos</a></li>
    			<li><a href="fotos.html" id="foto">Fotos</a></li>
    			<li><a href="fale.html" id="fale">Fale Conosco</a></li>
    		
		</nav>
</header>
<form>
<div class="jumbotron col-lg-6" id="loginsil">

	<legend>Login</legend>
    <label for="inputEmail" class="col-lg-2 control-label">Nome</label>
   	<input class="form-control col-lg-10" id="inputEmail" placeholder="Email" type="text"><br><br>
    <label for="inputPassword" class="col-lg-2 control-label">Digite senha</label>
    <input class="form-control col-lg-10" id="inputPassword" placeholder="Password" type="password" maxlength="8" min="5" required><br><br>
    <div class="col-lg-10 col-lg-offset-2">
    	<button type="reset" class="btn btn-default">Cancel</button>
    	<input type="submit" class="btn btn-primary"></input>
    </div>

</div>
</form>
<footer>
		<hr>
		<h4>Halley - Casa de carnes  /  Rua da Prata, 547 - Jd.Petrópolis - SP</h4>
	</footer>

	<script src="js/bootstrap.js"></script>
 	<script src="js/jquery.js"></script>
</main>
</body>
</html>

<?php
include 'conexao.php';

if  (isset($_POST['senha']) && isset($_POST['email'])) {
   $senha = $_POST['senha'];
  $email =$_POST['email'];
    

  $sql = "select * from clientes where emailcli = '$email' and senhacli = '$senha'";
  
if (!mysqli_query($conn,$sql)) 
{
  alert("login efetuado com sucesso!")
}
else die ('Falha na execução da consulta');
}

//encerrar (fechar) a conexão com o banco:
mysqli_close($conn);
 



?>
