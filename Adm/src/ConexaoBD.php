<?php

class ConexaoBD{

    public static function getConexao():PDO{
        $conexao = new PDO(
            "mysql:host=localhost;dbname=livrariabooks",
            "root",
            "coringa");
        return $conexao;
    }

}   

ConexaoBD::getConexao();