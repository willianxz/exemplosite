<?php

//Incluimos nosso projeto do que seria um Warrior:
include_once 'Warrior.php';

//Criamos um novo Warrior:
$novoWarrior = new Warrior('Zezima');
echo 'Nome: '.$novoWarrior->getNome().'</br>'; //Mostramos todos os atributos dele com get.
echo 'Tipo de arma: '.$novoWarrior->getTipoArma().'</br>';
echo 'Numero de vida: '.$novoWarrior->getVida().'</br>';
echo 'Ataque: '.$novoWarrior->getAtaque().'</br>';
echo 'Defesa: '.$novoWarrior->getDefesa().'</br>';

echo '<hr/>';

echo 'Nome: '.$novoWarrior->getNome().'</br>';
$novoWarrior->mostrarAtributos(); //Agora mostramos todos com o nosso metodo.


//Aqui em diante criamos varios novos Warriors para demonstrar a utilidade
//de ser ter um atributo como static:
$novoWarrior2 = new Warrior('Old br');
$novoWarrior3 = new Warrior('Iesu f');
$novoWarrior4 = new Warrior('Destroyer');
$novoWarrior5 = new Warrior('Elemental Warrior');

//Mostramos os aributos de todos os novos warriors:
echo '<hr/>';
echo 'Nome: '.$novoWarrior2->getNome().'</br>';
$novoWarrior2->mostrarAtributos();


echo '<hr/>';
echo 'Nome: '.$novoWarrior3->getNome().'</br>';
$novoWarrior3->mostrarAtributos();


echo '<hr/>';
echo 'Nome: '.$novoWarrior4->getNome().'</br>';
$novoWarrior4->mostrarAtributos();


echo '<hr/>';
echo 'Nome: '.$novoWarrior5->getNome().'</br>';
$novoWarrior5->mostrarAtributos();

echo '<hr/>';
$novoWarrior5->setTipoArma('Machado'); //Sobrescrevemos o valor static que veio da classe.
echo 'Nome: '.$novoWarrior5->getNome().'</br>';
$novoWarrior5->mostrarAtributos();



//OBS: Olhe acima, Perceba que ao mudar o atributo static na classe muda para todos,porem
//se tiver algum warrior sobrescrevendo o valor do atributo, irá sobrescrever o valor
// que vem da classe

//Atributos static são interessante para ser usados em classes de banco de dados.


?>