<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tela de Login</title>

        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
                                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
                                crossorigin="anonymous">

        <style type="text/css">

        </style>

    </head>
    <body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </nav>

        <div class="container"" >

            <div class="row">
                <div class="col-md-6" style= "width: 70%">
                    <table class="table" style="margin-top: 20px;">
                        <thead>
                            <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereco</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Nota</th>
                            <th scope="col">url</th>
                            </tr>
                        </thead>
                        <tbody >
                                <?php
                                
                                    include 'conexao.php';

                                    $sql = "SELECT * FROM `loja`";
                                    $busca = mysqli_query($conexao, $sql);

                                    while ($array = mysqli_fetch_array($busca)){

                                        $id = $array['id'];
                                        $nome = $array['nome'];
                                        $endereco = $array['endereco'];
                                        $telefone = $array['telefone'];
                                        $nota = $array['nota'];
                                        $url = $array['url'];

                                    

                                ?>
                                <tr>
                                    <th scope="row"><a href="detalhe_loja.php?loja=<?php  echo $nome ?>"><?php  echo $nome ?></a></th>
                                    <td><?php  echo $endereco ?></td>
                                    <td><?php  echo $telefone ?></td>
                                    <td><?php  echo $nota ?></td>
                                    <td><?php  echo $url ?></td>

                                    <?php } ?>

                                </tr>
                        </tbody>
                    </table>
                </div>

                
                <div class="col-md-6" >
                    <table class="table" style="margin-top: 20px;">
                        <thead>
                            <center>
                                <tr>
                                    <th scope="col">Estados</th>
                                </tr>
                            </center>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Pernambuco</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>São Paulo</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Rio de Janei</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>