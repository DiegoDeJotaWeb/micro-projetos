create database secao;
use secao;

create table admin(
idAdmin int primary key auto_increment,
nomeAdmin varchar(255),
cpfAdmin varchar(255),
emailAdmin varchar(255),
descricaoAdmin varchar(255),
senhaAdmin varchar(255),
senhaCripAdmin varchar(255),
fotoAdmin varchar(255)
);

select * from admin;
drop table admin;

create database criptografia;

use criptografia;

create table tbl_acessos(
idusuario int primary key auto_increment,
usuario varchar(255),
senha varchar(255)
);

select * from tbl_acessos;
