    <?php
       
       
      include_once 'Formiga.php'; // Chamamos o nosso projeto do que seria uma Formiga.
 
      $formiga1 = new Formiga();//Aqui geramos uma formiga.
      $formiga1->descricao = 'É uma formiga muito veloz.'; //Passamos os atributos para ela.
      $formiga1->forca = 2.50;
      $formiga1->peso = 0.80;
      
      $formiga2 = new Formiga();//Aqui geramos outra formiga.
      $formiga2->descricao = 'É uma formiga lenta, pequena e com manchas.';//Passamos os atributos para ela.
      $formiga2->forca = 1.50;
      $formiga2->peso = 0.50;
 
      echo 'Descrição da formiga: '.$formiga1->descricao.'</br>'; //Mostramos a nossa primeira Formiga.
      echo 'Força da formiga: '.$formiga1->forca.'</br>';
      echo 'Peso da formiga: '.$formiga1->peso.'</br>';
      
      echo '<hr/>';
      
      echo 'Descrição da formiga: '.$formiga2->descricao.'</br>'; //Mostramos a nossa segunda Formiga.
      echo 'Força da formiga: '.$formiga2->forca.'</br>';
      echo 'Peso da formiga: '.$formiga2->peso.'</br>';
      
      echo '<hr/>';
      
 
 
 
 
    ?>