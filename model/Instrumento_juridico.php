<?php

include 'DAC/Instrumento_juridicoDAC.php';

class Instrumento_juridico {

    private $numeroInstrumento;
    private $nome;
    private $valor;
    private $dataInicio;
    private $dataFim;
    private $CONTRATO_idCONTRATO;
    private $CONTRATO_INSTITUICAO_sigla;

    public function getNumeroInstrumento() {
        return $this->numeroInstrumento;
    }

    public function setNumeroInstrumento($numeroInstrumento) {
        $this->numeroInstrumento = $numeroInstrumento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
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
