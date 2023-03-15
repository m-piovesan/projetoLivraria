<?php
require "Adm/src/ConexaoBD.php";
// require "src/ClienteDAO.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - LIVRARIA BOOKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <button class="btn" type="button" data-bs-toggle="offcanvas" style="background: white;" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        Carrinho</button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header text-dark fs-2">
                        <p id="offcanvasRightLabel">Carrinho</p>
                        <button type="button" class="btn-close text-reset fs-6" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="container">
                            <div class="row row-cols-2 text-dark d-flex align-items-center text-justify">
                                <div class="col"> <a href="indexBook4.html">
                                        <img src="img/book4.jpg" class="img-thumbnail" alt="...">
                                    </a> </div>
                                <div class="col" style="text-align: center;">
                                    <span style="font-weight: bold">H.P. Lovecraft - Miskatonic Edition </span> <br>
                                    <br>
                                    <span>R$64,90</span>
                                </div>
                                <div class="col"> <a href="indexBook2.html">
                                        <img src="img/livro2.png" class="img-thumbnail" alt="...">
                                    </a> </div>
                                <div class="col" style="text-align: center;">
                                    <span style="font-weight: bold">O Colecionador</span> <br> <br>
                                    <span>R$59,90</span>
                                </div>
                                <div class="col"> <a href="indexBook3.html">
                                        <img src="img/livro3.jpg" class="img-thumbnail" alt="...">
                                    </a> </div>
                                <div class="col" style="text-align: center;">
                                    <span style="font-weight: bold">A Vida Não Me Assusta</span> <br> <br>
                                    <span>R$49,90</span>
                                </div>
                                <div class="col"> <a href="indexBook5.html">
                                        <img src="img/book5.png" class="img-thumbnail" alt="...">
                                    </a> </div>
                                <div class="col" style="text-align: center;">
                                    <span style="font-weight: bold">Frankenstein</span> <br> <br>
                                    <span>R$59,90</span>
                                </div>
                                <div class="col"> <a href="indexBook6.html">
                                        <img src="img/book6.jpg" class="img-thumbnail" alt="...">
                                    </a> </div>
                                <div class="col" style="text-align: center;">
                                    <span style="font-weight: bold">Edgar Allan Poe: Medo Clássico Vol. 2</span> <br>
                                    <br>
                                    <span>R$64,90</span>
                                </div>
                                <div class="col"> <a href="indexBook1.html">
                                        <img src="img/livro1.jpg" class="img-thumbnail" alt="...">
                                    </a> </div>
                                <div class="col" style="text-align: center;">
                                    <span style="font-weight: bold">Columbine</span> <br> <br>
                                    <span>R$69,90</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col mx-auto">
                                <a href="indexCart.html" class="btn btn-danger mt-3 align-items-center" role="button">Ir
                                    para o carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="content">
        <main class="my-5">
            <div class="container">

                <div id="form" class="container-fluid bg-light p-4 border rounded-3 shadow-lg">

                    <h2 class="fs-4 fw-bold">Formulário de Cadastro:</h2>
                    <br>

                    <form class="row g-3" action="efetua_cadastro_cliente.php" method="post">
                        <div class="col-md-12">
                            <label for="nomeInput" class="form-label">Nome:</label>
                            <input type="text" name="nome" id="nomeInput" required="true" class="form-control" placeholder="Nome">
                        </div>
                        <div class="col-md-12">
                            <label for="emailInput" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="emailInput" required="true" placeholder="exemplo@email.com">
                        </div>
                        <div class="col-md-12">
                            <label for="cpfInput" class="form-label">Cpf:</label>
                            <input type="text" class="form-control" name="cpf" id="cpfInput" required="true" placeholder="piovesan baitola">
                        </div>
                        <div class="col-md-6">
                            <label for="passwordInput" class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="passwordInput" required="true">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Confirme sua senha:</label>
                            <input type="password" class="form-control" required="true">
                        </div>
                        <div class="col-12">
                            <label for="telefoneInput" class="form-label">Telefone:</label>
                            <input type="tel" class="form-control" name="telefone" id="telefoneInput" required="true" placeholder="(00) 00000-0000">
                        </div>
                        <div class="col-10">
                            <label for="addressInput" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" name="endereco" id="addressInput" required="true" placeholder="Rua Saul Brandalise, Avenida Principal...">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Número:</label>
                            <input type="number" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Referências:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Ao lado do Super Mercado, em frente à Praça...">
                        </div>
                        <div class="col-md-6">
                            <label for="cityInput" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" name="cidade" id="cityInput" required="true" placeholder="Cidade...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="estadoInput">Estado:</label>
                            <input class="form-control" list="estados-brasil" name="estado" id="estadoInput" required="true">
                            <datalist id="estados-brasil">
                                <option value="AC">
                                <option value="AL">
                                <option value="AP">
                                <option value="AM">
                                <option value="BA">
                                <option value="CE">
                                <option value="DF">
                                <option value="ES">
                                <option value="GO">
                                <option value="MA">
                                <option value="MT">
                                <option value="MS">
                                <option value="MG">
                                <option value="PA">
                                <option value="PB">
                                <option value="PR">
                                <option value="PE">
                                <option value="PI">
                                <option value="RJ">
                                <option value="RN">
                                <option value="RS">
                                <option value="RO">
                                <option value="RR">
                                <option value="SC">
                                <option value="SP">
                                <option value="SE">
                                <option value="TO">
                            </datalist>
                        </div>
                        <div class="col-md-3">
                            <label for="cepInput" class="form-label">CEP:</label>
                            <input type="text" class="form-control" id="cepInput" name="cep" required="true" placeholder="00000-00">
                        </div>

                    <br>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <br>
                                <div class="modal-body">
                                    Deseja salvar suas informações e enviar?
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" id="botaoId" class="btn btn-success">Salvar e enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>

                    <div class="row">
                        <div class="col d-flex justify-content-evenly">
                            <button class="btn btn-outline-success" button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">Cadastrar</button>
                        </div>
                        <div class="col d-flex justify-content-evenly">
                            <button class="btn btn-outline-danger" type="submit">Cancelar</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </main>

        <?php
        include "footer.php";
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>

</html>