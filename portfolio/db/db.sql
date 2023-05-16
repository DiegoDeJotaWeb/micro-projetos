create database portfolioDiego;
-- drop database portfolioDiego;
use portfolioDiego;

CREATE TABLE users(
		idUsers int primary key auto_increment,
		nomeUsers varchar(50),
        emailUsers varchar(50),
        fotoUsers varchar(50),
        senhaUsers varchar(50),
        senhaCripUsers varchar(50)
);

CREATE TABLE projeto(
		idProjeto int primary key auto_increment,
		linkDetalhesProjeto varchar(50),
		dataProjeto date,
		linkExternoProjeto varchar(50),
		tituloProjeto varchar(20),
		textoProjeto varchar(400),
        capaProjeto varchar(50),
        img2Projeto varchar(50),
        img3Projeto varchar(50),
        categoriaId int,
        clienteId int        
 );
 
 CREATE TABLE categoria(
		idCategoria int primary key auto_increment,
		nomeCategoria varchar(50)		
 );
 
 CREATE TABLE cliente(
		idCliente int primary key auto_increment,
		nomeCliente varchar(50),
        dataCliente date,
        telefoneCliente varchar(50),
        emailCliente varchar(50),
        imagemCliente varchar(50)
		
 );


