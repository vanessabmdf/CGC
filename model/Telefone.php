<?php

include 'DAC/TelefoneDAC.php';

class Telefone {

    private $telefoneFixo;
    private $telefoneMovel;
    private $PESSOA_idPESSOA;
    private $PESSOA_INSTITUICAO_idINSTITUICAO;

    public function getTelefoneFixo() {
        return $this->telefoneFixo;
    }

    public function setTelefoneFixo($telefoneFixo) {
        $this->telefoneFixo = $telefoneFixo;
    }

    public function getTelefoneMovel() {
        return $this->telefoneMovel;
    }

    public function setTelefoneMovel($telefoneMovel) {
        $this->telefoneMovel = $telefoneMovel;
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

}
?>

