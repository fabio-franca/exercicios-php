<?php  


	# Ler o arquivo de clientes
	$dados = file("produtos.txt");		

	# Identificar o id Que eu quero excluir do arquivo txt
	$id = $_GET['id'];

	# Excluir o cara do array
	unset($dados[$id]);

	# Excluir o arquivo anterior
	unlink("produtos.txt");

	# Reescrever os dados no arquivo
	$string = implode("", $dados);

	$arquivo = fopen("produtos.txt", "a+");
	fwrite($arquivo, $string);
	fclose($arquivo);
	
	# Redirecionar para a listagem
	header("location: produtos.php");
?>