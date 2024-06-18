<?php
    require "../view/menu.html";
    require "../view/listaAdvogados.html";

    require_once "../banco/ConnectionFactory.php";
    $bd = new ConnectionFactory;
    // Obtenha uma instância válida de PDO da ConnectionFactory
    $conexao = ConnectionFactory::$conn;

    $sql = $conexao->query("SELECT * FROM advogado");
    if($sql){
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
        $id = $linha['id_advogado'];          // poderia usar só: $linha ('id');
        $nome = $linha['nome_advogado'];
        $sobreNome = $linha['sobreNome_advogado'];
        $especialidade = $linha['especialidade_advogado'];
        $telefone = $linha['telefone_advogado'];
        echo "<tr> 
        <th scope='row'>$id</th>
        <td>$nome</td>
        <td>$sobreNome</td>
        <td>$especialidade</td>
        <td>$telefone</td>
        <td><a href='excluirAdvogado.php?id_advogado=$id'>Excluir</a></td>
        <td>...</td>
        </tr>"; // cada uma das tags é uma coluna
        }
    }
?>