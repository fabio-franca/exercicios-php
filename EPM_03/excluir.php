<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	$verificaNome = $_POST;

	foreach ($verificaNome as $chave => $dados) {
		if (str_contains($chave, 'product')) {
			$filter['id_product'] = $_POST['id_product'];
			$result = delete("products", $filter);

			($result)? header("location: listaProdutos.php") : header("location: cadastroProduto.php?mgs=error");		
		} else if (str_contains($chave, 'client')) {
			$filter['id_client'] = $_POST['id_client'];

			$result = delete("clients", $filter);

			($result)? header("location: listaClientes.php") : header("location: cadastroCliente.php?mgs=error");		
		} else if (str_contains($chave, 'supplier')) {
			$filter['id_supplier'] = $_POST['id_supplier'];

			$result = delete("suppliers", $filter);

			($result)? header("location: listaFornecedores.php") : header("location: cadastroFornecedor.php?mgs=error");		
		}

		break;
	 };
?>