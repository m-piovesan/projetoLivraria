<?php
include "header.php";

if (isset($_SESSION['carrinho']))
    $carrinho = $_SESSION['carrinho'];
else
    $carrinho = [];
$acao = $_GET['acao'] ?? null;

if ($acao == "inserir") {
    $id = $_GET['id'];
    $existe = false;
    if (sizeof($carrinho)>0){
        for ($i = 0; $i <= array_key_last($carrinho); $i++) {        
            if (isset($carrinho[$i])){
                $item = $carrinho[$i];
                if ($item['id'] == $id) {
                    $item['quantidade'] += 1;
                    unset($carrinho[$i]);
                    $carrinho[$i] = $item;
                    $existe = true;
                    break;
                }
            }
        }
    }

    if (!$existe) {
        $livroDAO = new LivroDAO();
        $livro = $livroDAO->obterLivroPorId($_GET['id']);
        $item = [
            "id" => $livro['id'],
            "imagem" => $livro['imagem'],
            "titulo" => $livro['titulo'],
            "autor" => $livro['autor'],
            "valor" => $livro['valor'],
            "quantidade" => 1
        ];

        $carrinho[] = $item;
    }
} else if ($acao == "remover") {
    $idRemover = $_GET['id'];
    for ($i = 0; $i <= array_key_last($carrinho); $i++) {
        if (isset($carrinho[$i])){
            $item = $carrinho[$i];
            if ($item['id'] == $idRemover) {
                unset($carrinho[$i]);
            }
        }
    }
}


$_SESSION['carrinho'] = $carrinho;

?>


<div class="content">
    <main class="mb-3 pt-5">

        <div class="container">

            <h1 class="fw-bold fs-2 text-center pe-3 mb-5">Carrinho de Compras:</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <table class="table table-striped border mb-5">
                            <thead>
                                <tr style="font-weight:bold" class="bg-danger text-light">
                                    <th>Quantidade:</th>
                                    <th>Título:</th>
                                    <th>Valor Unitário:</th>
                                    <th>Autor:</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $total = 0;
                                foreach ($carrinho as $item) :
                                ?>

                                    <tr>
                                        <td> <?= $item['quantidade'] ?> </td>
                                        <td> <?= $item['titulo'] ?> </td>
                                        <td> <?= $item['valor'] ?> </td>
                                        <td> <?= $item['autor'] ?> </td>
                                        <td> <a href="indexCart.php?id=<?=$item['id']?>&acao=remover">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                <?php
                                endforeach
                                ?>

                            </tbody>
                        </table>
                        <nav class="navbar navbar-light bg-light border rounded-3">
                            <div class="input-group my-3 mx-4 align-items-center">
                                <h1 class="fw-bold me-2">Cupom de Desconto:</h1>
                                <input type="text" class="form-control" placeholder="Digite seu cupom..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button type="submit" class="btn btn-danger">Utilizar</button>
                            </div>
                        </nav>
                        <br>
                        <nav class="navbar navbar-light bg-light border rounded-3">
                            <div class="input-group my-3 mx-4 align-items-center">
                                <h1 class="fw-bold me-2">Calculadora de Frete:</h1>
                                <input type="text" class="form-control" placeholder="00000-000" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button type="submit" class="btn btn-danger">Enviar</button>
                            </div>
                        </nav>
                        </form>
                        </nav>
                    </div>
                    <div class="col-4 container-fluid bg-light border rounded-3">
                        <img src="img/Livraria Books-logos_transparent.png" class="mt-3 mx-auto d-block" width="60%" alt="">
                        <hr>
                        <div class="row my-3">
                            <span class="fw-bold text-center">Produtos:</span>
                            <div class="container">

                                <ul class="list-group mt-3">

                                    <?php
                                    $total = 0;
                                    foreach ($carrinho as $item) :
                                    ?>

                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">

                                            <a href="indexBook1.php?id=<?= $livro['id'] ?>" class="text-dark" style="text-decoration: none;">
                                                <?= $item['titulo'] ?>
                                            </a>
                                            <span class="badge bg-danger rounded-pill"><?= $item['quantidade'] ?></span>
                                        </li>

                                        <?php
                                        $subtotal = $item['valor'] * $item['quantidade'];
                                        $total += $subtotal;
                                        $_SESSION['total'] = $total;
                                        ?>

                                    <?php
                                    endforeach
                                    ?>

                                    <br>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">

                                        <span style="font-weight:bold">
                                            <strong>Preço total:</strong> <?php echo $total ?>
                                        </span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="row my-3 text-center gx-1">
                            <div class="col">
                                <div class="container px-4">
                                    <div class="row gx-5">
                                        <div class="col">
                                            <button type="button" class="btn btn-danger">Alterar</button>
                                        </div>
                                        <div class="col">
                                            <a href="indexPagamento.php" class="btn btn-danger" role="button">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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