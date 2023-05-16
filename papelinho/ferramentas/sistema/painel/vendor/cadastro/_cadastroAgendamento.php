<?php
print_r($_POST);


// echo "<br>";
// echo $horaId;
// echo "<br>";
// echo $statusAgendamento;
// echo "<br>";
// echo $servicoId;
// echo "<br>";
// echo $clienteId;
// echo "<br>";
// echo $usuarioId;
// echo "<br>";
// echo $data;
// echo "<br>";
// echo $tipo;
// echo "<br>";
function cadastroAgendamento()
{
    try {  
        require_once '../_conexao.php';
       
        $horaId = 2;
        $statusAgendamento = 'agendado';
        $servicoId = $_POST['servico'];
        $tipo = $_POST['tipo'];
        $data = $_POST['data'];
        $clienteId = 1;
        $usuarioId = $_POST['user'];
        

        $stmt = $pdo->prepare("insert into tb_agendamento (statusAgendamento, horaId, servicoId, tipoAgendamento, dataAgendamento, clienteId, usuarioId) values (:statusAgendamento, :horaId, :servicoId, :tipoAgendamento, :dataAgendamento, :clienteId, :usuarioId)");
        $stmt->execute(array(
            ':statusAgendamento' => $statusAgendamento,
            ':tipoAgendamento' => $tipo,          
            ':dataAgendamento' => $data,          
            ':horaId' => $horaId,          
            ':servicoId' => $servicoId,
            ':clienteId' => $clienteId,
            ':usuarioId' => $usuarioId

        ));
        echo $stmt->rowCount();
        // header('Location:../_pag.php?pagina=listar-agendamentos');
    } catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['tipo'])) {
    cadastroAgendamento();
} else {
    echo 'eroo 1';
   
}
?>