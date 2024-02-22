<?php
require_once('Peli.php');
require_once('Cine.php');

$cine1 = new Cine('Cinenuevo', 'Girona');
$cine2 = new Cine('Grancinema', 'Barcelona');

$peli1 = new Peli('El gran titol', 'Luis L.', 120);
$peli2 = new Peli('La meva peli', 'A.M', 130);
$peli3 = new Peli('Un èxit total', 'Pep R.', 90);
$peli4 = new Peli('Una de superherois', 'Mary F.', 150);


$cine1 -> AfegirPelis($peli1);
$cine1 -> AfegirPelis($peli2);
$cine2 -> AfegirPelis($peli3);
$cine2 -> AfegirPelis($peli4);

// Mostrar les dades de cada peli per cinema
MostrarCataleg($cine1);
echo '</br>';
MostrarCataleg($cine2);
echo '</br>';

function MostrarCataleg($cine) {
    echo 'Les pelis del cinema '.$cine->getNomCinema().' són:'.'</br>';	
    foreach($cine as $peli) {
        echo 'Titol: '.$peli->getTitol().' / Director: '.$peli->getDirector().' / Durada (min): '.$peli->getMinuts().'</br>';
    };
};

// Peli amb major duració
echo 'La peli de màx durada del cine '.$cine1->getNomCinema(). ' és:'.'</br>';
$cine1 -> obtenirMaxDurada();
echo '</br>';
echo 'La peli de màx durada del cine '.$cine2->getNomCinema(). ' és:'.'</br>';
$cine2 -> obtenirMaxDurada();
echo '</br>';

// Cercar pelis per nom de director en diferents cinemes
$director1 = 'A.M';
$director2 = 'Mary F.';
echo 'El resultat de la búsqueda del director '. $director1 . ' al cine '. $cine1->getNomCinema(). ' és:'.'</br>';
$cine1 -> buscarDirector($director1);
echo '</br>';
echo 'El resultat de la búsqueda del director '. $director2 . ' al cine '. $cine1->getNomCinema(). ' és:'.'</br>';
$cine1 -> buscarDirector($director2);


?>