<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Halley - Casa de Carnes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="slate.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body >
<main class="container">
	<header>
	<img src="imagens\banner-Recuperado.png" class="img-circle img-responsive"	width="304" height="236">
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
<form class="jumbotron"  method="post" >
  <fieldset>
    <legend>Cadastro</legend>
    <div class="form-group">
      <label for="inputNome" class="col-lg-2 control-label">Nome</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputNome" placeholder="Nome" name="nome" type="text">
      </div>
  	<br>
  	<br>
  	<br>
   <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email"  name="email" type="text">
      </div>
   </div>   
   <br>
  	<br>
  	<div class="form-group">
     	<label for="inputTel" class="col-lg-2 control-label">Tel</label>
	<div class="col-lg-10">
		<input type="number" placeholder="(11)9999-9999" class="form-control" id="tel" name="tel">
	</div>    
    </div>
    <br>
  	<br>
  <div class="form-group">
     	<label for="inputCel" class="col-lg-2 control-label" >Cel</label>
	<div class="col-lg-10">
		<input type="number" placeholder="(11)9-9999-9999" class="form-control" name="cel" id="tel">
	</div>    
    </div>
    <br>
  	<br>
  <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Digite senha</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" name="senha" type="password">
      </div>
    </div>
    <br>
  	<br>
   <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <input  class="btn btn-primary" type="submit" value="enviar"></input>
      </div>
    </div>
  </fieldset>
  </form>
	</header>


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

if  (isset($_POST['tel']) && isset($_POST['cel']) && isset($_POST['senha']) && isset($_POST['email']) && isset($_POST['nome'])) {
  $cel = $_POST['cel'];
  $senha = $_POST['senha'];
  $tel =$_POST['tel'];
  $email =$_POST['email'];
  $nome = $_POST['nome']; 
  

  $sql = "insert into clientes (nomecli, telcli, celcli, senhacli, emailcli) values ('$nome', '$tel','$cel','$senha','$email')";
  
if (mysqli_query($conn,$sql)) {
  echo "Dados adicionados com sucesso <br> ";
}
else {
  die ('Falha na execução da consulta');
}}

//encerrar (fechar) a conexão com o banco:
mysqli_close($conn);
 
  ?>