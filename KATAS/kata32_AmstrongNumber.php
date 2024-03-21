<?php

//falta entrada desde teclado
$number = 407 ;     //407 / 153;  204
echo $number.'</br>?';

//falta bucle según nº de dígitos
$numeroDigits = strlen($number);
echo $numeroDigits.'</br>?';

$digit1 = $number % 10;
$num1 = (int) $number / 10; 
// echo $num1.'</br>?'; división da decimales: no castea a int
echo $digit1.'</br>?';

$digit2 = $num1 % 10;
$num2 = (int) $num1 / 10; 
echo $digit2.'</br>?';

$digit3 = $num2 % 10;
echo $digit3.'</br>?';

if ($digit1**3 + $digit2**3 + $digit3**3 === $number){
    $resposta = $number. ' és un nombre de Amstrong';
}else{
    $resposta = $number. ' NO és un nombre de Amstrong'; 
}
echo $resposta;


?>