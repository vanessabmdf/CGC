<?php

class EnderecoDAC {

    public static function persist($endereco) {
        include_once './conexao.php';
        $sql = "INSERT INTO `endereco` (`endereco`, `bairro`, `cidade`, 
            `estado`, `cep`, `INSTITUICAO_idINSTITUICAO` ) VALUES 
            ('" . $endereco->getEndereco() . "', 
                '" . $endereco->getBairro() . "',
                '" . $endereco->getCidade() . "',
                '" . $endereco->getEstado() . "',
                '" . $endereco->getCep() . "',
                '" . $endereco->getINSTITUICAO_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "EnderecoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Endereco $endereco, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `endereco` SET `$atributo`=$atributoNovo WHERE id=" . $endereco->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($endereco) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `endereco` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($endereco, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM `endereco` WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $endereco->setEndereco($row['endereco']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
