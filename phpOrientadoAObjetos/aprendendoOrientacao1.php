<?php

//Criamos um projeto do que seria um carro.
class Carro{
    
    public $id; //O carro vai possuir esses atributos.
    public $modelo;    
    public $ano;
    public $valor;    
    
}



$carro1 = new Carro(); // Aqui fabricamos o nosso carro, criando um objeto unico.

$carro1->id = '1'; //Colocamos os atributos de nosso carro.
$carro1->modelo = 'Palio Fire';
$carro1->ano = 2005;
$carro1->valor = 30000;


$carro2 = new Carro();// Aqui fabricamos o nosso carro, criando um objeto unico.

$carro2->id = '2'; //Colocamos os atributos de nosso carro.
$carro2->modelo = 'Gol Bola';
$carro2->ano = 1990;
$carro2->valor = 20000;


//Mostramos o nosso primeiro carro criado:
echo 'Id: '.$carro1->id .'</br>'; 
echo 'Modelo: '.$carro1->modelo.'</br>';
echo 'Ano: '.$carro1->ano.'</br>';
echo 'Valor: '.$carro1->valor.'</br>';

echo '<hr/>';


//Mostramos o nosso segundo carro criado:
echo 'Id: '.$carro2->id .'</br>';
echo 'Modelo: '.$carro2->modelo.'</br>';
echo 'Ano: '.$carro2->ano.'</br>';
echo 'Valor: '.$carro2->valor.'</br>';


?>