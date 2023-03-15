<?php

require_once "livroDAO.php";

$id=$_GET['id'];

$livroDAO = new LivroDAO();

$livroDAO->deletarLivro($id);

?>
<body>
    <?php

    include "menu.php";

    ?>

    <h2>Livro deletado com sucesso!</h2>

    <?php

    include "rodape.php";
    
    ?>
</body>