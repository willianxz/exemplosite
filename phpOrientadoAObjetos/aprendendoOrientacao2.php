<?php

class Pessoa { // Criamos um projeto do que seria uma pessoa:

    public $nome; //Declaramos que atributos uma pessoa irá possuir.
    public $identidade;
    public $idade;
    public $peso;

    public function __construct() { //Aqui criamos um construtor, que servira para nos auxiliar no momento de criar essa pessoa.

        $this->nome = 'Joanito'; //Quando for instanciado qualquer objeto Pessoa, automaticamente ela irá receber esses nossos
        $this->identidade = '1.1645.24.2'; //atributos fixos.
        $this->idade = 20;
        $this->peso = 70;
    }

}

$pessoa1 = new Pessoa(); //Criamos uma nova pessoa, que ja terá nossos atributos declarados com o que pedimos.

$pessoa2 = new Pessoa(); //Criamos uma outra nova pessoa, que tambem terá nossos atributos declarados com o que pedimos.


echo 'Nome: ' . $pessoa1->nome.'</br>'; //Mostramos a nossa pessoa
echo 'Identidade: ' . $pessoa1->identidade.'</br>';
echo 'Idade: ' . $pessoa1->idade.'</br>';
echo 'Peso: ' . $pessoa1->peso.'</br>';

echo '<hr/>';


echo 'Nome: ' . $pessoa2->nome.'</br>'; //Mostramos a nossa outra pessoa
echo 'Identidade: ' . $pessoa2->identidade.'</br>';
echo 'Idade: ' . $pessoa2->idade.'</br>';
echo 'Peso: ' . $pessoa2->peso.'</br>';

echo '<hr/>';

//OBS: Note que ambas possuem os mesmos atributos declarados igualmente, devido ao nosso construtor(construct).



//Podemos mudar tambem o objeto diretamente acessando o atributo e atribuindo algo exemplo:
$pessoa2->nome = 'Julio';
$pessoa2->identidade = '2.5445.3213';
$pessoa2->idade = 30;
$pessoa2->peso = 80;

//Mostramos novamente o objeto $pessoa2 que agora estará com os valores sobrescritos.
echo 'Nome: ' . $pessoa2->nome.'</br>';
echo 'Identidade: ' . $pessoa2->identidade.'</br>';
echo 'Idade: ' . $pessoa2->idade.'</br>';
echo 'Peso: ' . $pessoa2->peso.'</br>';

echo '<hr/>';

//OBS: conseguimos alterar os valores fixos da nossa $pessoa2, devido a esses atributos estarem declarados como public
//em nosso projeto do que seria uma pessoa.



?>