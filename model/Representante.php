<?php

include 'DAC/RepresentanteDAC.php';

class Representante {

    private $cargo;
    private $departamento;
    private $PESSOA_idPESSOA;
    private $PESSOA_INSTITUICAO_idINSTITUICAO;

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function getPESSOA_idPESSOA() {
        return $this->PESSOA_idPESSOA;
    }

    public function setPESSOA_idPESSOA($PESSOA_idPESSOA) {
        $this->PESSOA_idPESSOA = $PESSOA_idPESSOA;
    }

    public function getPESSOA_INSTITUICAO_idINSTITUICAO() {
        return $this->PESSOA_INSTITUICAO_idINSTITUICAO;
    }

    public function setPESSOA_INSTITUICAO_idINSTITUICAO($PESSOA_INSTITUICAO_idINSTITUICAO) {
        $this->PESSOA_INSTITUICAO_idINSTITUICAO = $PESSOA_INSTITUICAO_idINSTITUICAO;
    }

    function __construct() {
        
    }

    public function persist() {
        return RepresentanteDAC::persist($this);
    }

    public function recupereTudo() {
        return RepresentanteDAC::recupereTudo();
    }

}

?>
