<?php

class Instrumento_juridicoDAC {

    public static function persist($instrumento_juridico) {
        include_once './conexao.php';
        $sql = "INSERT INTO `instrumento_juridico` (`numeroInstrumento`, 
            `nome`, `valor`, `dataInicio`, `dataFim`) VALUES 
            ('" . $instrumento_juridico->getNumeroInstrumento . "',
                '" . $instrumento_juridico->getNome . "',
                '" . $instrumento_juridico->getValor . "',
                '" . $instrumento_juridico->getDataInicio . "',
                '" . $instrumento_juridico->getDataFim . "');";

        mysql_query($sql) or die(mysql_error() . "instrumento_juridicoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Instituicao $instrumento_juridico, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `instrumento_juridico` SET `$atributo`=$atributoNovo WHERE id=" . $instrumento_juridico->getIdINSTUMENTO_JURIDICO();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($instrumento_juridico) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `instrumento_juridico` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($instrumento_juridico, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM instrumento_juridico WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $instrumento_juridico->setNumeroInstrumento($row['numeroInstrumento']);
            $instrumento_juridico->setNome($row['nome']);
            $instrumento_juridico->setValor($row['valor']);
            $instrumento_juridico->setDataInicio($row['dataInicio']);
            $instrumento_juridico->setDataFim($row['dataFim']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
