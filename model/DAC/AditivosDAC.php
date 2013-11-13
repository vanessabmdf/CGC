<?php

class AditivosDAC {

    public static function persist($aditivos) {
        include_once './conexao.php';
        $sql = "INSERT INTO `ADITIVOS` (`numeroProrrogacao`, `dataInicio`, 
            `dataFim`, `INSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO`, 
            `INSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO` ) VALUES 
            ('" . $aditivos->getNumeroProrrogacao() . "', 
                '" . $aditivos->getDataInicio() . "',
                '" . $aditivos->getDataFim() . "',
                '" . $aditivos->getINSTRUMENTO_JURIDICO_idINSTRUMENTO_JURIDICO() . "',
                '" . $aditivos->getINSTRUMENTO_JURIDICO_INSTITUICAO_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "AdtivosDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Aditivos $aditivos, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `ADITIVOS` SET `$atributo`=$atributoNovo WHERE id=" . $aditivos->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($aditivos) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `ADITIVOS` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($aditivos, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM ADITIVOS WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $aditivos->setNumeroProrrogacao($row['numeroProrrogacao']);
            $aditivos->setDataInicio($row['dataInicio']);
            $aditivos->setDataFim($row['dataFim']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
