<?php

// 1. Criar um array de nomes (Array Indexado)
// A sintaxe de colchetes [] é a mais moderna e recomendada
$nomes = ["João", "Maria", "Pedro", "Ana", "Carlos"];

echo "## Lista de Nomes (Loop foreach):\n";
echo "---------------------------------\n";

// 2. Passar por cada nome e printar
// O loop 'foreach' é a melhor forma de iterar sobre arrays em PHP
foreach ($nomes as $nome_atual) {
    // A cada repetição, a variável $nome_atual recebe o valor do array
    echo $nome_atual . "\n";
}

echo "---------------------------------\n";
?>