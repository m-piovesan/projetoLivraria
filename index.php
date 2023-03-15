<?php
require_once "./Adm/livroDAO.php";
include "header.php";
$livroDAO = new LivroDAO();
$livros = $livroDAO->obterLivros();
?>

<html>
<div class="content">
    <main class="mb-3">

        <span class="border">
            <p class="p-3 mb-2 bg-dark text-white h1 text-center">MAIS VENDIDOS!</p>
        </span>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <span class="border">
            <p class="p-3 mb-2 bg-dark text-white h1 text-center">PROMOÇÕES!</p>
        </span>

        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <!-- COLUNAS PROMOÇÃO -->

                <?php
                $livroDAO = new LivroDAO();

                $livrosPromocao = $livroDAO->obterLivrosPromocao();
                for ($i = 0; $i < 3; $i++) :
                    $livro = $livrosPromocao[$i]; // problema aqui <<-----------------------------------------------------------------------------
                ?>

                    <div class="col">
                        <div class="card h-100">

                            <a href="indexBook1.php?id=<?= $livro['id'] ?>">
                                <img src="data:image/jpg;base64, <?=base64_encode($livro['imagem']) ?>" class="card-img-top" style="height: 50vh" alt="livro">
                            </a>

                            <div class="card-body text-center">
                                <h3 class="card-title text-center fw-bold"> <?= $livro['titulo'] ?> </h3>
                                <h6 class="card-title text-center fw-bold"> <?= $livro['autor'] ?> </h6>
                                <p class="card-text lh-base my-2" style="text-align: center;"> POR APENAS: R$<?= $livro['valor'] ?></p>

                                <a href="indexBook1.php?id=<?= $livro['id'] ?>" class="btn btn-danger mt-3" role="button">Comprar</a>

                            </div>
                            <div class="card-footer">
                                <small class="text-muted"> <?= $livro['quantidade'] ?> unidade(s) restantes!</small>
                            </div>
                        </div>
                    </div>

                <?php
                endfor;
                ?>

                <!-- <div class="col">
                    <div class="card h-100">

                        <a href="indexBook2.html">
                            <img src="img/livro2.png" class="card-img-top" alt="camisa">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title text-center fw-bold">O COLECIONADOR</h5>
                            <p class="card-text lh-base mb-3" style="text-align: justify;">O Colecionador é a
                                história de Frederick Clegg, um homem solitário, de origem humilde, menosprezado por
                                uma sociedade esnobe, que encontra o grande amor de sua vida. Tudo o que ele deseja
                                é passar um tempo a sós com ela, demonstrar seus nobres sentimentos e deixar claro
                                que eles nasceram um para o outro.</p>

                            <a href="indexBook2.html" class="btn btn-danger mt-3" role="button">Comprar</a>


                        </div>
                        <div class="card-footer">
                            <small class="text-muted">17 ou 20 unidades restantes!</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <a href="indexBook3.html">
                            <img src="img/livro3.jpg" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body text-center">
                            <h5 class="card-title text-center fw-bold">A VIDA NÃO ME ASSUSTA</h5>
                            <p class="card-text lh-base mb-3" style="text-align: justify;">Você tem medo de quê?
                                Cachorros bravos, cobras, sapos, dragões soltando fogo? A Vida Não Me Assusta é um
                                pequeno livro de arte para crianças valentes, que enfrentam fantasmas e meninos
                                brigões da escola com a cabeça erguida. Mas se você é daqueles que têm medo até da
                                própria sombra, fique esperto.</p>

                            <a href="indexBook3.html" class="btn btn-danger mt-3" role="button">Comprar</a>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Entre 69 e 70 unidades restantes!</small>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <span class="border">
            <p class="p-3 mb-2 bg-dark text-white h1 text-center">INDICAÇÕES!</p>
        </span>

        <div class="container">

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php
                foreach ($livros as $livro):
                    if ($livro['promocao']==0):
                ?>

                    <div class="col">
                        <div class="card h-100">

                            <a href="indexBook1.php?id=<?= $livro['id'] ?>">
                                <img src="data:image/jpg;base64, <?=base64_encode($livro['imagem']) ?>" class="card-img-top" style="height: 50vh" alt="livro">
                            </a>

                            <div class="card-body text-center">
                                <h3 class="card-title text-center fw-bold"> <?= $livro['titulo'] ?> </h3>
                                <h6 class="card-title text-center fw-bold"> <?= $livro['autor'] ?> </h6>
                                <p class="card-text lh-base my-2" style="text-align: center;"> POR APENAS: R$<?= $livro['valor'] ?></p>

                                <a href="indexBook1.php?id=<?= $livro['id'] ?>" class="btn btn-danger mt-3" role="button">Comprar</a>

                            </div>
                            <div class="card-footer">
                                <small class="text-muted"> <?= $livro['quantidade'] ?> unidade(s) restantes!</small>
                            </div>
                        </div>
                    </div>

                <?php
                endif;
                endforeach;
                ?>

            </div>
        </div>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

</body>

</html>