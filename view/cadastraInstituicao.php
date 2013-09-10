<?php require_once('header.php'); ?>
<section class="container">
    <h3>Nova Institui&ccedil;&atilde;o</h3>
    <div class="row">
        <form class="form-horizontal" method="post" action="../controller/processaCadastroInstituicao.php" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label" for="nome">Nome da Institui&ccedil;&atilde;o</label>
                <div class="controls">
                    <input type="text" name="nome" placeholder="Nome" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">Sigla</label>
                <div class="controls">
                    <input type="text" name="sigla" placeholder="Sigla" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">CNPJ</label>
                <div class="controls">
                    <input type="text" name="cnpj" placeholder="CNPJ" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">Endere&ccedil;o</label>
                <div class="controls">
                    <input type="text" name="endereco" placeholder="Endere&ccedil;o" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">Cidade</label>
                <div class="controls">
                    <input type="text" name="cidade" placeholder="cidade" required>
                </div>
            </div>
            <div class="control-group"><label class="control-label" for="nome">Estado</label>
                <div class="controls"><select name="estados">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AM">Amazonas</option>
                        <option value="AP">Amapá</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="PR">Paraná</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SE">Sergipe</option>
                        <option value="SP">São Paulo</option>
                        <option value="TO">Tocantins</option>
                    </select></div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">Bairro</label>
                <div class="controls">
                    <input type="text" name="bairro" placeholder="Bairro" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">CEP</label>
                <div class="controls">
                    <input type="text" name="cep" placeholder="CEP" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="nome">Valor do Contrato Original</label>
                <div class="controls">
                    <input type="text" name="valorContratoOriginal" placeholder="Valor Original" required>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php require_once('footer.php'); ?>