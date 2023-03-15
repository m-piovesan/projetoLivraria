<?php

// require "src/ConexaoBD.php";

class EstiloDAO{

    function obterEstilos() {
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from estilos";

        $stmt = $conexaoBD->query($sql);

        $estilos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $estilos;
    }

}