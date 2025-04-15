<?php
$genero = $_POST["lol"];

$frase_mulher = [
    "Não sabe dirigir",
    "Vai lavar a louça",
    "O unico automovel que você sabe dirigir, É o fogão",
    "Mulher no volante perigo constante"
];

$frase_homem = [
    "300 reais é muito de pensão",
    "Ta duro dorme",
    "Cabeça fria, piroca quente",
    "Se hoje tá ruim amanhã vai tar pior"
];

switch (strtolower($genero)){ 
    case "feminino":
        $frase = $frase_mulher[array_rand($frase_mulher)];
        echo $frase;
        break;
    case "masculino":
        $frase = $frase_homem[array_rand($frase_homem)];
        echo $frase;
        break;

    default:
    echo"Não existe isso, seu baitola";
    break;
    }


?>
