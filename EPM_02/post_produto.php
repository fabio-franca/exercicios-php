<?php 
    if(!file_exists('produtos.txt')) {
        $dados['codigo'] = 1;
    } else {
        $linhas = 0;
        $lerArquivo = fopen('produtos.txt', 'r');

        while ( !feof( $lerArquivo ) ) { // Enquanto não chegar ao final do arquivo...
            fgets( $lerArquivo  ); // Perceba que o conteúdo não é colocado em nenhuma variável, pois não interessa à contagem
            $linhas++; // Aumenta a contagem de linhas
        }

        $dados['codigo'] = $linhas;

        fclose( $lerArquivo );
    } 

    $dados['nome'] = $_POST['nome'];
    $dados['preco'] = $_POST['preco'];
    $dados['estoque'] = $_POST['estoque'];
    $dados['data'] = $_POST['data'];

    $string = implode(" - ", $dados);

    # Guardar os dados do cadastro em arquivo TXT
    $arquivo = fopen('produtos.txt', 'a+');
    fwrite($arquivo, $string."\n");
    fclose($arquivo);

    header("location: produtos.php");
?>