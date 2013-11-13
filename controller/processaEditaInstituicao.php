<?php

include '../model/Instituicao.php';

$sigla = addslashes($_POST['sigla']);
$nome = addslashes($_POST['nome']);
$cnpj = addslashes($_POST['cnpj']);

$strList = "\\\'\"&\n\r<>";
addcslashes($sigla, $strList);
addcslashes($nome, $strList);
addcslashes($cnpj, $strList);

$instituicao = new Instituicao();

$instituicao->setSigla($sigla);
$instituicao->setNome($nome);
$instituicao->setCnpj($cnpj);

$instituicao->updateInfo();
echo "Cadastro atualizado com sucesso!";
echo "</br>";
echo "<a href=http://www.gigacandanga.com.br/gestao>Voltar para p&aacutegina inicial</a>"
?>
