<?php 

$tempo = fgets(STDIN);

$horas = $tempo / 3600;
$minutos = ($tempo % 3600) / 60;
$segundos = ($tempo % 3600) % 60;

printf( "%d:%d:%d\n", $horas, $minutos, $segundos);


?>