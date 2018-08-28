<?php

//Quando esta pagina for requisitada ela fara o seguinte: 

//Faça um sorteio de no maximo 5 elementos:
$sorte = rand(0,4);

//Crie um array para armazenarmos as nossas frutas:
$frutas = array('Maça','Banana','Laranja','Jabuticaba','Uva');

//Aqui criamos outro array que armazenara as imagens de nossas frutas:
$imagens[0] = 'http://www.asdeliciasdodudu.com.br/wp-content/uploads/2014/09/Captura-de-Tela-2014-09-16-%C3%A0s-11.59.31.png';
$imagens[1] = 'http://www.lifestyles.com.br/index.htm/wp-content/uploads/2010/03/7d06845bc5f631b32ced2eca26312de5.jpg';
$imagens[2] = 'http://feijoadacity.com.br/wp-content/uploads/2016/10/laranja.jpg';
$imagens[3] = 'https://upload.wikimedia.org/wikipedia/commons/6/63/Jabuticaba_fruto.jpg';
$imagens[4] = 'http://www.vinicolagaribaldi.com.br/images/sucos/grape.png';

//Crie outro array para armazenar os preços de nossas frutas: 
$precos = array(1.99,2.40,2.20,1.80,3.20);

//Aqui mostramos a nossa fruta sorteada, contendo seu nome/imagem/preço:
echo "<img src='".$imagens[$sorte]."'/>";
echo '</br>';
echo '<h1>'.$frutas[$sorte].'</h1>';
echo '<h2> R$: '.$precos[$sorte].'</h2>';


//OBS: A cada requisição da pagína será sorteada uma de nossas frutas.


?>





