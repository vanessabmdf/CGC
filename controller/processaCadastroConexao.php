<?php

include '../model/Conexao.php';

$nome = addslashes($_POST['nome']);
$dataAtivacao = addslashes($_POST['dataAtivacao']);
$dataDesativacao = addslashes($_POST['dataDesativao']);
$INSTITUICAO_idINSTITUICAO = addslashes($_POST['INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($nome, $strList);
addcslashes($dataAtivacao, $strList);
addcslashes($dataDesativacao, $strList);
addcslashes($INSTITUICAO_idINSTITUICAO, $strList);

$conexao = new Conexao();

$conexao->setNome($nome);
$conexao->setDataAtivacao($dataAtivacao);
$conexao->setDataDesativacao($dataDesativacao);
$conexao->setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO);

$conexao->persist();
echo "efetuado com sucesso";
?>
