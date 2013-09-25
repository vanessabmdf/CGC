<?php

class ConexaoDAC {

    public static function persist($circuito) {
        include_once './conexao.php';
        $sql = "INSERT INTO `conexao` (`nome`, `dataAtivacao`, 
            `dataDesativacao`, `INSTITUICAO_idINSTITUICAO` ) VALUES 
            ('" . $circuito->getNome() . "', 
                '" . $circuito->getDataAtivacao() . "',
                '" . $circuito->getDataDesativacao() . "',
                '" . $circuito->getINSTITUICAO_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "ConexaoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Circuito $circuito, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `conexao` SET `$atributo`=$atributoNovo WHERE id=" . $circuito->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($circuito) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `conexao` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($circuito, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM `conexao` WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $circuito->setDataAtivacao($row['dataAtivacao']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
