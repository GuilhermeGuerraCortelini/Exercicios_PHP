<?php
// Calcule o fatorial de um número: Escreva um programa que calcule o fatorial de um número dado.

$numero = 4;
$resultado = 1; // Inicialize com 1, pois vamos multiplicar

for ($i = 1; $i <= $numero; $i++) {
    $resultado = $resultado * $i; // Multiplica o resultado pelo próximo número
}

echo "O fatorial de $numero é: $resultado";

// $numero * $numerosAnteriores[0] * $numerosAnteriores[1];