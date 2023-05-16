<?php
require_once "./conexao.php";
$servico = $_POST['servico'];

// $query1 = $pdo->query("SELECT * FROM tb_hora WHERE quantidadeHora = 3");

$query1 = $pdo->query("SELECT horarioHoraEntrada,horarioHoraSaida FROM tb_agendamento 
JOIN tb_usuario ON usuarioId = idUsuario
JOIN tb_servico ON servicoId = idServico
JOIN tb_hora ON horaServico = quantidadeHora
where tb_servico.horaServico = tb_hora.quantidadeHora AND horaId != idHora AND tb_servico.idServico = $servico;");
// $query1 = $pdo->query("SELECT *
// FROM tb_servico
// INNER JOIN tb_hora ON tb_servico.horaServico = tb_hora.quantidadeHora where tb_servico.idServico = $servico");
// $query1 = $pdo->query("SELECT *
// FROM tb_servico
// INNER JOIN tb_hora ON tb_servico.idServico=tb_hora.quantidadeHora where tb_servico.idServico = $servico");



while ($linha = $query1->fetch(PDO::FETCH_ASSOC)) {
   $linhas[]= $linha;
// $linhas =  "<option value='{$linha['horarioHoraEntrada']} - {$linha['horarioHoraSaida']}'>{$linha['horarioHoraEntrada']} - {$linha['horarioHoraSaida']}</option>";
}


$resposta = array();
$resposta['tipoServico'] = $servico;
// $resposta['queryServicoHorario'] = $linhas;
$resposta['queryServicoHorario'] = $linhas;

echo json_encode($resposta);
?>