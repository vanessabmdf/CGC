<?php

include 'DAC/InstituicaoDAC.php';

class Instituicao {

    private $sigla;
    private $nome;
    private $cnpj;
    private $endereco;
    private $cidade;
    private $estado;
    private $bairro;
    private $cep;
    private $valorContratoOriginal;
    private $contratoComAditivos;

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getValorContratoOriginal() {
        return $this->valorContratoOriginal;
    }

    public function setValorContratoOriginal($valorContratoOriginal) {
        $this->valorContratoOriginal = $valorContratoOriginal;
    }

    public function getContratoComAditivos() {
        return $this->contratoComAditivos;
    }

    public function setContratoComAditivos($contratoComAditivos) {
        $this->contratoComAditivos = $contratoComAditivos;
    }

    function __construct() {
        
    }

}

?>
