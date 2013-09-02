<?php

class Circuito {

    private $dataAtivacao;
    private $dataDesativacao;
    private $tempoAtivacaoMeses;
    private $INSTITUICAO_sigla;

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

    public function getINSTITUICAO_sigla() {
        return $this->INSTITUICAO_sigla;
    }

    public function setINSTITUICAO_sigla($INSTITUICAO_sigla) {
        $this->INSTITUICAO_sigla = $INSTITUICAO_sigla;
    }

    function __construct() {
        
    }

}

?>
