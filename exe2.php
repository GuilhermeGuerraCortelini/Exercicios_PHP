<?php 
// Verifique se um número é primo: Crie um programa que determine se um número é primo ou não.

$numero = 7;
$divisores = 0;

for($i = 1; $i <= $numero; $i++){
    if($numero % $i == 0){
        $divisores++ ;
    }
}

if($divisores == 2){
    echo "o numero " . $numero . " é primo";
}else echo "o numero " . $numero . " não é primo";
