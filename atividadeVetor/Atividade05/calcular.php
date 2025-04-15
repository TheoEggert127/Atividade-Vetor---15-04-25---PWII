<?php
$cor = $_POST["lol"];

$Azul = [
    "Azul é a cor da paz... menos quando o boleto vence.",
    "Usa azul porque ainda vive no mundo da lua.",
    "Azul? Deve estar torcendo pro céu mandar um milagre.",
    "Gosta de azul porque combina com o frio na conta bancária."
];

$Vermelho = [
    "Vermelho é amor... mas também é a cor do saldo negativo.",
    "Se tá usando vermelho, ou tá apaixonado ou bravo com a vida.",
    "Vermelho combina com drama, novela mexicana e boleto vencido.",
    "Gosta de vermelho porque já se acostumou a ver tudo pegar fogo."
];

$Verde = [
    "Verde esperança... a esperança de ganhar na loteria.",
    "Usa verde porque quer parecer calmo, mas por dentro tá surtando.",
    "Gosta de verde? Deve ser porque vive plantando desculpas.",
    "Verde é a cor de quem promete que vai começar a dieta segunda."
];

$Amarelo = [
    "Amarelo é alegria... ou desespero disfarçado.",
    "Usa amarelo pra parecer feliz, mas a vida é um caos.",
    "Gosta de amarelo porque já se acostumou a chamar atenção (sem querer).",
    "Amarelo: a cor da ousadia que só dura até ver a fatura do cartão."
];

$Roxo = [
    "Roxo é a cor do mistério... tipo seu futuro.",
    "Gosta de roxo porque é dramático até nas cores.",
    "Usa roxo porque quer ser diferente, mas ainda paga boleto igual.",
    "Roxo é a cor de quem vive entre o 'quero' e o 'não posso'."
];


switch (strtolower($cor)){ 
    case "azul":
        $f = $Azul[array_rand($Azul)];
        echo $f;
        break;
    case "vermelho":
        $f = $Vermelho[array_rand($Vermelho)];
        echo $f;
        break;
    case "verde":
        $f = $Verde[array_rand($Verde)];
        echo $f;
        break; 
    case "amarelo":
        $f = $Amarelo[array_rand($Amarelo)];    
        echo $f;
        break;
        case "roxo":
            $f = $Roxo[array_rand($Roxo)];    
            echo $f;
            break;

    default:
    echo"Preto não pode, e se você digitou uma cor que aparece está mensagem, então você é um fudido";
    break;
    }
?>