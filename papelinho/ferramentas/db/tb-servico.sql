INSERT INTO tb_servico  (nomeServico,valorServico,descricaoServico,horaServico)values("Corte",50.10,"Apenas uma descrição do serviço",1);
SELECT * FROM tb_servico;

INSERT INTO tb_servico  (nomeServico,valorServico,descricaoServico,horaServico)values("Pintura",80.00,"Apenas uma descrição do serviço",2);
SELECT * FROM tb_servico;

SELECT *
FROM tb_servico
INNER JOIN tb_hora ON tb_servico.idServico=tb_hora.quantidadeHora where tb_servico.horaServico = 1;

SELECT *
FROM tb_servico
INNER JOIN tb_hora ON tb_servico.horaServico = tb_hora.quantidadeHora where tb_servico.idServico = 3;

SELECT *
FROM tb_servico;

-- tb_servico.horaServico = tb_hora.quantidadeHora



SELECT *
FROM tb_servico
INNER JOIN tb_hora ON tb_servico.idServico=tb_hora.quantidadeHora where tb_servico.idServico = "";