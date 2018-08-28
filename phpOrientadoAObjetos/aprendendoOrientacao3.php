<?php


class Pessoa { // Criamos um projeto do que seria uma pessoa:

    public $nome; //Declaramos que atributos uma pessoa irá possuir.
    public $identidade;
    public $idade;
    public $peso;

    //Aqui criamos um construtor, que desta vez iremos declarar os valores de nosso atributo
    //No momento da criação de nosso objeto.
    public function __construct($nome,$identidade,$idade,$peso) { 

        $this->nome = $nome; //Aqui, todo novo objeto irá receber o que veio do parametro.
        $this->identidade = $identidade; 
        $this->idade = $idade;
        $this->peso = $peso;
    }
    

}

//Aqui fazemos uma simulação de dados que vinheram de um formulario web:
$nomeRecebido = 'Joanito';
$identidadeRecebida = '1.1645.24.2';
$idadeRecebida = 20;
$pesoRecebido = 70;

//Agora instanciamos(criamos) o nosso objeto com esses valores:
$pessoa1 = new Pessoa($nomeRecebido, $identidadeRecebida, $idadeRecebida, $pesoRecebido);

echo 'Nome: '.$pessoa1->nome.'</br>'; //Mostramos o nosso objeto $pessoa1
echo 'Identidade: '.$pessoa1->identidade.'</br>';
echo 'Idade: '.$pessoa1->idade.'</br>';
echo 'Peso: '.$pessoa1->peso.'</br>';

echo '<hr/>';

$pessoa1->nome = 'João'; //Aqui mostramo que podemos alterar os valores da $pessoa1 diretamente
$pessoa1->identidade = '4343.213.43';//Perceba que isso não é seguro, por isso iremos aprender sobre encapsulamento
$pessoa1->idade = 25;   //e Gets/Sets.
$pessoa1->peso = 86;

echo 'Nome: '.$pessoa1->nome.'</br>'; //Mostramos o nosso objeto $pessoa1 que foi alterado diretamente.
echo 'Identidade: '.$pessoa1->identidade.'</br>';
echo 'Idade: '.$pessoa1->idade.'</br>';
echo 'Peso: '.$pessoa1->peso.'</br>';

echo '<hr/>';

//OBS: Note que podemos alterar o objeto acessando seu atributo ou até mesmo criar um outro objeto com outros parametros.

?>
