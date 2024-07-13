<!-- Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de peças 2 e o valor unitário de cada peça 2. Após, calcule e mostre o valor a ser pago.

Entrada
O arquivo de entrada contém duas linhas de dados. Em cada linha haverá 3 valores, respectivamente dois inteiros e um valor com 2 casas decimais.

Saída
A saída deverá ser uma mensagem conforme o exemplo fornecido abaixo, lembrando de deixar um espaço após os dois pontos e um espaço após o "R$". O valor deverá ser apresentado com 2 casas após o ponto. -->


<?php
// Leitura das entradas
fscanf(STDIN, "%d %d %f", $code_for_piece_1, $number_for_piece_1, $value_for_piece1);
fscanf(STDIN, "%d %d %f", $code_for_piece_2, $number_for_piece_2, $value_for_piece2);

// Cálculo do valor total
$total_price = ($number_for_piece_1 * $value_for_piece1) + ($number_for_piece_2 * $value_for_piece2);

// Saída formatada
echo "VALOR A PAGAR: R$ " . number_format($total_price, 2, ".", "") . "\n";
?>
