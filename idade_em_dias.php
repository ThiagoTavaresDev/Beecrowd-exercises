<?php 

    $dias = fgets(STDIN);
    $anos = (int)($dias / 365);
    $meses = (int)(($dias % 365) / 30);
    $dias = (int)($dias % 365 % 30);
    echo "$anos ano(s)\n$meses mes(es)\n$dias dia(s)\n";


?>