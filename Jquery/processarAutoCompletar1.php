<?php


//Aqui processamos o GET vindo de nossa pagina autoCompletar1.html:
if(isset($_GET['nome'])){

	$nome = $_GET['nome']; //Colocamos o nosso GET e uma variavel

	$nomeMinusculo = strtolower($nome); //Fazemos toda essa informação ficar em letras minuscula

	//Note que fazendo isso conseguimos manipular melhor essa informação.


	//Fazemos um switch, nessa informação enviada.
	switch ($nomeMinusculo) {
		case 'a': //Caso tenha apenas a letra mostre:
			echo 'Seu nome pode ser Augusto.'; //Talvez o nome seja esse.
			break;

		case 'an':
			echo 'Seu nome pode ser Ana.';//Talvez o nome seja esse.
			break;

		case 'b':
			echo 'Seu nome pode ser Bruna.';//Talvez o nome seja esse.
			break;

		case 'ba':
			echo 'Seu nome pode ser Barbara.';//Talvez o nome seja esse.
			break;

		case 'd':
			echo 'Seu nome pode ser Daniel.';//Talvez o nome seja esse.
			break;

		case 'do':
			echo 'Seu nome pode ser Douglas.';//Talvez o nome seja esse.
			break;

		case 'c':
			echo 'Seu nome pode ser Cintia.';//Talvez o nome seja esse.
			break;

		case 'ca':
			echo 'Seu nome pode ser Carlos.';//Talvez o nome seja esse.
			break;


		
		default:
			echo 'Entre com o seu nome.'; //Resposta padrão para o que não for achado.
			break;
	}

	//OBS: Essas informações mostradas através do echo, seram mostradas na página autoCompletar1.html, através da
	//function(data), onde adicionamos em um paragrafo.

}

?>