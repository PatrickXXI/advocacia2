<?php
    require "../view/menu.html";
    require "../view/processo.html";
    if(isset($_POST['processo']) and isset($_POST['dadosProcesso']) and isset($_POST['idCliente'])and isset($_POST['idAdvogado'])){
        require_once "../model/Processo.php";
        $p1 = new Processo ($_POST['processo'], $_POST['dadosProcesso'], $_POST['idCliente'], $_POST['idAdvogado']);

        require_once "banco/ConnectionFactory.php";
        $bd = new ConnectionFactory;
        $conexao = ConnectionFactory::$conn;

        $sql = $conexao->prepare ("INSERT INTO processo_cliente(nome_processo, dados_processo, fk_cliente_id_cliente, fk_advogado_id_advogado)
        VALUES (:nome, :dados, :idCliente, :idAdvogado)");

        $sql->bindValue(':nome', $p1->getNome());
        $sql->bindValue(':dados', $p1->getDados());
        $sql->bindValue(':idCliente', $p1->getId_cliente());
        $sql->bindValue('idAdvogado', $p1->getId_advogado());
        $sql->execute();

        if($sql->rowCount() >= 1){
            echo "<p>Cadastrado</p>";
        }else {
            echo "<p> Erro</p>";
        }
    }
?>