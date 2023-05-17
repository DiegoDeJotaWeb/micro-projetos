<?php

// cadastro de cargos


function cadastroCategoria()
{
    try {
        require_once './../../../config/_conexao.php';
        $pdo = PdoConexao::getInstancia();
        $nomeCategoriaPortfolio = $_POST['nomeCategoriaPortfolio'];



        $stmt = $pdo->prepare("insert into categoriaPortfolio (tituloCategoriaPotfolio) values (:nomeCategoriaPortfolio)");
        $stmt->execute(array(
            ':nomeCategoriaPortfolio' => $nomeCategoriaPortfolio
        ));
        echo $stmt->rowCount();
        // header('Location:../../../index.php');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeCategoriaPortfolio'])) {
    cadastroCategoria();
} else {
    echo 'Erro ao cadastrar categoria';
}

// apagar de cargos

function deletarCategoria()
{
    try {
        require_once './../../../config/_conexao.php';
        $pdo = PdoConexao::getInstancia();
        $idCategoriaApagar = $_GET['categoriaDeletar'];



        $stmt = $pdo->prepare("DELETE FROM categoriaPortfolio WHERE idCategoriaPotfolio = :idCategoriaApagar;");
        $stmt->bindParam(':idCategoriaApagar', $idCategoriaApagar);
        $stmt->execute();
        // echo $stmt->rowCount();
        // header('Location:../../../index.php?pagina=cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}


if (isset($_GET['categoriaDeletar'])) {
    deletarCategoria();
} else {
    echo 'eroo 2';
}

// editar cargos

function editarCategoria()
{
    try {
        require_once './../../../config/_conexao.php';
        $pdo = PdoConexao::getInstancia();
        $categoriaEditar = $_POST['categoriaEditar'];
        $idCategoriaEditar = $_POST['idCategoriaEditar'];

        $stmt = $pdo->prepare('UPDATE categoriaPortfolio SET tituloCategoriaPotfolio = :tituloCategoriaPotfolio WHERE idCategoriaPotfolio = :idCategoriaPotfolio');

        $stmt->execute(array(
            ':idCategoriaPotfolio' => $idCategoriaEditar,
            ':tituloCategoriaPotfolio' => $categoriaEditar

        ));
        echo $stmt->rowCount();
        // header('Location:../../../index.php?pagina=cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['categoriaEditar'])) {
    editarCategoria();
} else {
    echo 'eroo 3';
}
