<?php


//Aqu criamos um projeto do que seria um novo guerreiro: 
class Warrior {
  
    //OBS:Perceba que temos alguns atributos static, o static serve para podermos alterar em
    //todos os objetos instanciados de uma só vez.
    private $nome;
    private static $tipoArma = 'Espada'; //Ele iria iniciar com esses atributos:
    private static $vida = 80;
    private static $ataque = 2;
    private static $defesa = 5;
    
    
    function __construct($nome) {
        $this->nome = $nome;
    }

    
    
    
    function getNome() {
        return $this->nome;
    }
    
    //OBS: Perceba que os atributos statics tem um set/get diferente:
    static function getTipoArma() {
        return self::$tipoArma; //Para acessar diretamente utilizamos self:: ao inves de this.
    }

    static function getVida() {
        return self::$vida;
    }

    static function getAtaque() {
        return self::$ataque;
    }

    static function getDefesa() {
        return self::$defesa;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    static function setTipoArma($tipoArma) {
        self::$tipoArma = $tipoArma;
    }

    static function setVida($vida) {
        self::$vida = $vida;
    }

    static function setAtaque($ataque) {
        self::$ataque = $ataque;
    }

    static function setDefesa($defesa) {
        self::$defesa = $defesa;
    }


    //Metodo para mostrar na tela nossos atributos:
     public function mostrarAtributos(){
         echo 'Tipo de arma: '.self::$tipoArma.'</br>';
         echo 'Numero de vida: '.self::$vida.'</br>';
         echo 'Ataque: '.self::$ataque.'</br>';
         echo 'Defesa: '.self::$defesa.'</br>';
     }
    
    
    
    
    
}

?>