<?php
$nota = 33;
$resposta ="";

function resultat ($nota) {
    if ($nota >= 60) {
        $resposta = "El grau assolit és Primera divisió";
    }else if ($nota >= 45) {   //($nota >= 45 && $nota < 60):la 2ª cond no és necessària
        $resposta = "El grau assolit és Segona divisió";
    }else if ($nota >= 33) {   //($nota >= 33 && $nota < 45):la 2ª cond no és necessària  
        $resposta = "El grau assolit és Tercera divisió";
    }else if ($nota < 33) {
        $resposta = "L'estudiant ha de reprovar";
    }
    echo $resposta;
}
resultat ($nota);
?>
