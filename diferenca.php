<?php 

// Leia quatro valores inteiros A, B, C e D. A seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D segundo a fórmula: DIFERENCA = (A * B - C * D).

// Entrada
// O arquivo de entrada contém 4 valores inteiros.

// Saída
// Imprima a mensagem DIFERENCA com todas as letras maiúsculas, conforme exemplo abaixo, com um espaço em branco antes e depois da igualdade.

$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);
$D = fgets(STDIN);

function calculateDiference(int $A, int $B, int $C, int $D) {
    $diference = ($A * $B) - ($C * $D);
    echo "DIFERENCA = " . $diference . "\n";
}
calculateDiference($A, $B, $C, $D);

?>