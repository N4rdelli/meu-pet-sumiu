<?php

class ProdutoController {
    public function listar() {
        echo "Estou no listar ProdutoController";

        // Abre a conexão no banco de dados
        $parametros = "mysql:host=localhost;dbname=meu-pet-sumiu;charset=utf8mb4";
        $conn = new PDO($parametros, "root", "");

        // Busca os dados de produtos
        $sql = "SELECT * FROM produtos";
        $stm = $conn->prepare($sql);
        $stm->execute();

        // Fecha a conexão com o banco de dados
        $conn = null;

        $resultado = $stm->fetchAll(PDO::FETCH_OBJ);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";

        // Mostra uma view
        require_once "Views/lista-produtos.php";
    }
}

?>