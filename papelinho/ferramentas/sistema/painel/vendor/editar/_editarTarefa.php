<?php
 require_once './../_conexao.php';
if ($_POST['checado'] == 1) {

    $stmt = $pdo->prepare("UPDATE tb_tarefa SET statusTarefa = 1 WHERE idTarefa = '".$_POST['statusTarefaCheck']."'");

    $stmt->execute();

   
    
    } else {
    
        $stmt =  $pdo->prepare("UPDATE tb_tarefa SET statusTarefa = 0 WHERE idTarefa = '".$_POST['statusTarefaCheck']."'");

        $stmt->execute();

     
    
 }

// function editarCargo()
// {
//     try {
//         require_once './../_conexao.php';
//         $nomeCargo = $_POST['nomeCargo'];
//         $idCargo = $_POST['idCargo'];
//         // echo $nomeCargo . " " .  $idCargo;

//         $stmt = $pdo->prepare('UPDATE tb_cargo SET nomeCargo = :nomeCargo WHERE idCargo = :idCargo');

       
//         $stmt->execute(array(
//             ':idCargo' => $idCargo,
//             ':nomeCargo' => $nomeCargo

//         ));
//         echo $stmt->rowCount();
//         header('Location:../_pag.php?pagina=listar-cargos');
//     } catch (PDOException $e) {
//         echo 'erro ' . $e->getMessage();
//     }
// }

// if (isset($_POST['nomeCargo'])) {
//     editarCargo();
// } else {
//     echo 'eroo 3';
// }

?>