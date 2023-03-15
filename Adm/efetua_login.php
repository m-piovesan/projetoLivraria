<?php

require "src/Usuario.php";
require "UsuarioDAO.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();

    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    $usuarioDAO = new UsuarioDAO();

    session_start();
    if ($usuarioResp = $usuarioDAO->validarUsuario($usuario)) {

        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['userId'] = $usuarioResp['id'];

        header("Location:pagina_interna.php");

    }else{
        $_SESSION['msg'] = "Usuário ou senha inválido.";
        header("Location:login.php");
    }