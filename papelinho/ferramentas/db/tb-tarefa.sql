-- INSERT INTO tb_tarefa(tituloTarefa,descricaoTarefa,usuarioId)
-- values("Titulo da tarefa","Descrição da tarefa",1);

SELECT * FROM tb_tarefa;

UPDATE tb_tarefa SET statusTarefa = 0 WHERE idTarefa = 1;