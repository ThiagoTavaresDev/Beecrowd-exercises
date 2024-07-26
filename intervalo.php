<?php 

fscanf(STDIN, "%f", $x);

$intervalos = [
    [0, 25, true, true],     // [0, 25]
    [25, 50, false, true],   // (25, 50]
    [50, 75, false, true],   // (50, 75]
    [75, 100, false, true]   // (75, 100]
];

$encontrado = false;

foreach($intervalos as $intervalo){
    $inicio = $intervalo[0];
    $fim = $intervalo[1];
    $inclusaoInicio = $intervalo[2];
    $inclusaoFim = $intervalo[3];
    
    if (($inclusaoInicio ? $x >= $inicio : $x > $inicio) && ($inclusaoFim ? $x <= $fim : $x < $fim)) {
        echo "Intervalo " . ($inclusaoInicio ? "[" : "(") . $inicio . "," . $fim . "]\n";
        $encontrado = true;
        break;
    }   
}
if (!$encontrado) {
    echo "Fora de intervalo\n";
}
?>
