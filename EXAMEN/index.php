<?php
require_once('Biblioteca.php');
require_once('Libro.php');
require_once('Estado.php');

$biblioteca = new Biblioteca('El Clot');

$libro1= new Libro('El señor de los anillos', 'J.R.R. Tolkien', Estado::Disponible, 1000);
$libro2= new Libro('Cien años de soledad', 'Gabriel García Márquez', Estado::Prestado, 500);
$libro3= new Libro('Harry Potter y la piedra filosofal', 'J.K. Rowling', Estado::Perdido, 400);
$libro4= new Libro('1984', 'George Orwell', Estado::Perdido, 328);

$biblioteca -> AfegirLibro($libro1);
$biblioteca -> AfegirLibro($libro2);
$biblioteca -> AfegirLibro($libro3);
$biblioteca -> AfegirLibro($libro4);

$biblioteca -> buscarLibroMaxPag();

echo '</br>';

$librosPerdidos = $biblioteca -> buscarLibrosPerdidos();
