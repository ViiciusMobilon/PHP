<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'crud';


mysqli_report(MYSQLI_REPORT_OFF);

// Conexão ao banco de dados
$conexao = @new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Problema com a conexão do Banco de dados.<br><br>Descrição: " . mysqli_connect_error());
}
}catch(Exception $e){
    echo $e->getMessage("erro");
}
?>