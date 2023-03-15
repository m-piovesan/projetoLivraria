<?php

session_start();
require "./src/Cliente.php";
require "./src/ClienteDAO.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cliente = new Cliente();

    $cliente->setEmail($email);
    $cliente->setSenha($senha);

    $clienteDAO = new ClienteDAO();

    if ($clienteResp = $clienteDAO->validarCliente($cliente)) {

        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $clienteResp['nome'];
        $_SESSION['clienteId'] = $clienteResp['id'];

        header("Location:indexPagamento.php");

    }else{
        $_SESSION['msg'] = "Usuário ou senha inválido.";
        header("Location:index.php");
    }