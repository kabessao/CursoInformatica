insert into cliente
(nome, endereco, id_bairro) values
('Jaudislei', 'Rua da mãe juana', 3),
('Juneividson', 'Rua dos Jotas', 2),
('Claudévis', 'Rua dos sei la', 1),
('Murilene', 'Rua do suna suna', 4),
('Habiloaudo', 'Rua do sabão cra cra' 5);

insert into fornecedor
(nome, endereco , numero) values 
('Judineves Inc', 'Rua do suna suna', 9018239012),
('Craudives Ltda', 'Rua da ponte que partil', 0918230123),
('Pirandioca Ltda', 'Rua do oto lado do ba pra la', 098209384),
('Samanthera Software', 'Rua de não sei mais o que', 0131031027),
('Jodislei co' , 'Rua ali da esquina', 81729387123);

insert into produtos
(nome, validade, id_fornecedor) values
('Peperone', '20180-12-05', 2),
('Mussarela', '20180-04-05', 3),
('Quatro queijos menos um', '2018-05-05', 1),
('Não sei', '2018-09-05', 5),
('Chocolate', '2018-01-05', 4);

insert into compra 
(valor, id_produto) values
(3,12.50),
(2,10.30),
(5,9.99),
(1,10.90),
(4,13);

insert into cargo
(nome, descricao) values 
('Cosinheiro', 'Cosinha a bagaça'),
('Faxineiro', 'Limpa a bagaça'),
('Atendente', 'Atende a bagaça');