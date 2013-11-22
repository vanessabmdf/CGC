<?php

include '../model/Instituicao.php';

session_start();

$sigla = addslashes($_POST['sigla']);
$nome = addslashes($_POST['nome']);
$cnpj = addslashes($_POST['cnpj']);
$id = $_SESSION['id'];

$strList = "\\\'\"&\n\r<>";
addcslashes($sigla, $strList);
addcslashes($nome, $strList);
addcslashes($cnpj, $strList);

$instituicao = new Instituicao();

$instituicao->setSigla($sigla);
$instituicao->setNome($nome);
$instituicao->setCnpj($cnpj);
$instituicao->setId($id);

$instituicao->atualizar();

unset($_SESSION['sigla']);
unset($_SESSION['nome']);
unset($_SESSION['cnpj']);

$_SESSION['sigla'] = $sigla;
$_SESSION['nome'] = $nome;
$_SESSION['cnpj'] = $cnpj;

echo "Cadastro atualizado com sucesso!";
echo "</br>";
echo "<a href=http://www.gigacandanga.com.br/gestao>Voltar para p&aacutegina inicial</a>";
session_destroy();
header("location: ../index.php");
?>
