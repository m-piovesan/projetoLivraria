<?php

require_once "./src/Cliente.php";
require_once "./src/ClienteDAO.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep']; 
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$cliente = new Cliente();

$cliente->setNome($nome);
$cliente->setCpf($cpf);
$cliente->setEmail($email);
$cliente->setSenha($senha);
$cliente->setEndereco($endereco);
$cliente->setTelefone($telefone);
$cliente->setCep($cep);
$cliente->setCidade($cidade);
$cliente->setEstado($estado);

$clienteDAO = new ClienteDAO();

$clienteDAO->cadastrarCliente($cliente);

?>
<body>
    <h2>Cadastro Realizado com sucesso!</h2>
</body>