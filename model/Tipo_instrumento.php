<?php

include 'DAC/Tipo_instrumentoDAC.php';

class Tipo {

    private $tipo;

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function __construct() {
        
    }

}

?>
