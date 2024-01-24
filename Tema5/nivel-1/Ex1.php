<?php
   abstract class Animal{
    public $nom;
    public function getNom($nom){
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
    $gat -> getNom("gat");
    echo $gat -> makeSound() . "<br/>";
   
    $gos = new Gos;
    $gos -> getNom("gos");
    echo $gos -> makeSound();
?>