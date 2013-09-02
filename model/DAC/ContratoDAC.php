<?php

class ContratoDAC {

    public static function persist($contrato) {
        include_once './conexao.php';
        $sql = "INSERT INTO `contrato` (`dataInicio`, `dataFim`) VALUES 
            ('" . $contrato->getDataInicio . "',
                '" . $contrato->getDataFim . "');";

        mysql_query($sql) or die(mysql_error() . "contratoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Contrato $contrato, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `contrato` SET `$atributo`=$atributoNovo WHERE id=" . $contrato->getIdContrato();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($contrato) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `contrato` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($contrato, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM contrato WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $contrato->setDataInicio($row['dataInicio']);
            $contrato->setDataFim($row['dataFim']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
