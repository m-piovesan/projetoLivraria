<?php
require "./src/CompraDAO.php";

session_start();

$compraDAO = new CompraDAO();

$resp = $compraDAO->cadastrarCompra($_SESSION);

if($resp>0)
    header("Location:sucesso.php")
?>