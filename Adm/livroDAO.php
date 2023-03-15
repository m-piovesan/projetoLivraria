<?php
require_once "src/ConexaoBD.php";
require_once "Livro.php";

class LivroDAO {

    function cadastrarLivro(Livro $livro) {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "insert into livros (titulo, autor, isbn, editora, edicao, ano, resumo, valor, quantidade, promocao, imagem, estiloId) values (
            '{$livro->getTitulo()}',
            '{$livro->getAutor()}',
            '{$livro->getIsbn()}',
            '{$livro->getEditora()}',
            '{$livro->getEdicao()}',
            '{$livro->getAno()}',
            '{$livro->getResumo()}',
            '{$livro->getValor()}',
            '{$livro->getQuantidade()}',
            '{$livro->getPromocao()}',
            '{$livro->getImagem()}',
            '{$livro->getEstiloId()}'
        )";

        $conexaoBD->exec($sql);
    }

    function editarLivro(Livro $livro){      
        $conexaoBD = ConexaoBD::getConexao();

        if ($livro->getImagem() == "") {
        $sql = "update livros set
            titulo = '{$livro->getTitulo()}',
            autor = '{$livro->getAutor()}',
            isbn = '{$livro->getIsbn()}',
            editora = '{$livro->getEditora()}',
            edicao = '{$livro->getEdicao()}',
            ano = '{$livro->getAno()}',
            resumo = '{$livro->getResumo()}',
            valor = '{$livro->getValor()}',
            quantidade = '{$livro->getQuantidade()}',
            promocao = '{$livro->getPromocao()}',
            estiloId = '{$livro->getEstiloId()}',
            where id = '{$livro->getId()}'
            ";
        } else {
            $sql = "update livros set
            titulo = '{$livro->getTitulo()}',
            autor = '{$livro->getAutor()}',
            isbn = '{$livro->getIsbn()}',
            editora = '{$livro->getEditora()}',
            edicao = '{$livro->getEdicao()}',
            ano = '{$livro->getAno()}',
            resumo = '{$livro->getResumo()}',
            valor = '{$livro->getValor()}',
            quantidade = '{$livro->getQuantidade()}',
            promocao = '{$livro->getPromocao()}',
            imagem = '{$livro->getImagem()}',
            estiloId = '{$livro->getEstiloId()}',
            where id = '{$livro->getId()}'
            ";
        }

        $conexaoBD->exec($sql);

    }

    function obterLivros() {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select d.*, e.estilo from livros as d, estilos as e where d.estiloId=e.id";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function pesquisarLivros(String $key) {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros where titulo like '%$key%'";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivroPorId ($id) {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros where id=$id";

        $stmt = $conexaoBD->query($sql);

        $livro = $stmt->fetch(PDO::FETCH_ASSOC);

        return $livro;
    }
    
    function obterLivrosPromocao () {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros where promocao=1;";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivrosNaoPromocao() {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select d.*, e.estilo from livros as d, estilos as e where d.estiloId=e.id and promocao=0;";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function deletarLivro($id) {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "delete from livros where id=$id";

        $conexaoBD->exec($sql);
    }
}
