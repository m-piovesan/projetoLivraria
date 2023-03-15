<?php
require "Adm/src/ConexaoBD.php";

class ClienteDAO
{

    public function cadastrarCliente(Cliente $cliente)
    {
        $senhaCripto = md5($cliente->getSenha());

        $sql = "insert into clientes 
            (nome, cpf, email, senha, endereco, telefone, CEP, cidade, estado) values

                (
                '{$cliente->getNome()}',
                '{$cliente->getCpf()}',
                '{$cliente->getEmail()}',
                '{$senhaCripto}',
                '{$cliente->getEndereco()}',
                '{$cliente->getTelefone()}',
                '{$cliente->getCep()}',
                '{$cliente->getCidade()}',
                '{$cliente->getEstado()}'
                )";

        var_dump($sql);
        
        $conexao = ConexaoBD::getConexao();
        $conexao->exec($sql);

    }

    public function validarCliente(Cliente $cliente)
    {

        $senhaCripto = md5($cliente->getSenha());
        $sql = "select * from clientes where email='{$cliente->getEmail()}' and senha='$senhaCripto'";

        $conexao = ConexaoBD::getConexao();
        $stmt = $conexao->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
}
