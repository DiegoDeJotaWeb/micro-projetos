<?php
   

function cadastroTarefa()
{
    try {
        require_once '../_conexao.php';
        $tituloTarefa = $_POST['tituloTarefa'];
        $descricaoTarefa = $_POST['descricaoTarefa'];
        $usuarioId = $_POST['usuarioId'];
        $nivelTarefa = $_POST['nivelTarefa'];
        $statusTarefa = $_POST['statusTarefa'];

        print_r($_POST);
      

        $stmt = $pdo->prepare("insert into tb_tarefa (tituloTarefa,descricaoTarefa,usuarioId,nivelTarefa,statusTarefa) values (:tituloTarefa,:descricaoTarefa,:usuarioId,:nivelTarefa,:statusTarefa )");
        $stmt->execute(array(
            ':tituloTarefa' => $tituloTarefa,
            ':descricaoTarefa' => $descricaoTarefa,
            ':usuarioId' => $usuarioId,
            ':nivelTarefa' => $nivelTarefa,
            ':statusTarefa' => $statusTarefa,
        ));
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=home');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['tituloTarefa'])) {
    cadastroTarefa();
} else {
    echo 'eroo 1';
   
}
?>