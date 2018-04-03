create database escola;
use escola;

create table curso(
	id_curso int auto_increment,
	nome_curso varchar(25),
	cargahoraria_curso int,
	primary key(id_curso)
);

create table modulo(
	id_modulo int auto_increment,
	nome_modulo varchar(20),
	ch_modulo int,
	id_curso_mod int,
	primary key(id_modulo)
);

create table disciplina(
	id_disciplina int auto_increment,
	nome_disciplina varchar(20),
	id_prof_disc int,
	ch_disciplina int,
	id_modulo_disc int,
	primary key(id_disciplina)
);

alter table modulo add foreign key (id_curso_mod) references curso(id_curso);
alter table disciplina add foreign key (id_modulo_disc) references modulo(id_modulo);
