<?php
	
	//Quando nossa pagina for requiitada faça:

	$titulo = "<h1>Stargate</h1>"; //Criamos um titulo para nosso conteudo

	//Declaramos as fotos para ele: 
	$foto1 = "http://vignette1.wikia.nocookie.net/stargatearmageddon/images/c/cb/Ra.png/revision/latest?cb=20120430112224&path-prefix=it";
	$foto2 = "http://images0.hiboox.com/images/1206/sykexlt.jpg";
	$foto3 = "https://s-media-cache-ak0.pinimg.com/originals/2f/e2/28/2fe22837d8a9da57ab7bc63b7f3de76f.jpg";

	//Criamos a descrição do nosso conteudo, colocando tambem as fotos nele:
	$descricao = "

	<p>Em 1928 em Guizé, Egito, uma tumba gigantesca é descoberta. Dentro se encontra um grande anel metálico, e um amuleto com inscrições e o simbolo do deus Rá que a filha do arqueólogo-chefe, Catherine Langford, pega para si.</p>

	<img src='".$foto1."' width='800' height='500'/> 

	<p>Nos dias atuais, o egiptólogo Daniel Jackson participa de um simpósio, onde defende suas teorias sobre a Grande Pirâmide de Gizé, de que a mesma não poderia ter sido construída na Quarta dinastia dos faraós egípcios, que é a versão aceita oficialmente. Ridicularizado e posto de lado pelos seus colegas cientistas, e deixado para trás no meio de sua apresentação, ele se retira desconsolado. No entanto, Catherine o convida a participar das traduções de antigos hieroglifos para a Força Aérea dos Estados Unidos.</p>

	 <img src='".$foto2."' width='800' height='500'/> 

	  <p>Jackson é trazido para uma instalação militar no Colorado, para tratar do que um coronel aposentado, Jonathan \"Jack\" O'Neil, revela serem informações secretas. Corrigindo a tradução já efetuada e inspecionando uma pedra encontrada no sítio arqueológico, Jackson conclui que os hieróglifos falavam de um \"portal para as estrelas\" (Stargate), com alguns símbolos similares a constelações servindo de coordenadas para um ponto no espaço. Os militares então revelam a Jackson o \"Stargate\" em si, o portal metálico encontrado em Gizé. Pesquisadores conseguiram fazer o anel ser controlado por um computador, e após alinhar os símbolos do Stargate com as travas em seu exterior seguindo a sequência encontrada por Jackson, ativam um buraco de minhoca conectado com outro planeta. O'Neil lidera uma missão de reconhecimento para a travessia, que vê a adição de Jackson.</p>

	 <img src='".$foto3."' width='800' height='500'/> 

	<p>Chegando em um planeta desértico (mais tarde batizado como Abydos) com uma gigantesca pirâmide, Jackson encontra o Stargate e seus controles, mas não tem as coordenadas para voltar para casa.</p>

	";



	echo $titulo; //Mostramos o titulo.

	echo $descricao;//Mostramos nosso conteudo.


?>