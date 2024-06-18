<?php
class Advogado {
    private $nome;
    private $sobreNome;
    private $especialidade;
    private $telefone;

    public function __construct($nome, $sobreNome, $especialidade, $telefone){
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->especialidade = $especialidade;
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
    public function setEspecialidade ($especialidade){
        $this->especialidade = $especialidade;
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setTelefone ($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone (){
        return $this->telefone;
    }
    public function toString (){
        return "Nome: ". $this->nome . "Sobre Nome: ".$this->sobreNome."Especialidade: ".$this->especialidade."Telefone: ". $this->telefone;
    }
}