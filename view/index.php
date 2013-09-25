<?php require_once('header.php'); ?>

<!-- MAIN CONTAINER -->
<div id="ja-container" class="wrap ja-mf">
    <div class="main clearfix">
        <div id="ja-mainbody" style="width:100%">
            <!-- CONTENT -->
            <div id="ja-main" style="width:100%">
                <div class="inner clearfix">


                    <div id="system-message-container">
                        <div id="system-message">
                        </div>
                    </div>

                    <div id="ja-contentwrap" class="clearfix ">
                        <div id="ja-content" class="column" style="width:100%">
                            <div id="ja-current-content" class="column" style="width:100%">

                                <div id="ja-content-main" class="ja-content-main clearfix">
                                    <div class="item-page clearfix">
                                        <h2 class="contentheading">
                                            <a href="/gestao">
                                                Gestão</a>
                                        </h2>
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



                                    </div>                            
                                </div>

                            </div>

                        </div>


                    </div>

                </div>
            </div>
            <!-- //CONTENT -->

        </div>
    </div>
</div>
<!-- //MAIN CONTAINER -->

<?php require_once('footer.php'); ?>