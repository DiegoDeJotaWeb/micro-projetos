INSERT INTO tb_agendamento  (statusAgendamento,tipoAgendamento,dataAgendamento,dataParaAgendamento,horaId,servicoId,clienteId,usuarioId)
VALUES("agendado","Adulto",CURDATE(),"2022-12-25",1,1,1,1);

SELECT * FROM tb_agendamento 
JOIN tb_usuario ON usuarioId = idUsuario
JOIN tb_servico ON servicoId = idServico
JOIN tb_hora ON horaId = idHora
JOIN tb_cliente ON clienteId = 1;

SELECT horarioHoraEntrada,horarioHoraSaida, idHora FROM tb_agendamento 
JOIN tb_servico ON servicoId = idServico
JOIN tb_hora ON horaServico = quantidadeHora
where tb_servico.horaServico = tb_hora.quantidadeHora  and idHora != 1;


-- AND tb_servico.idServico = 2 AND horaId != idHora
SELECT horarioHoraEntrada,horarioHoraSaida FROM tb_agendamento 
JOIN tb_usuario ON usuarioId = idUsuario
JOIN tb_servico ON servicoId = idServico
JOIN tb_hora ON horaServico = quantidadeHora
where tb_servico.horaServico = tb_hora.quantidadeHora & horaId != idHora;
-- horaServico
SELECT *
FROM tb_servico

INNER JOIN tb_hora ON tb_servico.horaServico = tb_hora.quantidadeHora 

where tb_servico.idServico = 1;
-- WHERE marks_details.practical = '50';

SELECT * FROM tb_agendamento ;