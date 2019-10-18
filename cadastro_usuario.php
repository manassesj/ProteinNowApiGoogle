<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Usuario</title>

        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
                                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
                                crossorigin="anonymous">
    
                                
        <style type="text/css">
            #tamanho {
                width: 400px;
                margin-top: 100px;
                border-radius:15px;
                border: 2px solid #f3f3f3;
                -webkit-box-shadow: 16px 36px 34px -6px rgba(209,209,209,1);
                -moz-box-shadow: 16px 36px 34px -6px rgba(209,209,209,1);
                box-shadow: 16px 36px 34px -6px rgba(209,209,209,1);
            }
        </style>
    </head>

    <body>

        <div class="container" id="tamanho"">
            <h4 style="text-align: center; padding-top: 15px;">Cadastro de Usuario</h4>

            <form action="sql/_inserir_usuario.php" method="post" style="margin-top: 20px; padding-bottom: 15px">
            
                <div class="form-group">
                    <label for="">Nome do Usúario</label>
                    <input type="text" name="nome" class="form-control" required autocomplet="off" placeholder="Nome completo">

                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required autocomplet="off" placeholder="Seu E-mail">

                </div>
                <div class="form-group">
                    <label for="">Senha</label>
                    <input type="password" id="txtSenha" name="senha" class="form-control" required autocomplet="off" placeholder="Senha">

                </div>
                <div class="form-group">
                    <label for="">Repetir Senha</label>
                    <input type="password" name="senha2"  class="form-control" required autocomplet="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
                </div>

                <div style="text-align: right"> 
                    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                </div>

            </form>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            function validaSenha (input){ 
                if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
                } else {
                    input.setCustomValidity('');
                }
            } 
        </script>

    </body>
</html>