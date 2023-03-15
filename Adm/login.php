<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

<h1>Login da Livraria</h1>

<?php

if (isset($_SESSION['msg'])):
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
?>

<div class="alert alert-danger" role="alert">
<?=$msg?>
</div>

<?php
    endif;
?>

<div class="container w-50 border rounded p-3 mt-3">
    <form action="efetua_login.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

</body>
</html>