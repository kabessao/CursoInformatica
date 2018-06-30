create database if not exists pizzaria;
use pizzaria;

drop table if exists cliente;
create table cliente (
    id int primary key auto_increment,
    nome varchar(60),
    endereco varchar(50),
    numero varchar(10),
    id_bairro int

);

drop table if exists fornecedor;
create table fornecedor (
    id int primary key auto_increment,
    nome varchar(30),
    endereco varchar(30),
    numero varchar(10)
    
);

drop table if exists produtos;
create table produtos (
    id int primary key auto_increment,
    nome varchar(30),
    validade date,
    id_fornecedor int
    
);

drop table if exists compra;
create table compra (
    id int primary key auto_increment,
    id_produto int,
    valor float

);

drop table if exists cargo;
create table cargo (
    id int primary key auto_increment,
    nome varchar(30),
    descricao varchar(30)
    
);

drop table if exists estoque;
create table estoque (
	id int primary key auto_increment,
	id_produto int,
	quantidade int
);

drop table if exists  venda;
create table venda (
	id int primary key auto_increment,
	id_produto int,
	id_cliente int,
	id_funcionario int,
        valor float,
	data date
);

drop table if exists funcionario;
create table funcionario (
	id int primary key auto_increment,
	nome varchar(30),
	endereco varchar(50),
	idade int,
	carga_horaria int,
	id_cargo int
);

drop table if exists bairro;
create table bairro (
	id int primary key auto_increment,
	nome varchar(30),
	id_zona int
);

drop table if exists zona;
create table zona (
	id int primary key auto_increment,
	nome varchar(30),
	custo float
);

alter table bairro
	add foreign key (id_zona) references zona (id);

alter table produtos
        add foreign key (id_fornecedor) references fornecedor (id);

alter table funcionario
        add foreign key (id_cargo) references cargo (id);

alter table cliente
        add foreign key (id_bairro) references bairro (id);

alter table compra
        add foreign key (id_produto) references produtos (id);

alter table estoque
        add foreign key (id_produto) references produtos (id);

alter table venda
        add foreign key (id_produto) references produtos (id),
	add foreign key (id_cliente) references cliente (id),
	add foreign key (id_funcionario) references funcionario (id);
	
insert into fornecedor
(nome, endereco , numero) values 
('Judineves Inc', 'Rua do suna suna', 9018239012),
('Craudives Ltda', 'Rua da ponte que partil', 0918230123),
('Pirandioca Ltda', 'Rua do oto lado do ba pra la', 098209384),
('Samanthera Software', 'Rua de não sei mais o que', 0131031027),
('Jodislei co' , 'Rua ali da esquina', 81729387123);

insert into cargo
(nome, descricao) values 
('Cosinheiro', 'Cosinha a bagaça'),
('Faxineiro', 'Limpa a bagaça'),
('Atendente', 'Atende a bagaça');



insert into zona (nome, custo) values
("Norte", 10.00),
("Sul", 15.00),
("Oeste", 32.50),
("Leste", 20.00);

insert into funcionario (nome, endereco, idade, carga_horaria, id_cargo) values
("Josisvaldo", "R. dos Cafundó, 666 - Judas", 69, 8, 3),
("Vanderneivissa", "R. Você achou que eu estava brincando?, 100 - Bed-Stay", 23, 6, 1),
("Clodoaldo", "R. Não é JetBrains, 333 - MSLand", 89, 12, 2),
("Geringustico", "R. Não sei, 23 - Não sei Mesmo", 45, 10, 1);

insert into bairro (nome, id_zona) values
("Ventoland", 2),
("OtakuTown", 1),
("CaetanoBurrolândia", 2),
("Cidade Jardim", 4);


insert into cliente
(nome, endereco, id_bairro) values
('Jaudislei', 'Rua da mãe juana', 3),
('Juneividson', 'Rua dos Jotas', 2),
('Claudévis', 'Rua dos sei la', 1),
('Murilene', 'Rua do suna suna', 4),
('Habiloaudo', 'Rua do sabão cra cra', 2);


insert into produtos
(nome, validade, id_fornecedor) values
('Peperone', '20180-12-05', 2),
('Mussarela', '20180-04-05', 3),
('Quatro queijos menos um', '2018-05-05', 1),
('Não sei', '2018-09-05', 5),
('Chocolate', '2018-01-05', 4);

insert into estoque (id_produto, quantidade) values
(1, 32),
(2, 34),
(3, 21),
(4, 10),
(5, 98);

insert into compra 
(id_produto,valor ) values
(3,12.50),
(2,10.30),
(5,9.99),
(1,10.90),
(4,13);


insert into venda (id_produto, id_cliente, id_funcionario, valor, data) values
(1, 3, 4, 110.23, "2018-06-18"),
(5, 1, 3, 230.30, "2018-06-18"),
(2, 4, 2, 1300.34, "2018-06-18"),
(2, 2, 2, 50.00, "2018-06-18"),
(4, 2, 1, 240.00, "2018-06-18");


select funcionario.nome as funcionario, produtos.nome as produto, cliente.nome as cliente from venda join funcionario,cliente,produtos where produtos.nome='Chocolate';