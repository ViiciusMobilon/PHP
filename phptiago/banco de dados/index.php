<?php
try{


// data suorce name
$dsn ="mysql:host=localhost;dbname=tiagotas";

//php data object

$conexao= new PDO($dsn, "root","");
 var_dump($conexao);
 $star = $conexao->prepara("select * from file limit 10");
 $start-> 
}
catch(Exception $e){
    echo $e-> getMessage();
   echo"<br/>";
    var_dump( $e->getTrace()); //trilha do erro
}