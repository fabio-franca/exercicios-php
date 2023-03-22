<?php
    $valor1 = intval($_POST['valor1']);
    $valor2 = intval($_POST['valor2']);

    $funcao = $_POST['funcao'];

    $resultado = 0;

    if($funcao == '+') {
      $resultado =  $valor1 + $valor2;
    } elseif ($funcao == '-') {
        $resultado =  $valor1 - $valor2; 
    } elseif ($funcao == '*') {
        $resultado =  $valor1 * $valor2; 
    } elseif ($funcao == '/') {
        $resultado =  $valor1 / $valor2; 
    } elseif ($funcao == '**') {
        $resultado =  $valor1 ** $valor2; 
    } elseif ($funcao == 'sqrt') {
        $resultado =  sqrt($valor1); 
    }

    header("location: index.php?msg=$resultado");
?>