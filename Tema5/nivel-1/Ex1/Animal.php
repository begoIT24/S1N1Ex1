<?php
abstract class Animal{
    public $nom;
    public function __construct($nom){
        $this -> nom = $nom;
    }
    public function getName(){
        return $this -> nom;
    }
    abstract function makeSound();
}
?>