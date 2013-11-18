<?php

class InstituicaoDAC {

    public static function persist($instituicao) {
        include_once 'conexao.php';
        $sql = "INSERT INTO `INSTITUICAO` (`sigla`, `nome`, `cnpj` ) VALUES 
            ('" . $instituicao->getSigla() . "',
                '" . $instituicao->getNome() . "',
                '" . $instituicao->getCnpj() . "');";

        mysql_query($sql) or die(mysql_error() . "InstituicaoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function atualizar($instituicao) {
        include_once 'conexao.php';
        $sql = "UPDATE INSTITUICAO SET
        nome='" . $instituicao->getNome() . "',
        sigla='" . $instituicao->getSigla() . "',
        cnpj='" . $instituicao->getCnpj() . "'
        WHERE idINSTITUICAO='" . $instituicao->getId() . "'";
        mysql_query($sql) or die(mysql_error());
    }

    public static function updateInfo(Instituicao $instituicao, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `INSTITUICAO` SET `$atributo`=$atributoNovo WHERE id=" . $instituicao->getIdInstituicao();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($instituicao) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `INSTITUICAO` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($instituicao, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM INSTITUICAO WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $instituicao->setSigla($row['sigla']);
            $instituicao->setNome($row['nome']);
            $instituicao->setCnpj($row['cnpj']);
            return 1;
        } else {
            return NULL;
        }
    }

    public static function recupereTudo() {

        //selecionando dados da tabela
        include_once 'conexao.php';
        $sql = "SELECT * FROM INSTITUICAO";
        $query = mysql_query($sql);
        while ($sql = mysql_fetch_array($query)) {
            $id = $sql["id"];
            $nome = $sql["nome"];
            echo "<a href=nome.php?id=$id>$nome</a>";
        }
    }

}

?>
