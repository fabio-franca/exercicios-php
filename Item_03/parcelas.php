<?php
    $valor = $_POST['valor'];
    $parcelas = $_POST['parcelas'];

    $mes_inicial = 1;

    $mes_string = '';

    for($mes_inicial; $mes_inicial <= $parcelas; $mes_inicial++) {
        switch ($mes_inicial) {
            case 1 : $mes_string = 'Janeiro';
                     break;
            case 2 : $mes_string = 'Fevereiro';
                     break;
            case 3 : $mes_string = 'Março';
                     break;
            case 4 : $mes_string = 'Abril';
                     break;
            case 5 : $mes_string = 'Maio';
                     break;
            case 6 : $mes_string = 'Junho';
                     break;
            case 7 : $mes_string = 'Julho';
                     break;
            case 8 : $mes_string = 'Agosto';
                     break;
            case 9 : $mes_string = 'Setembro';
                     break;
            case 10 : $mes_string = 'Outubro';
                     break;
            case 11 : $mes_string = 'Novembro';
                     break;
            case 12 : $mes_string = 'Dezembro';
                     break;

        }
        echo "$mes_string <br>";
    } 

?>