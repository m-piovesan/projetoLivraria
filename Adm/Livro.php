<?php

class Livro {

    private int $id;
    private String $titulo;
    private String $autor;
    private String $isbn;
    private String $editora;
    private int $edicao;
    private int $ano;
    private String $resumo;
    private float $valor;
    private int $quantidade;
    private int $promocao;
    private String $imagem;
    private int $estiloId;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }
    
    function getEditora() {
        return $this->editora;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }
    
    function getEdicao() {
        return $this->edicao;
    }

    function setEdicao($edicao) {
        $this->edicao = $edicao;
    }
    
    function getAno() {
        return $this->ano;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }
    
    function getResumo() {
        return $this->resumo;
    }

    function setResumo($resumo) {
        $this->resumo = $resumo;
    }

    function getValor() {
        return $this->valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function getPromocao() {
        return $this->promocao;
    }

    function setPromocao($promocao) {
        $this->promocao = $promocao;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }


    /**
     * Get the value of estiloId
     */ 
    public function getEstiloId()
    {
        return $this->estiloId;
    }

    /**
     * Set the value of estiloId
     *
     * @return  self
     */ 
    public function setEstiloId($estiloId)
    {
        $this->estiloId = $estiloId;

        return $this;
    }
}
