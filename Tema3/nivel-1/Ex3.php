<?php
$paraules = ["persona", "present", "classe", "escala"];
$caracter = "e";

foreach($paraules as $paraula){
    echo $paraula . "</br>";
}

echo "Lletra a buscar: $caracter" . "</br>";
echo "</br>";

$resultat = busqueda($caracter, $paraules);
if ($resultat == true){
    $resposta = "S'ha trobat la lletra $caracter a totes les paraules";
}else{
    $resposta = "No s'ha trobat la lletra $caracter a totes les paraules";
}
echo $resposta;

function busqueda($caracter, $paraules){
    foreach($paraules as $paraula){
         $resultat = str_contains($paraula, $caracter);
         if ($resultat == false) {
            return false;
         }
    }
    return true;
}

/* for ($i=0; $i<4; $i++){
    $paraula = $paraules[$i];       amb foreach no cal la mida de l'array */

//in_array($caracter, $paraules)  Cerca una paraula sencera (element), no un caràcter 
?>