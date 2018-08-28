<?php
       
//Criamos o projeto do que seria uma Loja
class Loja{
    
    private $nomeDaLoja; // Estabelecemos os atributos da Loja.
    private $fundadaEm;
    private $produtos;
    
    //Ao criarmos a loja, inicialmente sera passado valores aos nossos atributos:
    function __construct($nomeDaLoja, $fundadaEm, $produtos) {
        $this->nomeDaLoja = $nomeDaLoja;
        $this->fundadaEm = $fundadaEm;
        $this->produtos = $produtos;
    }

    
    //Fazemos os nossos gets/sets.
    function getNomeDaLoja() {
        return $this->nomeDaLoja;
    }

    function getFundadaEm() {
        return $this->fundadaEm;
    }

    function getProdutos() {
        return $this->produtos;
    }


    function setNomeDaLoja($nomeDaLoja) {
        $this->nomeDaLoja = $nomeDaLoja;
    }

    function setFundadaEm($fundadaEm) {
        $this->fundadaEm = $fundadaEm;
    }

    function setProdutos($produtos) {
        $this->produtos = $produtos;
    }

    //Mostramos todos os produtos da loja com esse metodo.    
    public function mostrarProdutos(){
        
        if(!empty($this->produtos)){ //Se não tiver vazio os produtos, podemos mostra-los:
            for($i = 0;$i < count($this->produtos);$i++){ //Fazemos um laço.
                echo $this->produtos[$i].'</br>'; //mostre cada produto.
            }            
        }
        
    }
    
    //Esse metodo é para adicionar um novo produto:
    public function adicionarProduto($produto){
        array_push($this->produtos, $produto); //Colocamos o produto novo ao nosso atributo.
    }
    
    
}

//Fazemos a simulação de um formulario WEB:
$nomeDaLoja = 'Koerich';
$fundadaEm = '1800';
$produtos = array('Tv','Notebook','Som','Celular');


//Instanciamos a nossa loja com o que veio do 'formulario WEB'
$loja1 = new Loja($nomeDaLoja, $fundadaEm, $produtos);

//Mostramos a nossa loja:
echo 'Nome da loja: '.$loja1->getNomeDaLoja().'</br>';
echo 'Fundada em: '.$loja1->getFundadaEm().'</br>';

echo 'Produtos da loja: </br>';  
$loja1->mostrarProdutos(); //Lembre-se esse método ja tem o echo interno.

echo '<hr/>';

echo 'Produtos da loja: </br>';//Aqui mostramos como podemos mostrar sem nosso metodo:
for($i = 0;$i < count($loja1->getProdutos());$i++){
    echo $loja1->getProdutos()[$i].'</br>';  //Mostra um a um.
}

echo '<hr/>';


$loja1->adicionarProduto('Camêra'); //Adicionamos um novo produto a nossa loja.

echo 'Produtos da loja: </br>';  
$loja1->mostrarProdutos(); //Mostramos que nosso produto foi adicionado!


?>