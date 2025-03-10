<?php
session_start();
try{
$Usuario_certo = "v";
$senha_certa = "1";

$Usuario_digitado = $_POST["user"];
$senha_digitada = $_POST["pass"];

if($Usuario_digitado == $Usuario_certo){
    if($senha_digitada == $senha_certa){
        $_SESSION["Usuario logado"] = $Usuario_digitado;
        header("Location: area.php");
    }else {
        header("Location: login.php? senha=true");
    
    }
}else{
    header("Location: login.php? USUARIO=true");}
// header conversa com o portocolo http 
// location e um protocolo do http e ele coloca o indereço novo
//$_SESSION vincula  a maquina do usuario com o servidor por um tempo ate a seção expirar
}
 catch(Exception $e){
echo $e->getMessage();

 }

?>