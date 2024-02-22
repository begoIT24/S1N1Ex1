<?php
class Libro{
    private string $titulo;
    private string $autor;
    private string $estado;
    private int $numPag;

    public function __construct(string $titulo, string $autor, string $estado, int $numPag){
        $this ->titulo = $titulo;
        $this ->autor = $autor;
        $this ->estado = $estado;
        $this ->numPag = $numPag;
    }

    public function getTitulo(): string{
        return $this ->titulo;
    }

    public function getAutor(): string{
        return $this -> autor;
    }

    public function getNumPag(): int{
        return $this -> getNumPag;
    }
}
?>