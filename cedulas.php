<?php

// Leitura do valor de entrada
$value = intval(fgets(STDIN));

// Inicialização das denominações das notas
$notes = [100, 50, 20, 10, 5, 2, 1];
$quantidadeNotas = [];

// Armazena o valor inicial
$valorInicial = $value;

// Cálculo da quantidade de cada nota
foreach ($notes as $nota) {
    $quantidadeNotas[$nota] = intval($value / $nota);
    $value = $value % $nota;
}

// Exibição dos resultados
echo $valorInicial . "\n";
foreach ($notes as $nota) {
    echo $quantidadeNotas[$nota] . " nota(s) de R$ " . number_format($nota, 2, ',', '.') . "\n";
}
?>
