<?php

    include 'conexao.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $sql = "SELECT `email`, `senha` FROM `usuario` WHERE email = '$usuario' and senha = '$senha'";

    $buscar  = mysqli_query($conexao, $sql);

    echo $buscar['usuario'];

    $total = mysqli_num_rows($buscar);

    if($total > 0){
        header('Location: lojas.php');
    }
    else{
        header('Location: erro_login.php');
    }

?>

