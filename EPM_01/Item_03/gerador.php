<?php
    $valor = 200.00;
    $valor = number_format($valor,2,",",".");
    $parcelas = 30;
    $mes_extenso = '';
    $ano_atual = 2023;
    $mes_inicial = 1;

    for($mes=1;$mes<=$parcelas;$mes++) {
        if ($mes_inicial > 12) {
            $mes_inicial = 1; 
            ++$ano_atual;
            echo "$mes_inicial/$ano_atual <br>";
            $mes_inicial++;
        } else { 
            echo "$mes_inicial/$ano_atual <br>";
            $mes_inicial++;
        }
    }
?>