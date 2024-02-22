<?php
class Peli{
    private string $titol;
    private string $director;
    private int $minuts;

    public function __construct(string $titol, string $director, int $minuts) {
        $this -> titol = $titol;
        $this -> director = $director;
        $this -> minuts = $minuts;
    }
    public function getTitol(): string{
        return $this -> titol;
    }
    public function getDirector(): string{
        return $this -> director;
    }
    public function getMinuts(): int{
        return $this -> minuts;
    }
}
?>