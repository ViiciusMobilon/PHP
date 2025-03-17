<?php
try{
    //try catch pega uma exção e mostra uma mensagen de erro que eu quiser
    if (!empty($_GET["w"]))// ve se ele estiver vazio em mostra 
    {
          if (strlen($_GET["w"]) < 3) // strlen conta o numero de uma string

          throw new Exception("o valor de w deve ter mais de 3 carcteres");
    }else {
     throw new Exception("nenhum valor encontrado vazio  ");
}


      // "!" operador logico ele inverte a operação a direita dele
     if (empty($_GET["s"]))// ve se ele estiver vazio em mostra 
     throw new Exception("nenhum valor encontrado para s");

    $nome = $_GET["w"];//variavel super globais
    
      // $nome =  (tipo da variavel) variavel 


      $n2 = $_GET["s"];// e mais seguro que get
// tem que passar o valor da variavel super global  s e w na barra de navegação
$resutado = "ola meu nome é " . $nome . $n2;
echo $resutado;

}catch(Exception $e){
    echo $e->getMessage();
}
?>