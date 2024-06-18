<?php
    require "../view/menu.html";
    require "../view/cliente.html";

    if(isset($_POST['nome']) and isset($_POST['sobreNome']) and isset($_POST['cpf'])and isset($_POST['endereco'])and isset($_POST['telefone'])){
        require_once "../model/Cliente.php";
        $c1 = new Cliente($_POST['nome'], $_POST['sobreNome'], $_POST['cpf'], $_POST['endereco'], $_POST['telefone']);

        require_once "../banco/ConnectionFactory.php";
        $bd = new ConnectionFactory;
        // Obtenha uma instância válida de PDO da ConnectionFactory
        $conexao = ConnectionFactory::$conn;

        $sql = $conexao->prepare("INSERT INTO cliente(nome_cliente, sobreNome_cliente, cpf_cliente, endereco_cliente, telefone_cliente)
        VALUES (:nome, :sobreNome, :cpf, :endereco, :telefone)");

        $sql->bindValue(':nome', $c1->getNome()); //vincular parametro
        $sql->bindValue(':sobreNome', $c1->getSobreNome());
        $sql->bindValue(':cpf', $c1->getCpf());
        $sql->bindValue(':endereco', $c1->getEndereco());
        $sql->bindValue(':telefone', $c1->getTelefone());
        $sql->execute();

        if($sql->rowCount() >= 1){
            echo "<p>Cadastrado</p>";
        }else {
            echo "<p> Erro</p>";
        }
    }
?>