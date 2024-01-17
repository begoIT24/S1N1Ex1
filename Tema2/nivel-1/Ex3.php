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
echo "</br>";

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
echo "</br>";


//per les 4 variables:

$X2 = $X*2;
$Y2 = $Y*2;
$N2 = $N*2;
$M2 = $M*2;

echo "X val $X i el doble es $X2" . "</br>";
echo "Y val $Y i el doble es $Y2" . "</br>";
echo "N val $N i el doble es $N2" . "</br>";
echo "M val $M i el doble es $M2" . "</br>";
echo "</br>";


$sumaTotal = $X2 + $Y2 + $N2 + $M2;
$producteTotal = (int) ($X2 * $Y2 * $N2 * $M2);

echo "La suma de X,Y,N,M val $sumaTotal" . "</br>";
echo "El producte de X,Y,N,M val $producteTotal" . "</br>";
echo "</br>";



// calculadora 

$num1 = 10;
$num2 = 3;
$op = '+';
$resultat = 0;

echo $num1 . "</br>" ;
echo $num2 . "</br>" ;
echo $op . "</br>" ;

calcular($num1,$num2,$op);

function calcular($num1,$num2,$op){
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
}

?>