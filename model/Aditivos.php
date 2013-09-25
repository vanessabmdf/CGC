<?php

include 'DAC/AditivosDAC.php';

class Aditivos {

    private $numeroProrrogacao;
    private $dataInicio;
    private $dataFim;
    private $INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO;
    private $INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO;

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

    public function getINSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO() {
        return $this->INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO;
    }

    public function setINSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO($INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO) {
        $this->INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO = $INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO;
    }

    public function getINSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO() {
        return $this->INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO;
    }

    public function setINSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO($INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO) {
        $this->INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO = $INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO;
    }

    function __construct() {
        
    }

}

?>
