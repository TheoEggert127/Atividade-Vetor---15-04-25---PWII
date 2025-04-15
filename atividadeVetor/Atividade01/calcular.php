<?php
    
    $vetor = [];
    for ($i = 0; $i <= 99; $i++){
        $vetor[$i] = $i;
    }
    $numero = $vetor[rand(0, count($vetor)-1)];
    echo $numero;
?>