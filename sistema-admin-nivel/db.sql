create table admin(
idAdmin int primary key auto_increment,
nomeAdmin varchar(255),
cpfAdmin varchar(255),
emailAdmin varchar(255),
descricaoAdmin varchar(255),
senhaAdmin varchar(255),
fotoAdmin varchar(255)
);

select * from admin;

select * from admin where (emailAdmin = 'digital@digitalspacesw.com.br') and senhaAdmin = '$2b$06$6a6ca1cf4e92635e494fbOYWf6xjI7Jxwi7qjgUx1LjzLfgEVj9ju';
select * from admin where (emailAdmin = 'digital@digitalspacesw.com.br') and senhaAdmin = '$2b$06$6a6ca1cf4e92635e494fbOYWf6xjI7Jxwi7qjgUx1LjzLfgEVj9ju'
-- drop table admin;