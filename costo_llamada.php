<?php
function calcularCostoLlamada($claveZona, $minutos) {
    $precios = [
        12 => 2.00,
        15 => 2.20,
        18 => 4.50,
        19 => 3.50,
        23 => 6.00,
        25 => 6.00,
        29 => 5.00,
    ];

    if (!array_key_exists($claveZona, $precios)) {
        return "Clave de zona no válida.";
    }

    $precioPorMinuto = $precios[$claveZona];
    $costo = $precioPorMinuto * $minutos;

    if ($minutos < 30) {
        $costo *= 0.10; 
    }

    return number_format($costo, 2);
}

$clave = 15;   // América Central
$minutos = 25; // Duración llamada

$costoTotal = calcularCostoLlamada($clave, $minutos);

echo "El costo total de la llamada es: $" . $costoTotal;
?>
