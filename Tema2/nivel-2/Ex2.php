<?php
$numXocolata = 3;
$numXiclet = 4;
$numCaramel = 10;
$costTotal = calcularXocolata($numXocolata) + calcularXiclets($numXiclet)
 + calcularCaramels($numCaramel);

echo "Has comprat $numXocolata xocolatines, $numXiclet xiclets i $numCaramel caramels." . "</br>";
echo "El cost total de la compra és de $costTotal €.";

function calcularXocolata(int $num) {
    $cost = $num * 1;
    return $cost;
}

function calcularXiclets(int $num) {
    $cost = (float) $num * 0.5;
    return $cost;
}

function calcularCaramels(int $num) {
    $cost = (float) $num * 1.5;
    return $cost;
}
?>