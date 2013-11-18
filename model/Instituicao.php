<?php

include 'DAC/InstituicaoDAC.php';

class Instituicao {

    private $sigla;
    private $nome;
    private $cnpj;
    private $id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function __construct() {
        
    }

    public function persist() {
        return InstituicaoDAC::persist($this);
    }

    public function recupere() {
        return InstituicaoDAC::recupere($instituicao, $id);
    }

    public function recupereTudo() {
        return InstituicaoDAC::recupereTudo();
    }

    public function updateInfo() {
        return InstituicaoDAC::updateInfo();
    }

    public function atualizar() {
        InstituicaoDAC::atualizar($this);
    }

}

?>
