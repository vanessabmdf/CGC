<?php

include 'DAC/ContratoDAC.php';

class Contrato {

    private $tempoEncerramentoContrato;
    private $duracao;
    private $dataFim;
    private $dataInicio;
    private $INSTITUICAO_idINSTITUICAO;

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
