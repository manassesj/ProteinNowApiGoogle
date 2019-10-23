<?php

    include 'conexao.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $sql = "SELECT `email`, `senha` FROM `usuario` WHERE email = '$usuario' and senha = '$senha'";

    $buscar  = mysqli_query($conexao, $sql);

    $total = mysqli_num_rows($buscar);

    if($total > 0){
        session_start();
        $_SESSION['usuario'] = $usuario;

        
        header('Location: lojas.php');
    }
    else{
        header('Location: erro_login.php');
    }

?>

