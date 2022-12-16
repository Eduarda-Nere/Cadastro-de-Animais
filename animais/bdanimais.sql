create database cadastro;
use cadastro;
create table animal (
	id serial not null primary key,
    tipo varchar(10),
    nome varchar(20) not null,
    raca varchar(20) not null,
    sexo varchar(1)
);

insert into animal (tipo, nome, raca, sexo) values ('Cachorro','Pipoca', 'Golden', 'M');
insert into animal (tipo, nome, raca, sexo) values ('Gato','Dexter', 'Persa', 'M');