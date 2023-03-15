<?php

include "menu.php";
require "src/ConexaoBD.php";
require_once "livroDAO.php";
require_once "src/EstiloDAO.php";

$id = $_GET['id'];
$livroDAO = new LivroDAO();
$livro = $livroDAO->obterLivroPorId($id);
?>

<h2>Edição de Livros</h2>
<form method="post" enctype="multipart/form-data" action="edita_livro.php?id=<?=$livro['id']?>" method="POST">

    <label for="autorInput">Autor: </label>
    <input type="text" name="autor" value="<?=$livro['autor']?>" id="autorInput" class="input-padrao" required="true" size=50>

    <label for="tituloInput">Titulo: </label>
    <input type="text" name="titulo" value="<?=$livro['titulo']?>" id="tituloInput" class="input-padrao" size=50>

    <label for="isbnInput">ISBN: </label>
    <input type="text" name="isbn" value="<?=$livro['isbn']?>" id="isbnInput" class="input-padrao" required="true" size=50>

    <label for="editoraInput">Editora: </label>
    <input type="text" name="editora" value="<?=$livro['editora']?>" id="editoraInput" class="input-padrao" required="true" size=50>

    <label for="edicaoInput">Edição: </label>
    <input type="number" name="edicao" value="<?=$livro['edicao']?>" id="edicaoInput" class="input-padrao" required="true" size=10>

    <label for="anoInput">Ano: </label>
    <input type="number" name="ano" value="<?=$livro['ano']?>" id="anoInput" class="input-padrao" required="true" size=4>

    <label for="estiloInput">Estilo</label>
    <select name="estiloId" id="estiloInput">
        <?php
$estiloDAO = new EstiloDAO();
$estilos = $estiloDAO->obterEstilos();
foreach ($estilos as $estilo) {
    if ($livro['estiloId'] == $estilo['id']) {
        echo "<option selected value='" . $estilo['id'] . "'>" . $estilo['estilo'] . "</option>";
    } else {
        echo "<option value='" . $estilo['id'] . "'>" . $estilo['estilo'] . "</option>";
    }

}
?>
    </select>

    <label for="resumoInput">Resumo: </label>
    <input type="text" name="resumo" value="<?=$livro['resumo']?>" id="resumoInput" class="input-padrao" required="true" size=50>

    <label for="valorInput">Valor: </label>
    <input type="text" name="valor" value="<?=$livro['valor']?>" id="valorInput" class="input-padrao" required="true" size=50>

    <label for="quantidadeInput">Quantidade: </label>
    <input type="text" name="quantidade" value="<?=$livro['quantidade']?>" id="quantidadeInput" class="input-padrao" required="true" size=50>

    <label for="promocaoInput">Promoção: </label>
    Sim <input type="radio" name="promocao" value="1>" id="promoçãoinput" class="input-padrao" required="true" size=5>
    Não <input type="radio" name="promocao" value="0>" id="promoçãoinput" class="input-padrao" required="true" size=5>

    <label for="imagemInput">Imagem: </label>
    <input type="file" name="imagem" id="imagemInput" class="input-padrao" size=5>

    <button type="submit" id="botaoId">Salvar</button>

</form>

<?php

include "rodape.php";
?>