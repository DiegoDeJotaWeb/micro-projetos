<?php
// apagar de cargos

function apagarServico()
{
    try {
        require_once '../_conexao.php';
        $idServicoApagar = $_POST['idServicoApagar'];
        echo $idServicoApagar;



        $stmt = $pdo->prepare("DELETE FROM tb_servico WHERE idServico = :idServicoApagar;");
        $stmt->bindParam(':idServicoApagar', $idServicoApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-servicos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idServicoApagar'])) {
    apagarServico();
} else {
    echo 'eroo 1';
   
}

?>