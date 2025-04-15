<?php
$time = $_POST["lol"];
$corinthians = [
    "O único fantasma que o Corinthians tem medo é o da Série B.",
    "Corinthians: onde o sofrimento é tradição.",
    "Nem a Fiel aguenta mais tanta sofrência.",
    "Corinthians é tipo Wi-Fi ruim: promete conexão, mas vive caindo.",
];

$palmeiras = [
    "Palmeiras não tem Mundial, mas tem Wi-Fi no Allianz.",
    "O único Mundial que o Palmeiras conhece é o de Free Fire.",
    "Palmeiras: campeão da Copinha, vice da zoeira.",
    "Tanto dinheiro e ainda falta um Mundial… tá difícil, hein?",
];

$saopaulo = [
    "São Paulo: o time que mais entende de jejum sem ser religioso.",
    "Trocou o Morumbi pelo spa… só vive se recuperando.",
    "Já faz tanto tempo que ganhou algo, que virou time retrô.",
    "Torcedor do São Paulo já vem com antivírus: é tanta zika que pega.",
];

$santos = [
    "Santos: fábrica de craques e vitrine de derrotas.",
    "Do Pelé ao rebaixamento… que viagem, hein peixe?",
    "Time praiano, futebol de areia.",
    "Santos entrou no modo Peixinho: só nada e afunda.",
];
switch (strtolower($time)){ 
    case "corinthians":
        $f = $corinthians[array_rand($corinthians)];
        echo $f;
        break;
    case "palmeiras":
        $f = $palmeiras[array_rand($palmeiras)];
        echo $f;
        break;
    case "são paulo":
        $f = $saopaulo[array_rand($saopaulo)];
        echo $f;
        break; 
    case "santos":
        $f = $santos[array_rand($santos)];    
        echo $f;
        break;

    default:
    echo"Time pequeno não pode";
    break;
    }


?>