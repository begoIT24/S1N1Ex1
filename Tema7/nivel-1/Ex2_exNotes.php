<?php
class Calificacio {
    
    public function __construct(){}

    public function donarResultat (int $nota) {
            
        if ($nota >= 60) {
            $resposta = "El grau assolit és Primera divisió";
        }else if ($nota >= 45) {
            $resposta = "El grau assolit és Segona divisió";
        }else if ($nota >= 33) {
            $resposta = "El grau assolit és Tercera divisió";
        }else if ($nota < 33) {
            $resposta = "L'estudiant ha de reprovar";
        }
        return $resposta;
    }
}
$nota = new Calificacio();
echo $nota->donarResultat(65);
