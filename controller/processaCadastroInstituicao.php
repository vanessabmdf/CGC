<?php

include '../model/Instituicao.php';

$sigla = addslashes($_POST['sigla']);
$nome = addslashes($_POST['nome']);
$cnpj = addslashes($_POST['cnpj']);
$endereco = addslashes($_POST['endereco']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$bairro = addslashes($_POST['bairro']);
$cep = addslashes($_POST['cep']);
$valorContratoOriginal = addslashes($_POST['valorContratoOriginal']);

$strList = "\\\'\"&\n\r<>";
addcslashes($sigla, $strList);
addcslashes($nome, $strList);
addcslashes($cnpj, $strList);
addcslashes($endereco, $strList);
addcslashes($cidade, $strList);
addcslashes($estado, $strList);
addcslashes($bairro, $strList);
addcslashes($cep, $strList);
addcslashes($valorContratoOriginal, $strList);

$instituicao = new Instituicao();

$instituicao->setSigla($sigla);
$instituicao->setNome($nome);
$instituicao->setCnpj($cnpj);
$instituicao->setEndereco($endereco);
$instituicao->setCidade($cidade);
$instituicao->setEstado($estado);
$instituicao->setBairro($bairro);
$instituicao->setCep($cep);
$instituicao->setValorContratoOriginal($valorContratoOriginal);

$instituicao->persist();
echo "efetuado com sucesso";
?>
