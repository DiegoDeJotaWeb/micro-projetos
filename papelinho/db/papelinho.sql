CREATE DATABASE papelinho;
-- DROP DATABASE papelinho;
USE papelinho;

CREATE TABLE tb_material(
 idMaterial INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  
 nomeMaterial VARCHAR(255) NOT NULL,  
 valorMaterial DECIMAL(9,2) NOT NULL,
 valorUnitMaterial DECIMAL(9,2) NOT NULL,
 quantidadeMaterial INT
);


INSERT INTO tb_material(nomeMaterial,valorMaterial,valorUnitMaterial,quantidadeMaterial)
VALUES("Folha A4",25.50,1.30,1000);


select * from tb_material;

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


select * from tb_usuario;

CREATE TABLE tb_tarefa
( 
	idTarefa INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  
	tituloTarefa  VARCHAR(255) NOT NULL,
	descricaoTarefa  VARCHAR(255) NOT NULL,
    nivelTarefa  VARCHAR(255) NOT NULL,
    statusTarefa  VARCHAR(255) NOT NULL,
    usuarioId int
 );
 



