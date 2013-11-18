<?php

$server = 'localhost';
$db = 'contratosgigacandanga';
$user = 'root';
$password = '';

$conexao = mysql_connect($server, $user, $password);
@mysql_select_db($db) OR DIE("Banco não encontrado.");
?>
