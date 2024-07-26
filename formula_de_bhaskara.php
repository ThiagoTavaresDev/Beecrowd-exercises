<?php 

fscanf(STDIN, "%f %f %f", $a, $b, $c);

$delta = pow($b,2) - 4 * $a * $c;

if($delta < 0){
    echo "Impossivel calcular\n";
}
else{
    $raiz = sqrt($delta);
    if($a == 0 || (-$b + $raiz) == 0 || (-$b - $raiz) == 0){
        echo "Impossivel calcular\n";
    }
    else{
        $x1 = (-$b + $raiz) / (2 * $a);
        $x2 = (-$b - $raiz) / (2 * $a);
        printf("R1 = %.5f\n", $x1);
        printf("R2 = %.5f\n", $x2);
    }
}
?>