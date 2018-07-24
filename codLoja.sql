create database lojamaiji;

use lojamaiji;

create table produto(
idLivro INT auto_increment,
nomelivro varchar(60),
precolivro double(10,2),
categorialivro varchar(20),
descricao varchar(500),
img varchar(100),
primary key(idLivro)
);


create table usuario(
idCliente INT auto_increment,
nome varchar(60),
sobrenome varchar(60),
dia varchar(2),
mes varchar(2),
ano varchar(4),
cpf varchar(20),
telefone varchar(15),
email varchar(30),
sexo varchar(60),
senha varchar(20),
confsenha varchar(20),
tipo varchar(2),
primary key(idCliente)
) ENGINE = MyISAM;

create table compra(
id int auto_increment,
quantidade int(100),
modo varchar(20),
cartao varchar(20),
cep int(20),
estado varchar(20),
cidade varchar(20),
rua varchar(30),
bairro varchar(20),
ncasa INT(10),
primary key(id)
);




