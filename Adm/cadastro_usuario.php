<?php
    require "src/Usuario.php";
    require "UsuarioDAO.php";

    $usuario = new Usuario();
    $usuario->setEmail("piove@gmail.com");
    $usuario->setSenha("123");

    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->cadastrarUsuario($usuario);
    
?>