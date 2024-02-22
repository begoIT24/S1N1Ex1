<?php
require_once('Libro.php');

$libro1= new Libro('Libro1', 'Pepe G.', 'disponible', 500);
$libro2= new Libro('Libro2', 'Juan G.', 'disponible', 400);
$libro3= new Libro('Libro3', 'Ana G.', 'perdido', 200);
$libro4= new Libro('Libro4', 'Maria G.', 'disponible', 450);

$librosPag = [$libro1->getNumPag(), $libro2->getNumPag(), $libro3->getNumPag(), $libro4->getNumPag()];	
$coleccion = [$libro1, $libro2, $libro3, $libro4];
function buscarMaxPag($librosPag) {
    $pagMax = 0;
    foreach ($librosPag as $value) {
        if ($value > $pagMax) {
            $pagMax = $value;
        }
    }
    return $pagMax;
}

echo $pagMax;

function buscarLibrosperdidos($coleccion){
    foreach ($coleccion as $index => $value) {
        if ($value == "perdido" ){
            echo $value -> getTitulo() . ' ' . ;
        }

    }


}
?>