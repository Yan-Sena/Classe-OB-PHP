mysql -u root -p

drop database cadastro;

create database cadastro;

use cadastro;


CREATE TABLE clientes(

Codigo int null,
Nome varchar(100),
Email varchar(100),
CPF int null,
Sexo varchar(20),
Usuario varchar(100),
Senha varchar(100),
primary key(Codigo)

);







