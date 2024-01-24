<?php

class Employee{
    public $nom= "";
    public $sou= 0;

    public function initialize($nom, $sou){
        $this->nom = $nom;
        $this->sou = $sou;
    }
    public function printNom(){
        if ($this->sou > 6000){
           $resposta = "$this->nom ha de pagar impostos";
        }else{
            $resposta = "$this->nom no ha de pagar impostos";
        }
        return $resposta;
    }
}

$employee1 = new Employee();
$employee1 -> initialize("Ana", 10000);
echo $employee1->printNom();
?>