<?php
//Após ter clicado no botão a requisição vem para essa página e executa todo o
//código php.
if(isset($_GET['nome'])&& isset($_GET['email'])){
    echo '<h2>';
    echo 'Seu nome: '.$_GET['nome'];
    echo '</br>';   
    echo 'Seu email: '.$_GET['email'];
    echo '</br>';
    echo '</h2>';
    echo '<h1>Obrigado por se cadastrar!</h2>';
}
//OBS: lembre-se que poderiamos fazer qualquer procedimento com esses dados!
?>