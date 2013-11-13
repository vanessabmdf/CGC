<?php

class Instrumento_juridicoDAC {

    public static function persist($instrumento_juridico) {
        include_once './conexao.php';
        $sql = "INSERT INTO `INSTRUMENTO_JURIDICO` (`nome`, `dataInicio`, 
            `dataFim`, `valorContratoOriginal`, `informacoes`, 
            `INSTITUICAO_idINSTITUICAO`, TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO, 
            `INSTITUICAO_CONTRATADA_idINSTITUICAO` ) VALUES 
            ('" . $instrumento_juridico->getNome() . "',
                '" . $instrumento_juridico->getDataInicio() . "',
                '" . $instrumento_juridico->getDataFim() . "',
                '" . $instrumento_juridico->getValorContratoOriginal() . "',
                '" . $instrumento_juridico->getInformacoes() . "',
                '" . $instrumento_juridico->getINSTITUICAO_idINSTITUICAO() . "',
                '" . $instrumento_juridico->getTIPO_INSTRUMENTO_idTIPO_INSTRUMENTO() . "',
                '" . $instrumento_juridico->getINSTITUICAO_CONTRATADA_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "Instrumento_juridicoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Instrumento_juridico $instrumento_juridico, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `INSTRUMENTO_JURIDICO` SET `$atributo`=$atributoNovo WHERE id=" . $instrumento_juridico->getIdINSTUMENTO_JURIDICO();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($instrumento_juridico) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `INSTRUMENTO_JURIDICO` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($instrumento_juridico, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM INSTRUMENTO_JURIDICO WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $instrumento_juridico->setNome($row['nome']);
            $instrumento_juridico->setDataInicio($row['dataInicio']);
            $instrumento_juridico->setDataFim($row['dataFim']);
            $instrumento_juridico->setValorContratoOriginal($row['valorContratoOriginal']);
            $instrumento_juridico->setInformacoes($row['informacoes']);
            $instrumento_juridico->setINSTITUICAO_idINSTITUICAO($row['INSTITUICAO_idINSTITUICAO']);
            $instrumento_juridico->setTIPO_INSTRUMENTO_idTIPO_INSTRUMENTO($row['TIPO_INSTRUMENTO_idTIPO_INSTRUMENTO']);
            $instrumento_juridico->setINSTITUICAO_CONTRATADA_idINSTITUICAO($row['INSTITUICAO_CONTRATADA_idINSTITUICAO']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
