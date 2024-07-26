<?php 

$valores = fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

if($b > $c && $d > $a && $c + $d > $a + $b && $c > 0 && $d > 0 && $a % 2 == 0){
    echo "Valores aceitos\n";
}
else{
    echo "Valores nao aceitos\n";
}

?>