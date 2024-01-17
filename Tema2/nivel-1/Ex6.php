<?php
$probab = rand (0, 1);      //50% probabilitat que surti un o l'altre

function isBitten ($probab) {
   switch ($probab){
        case false:         //Agafa el valor numèric 0 com a valor booleà false
            echo "El Charlie no m'ha mossegat :)";
            break;
        case true:          //Agafa el valor numèric 1 com a valor booleà true
            echo "El Charlie m'ha mossegat!! :(";
            break;
    }
}
isBitten ($probab);
?>