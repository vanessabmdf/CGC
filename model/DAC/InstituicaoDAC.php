<?php

class InstituicaoDAC {

    public static function persist($instituicao) {
        include_once 'conexao.php';
        $sql = "INSERT INTO `instituicao` (`sigla`, `nome`, `cnpj`, `endereco`, 
            `cidade`, `estado`, `bairro`, `cep`, `valorContratoOriginal`) VALUES 
            ('" . $instituicao->getSigla() . "',
                '" . $instituicao->getNome() . "',
                '" . $instituicao->getCnpj() . "',
                '" . $instituicao->getEndereco() . "',
                '" . $instituicao->getCidade() . "',
                '" . $instituicao->getEstado() . "',
                '" . $instituicao->getBairro() . "',
                '" . $instituicao->getCep() . "',
                '" . $instituicao->getValorContratoOriginal() . "');";

        mysql_query($sql) or die(mysql_error() . "instituicaoDAC - Persist");

        $RES = mysql_query("SELECT LAST_INSERT_ID()");
        $mat = mysql_fetch_array($RES);
        mysql_close($conexao);
        return $mat['0'];
    }

    public static function updateInfo(Instituicao $instituicao, $atributo, $atributoNovo) {
        include_once 'conexao.php';
        $sql = "UPDATE `instituicao` SET `$atributo`=$atributoNovo WHERE id=" . $instituicao->getIdInstituicao();
        mysql_query($sql) or die(mysql_error());
    }

    public static function delete($instituicao) {
        include_once 'conexao.php';
        $sql = "DELETE FROM `instituicao` WHERE id=";
        mysql_query($sql) or die(mysql_error());
    }

    public static function recupere($instituicao, $id) {
        include_once 'conexao.php';
        $sql = "SELECT * FROM instituicao WHERE id=$id";
        $resultado = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($resultado);

        if (mysql_num_rows($resultado) == 1) {
            $instituicao->setSigla($row['sigla']);
            $instituicao->setNome($row['nome']);
            $instituicao->setCnpj($row['cnpj']);
            $instituicao->setEnderco($row['endereco']);
            $instituicao->setCidade($row['cidade']);
            $instituicao->setEstado($row['estado']);
            $instituicao->setBairro($row['bairro']);
            $instituicao->setCep($row['cep']);
            $instituicao->setValorContratoOriginal($row['valorContratoOriginal']);
            return 1;
        } else {
            return NULL;
        }
    }

    public static function recupereTudo() {

        //selecionando dados da tabela
        include_once 'conexao.php';
        $sql = "SELECT * FROM instituicao";
        $query = mysql_query($sql);
        while ($sql = mysql_fetch_array($query)) {
            $id = $sql["id"];
            $nome = $sql["nome"];
            echo "<a href=nome.php?id=$id>$nome</a>";
        }
    }

}

?>
