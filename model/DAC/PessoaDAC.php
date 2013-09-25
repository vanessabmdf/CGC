<?php

class PessoaDAC {

    public static function persist($pessoa) {
        include_once './conexao.php';
        $sql = "INSERT INTO `pessoa` (`nome`, `email`, `tipo`,  
            `INSTITUICAO_idINSTITUICAO` ) VALUES 
            ('" . $pessoa->getNome() . "', 
                '" . $pessoa->getEmail() . "',
                '" . $pessoa->getTipo() . "',
                '" . $pessoa->getINSTITUICAO_idINSTITUICAO() . "');";

        mysql_query($sql) or die(mysql_error() . "PessoaDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Pessoa $pessoa, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `pessoa` SET `$atributo`=$atributoNovo WHERE id=" . $pessoa->getId();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($pessoa) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `pessoa` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($pessoa, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM `pessoa` WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $pessoa->setNome($row['nome']);
            return 1;
        } else {
            return NULL;
        }
    }

}

?>
