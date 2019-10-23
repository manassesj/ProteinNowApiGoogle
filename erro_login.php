<?php

session_start();

if(!$_SESSION['usuario']){

}else{
  header('Location:index.php');
}

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

<div class="container" style="width:400px; margin-top:120px;
                                                   border-radius:15px;
                                                   border: 2px solid #e61919;
                                                   -webkit-box-shadow: inset 7px -1px 69px 23px rgba(255,0,0,0.88);
                                                    -moz-box-shadow: inset 7px -1px 69px 23px rgba(255,0,0,0.88);
                                                    box-shadow: inset 7px -1px 69px 23px rgba(255,0,0,0.88);">
    <center style="padding-top: 20px; padding-bottom: 10px">
        <h4>Login e/ou senha incorretos</h4>

        <div style="padding-top: 20px"></div>
        
        <center>
            <a href="index.php" role="button" class="btn btn-danger">Login</a>
        </center>
    </center>
</div>

<a href=""></a>