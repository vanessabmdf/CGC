<?php

include 'DAC/AditivosDAC.php';

class Aditivos {

    private $numeroProrrogacao;
    private $dataInicio;
    private $dataFim;
    private $tempoEncerramentoProrrogacao;
    private $CONTRATO_idCONTRATO;
    private $CONTRATO_INSTITUICAO_sigla;

    public function getNumeroProrrogacao() {
        return $this->numeroProrrogacao;
    }

    public function setNumeroProrrogacao($numeroProrrogacao) {
        $this->numeroProrrogacao = $numeroProrrogacao;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function getDataFim() {
        return $this->dataFim;
    }

    public function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    public function getTempoEncerramentoProrrogacao() {
        return $this->tempoEncerramentoProrrogacao;
    }

    public function setTempoEncerramentoProrrogacao($tempoEncerramentoProrrogacao) {
        $this->tempoEncerramentoProrrogacao = $tempoEncerramentoProrrogacao;
    }

    public function getCONTRATO_idCONTRATO() {
        return $this->CONTRATO_idCONTRATO;
    }

    public function setCONTRATO_idCONTRATO($CONTRATO_idCONTRATO) {
        $this->CONTRATO_idCONTRATO = $CONTRATO_idCONTRATO;
    }

    public function getCONTRATO_INSTITUICAO_sigla() {
        return $this->CONTRATO_INSTITUICAO_sigla;
    }

    public function setCONTRATO_INSTITUICAO_sigla($CONTRATO_INSTITUICAO_sigla) {
        $this->CONTRATO_INSTITUICAO_sigla = $CONTRATO_INSTITUICAO_sigla;
    }

    function __construct() {
        
    }

}

?>
