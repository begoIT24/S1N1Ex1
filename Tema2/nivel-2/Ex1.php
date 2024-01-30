<?php
    $minuts = 3;
    echo "La teva trucada ha durat $minuts minuts" . "</br>";
    echo "El cost de la trucada és de " . calcularCost(3) . " €";
    echo "</br>";
    $minuts = 10;
    echo "La teva trucada ha durat $minuts minuts" . "</br>";
    echo "El cost de la trucada és de " . calcularCost(10) . " €";

    function calcularCost (float $minuts) {
        if ($minuts <= 3) {
            $cost = $minuts * 0.1;  // 10 cèntims x minut
            return $cost;
        } else if ($minuts > 3) {
            $cost = $minuts * 0.1 + $minuts * 0.05; // 5 cèntims x minut addicional
            return $cost;
        } 
    }
?>