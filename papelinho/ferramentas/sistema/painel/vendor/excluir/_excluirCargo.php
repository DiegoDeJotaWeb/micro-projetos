<?php
// apagar de cargos

function apagarCargos()
{
    try {
        require_once '../_conexao.php';
        $idCargoApagar = $_POST['idCargoApagar'];
        echo $idCargoApagar;



        $stmt = $pdo->prepare("DELETE FROM tb_cargo WHERE idCargo = :idCargoApagar;");
        $stmt->bindParam(':idCargoApagar', $idCargoApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idCargoApagar'])) {
    apagarCargos();
} else {
    echo 'eroo 1';
   
}

?>