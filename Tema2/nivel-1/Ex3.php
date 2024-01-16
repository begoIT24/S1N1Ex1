<?php
$X = 12;
$Y = 5;
$N = 16.552;
$M = 3.648;

echo "X val $X" . "</br>";
echo "Y val $Y" . "</br>";

$suma = $X + $Y;
echo "Suma = $suma" . "</br>";
$resta = $X - $Y;
echo "Resta = $resta" . "</br>";
$producte = $X * $Y;
echo "Producte = $producte" . "</br>";
$modul = $X % $Y;
echo "Mòdul de la divisió = $modul" . "</br>";

echo "N val $N" . "</br>";
echo "M val $M" . "</br>";

$suma = $N + $M;
echo "Suma = $suma" . "</br>";
$resta = $N - $M;
echo "Resta = $resta" . "</br>";
$producte = $N * $M;
echo "Producte = $producte" . "</br>";
$modul = $X % $Y;
echo "Mòdul de la divisió = $modul" . "</br>";

// calculadora 

$num1 = 10;
$num2 = 3;
$op = '+';

echo $num1 . "</br>" ;
echo $num2 . "</br>" ;
echo $op . "</br>" ;

switch ($op){
 case '+':
    $resultat = $num1 + $num2;
    break;
 case '-':
    $resultat = $num1 - $num2;
    break;
 case '*':
    $resultat = $num1 * $num2;
    break;
 case '%':
    $resultat = $num1 % $num2;
    break;
}
echo $resultat;
?>