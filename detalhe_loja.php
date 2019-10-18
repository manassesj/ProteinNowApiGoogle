<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detalhe da Loja</title>

        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
                                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
                                crossorigin="anonymous">

        <style type="text/css">
            .texto{
                font-size: 20px;
            }

            .titulo{
                background-color:#feb236;
                color: #ffff;
                text-align: center;
            }

            .atributos{
                background-color: #f0f0f0;
            }
        </style>

    </head>
    <body>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand"><img src="imagens/proteinNowLogo.png" alt="Protein Now" width="100px" height="100px"></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </nav>

        <div class="container" id="tamanho" style="margin-top: 30px;">
            <?php

                include 'conexao.php';

                $loja = $_GET['loja'];

                $sql = "SELECT * FROM `loja` WHERE nome = '$loja'";

                $buscar = mysqli_query($conexao, $sql);

                $loja = mysqli_fetch_array($buscar);

            ?>
            

            <ul class="list-group" >
                <li class="list-group-item texto titulo"><?php echo $loja['nome'] ?></li>
                <li class="list-group-item texto atributos">Latitude: <?php echo $loja['latitude'] ?></li>
                <li class="list-group-item texto atributos">Longitude: <?php echo $loja['longitude'] ?></li>
                <li class="list-group-item texto atributos">Telefone: <?php echo $loja['telefone'] ?></li>
                <li class="list-group-item texto atributos">Endereco: <?php echo $loja['endereco'] ?></li>
                <li class="list-group-item texto atributos">Nota: <?php echo $loja['nota'] ?></li>
                <li class="list-group-item texto atributos">Url: <?php echo $loja['url'] ?></li>
            </ul>
            

        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>