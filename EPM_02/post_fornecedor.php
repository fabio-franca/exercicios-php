<?php 
    $dados['nome'] = $_POST['nome'];
    $dados['razao'] = $_POST['razao'];
    $dados['cnpj'] = $_POST['cnpj'];
    $dados['data'] = $_POST['data'];

    $string = implode(" - ", $dados);

    # Guardar os dados do cadastro em arquivo TXT
    $arquivo = fopen('fornecedores.txt', 'a+');
    fwrite($arquivo, $string."\n");
    fclose($arquivo);

    header("location: fornecedores.php");
?>