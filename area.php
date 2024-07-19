<?php 

// Lê os valores de entrada
fscanf(STDIN, "%f %f %f", $a, $b, $c);

// Calcula as áreas
$triangulo_retangulo = ($a * $c) / 2;
$circulo = 3.14159 * pow($c, 2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = pow($b, 2);
$retangulo = $a * $b;

// Imprime os resultados formatados com 3 casas decimais
printf("TRIANGULO: %.3f\n", $triangulo_retangulo);
printf("CIRCULO: %.3f\n", $circulo);
printf("TRAPEZIO: %.3f\n", $trapezio);
printf("QUADRADO: %.3f\n", $quadrado);
printf("RETANGULO: %.3f\n", $retangulo);

?>