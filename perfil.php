<?php
    include('conexao.php');

    if(!isset($_SESSION['quem'])) {
        //direciona o usuário para o login caso não tenha feito login
        header('location: index.php');
    }
    echo $_SESSION['quem'];

?>