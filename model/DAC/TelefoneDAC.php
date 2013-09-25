<?php

class TelefoneDAC {

    public static function persist($telefone) {
        include_once './conexao.php';
        $sql = "INSERT INTO `telefone` (`telefoneFixo`, `telefoneMovel`, 
            `PESSOA_idPESSOA`, `PESSOA_INSTITUICAO_idINSTITUICAO` ) VALUES 
            ('" . $telefone->getTelefoneFixo() . "', 
                '" . $telefone->getTelefoneMovel() . "',
                '" . $telefone->getPESSOA_idPESSOA() . "',
                '" . $telefone->getPESSOA_INSTITUICAO_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "TelefoneDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Telefone $telefone, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `telefone` SET `$atributo`=$atributoNovo WHERE id=" . $telefone->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($telefone) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `telefone` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($telefone, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM `telefone` WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $telefone->setTelefoneFixo($row['telefoneFixo']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
