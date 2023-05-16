<?php
// apagar de cargos

function apagarTarefa()
{
    try {
        require_once '../_conexao.php';
        $idTarefaApagar = $_POST['idTarefaApagar'];
        echo $idTarefaApagar;



        $stmt = $pdo->prepare("DELETE FROM tb_tarefa WHERE idTarefa = :idTarefaApagar;");
        $stmt->bindParam(':idTarefaApagar', $idTarefaApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=home');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idTarefaApagar'])) {
    apagarTarefa();
} else {
    echo 'eroo 1';
   
}

?>