<?php
include("Animal.php");
include("Gat.php");
include("Gos.php");

$gat = new Gat("Copito");
echo "Sóc el gat ". $gat -> getName() . " i faig: " . $gat -> makeSound() . "<br/>";
   
$gos = new Gos("Duke");
echo "Sóc el gos ". $gos -> getName() . " i faig: " . $gos -> makeSound();
?>