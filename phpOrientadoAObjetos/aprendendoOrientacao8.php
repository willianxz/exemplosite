<?php

include_once 'Carro.php'; //Aqui apenas temos que chamar o nosso projeto do que seria um carro.
//OBS: Note que não foi preciso incluir a classe Farol e a classe Motor.

//Perceba que com essa tecnica de fabrica, não temos que passar tantos valores ao nosso Carro.
$carro1 = new Carro('Palio Fire', '2016');//Passamos o modelo e o ano.
 
//Aqui mostramos que o nosso Carro por padrão ja vem com um Farol e um Motor:
echo 'Modelo do farol atual: '.$carro1->getFarol()->getModelo().'</br>';
echo 'Potencia do farol atual: '.$carro1->getFarol()->getPotencia().'</br>';
echo '<hr/>';
echo 'Modelo do motor atual: '.$carro1->getMotor()->getModelo().'</br>';
echo 'Potencia do motor atual: '.$carro1->getMotor()->getPotencia().'</br>';

echo '<h2>Motor e Farol alterados: </h2>';

//Agora iremos alterar esse farol e o motor que vieram de padrão da nossa fabrica:
$carro1->getFarol()->setModelo('AAA-400');
$carro1->getFarol()->setPotencia('Média');
$carro1->getMotor()->setModelo('EJE-400');
$carro1->getMotor()->setPotencia('Baixa');

//Mostramos novamente nossos atributos:
echo 'Modelo do farol atual: '.$carro1->getFarol()->getModelo().'</br>';
echo 'Potencia do farol atual: '.$carro1->getFarol()->getPotencia().'</br>';
echo '<hr/>';
echo 'Modelo do motor atual: '.$carro1->getMotor()->getModelo().'</br>';
echo 'Potencia do motor atual: '.$carro1->getMotor()->getPotencia().'</br>';




//OBS: Se não souber os metodos disponiveis basta usar a função get_class_methods()
//no objeto instanciado ou colocando o nome da classe,
//Irá retornar os dados em um array, contendo os metodos da classe desejada.
 $metodosCarro =  get_class_methods($carro1);
  echo '<h2>Metodos do carro: </h2>';
  print_r($metodosCarro);
  echo '<hr/>';

  
 $metodosMotor =  get_class_methods($carro1->getMotor());
  echo '<h2>Metodos do motor: </h2>';
  print_r($metodosMotor);
  echo '<hr/>';
 
   $metodosFarol =  get_class_methods($carro1->getFarol());
  echo '<h2>Metodos do farol: </h2>';
  print_r($metodosFarol);
  echo '<hr/>';


?>