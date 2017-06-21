<?php


//CRIANDO A CONEXÃO COM O BANCO DE DADOS
//$CONN = New mysqli_connect ($servername, $username, $password,$dbnome); connection
$conn = mysqli_connect('localhost','root','root','carnes');
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, 'SET character_set_connection=utf8');
mysqli_query($conn, 'SET character_set_client=utf8');
mysqli_query($conn, 'SET character_set_results=utf8');

//verificando conexão
if (!$conn){
	die('Conexão falhou: ');
}

?>