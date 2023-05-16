<?php
function cadastroMaterial()
{
    try {
        require_once '../_conexao.php';
        $nomeMaterial = $_POST['nomeMaterial'];
        $valorMaterial = $_POST['valorPacoteMaterial'];
        $valorUnitMaterial = $_POST['quantidadeMaterial'];
        $quantidadeMaterial = $_POST['valorUnitarioMaterial'];

      

        $stmt = $pdo->prepare("insert into tb_material (nomeMaterial,valorMaterial,valorUnitMaterial,quantidadeMaterial) values (:nomeMaterial,:valorMaterial,:valorUnitMaterial,:quantidadeMaterial)");
        $stmt->execute(array(
            ':nomeMaterial' => $nomeMaterial,
            ':valorMaterial' => $valorMaterial,
            ':valorUnitMaterial' => $valorUnitMaterial,
            ':quantidadeMaterial' => $quantidadeMaterial
        ));
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-materiais');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeMaterial'])) {
    cadastroMaterial();
} else {
    echo 'eroo 1';
   
}
?>