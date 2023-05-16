<?php
echo $_POST['nomeCargo'];
function cadastroCargo()
{
    try {
        require_once '../_conexao.php';
        $nomeCargo = $_POST['nomeCargo'];

      

        $stmt = $pdo->prepare("insert into tb_cargo (nomeCargo) values (:nomeCargo)");
        $stmt->execute(array(
            ':nomeCargo' => $nomeCargo
        ));
        echo $stmt->rowCount();
        header('Location:../_pag.php?pagina=listar-cargos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['nomeCargo'])) {
    cadastroCargo();
} else {
    echo 'eroo 1';
   
}
?>