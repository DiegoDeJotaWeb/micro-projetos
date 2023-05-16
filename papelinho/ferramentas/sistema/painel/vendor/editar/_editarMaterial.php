<?php

function editarCargo()
{
    try {
        require_once './../_conexao.php';
        $nomeMaterial = $_POST['nomeMaterial'];
        $idMaterial = $_POST['idMaterial'];
        $valorPacoteMaterial = $_POST['valorPacoteMaterial'];
        $quantidadeMaterial = $_POST['quantidadeMaterial'];
        $valorUnitarioMaterial = $_POST['valorUnitarioMaterial'];
        // echo $nomeCargo . " " .  $idCargo;

        $stmt = $pdo->prepare('UPDATE tb_material SET nomeMaterial = :nomeMaterial, valorMaterial = :valorMaterial,
        quantidadeMaterial = :quantidadeMaterial,
        valorUnitMaterial =  :valorUnitMaterial WHERE idMaterial = :idMaterial');

       
        $stmt->execute(array(
            ':idMaterial' => $idMaterial,
            ':nomeMaterial' => $nomeMaterial,
            ':valorMaterial' => $valorPacoteMaterial,
            ':quantidadeMaterial' => $quantidadeMaterial,
            ':valorUnitMaterial' => $valorUnitarioMaterial

        ));
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-materiais');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeMaterial'])) {
    editarCargo();
} else {
    echo 'eroo 3';
}
