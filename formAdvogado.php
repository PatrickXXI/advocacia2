<?php
    require "../view/menu.html";
    require "../view/advogado.html";
    if(isset($_POST['nome']) and isset($_POST['sobreNome']) and isset($_POST['especialidade'])and isset($_POST['telefone'])){
        require_once "../model/Advogado.php";
        $a1 = new Advogado ($_POST['nome'],$_POST['sobreNome'],$_POST['especialidade'], $_POST['telefone']);
        require_once "../banco/ConnectionFactory.php";
        $bd = new ConnectionFactory;
        // Obtenha uma instância válida de PDO da ConnectionFactory
        $conexao = ConnectionFactory::$conn;

        $sql = $conexao->prepare("INSERT INTO advogado(nome_advogado, sobreNome_advogado, especialidade_advogado, telefone_advogado)
        VALUES (:nome, :sobreNome, :especialidade, :telefone)");

        $sql->bindValue(':nome', $a1->getNome()); //vincular parametro
        $sql->bindValue(':sobreNome', $a1->getSobreNome());
        $sql->bindValue(':especialidade', $a1->getEspecialidade());
        $sql->bindValue(':telefone', $a1->getTelefone());
        $sql->execute();

        if($sql->rowCount() >= 1){
            echo "<p>Cadastrado</p>";
        }else {
            echo "<p> Erro</p>";
        }
    }
?>