<?php

include 'DAC/RepresentanteDAC.php';

class Representante {

    private $nome;
    private $cargo;
    private $departamento;
    private $telefoneFixo;
    private $telefoneCelular;
    private $email;
    private $tipo;
    private $INSTITUICAO_idINSTITUICAO;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

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

    public function getTelefoneFixo() {
        return $this->telefoneFixo;
    }

    public function setTelefoneFixo($telefoneFixo) {
        $this->telefoneFixo = $telefoneFixo;
    }

    public function getTelefoneCelular() {
        return $this->telefoneCelular;
    }

    public function setTelefoneCelular($telefoneCelular) {
        $this->telefoneCelular = $telefoneCelular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
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
