<?php
try{
    //try catch pega uma exção e mostra uma mensagen de erro que eu quiser
    
$nome = $_GET["w"];//variavel super globais

$n2 = $_GET["s"];// e mais seguro que get
// tem que passar o valor da variavel super global  s e w na barra de navegação
$resutado = "ola meu nome é " . $nome . $n2;
echo $resutado;

}catch(Exception $e){
    echo $e->getMessage("erro");
}
?>