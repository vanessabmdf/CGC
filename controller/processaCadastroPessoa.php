<?php

include '../model/Pessoa.php';

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$tipo = addslashes($_POST['tipo']);
$INSTITUICAO_idINSTITUICAO = addslashes($_POST['INSTITUICAO_idINSTITUICAO']);

$strList = "\\\'\"&\n\r<>";
addcslashes($nome, $strList);
addcslashes($email, $strList);
addcslashes($tipo, $strList);
addcslashes($INSTITUICAO_idINSTITUICAO, $strList);

$pessoa = new Pessoa();

$pessoa->setNome($nome);
$pessoa->setEmail($email);
$pessoa->setTipo($tipo);
$pessoa->setINSTITUICAO_idINSTITUICAO($INSTITUICAO_idINSTITUICAO);

$pessoa->persist();
echo "efetuado com sucesso";
?>