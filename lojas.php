<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Tela das lojas</title>

        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
                                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
                                crossorigin="anonymous">

        <style type="text/css">
            .texto{
                font-size: 13px;
            }

            body{
            }
        </style>

    </head>
    <body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"><img src="imagens/proteinNowLogo.png" alt="Protein Now" width=" 100px" height="90px"></a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </nav>

    <div class="container" style="display: flex; margin: auto; max-width: 1300px;">
                <table class="table" style="margin-top: 50px;border-radius:15px; border: 2px solid #f3f3f3;" >
                    <thead class="black white-text"  style="background-color:#007bff; color: #fff">
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereco</th>
                        <th scope="col">Telefone</th>
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

                        ?>
                        <tr>
                            <th scope="row" class="texto"><a href="detalhe_loja.php?loja=<?php  echo $nome ?>"><?php  echo $nome ?></a></th>
                            <td class="texto"><?php  echo $endereco ?></td>
                            <td class="texto"><?php  echo $telefone ?></td>

                            <?php } ?>

                         </tr>
                    </tbody>
                </table>
            <div class="estados" style="margin-top: 50px; margin-left:20px;">
                <ul class="list-group" style="text-align: center;">
                    <li class="list-group-item active" style="background-color: #ffc107;"><strong>Estados</strong></li>
                    <li class="list-group-item"><a href="">Pernambuco</a></li>
                    <li class="list-group-item"><a href="">São Paulo</a></li>
                    <li class="list-group-item"><a href="">Para</a></li>
                    <li class="list-group-item"><a href="">Rio de Janeiro</a></li>
                </ul>                         
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>