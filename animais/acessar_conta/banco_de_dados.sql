create database acessar_conta;
use acessar_conta;
drop table if exists usuario ;

create table usuario (
	login varchar(20) primary key
    ,senha varchar(200) not null
    ,email varchar(200)
);
