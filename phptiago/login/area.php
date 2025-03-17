<?php
session_start();
// isset serve para ver se uma variavel esta definida
if (isset($_SESSION["Usuario logado"]) ){

}else{
    header("location: login.php");
}
 if (isset($_GET["sair"])){
    unset($_SESSION["Usuario logado"]);
    header("location: login.php");
 }
 
?>

<h1>bem vindo a area restrita</h1>

<a href="login.php? sair=true">Sair</a>