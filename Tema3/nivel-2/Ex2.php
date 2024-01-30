<?php
$notesClasse = [
    "Clara"=> [8,7,8,6,8],
    "Joan"=> [5,8,6,6,7],
    "Laura"=> [5,5,6,8,7],
    "Jordi"=> [9,7,7,8,9],
    "Max"=> [3,5,5,6,4],
    "Mariona"=> [4,4,6,7,7],
    "Núria"=> [10,8,8,9,7]
];
$notesMitjanes = [];

// Llista d'alumnes amb les seves notes:
foreach ($notesClasse as $nom => $notesAlumne) {
	echo "$nom: "; 
	foreach($notesAlumne as $nota){
		echo "$nota ";	
	}
    echo "</br>";
}
echo "</br>";

// Llista d'alumnes amb la nota mitjana:  
foreach ($notesClasse as $nom => $notesAlumne) {
	echo "Nota mitjana de $nom: ";
    $notaMitjana = calcularMitjanaAlumne($nom, $notesAlumne);
    echo $notaMitjana . "<br />";
	array_push($notesMitjanes, $notaMitjana);  // es va poblant l'array de notes mitjanes
}
echo "</br>";
print_r($notesMitjanes); // comprovo que s'ha creat correctament
echo "</br>"."</br>";

// Càlcul de la nota mitjana de classe
$notaTotal = calcularMitjanaClasse($notesMitjanes);
echo "La nota mitjana de la classe és: " . round($notaTotal,2);

function calcularMitjanaAlumne($nom, $notesAlumne){
    $suma = array_sum($notesAlumne);
    $mitjana = $suma / count($notesAlumne);     // count en comptes de 5 fixe 
    return $mitjana;                             
}
function calcularMitjanaClasse($notesMitjanes) {
    $suma = array_sum($notesMitjanes);
    $mitjana = $suma / count($notesMitjanes);    // count en comptes de 7 fixe
    return $mitjana;
}
?>