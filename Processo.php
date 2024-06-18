<?php
class Processo {
    private $nome;
    private $dados;
    private $id_cliente;
    private $id_advogado;

    public function __construct($nome, $dados, $id_cliente, $id_advogado){
        $this->nome = $nome;
        $this->dados = $dados;
        $this->id_cliente = $id_cliente;
        $this->id_advogado = $id_advogado;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setDados($dados){
        $this->dados = $dados;
    }
    public function getDados(){
        return $this->dados;
    }
    public function setId_cliente ($id_cliente){
        $this->id_cliente = $id_cliente;
    }
    public function getId_cliente(){
        return $this->id_cliente;
    }
    public function setId_advogado ($id_advogado){
        $this->id_advogado = $id_advogado;
    }
    public function getId_advogado (){
        return $this->id_advogado;
    }
}