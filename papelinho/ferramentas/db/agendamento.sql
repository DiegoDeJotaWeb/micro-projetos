CREATE DATABASE agendaDigitalSpace;
-- DROP DATABASE agendaDigitalSpace;
USE agendaDigitalSpace;

CREATE TABLE tb_servico 
( 
 idServico INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  
 nomeServico VARCHAR(255) NOT NULL,  
 valorServico DECIMAL(9,2) NOT NULL,  
 capaServico VARCHAR(255)NOT NULL,  
 descricaoServico VARCHAR(255) NOT NULL ,
 horaServico  int
); 

CREATE TABLE tb_hora 
( 
 idHora INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  
 horarioHoraEntrada TIME , 
  horarioHoraSaida TIME , 
 quantidadeHora INT,  
 statusHora VARCHAR(255) 
); 


CREATE TABLE tb_agendamento 
( 
 idAgendamento INT PRIMARY KEY AUTO_INCREMENT,
 statusAgendamento VARCHAR(50),
 tipoAgendamento varchar(10),
 dataAgendamento date,
 dataParaAgendamento date,
 horaId INT NOT NULL,  
 servicoId INT NOT NULL,  
 clienteId INT NOT NULL,  
 usuarioId INT NOT NULL

); 



CREATE TABLE tb_cliente 
( 
 idCliente INT PRIMARY KEY AUTO_INCREMENT,  
 nomeCliente VARCHAR(255) NOT NULL,  
 emailCliente VARCHAR(255) NOT NULL,  
 celularCliente VARCHAR(255) NOT NULL,  
 loginCliente VARCHAR(255) NOT NULL,  
 senhaCliente VARCHAR(255) NOT NULL
); 



CREATE TABLE tb_cargo
( 
 idCargo INT PRIMARY KEY AUTO_INCREMENT NOT NULL,   
 nomeCargo varchar(50)
 );



CREATE TABLE tb_usuario
( 
 idUsuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,   
 
 nomeUsuario  VARCHAR(255) NOT NULL, 
dtNascimentoUsuario  date NOT NULL, 
cpfUsuario  VARCHAR(255) NOT NULL, 
rgUsuario  VARCHAR(255) NOT NULL, 
emailUsuario  VARCHAR(255) NOT NULL, 
telefoneUsuario  VARCHAR(255) NOT NULL, 
celularUsuario  VARCHAR(255) NOT NULL, 
dtAdmissaoUsuario  date NOT NULL, 
cargoUsuario  VARCHAR(255) NOT NULL, 
adminUsuario VARCHAR(255) NOT NULL, 
bancoUsuario VARCHAR(255) NOT NULL, 
tipoContaUsuario VARCHAR(255) NOT NULL, 
contaUsuario VARCHAR(255) NOT NULL,
agenciaUsuario VARCHAR(255) NOT NULL,
pixUsuario VARCHAR(255) NOT NULL, 
cepUsuario VARCHAR(255) NOT NULL, 
enderecoUsuario VARCHAR(255) NOT NULL, 
bairroUsuario VARCHAR(255) NOT NULL, 
cidadeUsuario VARCHAR(255) NOT NULL, 
fotoUsuario VARCHAR(255) NOT NULL, 
senhaUsuario VARCHAR(255) NOT NULL, 
observacaoUsuario VARCHAR(255) NOT NULL
); 






CREATE TABLE tb_tarefa
( 
	idTarefa INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  
	tituloTarefa  VARCHAR(255) NOT NULL,
	descricaoTarefa  VARCHAR(255) NOT NULL,
    nivelTarefa  VARCHAR(255) NOT NULL,
    statusTarefa  VARCHAR(255) NOT NULL,
    usuarioId int
 );
 


-- ALTER TABLE tb_agendamento ADD FOREIGN KEY(horaId) REFERENCES tb_hora (horaId);
-- ALTER TABLE tb_agendamento ADD FOREIGN KEY(servicoId) REFERENCES tb_servico (servicoId);
-- ALTER TABLE tb_agendamento ADD FOREIGN KEY(clienteId) REFERENCES tb_cliente (clienteId);
-- ALTER TABLE tb_agendamento ADD FOREIGN KEY(profissionalId) REFERENCES tb_profissional (profissionalId);



