<?php

include "menu.php";
require "src/ConexaoBD.php";
require "src/EstiloDAO.php";
?>
<h2>Cadastro de Discos</h2>
<form method="post" enctype="multipart/form-data" action="cadastro_livro.php">

    <label for="autorInput">Autor: </label>
    <input type="text" name="autor" id="autorInput" class="input-padrao" required="true" size=50>

    <label for="tituloInput">Titulo: </label>
    <input type="text" name="titulo" id="tituloInput" class="input-padrao" size=50>

    <label for="isbnInput">ISBN: </label>
    <input type="text" name="isbn" id="isbnInput" class="input-padrao" required="true" size=50>

    <label for="editoraInput">Editora: </label>
    <input type="text" name="editora" id="editoraInput" class="input-padrao" required="true" size=50>

    <label for="edicaoInput">Edição: </label>
    <input type="number" name="edicao" id="edicaoInput" class="input-padrao" required="true" size=10>

    <label for="anoInput">Ano: </label>
    <input type="number" name="ano" id="anoInput" class="input-padrao" required="true" size=4>

    <!-- <label for="categoriaInput">Categoria: </label>
    <input type="text" name="categoria" id="categoriaInput" class="input-padrao" required="true" size=50> -->

    <div class="mb-3">
    <label for="resumoInput" class="form-label">Resumo:</label>
    <textarea class="form-control" name="resumo" id="resumoInput" placeholder="Resumo do produto..." rows="3" required="true"></textarea></div>


    <label for="valorInput">Valor: </label>
    <input type="text" name="valor" id="valorInput" class="input-padrao" required="true" size=50>

    <label for="quantidadeInput">Quantidade: </label>
    <input type="text" name="quantidade" id="quantidadeInput" class="input-padrao" required="true" size=50>

    <label for="promocaoInput">Promoção: </label>
    Sim <input type="radio" value="1" name="promocao" id="promoçãoinput" class="input-padrao" required="true" size=5>
    Não <input type="radio" value="0" name="promocao" id="promoçãoinput" class="input-padrao" required="true" size=5 checked>

    <label for="estiloInput">Estilo</label>
    <select name="estiloId" id="estiloInput">
        <?php
$estiloDAO = new EstiloDAO();
$estilos = $estiloDAO->obterEstilos();
foreach ($estilos as $estilo) {
    echo "<option value='" . $estilo['id'] . "'>" . $estilo['estilo'] . "</option>";
}
?>
    </select>

    <label for="imagemInput">Imagem: </label>
    <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true" size=5>

    <button type="submit" id="botaoId">Cadastrar</button>

</form>

<?php

include "rodape.php";
?>