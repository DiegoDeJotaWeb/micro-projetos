<?php
// require_once "./conexao.php";
// cadastro de cargos


function cadastroCliente()
{
    try {
        require_once 'conexao.php';
        $nomeCliente = $_POST['nomeCliente'];
        echo $nomeCliente;
        // $dataCliente = $_POST['dataCliente'];
        $telefoneCliente = $_POST['telefoneCliente'];
        echo $telefoneCliente;
        $emailCliente = $_POST['emailCliente'];
        echo $emailCliente;
        $representanteCliente = $_POST['representanteCliente'];
        echo $representanteCliente;
        $imagemCliente = $_POST['imagemCliente'];
        echo $imagemCliente;
        $descricaoCliente = $_POST['descricaoCliente'];
        echo $descricaoCliente;
        $stmt = $pdo->prepare("insert into cliente (nomeCliente,dataCliente,telefoneCliente,emailCliente,representanteCliente,imagemCliente,descricaoCliente) values (:nomeCliente,NOW(),:telefoneCliente,:emailCliente,:representanteCliente,:imagemCliente,:descricaoCliente)");
        $stmt->execute(array(
            ':nomeCliente' => $nomeCliente,
            // ':dataCliente' => $dataCliente,
            ':telefoneCliente' => $telefoneCliente,
            ':emailCliente' => $emailCliente,
            ':representanteCliente' => $representanteCliente,
            ':imagemCliente' => $imagemCliente,
            ':descricaoCliente' => $descricaoCliente
        ));
        echo $stmt->rowCount();
        header('Location:pag.php?pagina=listar-cliente');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeCliente'])) {
    cadastroCliente();
} else {
    echo 'eroo 1';
}

// apagar de cargos

