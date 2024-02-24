<?php
// Verifique se dois conjuntos são iguais: Desenvolva um algoritmo para verificar se dois conjuntos possuem os mesmos elementos.

$conjunto1 = [1, 13, 22, 14];
$conjunto2 = [13, 1, 14, 22];
$total1 = $conjunto1[0];
$total2 = $conjunto2[0];

echo "Conjunto 1: " ;

$n = count($conjunto1);

for($i = 1; $i < $n; $i++){
   $total1 = $total1 * $conjunto1[$i];
}

echo $total1;

echo "<br>";

echo "Conjunto 2: " ;

$j = count($conjunto2);

for($i = 1; $i < $j; $i++){
    $total2 = $total2 * $conjunto2[$i];
}

echo $total2;

echo "<br>";

if($total1 == $total2){
    echo "Os conjuntos são iguais";
}else{
    echo "Os conjuntos não são iguais";
}

        

