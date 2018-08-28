<?php

//Aqui incluimos todos as classes que serviram para criar os 
//objetos que iram compor o nosso Carro:
include 'Motor.php';
include 'Farol.php';

class Carro {
    
    //Declaramos nossos atributos:
    private $modelo;
    private $ano;
    private $motor;  
    private $farol;
    
    //Iremos pedir só o modelo e o ano pra construir o nosso carro:
    function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->motor =  new Motor('AXY-2000', 'alta');//Esse por padrão será nosso motor.
        $this->farol = new Farol('YEF-300', 'alta');//Esse por padrão será nosso farol.
    }

    function getModelo() {
        return $this->modelo;
    }

    function getAno() {
        return $this->ano;
    }

    function getMotor() {
        return $this->motor;
    }


    function getFarol() {
        return $this->farol;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    //Observe que nosso set é um set diferente:
    function setMotor($modelo, $potencia) {
        //Nosso set sera responsavel por criar um motor 
        //e coloca-lo como motor do nosso carro
        $motor = new Motor($modelo, $potencia);
        $this->motor = $motor;
    }

    //O set do farol tambem será diferente, pois não queremos que o programador
    //se preucupe com a classe farol ou motor.
    function setFarol($modelo, $potencia) {
        //Nosso set sera responsavel por criar um farol
        //e coloca-lo como farol do nosso carro
        $farol = new Farol($modelo, $potencia);       
        $this->farol = $farol;
    }

    
    
    
    
}

?>