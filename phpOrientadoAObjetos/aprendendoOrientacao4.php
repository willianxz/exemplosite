<?php



//Criamos um projeto do que seria um cachorro.
class Cachorro{
    
   public $apelido; //Declaramos os seus atributos.
   public $latido;
   public $raca; 
   
   //Aqui criamos o nosso construtor(construct) para podermos colocar os atributos de
   //nosso objeto ao criarmos.
   function __construct($apelido, $latido, $raca) {
       $this->apelido = $apelido; //Declaramos que na hora de instanciar os atributos seram o que
       $this->latido = $latido; //Vier dos parametros.
       $this->raca = $raca;   
       
   }

   
   //Nossos gets, são apenas para retornar os nossos atributos,
   //para que possamos mostrar na tela
   function getApelido() {
       return $this->apelido;
   }

   function getLatido() {
       return $this->latido;
   }

   function getRaca() {
       return $this->raca;
   }

   
   
   //Os nossos sets servem para podermos manipular o valor contido em nossos atributos.
   function setApelido($apelido) {
       $this->apelido = $apelido;
   }

   function setLatido($latido) {
       $this->latido = $latido;
   }

   function setRaca($raca) {
       $this->raca = $raca;
   }

//OBS: É recomendavel utilizarmos gets e sets sempre, para podermos aplicar 
//o encapsulamento dando uma maior segurança em nossos atributos,
//posteriormente iremos ver.
   
    
}


//Aqui fazemos uma simulação do que vem do formulário WEB.
 $apelido = 'Sparks';
 $latido =  'Alto';
 $raca = 'Pastor alemão';
   
 //Aqui criamos(instanciamos) o nosso objeto cachorro com o que veio do 'formulário':
 $cachorro1 = new Cachorro($apelido, $latido, $raca);
 
 echo 'Apelido: '.$cachorro1->apelido.'</br>'; //Mostramos os atributos de nosso cachorro:
 echo 'Latido: '.$cachorro1->latido.'</br>';
 echo 'Raça: '.$cachorro1->raca.'</br>';

 echo '<hr/>';
 
 
 //Aqui mostramos que podemos manipular esse mesmo cachorro, alterando os atributos
$cachorro1->apelido = 'Spot';
$cachorro1->latido = 'Médio';
$cachorro1->raca = 'Vira lata';
//Note que isso não é recomendado, por isso iremos aprender o meio de get/set 
//para posteriormente aplicarmos encapsulamento dessas informações 
//e bloquearmos essa opção de manipulação direta.


//Mostramos que nosso cachorro foi alterado diretamente através do atributo:
 echo 'Apelido: '.$cachorro1->apelido.'</br>';
 echo 'Latido: '.$cachorro1->latido.'</br>';
 echo 'Raça: '.$cachorro1->raca.'</br>';

 echo '<hr/>';

 
 //Aqui estamos colocando os valores usando a forma recomendada
 //Por meio de funções(métodos), chamados sets.
 $cachorro1->setApelido('Jumps');
 $cachorro1->setLatido('baixo');
 $cachorro1->setRaca('chiuaua');
 
 
 //Para mostrar os valores de nossos atributos é recomendado o uso 
 //de gets, funções(métodos) que retornam o valor contido
 //no atributo de nosso objeto.
 echo 'Apelido: '.$cachorro1->getApelido().'</br>';
 echo 'Latido: '.$cachorro1->getLatido().'</br>';
 echo 'Raça: '.$cachorro1->raca.'</br>';

 echo '<hr/>';
 
 
 //OBS: É recomendado sempre utilizemos gets para pegar os valores
 //de nosso objeto contido nos atributos
 //e os sets para colocarmos(setarmos) valores aos próprios atributos.

?>