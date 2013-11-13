<?php

class Tipo_instrumentoDAC {

    public static function persist($tipo_instrumento) {
        include_once './conexao.php';
        $sql = "INSERT INTO `TIPO_INSTRUMENTO` (`tipo`) VALUES 
            ('" . $tipo_instrumento->getTipo() . "');";

        mysql_query($sql) or die(mysql_error() . "Tipo_instrumentoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Tipo_instrumento $tipo_instrumento, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `TIPO_INSTRUMENTO` SET `$atributo`=$atributoNovo WHERE id=" . $tipo_instrumento->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($tipo_instrumento) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `TIPO_INSTRUMENTO` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($tipo_instrumento, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM `TIPO_INSTRUMENTO` WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $tipo_instrumento->setTipo($row['tipo']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
