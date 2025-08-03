<?php
function esPrimo($numero) {
    if ($numero <=1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;

}

$numeros = [1,2,3,4,5,10,13,15,17];

foreach ($numeros as $n) {
    if (esPrimo($n)) {
        echo "$n Es Primo<br>";
    } else {
        echo "$n No es Primo<br>";
    }
}
?>