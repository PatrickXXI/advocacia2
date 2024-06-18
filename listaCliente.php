<?php
    require "../view/menu.html";
    require "../view/listaClientes.html";

    require_once "../banco/ConnectionFactory.php";
    $bd = new ConnectionFactory;
    // Obtenha uma instância válida de PDO da ConnectionFactory
    $conexao = ConnectionFactory::$conn;

    $sql = $conexao->query("SELECT * FROM cliente");
    if($sql){
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
        $id = $linha['id_cliente'];          // poderia usar só: $linha ('id');
        $nome = $linha['nome_cliente'];
        $sobreNome = $linha['sobreNome_cliente'];
        $cpf = $linha['cpf_cliente'];
        $endereco = $linha['endereco_cliente'];
        $telefone = $linha['telefone_cliente'];
        echo "<tr> 
        <th scope='row'>$id</th>
        <td>$nome</td>
        <td>$sobreNome</td>
        <td>$cpf</td>
        <td>$endereco</td>
        <td>$telefone</td>
        <td><a href='editarCliente.php?id_cliente=$id'>Editar</a></td>
        <td>...</td>
        </tr>"; // cada uma das tags é uma coluna
        }
    }

?>

