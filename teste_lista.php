<?php 

session_start();

if(!$_SESSION['usuario']){

}else{
  header('Location:index.php');
}

?>

<h1>FALA</h1>
