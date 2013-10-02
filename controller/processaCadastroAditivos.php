<?php

include '../model/Aditivos.php';

$numeroProrrogacao = addslashes($_POST['numeroProrrogacao']);
$dataInicio = addslashes($_POST['dataInicio']);
$dataFim = addslashes($_POST['dataFim']);
$INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO = addslashes($_POST['INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO']);
$INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO = addslashes($_POST['INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($numeroProrrogacao, $strList);
addcslashes($dataInicio, $strList);
addcslashes($dataFim, $strList);
addcslashes($INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO, $strList);
addcslashes($INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO, $strList);

$aditivos = new Aditivos();

$aditivos->setNumeroProrrogacao($numeroProrrogacao);
$aditivos->setDataInicio($dataInicio);
$aditivos->setDataFim($dataFim);
$aditivos->setINSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO($INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO);
$aditivos->setINSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO($INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO);

$aditivos->persist();
echo "efetuado com sucesso";
?>
