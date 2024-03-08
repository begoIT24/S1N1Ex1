<?php
class Biblioteca {
    private string $nomBiblioteca;
    private array $coleccion;
    
    public function __construct(string $nomBiblioteca) {
        $this->nomBiblioteca = $nomBiblioteca;
    }
   
    public function AfegirLibro(Libro $libro): void{
        $this->coleccion[] = $libro;
   }

    function buscarLibroMaxPag(): void {
        $pagMax = 0;
        $titulo = "";
        foreach ($this -> coleccion as $libro) {
            if ($libro -> getNumPag() > $pagMax) {
                $pagMax = $libro -> getNumPag();
                $titulo = $libro -> getTitulo();
            }
        }
        echo 'El libro con mayor nº de páginas es:'.'</br/>'. $titulo. ' ' .$pagMax. ' pàg'. '';
    }

    function buscarLibrosPerdidos(): void{  
        $librosPerdidos = null;
        foreach ($this -> coleccion as $libro) {
            if ($libro -> getEstado() == Estado::Perdido ){   
                $librosPerdidos[] = $libro -> getTitulo();
            }
        }
        if (is_null($librosPerdidos)){
            echo 'En estos momentos no hay ningún libro perdido';
        }else{
            echo 'El listado de libros perdidos es:'. '</br>';
            foreach ($librosPerdidos as $libro) {
                echo  $libro . "</br>";
            };
        }
    }   
}

