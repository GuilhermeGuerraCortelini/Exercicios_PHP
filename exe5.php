<?php
// Ordenação de lista: Implemente um algoritmo de ordenação para ordenar uma lista de valores (Bubble Sort).

function bubbleSort($lista) {
    $n = count($lista);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($lista[$j] > $lista[$j + 1]) {
                // Troca os elementos
                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
    return $lista;
}

// Lista original
$lista = [3, 8, 5, 9, 10];

// Chamada da função de ordenação
$listaOrdenada = bubbleSort($lista);

// Exibe a lista ordenada
echo "Lista ordenada: ";
foreach ($listaOrdenada as $valor) {
    echo $valor . " ";
}
?>