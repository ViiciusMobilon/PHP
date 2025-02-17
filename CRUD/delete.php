<?php
include 'conexao.php';

$id = $_GET["id"];
$sql = "DELETE FROM users WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "Usuário deletado!";
} else {
    echo "Erro: " . $conexao->error;
}

header("Location: lista.php");
?>
