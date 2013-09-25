<?php

include 'DAC/Instrumento_juridicoDAC.php';

class Instrumento_juridico {

    private $nome;
    private $dataInicio;
    private $dataFim;
    private $valorContratoOriginal;
    private $informacoes;
    private $INSTITUICAO_idINSTITUICAO;
    private $TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO;
    private $INSTITUICAO_CONTRATADA_idINSTITUICAO;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
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

    public function getValorContratoOriginal() {
        return $this->valorContratoOriginal;
    }

    public function setValorContratoOriginal($valorContratoOriginal) {
        $this->valorContratoOriginal = $valorContratoOriginal;
    }

    public function getInformacoes() {
        return $this->informacoes;
    }

    public function setInformacoes($informacoes) {
        $this->informacoes = $informacoes;
    }

    public function getINSTITUICAO_idINSTITUICAO() {
        return $this->INSTITUICAO_idINSTITUICAO;
    }

    public function setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO) {
        $this->INSTITUICAO_idINSTITUICAO = $INSTITUICAO_idINSTITUICAO;
    }

    public function getTIPO_INSTRUMENTO_idTIPO_INSTRUMENTO() {
        return $this->TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO;
    }

    public function setTIPO_INSTRUMENTO_idTIPO_INSTRUMENTO($TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO) {
        $this->TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO = $TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO;
    }

    public function getINSTITUICAO_CONTRATADA_idINSTITUICAO() {
        return $this->INSTITUICAO_CONTRATADA_idINSTITUICAO;
    }

    public function setINSTITUICAO_CONTRATADA_idINSTITUICAO($INSTITUICAO_CONTRATADA_idINSTITUICAO) {
        $this->INSTITUICAO_CONTRATADA_idINSTITUICAO = $INSTITUICAO_CONTRATADA_idINSTITUICAO;
    }

    function __construct() {
        
    }

}

?>
