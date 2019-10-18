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
            body{
            margin-top:20px;
            background:#f5f5f5;
            }
            /**
            * Panels
            */
            /*** General styles ***/
            .panel {
            box-shadow: none;
            }
            .panel-heading {
            border-bottom: 0;
            }
            .panel-title {
            font-size: 17px;
            }
            .panel-title > small {
            font-size: .75em;
            color: #999999;
            }
            .panel-body *:first-child {
            margin-top: 0;
            }
            .panel-footer {
            border-top: 0;
            }

            .panel-default > .panel-heading {
                color: #333333;
                background-color: transparent;
                border-color: rgba(0, 0, 0, 0.07);
            }

            /**
            * Profile
            */
            /*** Profile: Header  ***/
            .profile__avatar {
            float: left;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 20px;
            overflow: hidden;
            }
            @media (min-width: 768px) {
            .profile__avatar {
                width: 100px;
                height: 100px;
            }
            }
            .profile__avatar > img {
            width: 100%;
            height: auto;
            }
            .profile__header {
            overflow: hidden;
            }
            .profile__header p {
            margin: 20px 0;
            }
            /*** Profile: Table ***/
            @media (min-width: 992px) {
            .profile__table tbody th {
                width: 200px;
            }
            }
            /*** Profile: Recent activity ***/
            .profile-comments__item {
            position: relative;
            padding: 15px 16px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            .profile-comments__item:last-child {
            border-bottom: 0;
            }
            .profile-comments__item:hover,
            .profile-comments__item:focus {
            background-color: #f5f5f5;
            }
            .profile-comments__item:hover .profile-comments__controls,
            .profile-comments__item:focus .profile-comments__controls {
            visibility: visible;
            }
            .profile-comments__controls {
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px;
            visibility: hidden;
            }
            .profile-comments__controls > a {
            display: inline-block;
            padding: 2px;
            color: #999999;
            }
            .profile-comments__controls > a:hover,
            .profile-comments__controls > a:focus {
            color: #333333;
            }
            .profile-comments__avatar {
            display: block;
            float: left;
            margin-right: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            }
            .profile-comments__avatar > img {
            width: 100%;
            height: auto;
            }
            .profile-comments__body {
            overflow: hidden;
            }
            .profile-comments__sender {
            color: #333333;
            font-weight: 500;
            margin: 5px 0;
            }
            .profile-comments__sender > small {
            margin-left: 5px;
            font-size: 12px;
            font-weight: 400;
            color: #999999;
            }
            @media (max-width: 767px) {
            .profile-comments__sender > small {
                display: block;
                margin: 5px 0 10px;
            }
            }
            .profile-comments__content {
            color: #999999;
            }
            /*** Profile: Contact ***/
            .profile__contact-btn {
            padding: 12px 20px;
            margin-bottom: 20px;
            }
            .profile__contact-hr {
            position: relative;
            border-color: rgba(0, 0, 0, 0.1);
            margin: 40px 0;
            }
            .profile__contact-info-item {
            margin-bottom: 30px;
            }
            .profile__contact-info-item:before,
            .profile__contact-info-item:after {
            content: " ";
            display: table;
            }
            .profile__contact-info-item:after {
            clear: both;
            }
            .profile__contact-info-item:before,
            .profile__contact-info-item:after {
            content: " ";
            display: table;
            }
            .profile__contact-info-item:after {
            clear: both;
            }
            .profile__contact-info-icon {
            float: left;
            font-size: 18px;
            color: #999999;
            }
            .profile__contact-info-body {
            overflow: hidden;
            padding-left: 20px;
            color: #999999;
            }
            .profile__contact-info-body a {
            color: #999999;
            }
            .profile__contact-info-body a:hover,
            .profile__contact-info-body a:focus {
            color: #999999;
            text-decoration: none;
            }
            .profile__contact-info-heading {
            margin-top: 2px;
            margin-bottom: 5px;
            font-weight: 500;
            color: #999999;
            }

        </style>

    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                
                <!-- User profile -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"></h4>
                    </div>
                    <div class="panel-body">
                        <div class="profile__avatar">
                            <img src="imagens/loja.png" alt="...">
                        </div>
                        <div class="profile__header">
                            <h4>DIVINA - Distribuidora de Vitaminas Sundown Naturals</h4>
                            <p>
                                <a href="https://www.sundownvitaminas.com.br">https://www.sundownvitaminas.com.br</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- User info -->
                <div class="panel panel-default" style="margin-top: 15px;">
                    <div class="panel-heading">
                        <h4 class="panel-title">Informações do usuario</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table profile__table">
                        <tbody>
                            <tr>
                                <th><strong>Rua</strong></th>
                                <td>Av. Mal. Mascarenhas de Morais, 5855</td>
                                </tr>
                            <tr>
                                <th><strong>Bairro/Estado</strong></th>
                                <td>Boa Viagem, Recife</td>
                            </tr>
                            <tr>
                                <th><strong>CEP</strong></th>
                                <td>51210-001</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>

                <!-- Community -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Comunidade</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table profile__table">
                            <tbody>
                                <tr>
                                    <th><strong>Nota</strong></th>
                                    <td>8</td>
                                </tr>   
                                <tr>
                                    <th><strong>google maps</strong></th>
                                    <td><a href="https://maps.google.com/?cid=534956735411808378">https://maps.google.com/?cid=534956735411808378</a></td>
                                </tr>
                                <tr>
                                    <th><strong>Fechado/Aberto</strong></th>
                                    <td>Fechado</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="profile__contact-info">
                    <div class="profile__contact-info-item">
                        <div class="profile__contact-info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="profile__contact-info-body">
                            <h5 class="profile__contact-info-heading">Telefone</h5>
                            (81) 3087-3087
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>