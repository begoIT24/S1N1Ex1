<?php

class PockerDice{
    public $caras = ["As", "K", "Q", "J", "7", "8"];
    
    function __construct(){}
    
    function throw(){
        $indexEscollit = array_rand($this->caras);
        return $indexEscollit;
    }
    function shapeName($indexEscollit){
        return $this->caras[$indexEscollit];
    }
}


?>