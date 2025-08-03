<?php
function generarFibonacci ($n){
    $fibonacci = [];

    if ($n >= 1) $fibonacci[] = 0;
    if ($n >= 2) $fibonacci[] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo implode(",", $fibonacci);
}

generarFibonacci(12);
?>