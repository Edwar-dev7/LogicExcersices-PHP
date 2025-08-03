<?php
function esPalindromo($texto) {

    $texto = strtolower($texto);

    $texto = preg_replace("/[^a-z0-9]/", "", $texto);

    $invertido = strrev($texto);

    return $texto === $invertido;
}

$frases = [
    "anilina",
    "reconocer",
    "ana",
    "A mamá Roma le aviva el amor a mamá",
    "Hola mundo"
];

foreach ($frases as $frase) {
    if (esPalindromo($frase)) {
        echo "\"$frase\" es un palíndromo.<br>";
    } else {
        echo "\"$frase\" no es un palíndromo.<br>";
    }
}
?>