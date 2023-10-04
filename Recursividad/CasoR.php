<?php
function potencia($base, $exponente) {
    if ($exponente == 0) {
        return 1;
    } else {
        return $base * potencia($base, $exponente - 1);
    }
}

$base = 2;
$exponente = 3;
$resultado = potencia($base, $exponente);
echo "$base elevado a la $exponente es igual a $resultado";
?>