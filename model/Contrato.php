<?php

class Contrato {

    private $tempoEncerramentoContrato;
    private $duracao;
    private $dataFim;
    private $dataInicio;
    private $INSTITUICAO_sigla;

    public function getTempoEncerramentoContrato() {
        return $this->tempoEncerramentoContrato;
    }

    public function setTempoEncerramentoContrato($tempoEncerramentoContrato) {
        $this->tempoEncerramentoContrato = $tempoEncerramentoContrato;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getDataFim() {
        return $this->dataFim;
    }

    public function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
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
