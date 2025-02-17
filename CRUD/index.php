<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Cadastrar</button>
    <a href="lista.php">Ver lista</a>
</form>
