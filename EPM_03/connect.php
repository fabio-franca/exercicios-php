<?php  

	# Variáveis de inicialização
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "loja";


	# Fazer a conexão com o banco de dados
	$conn = mysqli_connect($host, $user, $pass, $database) or die(mysqli_connect_error());


?>