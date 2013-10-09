<?php

include 'DAC/CircuitoDAC.php';

class Circuito {

    private $nome;
    private $dataAtivacao;
    private $dataDesativacao;
    private $INSTITUICAO_idINSTITUICAO;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataAtivacao() {
        return $this->dataAtivacao;
    }

    public function setDataAtivacao($dataAtivacao) {
        $this->dataAtivacao = $dataAtivacao;
    }

    public function getDataDesativacao() {
        return $this->dataDesativacao;
    }

    public function setDataDesativacao($dataDesativacao) {
        $this->dataDesativacao = $dataDesativacao;
    }

    public function getINSTITUICAO_idINSTITUICAO() {
        return $this->INSTITUICAO_idINSTITUICAO;
    }

    public function setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO) {
        $this->INSTITUICAO_idINSTITUICAO = $INSTITUICAO_idINSTITUICAO;
    }

    function __construct() {
        
    }

    public function persist() {
        return CircuitoDAC::persist($this);
    }

    public function recupereTudo() {
        return CircuitoDAC::recupereTudo();
    }

}

?>
