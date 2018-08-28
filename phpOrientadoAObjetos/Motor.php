<?php


class Motor {
    
    private $modelo;
    private $potencia;
    
    
    
    function __construct($modelo, $potencia) {
        $this->modelo = $modelo;
        $this->potencia = $potencia;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPotencia() {
        return $this->potencia;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPotencia($potencia) {
        $this->potencia = $potencia;
    }


    
}

?>