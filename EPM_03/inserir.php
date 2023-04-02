<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	$verificaNome = $_POST;

	foreach ($verificaNome as $chave => $dados) {
		$nameTabela = substr($chave, 0, strpos($chave, '_'));

		if (str_contains($nameTabela, 'product')) {
			$result = insert("products", $_POST);

			($result)? header("location: listaProdutos.php") : header("location: cadastroProduto.php?mgs=error");
		} else if (str_contains($nameTabela, 'client')) {
			$result = insert("clients", $_POST);

			($result)? header("location: listaClientes.php") : header("location: cadastroCliente.php?mgs=error");
		} else if (str_contains($nameTabela, 'supplier')) {
			$result = insert("suppliers", $_POST);

			($result)? header("location: listaFornecedores.php") : header("location: cadastroFornecedor.php?mgs=error");
		}

		break;
	 };

?>