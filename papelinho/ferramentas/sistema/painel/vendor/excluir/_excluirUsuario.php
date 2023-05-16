<?php
// apagar de cargos

function apagarUsuario()
{
    try {
        require_once '../_conexao.php';
        $idUsuarioApagar = $_POST['idUsuarioApagar'];
        echo $idUsuarioApagar;



        $stmt = $pdo->prepare("DELETE FROM tb_usuario WHERE idUsuario = :idUsuarioApagar;");
        $stmt->bindParam(':idUsuarioApagar', $idUsuarioApagar);
        $stmt->execute();
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-usuarios');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idUsuarioApagar'])) {
    apagarUsuario();
} else {
    echo 'eroo 1';
   
}

?>