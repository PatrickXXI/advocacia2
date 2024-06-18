<?php
    require "../view/menu.html";
    $id = $_GET['id_advogado'];
    echo "ID do cliente: $id";

    require_once "../banco/ConnectionFactory.php";
    $bd = new ConnectionFactory;
    $conexao = ConnectionFactory::$conn;
    $sql = $conexao->prepare("DELETE FROM advogado WHERE id_advogado = :id");
    $sql->bindValue(':id', $id, PDO::PARAM_INT);

    // Executa a query de delete
    if ($sql->execute()) {
        echo "<p>Advogado deletado com sucesso.</p>";
    } else {
        echo "<p>Erro ao deletar cliente.</p>";
    }
?>