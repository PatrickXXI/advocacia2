<?php
    require "../view/menu.html";
    require "../view/listaCeA.html";

    require_once "../banco/ConnectionFactory.php";
    $bd = new ConnectionFactory;

    $conexao = ConnectionFactory::$conn;
    $sql = $conexao->query("SELECT c.nome_cliente, c.sobreNome_cliente, p.id_processo, p.nome_processo, p.dados_processo, a.nome_advogado, a.especialidade_advogado
    FROM cliente AS c
    JOIN processo_cliente AS p ON c.id_cliente = p.fk_cliente_id_cliente
    JOIN advogado AS a ON p.fk_advogado_id_advogado = a.id_advogado");

    if($sql){
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
        $id = $linha['id_processo'];          // poderia usar só: $linha ('id');
        $nomeCliente = $linha['nome_cliente'];
        $sobreNomeCliente = $linha['sobreNome_cliente'];
        $nomeProcesso = $linha ['nome_processo'];
        $dadosProcesso = $linha['dados_processo'];
        $nomeAdvogado = $linha['nome_advogado'];
        $especialidade = $linha['especialidade_advogado'];
        echo "<tr> 
        <th scope='row'>$id</th>
        <td>$nomeCliente</td>
        <td>$sobreNomeCliente</td>
        <td>$nomeProcesso</td>
        <td>$dadosProcesso</td>
        <td>$nomeAdvogado</td>
        <td>$especialidade</td>
        <td>...</td>
        </tr>"; // cada uma das tags é uma coluna
        }
    }
?>