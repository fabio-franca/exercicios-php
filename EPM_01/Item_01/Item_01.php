<?php
    #01 - Crie um algoritmo onde sejam digitados 10 números e exiba-os na ordem crescente. (1 esc)

    $numeros = array(10, 8, 5, 20, 12, 1, 4, 22, 9, 17);
    sort($numeros);
    foreach($numeros as $numero) {
        echo "$numero <br>";
    } 
?>