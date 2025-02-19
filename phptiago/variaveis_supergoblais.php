<?php
$nome = $_GET["w"];//variavel super globais

$n2 = $_GET["s"];// e mais seguro que get
// tem que passar o valor da variavel super global  s e w na barra de navegação
$resutado = "ola meu nome é " . $nome . $n2;
echo $resutado;
?>