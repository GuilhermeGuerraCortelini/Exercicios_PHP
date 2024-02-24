<?php
// Encontre o maior número em uma lista: Escreva um algoritmo para encontrar o maior número em uma lista de valores.

$lista = [0, 46 , 4, 68 , 68];
$maiornumero = $lista[0];
$menornumero = $lista[0];

foreach($lista as $l){
    if($l > $maiornumero){
        $maiornumero = $l;
    }else if($l < $menornumero){
        $menornumero = $l;
    }
}

echo "Lista de valores: "; var_dump($lista);
echo "<br>";
echo "O maior valor é: ". $maiornumero;
echo "<br>";
echo "O menor valor é: ". $menornumero;