<?php
include ("PockerDice.php"); 
// Tirada de 5 daus
$_5daus=[];
for ($i = 0; $i < 5; $i++) {
    $pockerDice = new PockerDice();
    $indexEscollit = $pockerDice -> throw();
   // var_dump($indexEscollit);  // control de l'índex escollit
    $_5daus[] = $pockerDice -> shapeName($indexEscollit);
    echo "<br>";
}
// var_dump($_5daus); // control array de 5 daus creada
foreach ($_5daus as $dau) {
    echo $dau.'</br>';
}

?>