<?php
session_start();
require_once "Adm/livroDAO.php";

if (isset($_SESSION['carrinho']))
    $carrinho = $_SESSION['carrinho'];
else
    $carrinho = [];
    
$acao = $_GET['acao'] ?? null;

$id = $_GET['id'] ?? null;
$livroDAO = new LivroDAO();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVRARIA BOOKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css%22%3E">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <header class="bg-danger text-white shadow-lg p-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar navbar-light">
                <a class="navbar-brand fw-bold fst-italic" href="index.php">
                    <img class="logo" src="img/Livraria Books-logos_transparent.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="input-group mb-3 my-3 mx-4">
                    <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-light mx-auto d-block border" type="submit">Buscar
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="market-cart align-middle mx-2" src="img/shopping-cart.png" alt="">
                                <span>Login / Cadastro</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="indexCadastro.php">Cadastre-se</a></li>
                                <li><a class="dropdown-item" href="indexCart.php">Carrinho</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <nav class="navbar navbar-expand-lg navbar-dark py-2">
                <div class="container">
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav list-group list-group-horizontal-md">
                            <li class="nav-item dropdown rounded">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gênero
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Ficção
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Biografia
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Auto-ajuda
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Romance
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Suspense
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Educacional
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav list-group list-group-horizontal-md">
                            <li class="nav-item dropdown">
                                <button class="btn btn-danger dropdown-toggle mx-3" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Faixa Etária
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Infantil
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Juvenil
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Adulto
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav list-group list-group-horizontal-md">
                            <li class="nav-item dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Idioma
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Português
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Inglês
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Espanhol
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Braille
                                        </a>
                                    </li>
                                    <li class="list-group-item bg-transparent"><a class="dropdown-item" href="#">
                                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                            Outros
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav list-group list-group-horizontal-md">
                            <li class="nav-item dropdown">
                                <button type="button" class="btn btn-outline-light ms-3">Filtrar e Pesquisar</button>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> Filtrar por:
            </button>
        </div>
    </nav>

    <div class="content">