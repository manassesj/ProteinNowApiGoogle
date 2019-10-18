  
<?php
    $servername = "localhost"; //padrão - server local
    $database = "projpg";//alterar conforme o nome do seu banco de dados
    $username = "root";//
    $password = "";// senha de conexão do banco de dados.
    //Create connection
    $conexao  = mysqli_connect($servername, $username, $password, $database);
?>