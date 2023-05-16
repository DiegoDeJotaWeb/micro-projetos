INSERT INTO tb_hora(horarioHoraEntrada,horarioHoraSaida,quantidadeHora,statusHora)
VALUES
(080000,090000,1,"Ativo"),
(090000,100000,1,"Ativo"),
(100000,110000,1,"Ativo"),
(110000,120000,1,"Ativo"),
(120000,130000,1,"Ativo"),
(130000,140000,1,"Ativo"),
(140000,150000,1,"Ativo"),
(150000,160000,1,"Ativo"),
(160000,170000,1,"Ativo"),
(170000,180000,1,"Ativo")
;

INSERT INTO tb_hora(horarioHoraEntrada,horarioHoraSaida,quantidadeHora,statusHora)
VALUES
(080000,100000,2,"Ativo"),
(100000,120000,2,"Ativo"),
(120000,140000,2,"Ativo"),
(140000,160000,2,"Ativo"),
(160000,180000,2,"Ativo")
;


INSERT INTO tb_hora(horarioHoraEntrada,horarioHoraSaida,quantidadeHora,statusHora)
VALUES
(080000,110000,3,"Ativo"),
(110000,140000,3,"Ativo"),
(140000,170000,3,"Ativo")
;

INSERT INTO tb_hora(horarioHoraEntrada,horarioHoraSaida,quantidadeHora,statusHora)
VALUES
(080000,120000,4,"Ativo"),
(120000,160000,4,"Ativo")
;

SELECT quantidadeHora FROM tb_hora;

SELECT * FROM tb_hora WHERE quantidadeHora = 4;

SELECT * FROM tb_hora WHERE quantidadeHora = 4;
