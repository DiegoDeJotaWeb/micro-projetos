<?php
// require_once "./conexao.php";
// cadastro de cargos


function cadastroCategoria()
{
    try {
        require_once 'conexao.php';
        $categoria = $_POST['categoria'];

        $stmt = $pdo->prepare("insert into categoria (nomeCategoria) values (:nomeCategoria)");
        $stmt->execute(array(
            ':nomeCategoria' => $categoria
        ));
        echo $stmt->rowCount();
        header('Location:pag.php?pagina=listar-categorias');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['categoria'])) {
    cadastroCategoria();
} else {
    echo 'eroo 1';
}

// apagar de cargos

function apagarCategoria()
{
    try {
        require_once './conexao.php';
        $idCategoriaApagar = $_POST['apagar'];
        echo $idCargoApagar;



        $stmt = $pdo->prepare("DELETE FROM categoria WHERE idCategoria = :idCategoriaApagar;");
        $stmt->bindParam(':idCategoriaApagar', $idCategoriaApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:pag.php?pagina=listar-categorias');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}


if (isset($_POST['apagar'])) {
    apagarCategoria();
} else {
    echo 'eroo 2';
}

// editar cargos

function editarCategoria()
{
    try {
        require_once './conexao.php';
        $nomeCategoria = $_POST['nomeCategoria'];
        $idCategoria = $_POST['idCategoria'];
        // echo $nomeCargo . " " .  $idCargo;

        $stmt = $pdo->prepare('UPDATE categoria SET nomeCategoria = :nomeCategoria WHERE idCategoria = :idCategoria');

        $stmt->execute(array(
            ':idCategoria' => $idCategoria,
            ':nomeCategoria' => $nomeCategoria

        ));
        echo $stmt->rowCount();
        header('Location:pag.php?pagina=listar-categorias');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeCategoria'])) {
    editarCategoria();
} else {
    echo 'eroo 3';
}
