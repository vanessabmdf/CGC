<?php

include 'DAC/CircuitoDAC.php';

class Circuito {

    private $dataAtivacao;
    private $dataDesativacao;
    private $tempoAtivacaoMeses;
    private $INSTITUICAO_idINSTITUICAO;

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

    public function getTempoAtivacaoMeses() {
        return $this->tempoAtivacaoMeses;
    }

    public function setTempoAtivacaoMeses($tempoAtivacaoMeses) {
        $this->tempoAtivacaoMeses = $tempoAtivacaoMeses;
    }

    public function getINSTITUICAO_idINSTITUICAO() {
        return $this->INSTITUICAO_idINSTITUICAO;
    }

    public function setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO) {
        $this->INSTITUICAO_idINSTITUICAO = $INSTITUICAO_idINSTITUICAO;
    }

    function __construct() {
        
    }

}

?>
