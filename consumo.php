<?php 

$distancia_total = intval(fgets(STDIN));
$combustivel = floatval(fgets(STDIN));

$result = $distancia_total / $combustivel;

printf("%.3f km/l\n", $result);




?>