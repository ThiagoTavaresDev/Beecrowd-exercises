<?php 

fscanf(STDIN, "%f %f", $x1, $y1);
fscanf(STDIN, "%f %f", $x2, $y2);



function calculate_distance($x1,$y1,$x2,$y2){
    $distance = sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);
    return $distance;
}
$result = calculate_distance($x1, $y1, $x2, $y2);

printf("%.4f\n", $result);

?>