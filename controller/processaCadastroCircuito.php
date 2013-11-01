<?php

include '../model/Circuito.php';

$nome = addslashes($_POST['nome']);
$dataAtivacao = addslashes($_POST['dataAtivacao']);
$dataDesativacao = addslashes($_POST['dataDesativao']);
$INSTITUICAO_idINSTITUICAO = addslashes($_POST['INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($nome, $strList);
addcslashes($dataAtivacao, $strList);
addcslashes($dataDesativacao, $strList);
addcslashes($INSTITUICAO_idINSTITUICAO, $strList);

$circuito = new Circuito();

$circuito->setNome($nome);
$circuito->setDataAtivacao($dataAtivacao);
$circuito->setDataDesativacao($dataDesativacao);
$circuito->setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO);

$circuito->persist();
echo "Cadastro efetuado com sucesso!";
echo "</br>";
echo "<a href=http://www.gigacandanga.com.br/gestao>Voltar para p&aacutegina inicial</a>"
?>
