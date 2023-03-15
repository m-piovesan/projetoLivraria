<?php
    include "header.php";
    require_once "Adm/livroDAO.php";
    $id = $_GET['id'];
    $livroDAO = new LivroDAO();
    $livro = $livroDAO->obterLivroPorId($id);
?>

    <div class="content">
        <main class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="data:image/jpg;base64, <?=base64_encode($livro['imagem']) ?>" class="d-block w-100" style="height: 80vh;" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title text-center fw-bold fs-2"><?=$livro['titulo']?>
                                </h1>
                                <hr>
                                <p class="card-text lh-base mb-3" style="text-align: justify;"> POR APENAS: R$<?=$livro['valor']?>
                                    <br> <br>

                                    <?=$livro['resumo']?><br>
                                    <br>

                                </p>
                                <a href="indexCart.php?id=<?=$livro['id']?>&acao=inserir" class="btn btn-danger mt-3" role="button">Adicionar ao
                                    Carrinho</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Corra! Poucas unidades restantes...</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>

<?php
include "footer.php";
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

</body>

</html>
