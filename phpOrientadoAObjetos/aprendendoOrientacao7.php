<?php

include_once 'Carta.php'; //Incluimos as nossas cartas

//Fazemos um projeto do que seria um baralho:
class Baralho{
    
    
    private $cartas; // Esse atributo irá conter todas as nossas cartas instanciadas.
    
    
    //Aqui criamos nosso construtor para que seja construido com um array de cartas: 
    function __construct(Array $cartas) {
        $this->cartas = $cartas;
    }
    
    
    function getCartas() {
        return $this->cartas;
    }

    function setCartas($cartas) {
        $this->cartas = $cartas;
    }
    
    
    //Metodo para mostrar nosso baralho:
    public function mostrarBaralho(){
       
        //Percorremos nosso baralho:
      for($i = 0;$i < count($this->cartas);$i++){ 
          
          if(isset($this->cartas[$i])){ //Verificamos se realmente tem algo na posição:
            echo $this->cartas[$i]->getSimbolo().' - '.$this->cartas[$i]->getNumero().'<hr/>';
            //Mostramos cada carta.
          }
      }     
        
    }
    
    //Metodo para criar um novo baralho randomico de 40 cartas.
    public function criarNovoBaralho(){
        
        //Criamos os 4 simbolos colocando em um array:
        $simbolos = array('Paus','Ouros','Espadas','Copas');     
        
        //Declaramos que a variavel cartas será um array()
        $cartas = array();
        
        //fazemos um laço para criar nossas 40 cartas randomicas
        for($i = 0;$i < 40;$i++){
            
             //Fazemos um sorteio de 1,12 para nossos numeros
             $numSortido = rand(1,12);
             
             //Fazemos um sorteio para nossos simbolos:
             $numSimboloSortido = rand(0,3);
           
             //Instanciamos uma nova carta a cada loop:
             $novaCarta = new Carta($numSortido, $simbolos[$numSimboloSortido]);
             
             
             //Adicionamos essa carta ao nosso array de cartas:
             array_push($cartas, $novaCarta);           
            
        }
        
        //Sobrescrevemos o nosso atributo de cartas com as cartas randomicas:
        $this->cartas = $cartas; //Sobrescrevemos qualquer baralho anterior.
        
    }

       
    
}

//Criamos as cartas:
$carta1 = new Carta(7, 'paus');
$carta2 = new Carta(2, 'paus');
$carta3 = new Carta(1, 'paus');

//Agora adicionamos essas cartas em um array:
$cartas = array($carta1,$carta2,$carta3);

//Aqui enviamos o nosso array de cartas para o nosso baralho:
$baralho = new Baralho($cartas);

//Mostramos o nosso baralho com nossas cartas:
$baralho->mostrarBaralho();


//Aqui criamos um baralho randomico com 40 cartas sortidas:
echo '<h2>Atualize a pagina para criar um novo baralho: </h2>';
echo '<hr/>';
$baralho->criarNovoBaralho();

//Perceba que sobrescrevemos o nosso array de cartas que tinhamos enviado ao nosso baralho


//Novamente mostramos o baralho para demonstrar que sobrescrevemos o nosso baralho.
$baralho->mostrarBaralho();




?>
