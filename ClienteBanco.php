<?php
class ClienteBanco{
    public function inserir (Cliente $c1){
        require_once "ConnectionFactory";
        $sql = "INSERT INTO cliente(nome_cliente, sobreNome_cliente, cpf_cliente, endereco_cliente, telefone_cliente)
        VALUES (:nome, :sobreNome, :cpf, :endereco, :telefone)"

        $conn = ConnectionFactory::getConnection()->prepare($sql);
        $conn->bindValue(':nome', $c1->getNome());
        $conn->bindValue(':sobreNome', $c1->getSobreNome());
        $conn->bindValue(':cpf', $c1->getCpf());
        $conn->bindValue(':endereco', $c1->getEndereco());
        $conn->bindValue(':telefone', $c1->getTelefone());
        return $conn->execute();
    }
}
?>