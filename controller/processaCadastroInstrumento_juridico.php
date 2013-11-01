<?php

include '../model/Instrumento_juridico.php';

$nome = addslashes($_POST['nome']);
$dataInicio = addslashes($_POST['dataInicio']);
$dataFim = addslashes($_POST['dataFim']);
$valorContratoOriginal = addslashes($_POST['valorContratoOriginal']);
$informacoes = addslashes($_POST['informacoes']);
$INSTITUICAO_idINSTITUICAO = addslashes($_POST['INSTITUICAO_idINSTITUICAO']);
$TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO = addslashes($_POST['TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO']);
$INSTITUICAO_CONTRATADA_idINSTITUICAO = addslashes($_POST['INSTITUICAO_CONTRATADA_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($nome, $strList);
addcslashes($dataInicio, $strList);
addcslashes($dataFim, $strList);
addcslashes($valorContratoOriginal, $strList);
addcslashes($informacoes, $strList);
addcslashes($INSTITUICAO_idINSTITUICAO, $strList);
addcslashes($TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO, $strList);
addcslashes($INSTITUICAO_CONTRATADA_idINSTITUICAO, $strList);

$instrumento_juridico = new Instrumento_juridico();

$instrumento_juridico->setNome($nome);
$instrumento_juridico->setDataInicio($dataInicio);
$instrumento_juridico->setDataFim($dataFim);
$instrumento_juridico->setValorContratoOriginal($valorContratoOriginal);
$instrumento_juridico->setInformacoes($informacoes);
$instrumento_juridico->setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO);
$instrumento_juridico->setTIPO_INSTRUMENTO_idTIPO_INSTRUMENTO($TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO);
$instrumento_juridico->setINSTITUICAO_CONTRATADA_idINSTITUICAO($INSTITUICAO_CONTRATADA_idINSTITUICAO);

$instrumento_juridico->persist();
echo "Cadastro efetuado com sucesso!";
echo "</br>";
echo "<a href=http://www.gigacandanga.com.br/gestao>Voltar para p&aacutegina inicial</a>"
?>