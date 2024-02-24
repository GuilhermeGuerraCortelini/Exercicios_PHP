<?php
// Inverta uma string: Desenvolva um algoritmo que inverta uma string fornecida como entrada.

$string = "Teste";
$stringInvertida = "";

for($i = strlen($string) - 1; $i >= 0; $i--){
    $stringInvertida .= $string[$i]; // ou  $stringInvertida = $stringInvertida . $string[$i]
}

echo $stringInvertida;