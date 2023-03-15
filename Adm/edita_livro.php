<?php

require_once "Livro.php";
require_once "livroDAO.php";
require_once "src/EstiloDAO.php";
require_once "funcoes.php";
?>

<?php

$id = $_GET['id'];
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
if($_FILES['imagem']['size']>0){
    $imagem = pegarImagem($_FILES);
} else {
    $imagem = '';
}

$livro = new Livro();

$livro->setId($id);
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

$livroDAO->editarLivro($livro);

?>
<body>
    <?php

    include "menu.php";

    ?>

    <h2>Edição realizada com sucesso!</h2>

    <?php

    include "rodape.php";
    
    ?>
</body>