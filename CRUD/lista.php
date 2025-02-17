
<?php
include 'conexao.php';
$sql = "SELECT * FROM users";
$result = $conexao->query($sql);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Editar</a> | 
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>
