<?php
   abstract class Animal{
    public $nom;
    public function setNom($nom){
        $this -> nom = $nom;
    }
    abstract function makeSound();
    }
        class Gat extends Animal{
            public function makeSound(){
               return "miau!!";
          }
        }
        class Gos extends Animal{
            public function makeSound(){
                return "guau!!";
            }
        }
    $gat = new Gat;
    $gat -> setNom("gat");
    echo $gat -> makeSound() . "<br/>";
   
    $gos = new Gos;
    $gos -> setNom("gos");
    echo $gos -> makeSound();
?>