<?php
    require "../view/menu.html";
    
    $id = $_GET['id_cliente'];
    echo "ID do cliente: $id";

    require "../view/editarCliente.html";

if(isset($_POST['endereco']) && isset($_POST['telefone'])) {
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];

            // Inclui a classe ConnectionFactory para obter a conexão com o banco de dados
            require_once "../banco/ConnectionFactory.php";
            $bd = new ConnectionFactory;
            $conexao = ConnectionFactory::$conn;
            
            $sql = $conexao->prepare("UPDATE cliente SET endereco_cliente = :endereco, telefone_cliente = :telefone WHERE id_cliente = :id");

            // Vincula os parâmetros da query com os valores do formulário
            $sql->bindValue(':endereco', $endereco);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':id', $id, PDO::PARAM_INT);

            if($sql->execute()) {
                echo "<p>Editado!</p>";
            } else {
                echo "<p>Erro ao editar.</p>"; 
            }
        }
?>