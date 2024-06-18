<?php
class Cliente {
    private $nome;
    private $sobreNome;
    private $cpf;
    private $endereco;
    private $telefone;

    public function __construct($nome, $sobreNome, $cpf, $endereco, $telefone){
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setSobreNome($sobreNome){
        $this->sobreNome = $sobreNome;
    }
    public function getSobreNome(){
        return $this->sobreNome;
    }
    public function setCpf ($cpf){
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setEndereco ($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco (){
        return $this->endereco;
    }
    public function setTelefone ($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone (){
        return $this->telefone;
    }
    public function insertDados($nome, $sobreNome, $cpf, $endereco, $telefone){
        require_once "banco/ConnectionFactory.php";
        $bd = new ConnectionFactory;
        $conexao = ConnectionFactory::$conn;
        $sql = $conexao->query("INSERT INTO cliente(nome_cliente, sobreNome_cliente, cpf_cliente, endereco_cliente, telefone_cliente)
        VALUES ('$nome', '$sobreNome', '$cpf', '$endereco', '$telefone')");
    }
    public function toString (){
        return "Nome: ". $this->nome . "Sobre Nome: ".$this->sobreNome."CPF: ".$this->cpf."Endereço: ".$this->endereco."Telefone: ". $this->telefone;
    }
}