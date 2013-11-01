<?php

include '../model/Endereco.php';

$endereco = addslashes($_POST['endereco']);
$bairro = addslashes($_POST['bairro']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$cep = addslashes($_POST['cep']);
$INSTITUICAO_idINSTITUICAO = addslashes($_POST['INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($endereco, $strList);
addcslashes($bairro, $strList);
addcslashes($cidade, $strList);
addcslashes($estado, $strList);
addcslashes($cep, $strList);
addcslashes($INSTITUICAO_idINSTITUICAO, $strList);

$endereco = new Endereco();

$endereco->setEndereco($endereco);
$endereco->setBairro($bairro);
$endereco->setCidade($cidade);
$endereco->setEstado($estado);
$endereco->setCep($cep);
$endereco->setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO);

$endereco->persist();
echo "Cadastro efetuado com sucesso!";
echo "</br>";
echo "<a href=http://www.gigacandanga.com.br/gestao>Voltar para p&aacutegina inicial</a>"
?>