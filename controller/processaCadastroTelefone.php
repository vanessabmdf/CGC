<?php

include '../model/Telefone.php';

$telefoneFixo = addslashes($_POST['telefoneFixo']);
$telefoneMovel = addslashes($_POST['telefoneMovel']);
$PESSOA_idPESSOA = addslashes($_POST['PESSOA_idPESSOA']);
$PESSOA_INSTITUICAO_idINSTITUICAO = addslashes($_POST['PESSOA_INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($telefoneFixo, $strList);
addcslashes($telefoneMovel, $strList);
addcslashes($PESSOA_idPESSOA, $strList);
addcslashes($PESSOA_INSTITUICAO_idINSTITUICAO, $strList);

$telefone = new Telefone();

$telefone->setTelefoneFixo($telefoneFixo);
$telefone->setTelefoneMovel($telefoneMovel);
$telefone->setPESSOA_idPESSOA($PESSOA_idPESSOA);
$telefone->setPESSOA_INSTITUICAO_idINSTITUICAO($PESSOA_INSTITUICAO_idINSTITUICAO);

$telefone->persist();
echo "efetuado com sucesso";
?>