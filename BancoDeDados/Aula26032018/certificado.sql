create database certificado;
use certificado;

create table ouvinte (
	id_ouvinte int,
	nome varchar(30),
	rh char(9),
	data_nasc date,
	sexo char(1),
	modulo varchar(10),
	premiado varchar(40),
	id_palestra int,
	primary key (id_ouvinte)
);

create table palestra (
	id_palestra int,
	data date, 
	hora time,
	duracao numeric(3,2),
	local varchar(40),
	palestrante varchar(30),
	titulo varchar(20),
	primary key (id_palestra)
);

alter table ouvinte add foreign key (id_palestra) references palestra (id_palestra);
