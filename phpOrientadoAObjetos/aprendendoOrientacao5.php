<?php

//Aqui criamos o nosso projeto do que seria um carro em nosso sistema
class Carro{
    
   //Aqui faremos o encapsulamento de nosso atributos
   //protegendo nossos valores de acesso direto a eles.
    private $modelo;    // Colocamos os nossos atributos como privados
    private $ano;       //para bloquear o acesso diretamente.
    private $valor;    
    
    
    //É sempre recomendavel que o construct seja public por padrão.
    public function __construct($modelo,$ano,$valor) {
        $this->modelo = $modelo;  //aos ser criado o objeto, ja definimos com quais atributos ele será criado.
        $this->ano = $ano;
        $this->valor = $valor;
    }
    
    //Aqui temos os gets/sets para podermos pegar ou setar os valores 
    //a nossos atributos.
    function getModelo() {
        return $this->modelo;
    }

    function getAno() {
        return $this->ano;
    }

    function getValor() {
        return $this->valor;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }


}

//Aqui instanciamos(criamos) o nosso objeto.
$carro1 = new Carro('Palio  Fire', '2015', '30000');
//Ele terá esses valores em seus atributos.




//Mostramos o nosso carro criado:

echo 'Modelo: '.$carro1->getModelo().'</br>'; //Note que para acessar os atributos temos que usar os gets
echo 'Ano: '.$carro1->getAno().'</br>';
echo 'Valor: R$'.$carro1->getValor().'</br>';

echo '<hr/>';



$carro1->setModelo('Gol Bola'); //Se quisermos alterar os valores de nossos atributos
$carro1->setAno('1900'); //temos que usar os sets.
$carro1->setValor('18000');


//Mostramos o nosso segundo carro criado:

echo 'Modelo: '.$carro1->getModelo().'</br>'; //Mostramos o mesmo carro com os valores
echo 'Ano: '.$carro1->getAno().'</br>'; //alterados pelos sets.
echo 'Valor: R$'.$carro1->getValor().'</br>';

echo '<hr/>';


//Mostramos que bloqueamos o acesso direto aps valores de nossos atributos
//quando declaramos que os mesmos são privados.
$carro1->modelo = 'qualquer';
$carro1->ano = '2000';
$carro1->valor = '1000';
//Ao tentar acessar diretamente o atributo ou mostra-lo, será emitido um erro
//devido a serem privados.



?>