<?php
include 'conexao.php';

$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conexao->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "Usuário atualizado!";
        header("Location: read.php");
    } else {
        echo "Erro: " . $conexao->error;
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
    <button type="submit">Atualizar</button>
</form>
