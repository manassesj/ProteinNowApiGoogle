<?php

    include 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql = "INSERT INTO `usuario`( `nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";

    $inserir = mysqli_query($conexao, $sql);
    

?>

<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
                                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
                                crossorigin="anonymous">

<div class="container" style="width: 400px">
        <center>
            <h3>Usuário cadastrado com sucesso</h3>
            <div style="margin-top: 10px">
                <a href="index.php" class="btn btn-sm btn-warning" style="colo: #fff">Voltar</a>
            
            </div>
        
        </center>

</div>