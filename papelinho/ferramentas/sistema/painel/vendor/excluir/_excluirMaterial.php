<?php
// apagar de cargos

function apagarMaterial()
{
    try {
        require_once '../_conexao.php';
        $idMaterialApagar = $_POST['idMaterialApagar'];
       



        $stmt = $pdo->prepare("DELETE FROM tb_material WHERE idMaterial = :idMaterialApagar;");
        $stmt->bindParam(':idMaterialApagar', $idMaterialApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-materiais');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idMaterialApagar'])) {
    apagarMaterial();
} else {
    echo 'eroo 1';
   
}

?>