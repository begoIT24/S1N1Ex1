<?php
class Batalla{
    private Lluitador $lluitador1;
    private Lluitador $lluitador2;

    private int $atac;

    public function __construct($lluitador1, $lluitador2){
        $this -> lluitador1 = $lluitador1;
        $this -> lluitador2 = $lluitador2;
    }

    public function lluitar(){  // falta tenir en compte probabilitat i completar llavors la condició d'empat en forsa
        while ($this -> lluitador1 -> getVida() != 0 | $this -> lluitador2 -> getVida() != 0 ){
            if ($this -> lluitador1 -> getForsa() > $this -> lluitador2 -> getForsa()) {
                $vidaPerdedor = $this -> lluitador2 -> getVida() - ($this -> lluitador1 -> getForsa() - $this -> lluitador2 -> getDefensa());
                $this -> lluitador2 -> setVida($vidaPerdedor);
            } else if ($this -> lluitador2 -> getForsa() > $this -> lluitador1 -> getForsa()) {
                $vidaPerdedor = $this -> lluitador1 -> getVida() - ($this -> lluitador2 -> getForsa() - $this -> lluitador1 -> getDefensa());
                $this -> lluitador1 -> setVida($vidaPerdedor);
            } else if ($this -> lluitador2 -> getForsa() == $this -> lluitador1 -> getForsa()){

            }
        }
        if ($this -> lluitador1 -> getVida() == 0) {  // millora: guardar el nom del guanyador en una variable i fer un sol echo
            echo 'El guanyador del combat és: '. $this -> lluitador1 -> getNom();
        } else if ($this -> lluitador2 -> getVida() == 0) {
            echo 'El guanyador del combat és: '. $this -> lluitador2 -> getNom();
        }
    }


}