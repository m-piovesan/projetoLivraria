<?php

require_once "Livro.php";
require_once "livroDAO.php";
require_once "funcoes.php";

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$isbn = $_POST['isbn'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$ano = $_POST['ano'];
$resumo = $_POST['resumo']; 
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$promocao = $_POST['promocao'];
$estiloId = $_POST['estiloId'];
$imagem = pegarImagem($_FILES);

$livro = new Livro();

$livro->setTitulo($titulo);
$livro->setAutor($autor);
$livro->setIsbn($isbn);
$livro->setEditora($editora);
$livro->setEdicao($edicao);
$livro->setAno($ano);
$livro->setResumo($resumo);
$livro->setValor($valor);
$livro->setQuantidade($quantidade);
$livro->setPromocao($promocao);
$livro->setEstiloId($estiloId);
$livro->setImagem($imagem);

$livroDAO = new LivroDAO();

$livroDAO->cadastrarLivro($livro);

?>
<body>
    <?php

    include "menu.php";

    ?>

    <h2>Cadastro Realizado com sucesso!</h2>

    <?php

    include "rodape.php";
    
    ?>
</body>