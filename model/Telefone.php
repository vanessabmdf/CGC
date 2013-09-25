<?php

include 'DAC/TelefoneDAC.php';

class Telefone {

    private $telefoneFixo;
    private $telefoneMovel;

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

}
?>

