<?php
require_once ('Estado.php');
class Libro{
    private string $titulo;
    private string $autor;
    protected Estado $estado;
    private int $numPag;

    public function __construct(string $titulo, string $autor, Estado $estado, int $numPag){
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> estado = $estado;
        $this -> numPag = $numPag;
    }

    public function getTitulo(): string{
        return $this ->titulo;
    }

    public function getAutor(): string{
        return $this -> autor;
    }

    public function getEstado(): Estado{
        return $this-> estado;
    }

    public function getNumPag(): int{
        return $this -> numPag;
    }
}