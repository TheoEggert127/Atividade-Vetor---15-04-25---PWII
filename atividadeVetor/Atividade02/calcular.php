<?php 
$lol = $_POST["lol"];
$vetor = [];
for ($i = 0; $i <= $lol; $i++){
    $vetor[$i] = $i;
}
$numero = $vetor[rand(0, count($vetor)-1)];
echo $numero;


?>