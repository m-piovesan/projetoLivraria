<?php

require "./src/Cliente.php";
require "./src/ClienteDAO.php";

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$cliente = new Cliente();

$cliente->setNome($nome);
$cliente->setTelefone($telefone);
$cliente->setSenha($senha);
$cliente->setEmail($email);
$cliente->setCpf($cpf);
$cliente->setEndereco($endereco);
$cliente->setCep($cep);
$cliente->setCidade($cidade);
$cliente->setEstado($estado);

$clienteDAO = new ClienteDAO(); 

$clienteDAO->cadastrarCliente($cliente);

header('Location:login.php');

?>
