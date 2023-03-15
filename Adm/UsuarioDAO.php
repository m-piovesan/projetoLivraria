<?php

require "src/ConexaoBD.php";

class UsuarioDAO
{

    public function validarUsuario(Usuario $usuario)
    {

        $senhaCripto = md5($usuario->getSenha());
        $sql = "select * from usuarios where email='{$usuario->getEmail()}' and senha='$senhaCripto'";

        $conexao = ConexaoBD::getConexao();
        $stmt = $conexao->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrarUsuario(Usuario $usuario)
    {

        $senhaCripto = md5($usuario->getSenha());

        $sql = "insert into usuarios (email, senha) values
                ('{$usuario->getEmail()}','{$senhaCripto}')";
        
        $conexao = ConexaoBD::getConexao();
        $conexao->exec($sql);

    }
}
