<?php require_once('header.php'); ?>
<!-- MAIN CONTAINER -->
<div id="ja-container" class="control-group">
    <div class="main clearfix">
        <div id="ja-mainbody" style="width:100%">
            <!-- CONTENT -->
            <div id="ja-main" style="width:100%">
                <div class="inner clearfix">


                    <div id="system-message-container">
                        <div id="system-message">
                        </div>
                    </div>

                    <div id="ja-contentwrap" class="clearfix">
                        <div id="ja-content" class="column" style="width:100%">
                            <div id="ja-current-content" class="column" style="width:100%">

                                <div id="ja-content-main" class="ja-content-main clearfix">
                                    <div class="item-page clearfix">
                                        <section class="container">
                                            <h3>Editar Institui&ccedil;&atilde;o</h3>
                                            <?php
                                            include_once 'model/DAC/conexao.php';
                                            $_SESSION['id'] = $_GET["id"];
                                            $id = $_GET["id"];
                                            $result = mysql_query("SELECT * FROM INSTITUICAO WHERE idINSTITUICAO ='$id'");
                                            while ($row = mysql_fetch_array($result)) {
                                                $nome = $row['nome'];
                                                $sigla = $row['sigla'];
                                                $cnpj = $row['cnpj'];
                                            }
                                            ?>
                                            <form class="form-horizontal" method="post" action="gestao/controller/processaEditaInstituicao.php" enctype="multipart/form-data">
                                                <div class="control-group">
                                                    <label class="control-label" for="nome">Nome da Institui&ccedil;&atilde;o</label>
                                                    <div class="controls">
                                                        <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="sigla">Sigla</label>
                                                    <div class="controls">
                                                        <input type="text" name="sigla" placeholder="Sigla"  value="<?php echo $sigla; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="cnpj">CNPJ</label>
                                                    <div class="controls">
                                                        <input type="text" name="cnpj" placeholder="CNPJ"  value="<?php echo $cnpj; ?>" required>
                                                    </div>

                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" class="btn btn-success">Enviar</button>
                                                        </div>
                                                    </div>


                                            </form>

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