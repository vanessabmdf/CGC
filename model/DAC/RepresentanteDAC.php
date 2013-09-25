<?php

class RepresentanteDAC {

    public static function persist($representante) {
        include_once './conexao.php';
        $sql = "INSERT INTO `representante` (`cargo`, `departamento`, 
            `PESSOA_idPESSOA`, `PESSOA_INSTITUICAO_idINSTITUICAO` ) VALUES 
            ('" . $representante->getCargo() . "',
                '" . $representante->getDepartamento() . "',
                '" . $representante->getPESSOA_idPESSOA() . "',
                '" . $representante->getPESSOA_INSTITUICAO_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "RepresentanteDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Representante $representante, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `representante` SET `$atributo`=$atributoNovo WHERE id=" . $representante->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($representante) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `representante` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($representante, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM representante WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $representante->setCargo($row['cargo']);
            $representante->setDepartamento($row['departamento']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
