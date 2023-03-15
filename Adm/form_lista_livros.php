<?php
include "menu.php";
require_once "livroDAO.php";


$livroDAO = new LivroDAO;

if (isset($_GET['chave'])) {
    $key = $_GET['key'];
    $livros = $livroDao->pesquisarLivros($key);
} else
    $livros = $livroDAO->obterLivros();
?>

<h2>Pesquisar Livros</h2>
<form action="form_lista_livros.php" class="formpesquisa">
    <label for="">Digite o título do livro: </label>
    <input type="text" name="key" id="" class="input-padrao" required="true" size=50>

    <button type="submit" id="botaoId">Pesquisar</button>

</form>

<table>
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>ISBN</th>
        <th>Editora</th>
        <th>Edição</th>
        <th>Ano</th>
        <th>Categoria</th>
        <th>Valor</th>
        <th>Promoção</th>
        <th>Quantidade</th>
        <th>---</th>
    </tr>

    <?php
    foreach ($livros as $livro) {
    ?>
        <tr>
            <td><?= $livro['titulo'] ?></td>
            <td><?= $livro['autor'] ?></td>
            <td><?= $livro['isbn'] ?></td>
            <td><?= $livro['editora'] ?></td>
            <td><?= $livro['edicao'] ?></td>
            <td><?= $livro['ano'] ?></td>
            <td><?= $livro['estilo'] ?></td>
            <td><?= $livro['valor'] ?></td>
            <td>
                <?php
                if ($livro['promocao'] == 0) {
                    echo "Não lek";
                } else {
                    echo "Sim menó";
                }
                ?>
            </td>
            <td><?= $livro['quantidade'] ?></td>
            <td>
                <a href="deletar_livro.php?id=<?= $livro['id'] ?>" class="btn btn-danger btn-sm">Remover</a>
                <a href="form_edita_livro.php?id=<?= $livro['id'] ?>" class="btn btn-success btn-sm">Editar</a>
            </td>
        </tr>
    <?php
    }
    ?>
    <?php

    ?>

</table>


<?php

include "rodape.php";
?>