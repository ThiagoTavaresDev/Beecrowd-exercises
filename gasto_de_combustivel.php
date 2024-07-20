<?php 

$hours_of_travel = intval(fgets(STDIN));
$velocity_car = intval(fgets(STDIN));

$liters_of_gasoline = ($hours_of_travel * $velocity_car) / 12;

printf("%.3f\n", $liters_of_gasoline);

?>