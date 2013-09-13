<?php require_once('header.php'); ?>

<section class="container">
    <div class="row">
        <h3>
            <span itemprop="name">Institui&ccedil;&omacr;es</span>
        </h3>

        <?php
        //require_once('../controller/processaGestao.php') 
        //selecionando dados da tabela
        include_once '../model/DAC/conexao.php';
        $sql = "SELECT * FROM instituicao";
        $query = mysql_query($sql);
        while ($sql = mysql_fetch_array($query)) {
            $id = $sql["idINSTITUICAO"];
            $nome = $sql["nome"];
            echo "$nome (ID = $id) <a href=editarInstituicao.php>Editar</a>";
            echo "</br>";
        }
        ?>

    </div>
</section>

<?php require_once('footer.php'); ?>