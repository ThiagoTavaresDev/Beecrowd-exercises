<?php 
// faça um programa que leia três valores e apresente o maior dos três valores lidos seguido da mensagem “eh o maior”. Utilize a fórmula:
// Obs.: a fórmula apenas calcula o maior entre os dois primeiros (a e b). Um segundo passo, portanto é necessário para chegar no resultado esperado.

// Entrada
// O arquivo de entrada contém três valores inteiros.

// Saída
// Imprima o maior dos três valores seguido por um espaço e a mensagem "eh o maior".

fscanf(STDIN, "%d %d %d", $a, $b, $c);

$maior_entre_2 = ($a+ $b+ abs($a-$b)) / 2;

$maior_entre_3 = ($maior_entre_2+ $c+ abs($maior_entre_2-$c)) / 2;

echo "$maior_entre_3 eh o maior\n";

?>