<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	$verificaNome = $_POST;

	foreach ($verificaNome as $chave => $dados) {
		$nameTabela = substr($chave, 0, strpos($chave, '_'));

		if (str_contains($nameTabela, 'product')) {
			$filter['id_product'] = $_POST['id_product'];

			$result = update("products", $_POST, $filter);

			($result)? header("location: listaProdutos.php") : header("location: cadastroProduto.php?mgs=error");		
		} else if (str_contains($nameTabela, 'client')) {
			$filter['id_client'] = $_POST['id_client'];

			$result = update("clients", $_POST, $filter);

			($result)? header("location: listaClientes.php") : header("location: cadastroCliente.php?mgs=error");		
		} else if (str_contains($nameTabela, 'supplier')) {
			$filter['id_supplier'] = $_POST['id_supplier'];

			$result = update("suppliers", $_POST, $filter);

			($result)? header("location: listaFornecedores.php") : header("location: cadastroFornecedor.php?mgs=error");	
		}
		break;
	 };
?>