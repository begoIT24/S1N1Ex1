<?php

class Cine{

    private string $nom;
    private string $poblacio;
    private array $pelis;

    public function __construct(string $nom, string $poblacio){
        $this->nom = $nom;
        $this->poblacio = $poblacio;
    }

    public function AfegirPelis(Peli $peli): void{
         $this->pelis[] = $peli;
    }

    public function MostrarPelis() : array{
        return $this->pelis;
    }

    public function getNomCinema() : string{
        return $this-> nom;
    }
  
    public function obtenirMaxDurada() {
        $maxDurada=0;
        $nomPeli="";
        foreach($this->pelis as $peli){
            if ($peli->getMinuts() > $maxDurada) {
                $maxDurada = $peli->getMinuts();
                $nomPeli = $peli->getTitol();
            }
        }
        echo 'Títol: '. $nomPeli . ' / Durada (min): '. $maxDurada . '</br>';
        //return $maxDurada;
    } 
    
    public function BuscarDirector($nomDirector) {
        $nomTrobat= "";
        $nomPeli= "";
       
        foreach($this->pelis as $peli){
            if ($peli->getDirector() == $nomDirector) {
                $nomTrobat = $peli->getDirector();
                $nomPeli = $peli->getTitol();
                echo 'Títol: '. $nomPeli . ' / Director: '. $nomTrobat . '</br>';
             } 
         }
         if (empty($nomTrobat)) {
            echo "No s'ha trobat cap peli amb aquest director" .'</br>';
        }
    }
}

?>