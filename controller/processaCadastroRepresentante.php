<?php

include '../model/Representante.php';

$cargo = addslashes($_POST['cargo']);
$departamento = addslashes($_POST['departamento']);
$PESSOA_idPESSOA = addslashes($_POST['PESSOA_idPESSOA']);
$PESSOA_INSTITUICAO_idINSTITUICAO = addslashes($_POST['PESSOA_INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($cargo, $strList);
addcslashes($departamento, $strList);
addcslashes($PESSOA_idPESSOA, $strList);
addcslashes($PESSOA_INSTITUICAO_idINSTITUICAO, $strList);

$representante = new Representante();

$representante->setCargo($cargo);
$representante->setDepartamento($departamento);
$representante->setPESSOA_idPESSOA($PESSOA_idPESSOA);
$representante->setPESSOA_INSTITUICAO_idINSTITUICAO($PESSOA_INSTITUICAO_idINSTITUICAO);

$representante->persist();
echo "efetuado com sucesso";
?>