<?php


class Carta {
    
    private $numero;
    private $simbolo;
            
    
    function __construct($numero, $simbolo) {
        $this->numero = $numero;
        $this->simbolo = $simbolo;
    }

    
    function getNumero() {
        return $this->numero;
    }

    function getSimbolo() {
        return $this->simbolo;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setSimbolo($simbolo) {
        $this->simbolo = $simbolo;
    }


    
}

?>