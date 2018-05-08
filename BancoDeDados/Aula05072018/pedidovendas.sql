CREATE DATABASE if not exists pedidovendas;
USE pedidovendas;

drop table if exists cliente;
CREATE TABLE cliente(
  CODCLI int ,
  NOMECLI varchar(30),
  ENDCLI varchar(40),
  CIDCLI varchar(20),
  CEPCLI char(8),
  UF char(2),
  CNPJ char(15),
  FONE char(10),
  PRIMARY KEY (CODCLI)			);

drop table if exists produto;
 CREATE TABLE produto(
  CODPROD int ,
  DESCRICAO varchar(40),
  UNIDADE char(2),
  VALUNIT decimal(7,2),
  qtd_estoque int,
  PRIMARY KEY (CODPROD)			) ;

drop table if exists vendedor;
CREATE TABLE vendedor (
  CODVEN int ,
  NOMEVEN varchar(30),
  FAIXA char(1),
  SAL_FIXO decimal(7,2),
  PRIMARY KEY (CODVEN)			) ;
  
drop table if exists pedido;  
CREATE TABLE pedido (
  NUMPED int ,
  PRAZO int,
  CODCLI int,
  CODVEN int,
  PRIMARY KEY (NUMPED)			) ;

drop table if exists itempedido;  
CREATE TABLE itempedido (
  ID_ITEM int,
  NUMPED int ,
  CODPROD int ,
  QUANT int,
  PRIMARY KEY (ID_ITEM)	) ;
  
ALTER TABLE itempedido 
	ADD FOREIGN KEY (NUMPED)  REFERENCES pedido (NUMPED),
	ADD FOREIGN KEY (CODPROD) REFERENCES produto (CODPROD);

ALTER TABLE pedido 
	ADD FOREIGN KEY (CODVEN) REFERENCES vendedor (CODVEN),
	ADD FOREIGN KEY (CODCLI) REFERENCES cliente (CODCLI);
  

insert into cliente values
(720,'Ana'      ,'Rua 17 n. 19'          ,'Niterói'       ,'24358310' ,'RJ' ,'12113231/0001-4' ,'32112134'),
(870,'Flávio'   ,'Av. Preso Vargas 10'   ,'São Paulo'     ,'22763931' ,'SP' ,'22534126/9387-9' ,'34214631'),
(110,'Jorge'    ,'Rua Caiapo 13'         ,'Curitiba'      ,'30078500' ,'PR' ,'14512764/9834-9' ,'22332321'),
(222,'Lúcia'    ,'Rua Itabira 123 Loja 9','Belo Horizonte','22124391' ,'MG' ,'28315213/9348-8' ,'34212985'),
(830,'Maurício' ,'Av. Paulista 1236'     ,'São Paulo'     ,'3012683'  ,'SP' ,'32816985/7465-6' ,'23459343'),
(130,'Edmar'    ,'Rua da Praia sn/'      ,'Salvador'      ,'30079300' ,'BA' ,'23463284/2341-9' ,'44327121'),
(410,'Rodolfo'  ,'Largo da Lapa 27'      ,'Rio de Janeiro','30078900' ,'RJ' ,'12835128/2346-9' ,'23227431'),
(20,'Beth'      ,'Av. Climério n. 45'    ,'São Paulo'     ,'25679300' ,'SP' ,'32485126/7326-8' ,'56439280'),
(157,'Paulo'    ,'Tv. Moraes c/3'        ,'Londrina'	  ,''	      ,'PR' ,'32848223/3241-2' ,'32331923'),
(180,'Lívio'    ,'Av. Beira Mar n. 1256' ,'Florianópolis' ,'30077500' ,'SC' ,'12736571/2347-4' ,'65678342'),
(260,'Susana'   ,'Rua Lopes Mendes 12'   ,'Niterói'       ,'30046500' ,'RJ' ,'21763571 /232-9' ,'36762530'),
(290,'Renato'   ,'Rua Meireles n. 123'   ,'São Paulo'     ,'30225900' ,'SP' ,'13276571/1231-4' ,'66741820'),
(390,'Sebastião','Rua da Igreja n. 10'   ,'Uberaba'       ,'30438700' ,'MG' ,'32176547/2131-3' ,'55679071'),
(234,'José'     ,'Quadra 3 b1. 3 sI.1003','Brasília'      ,'22841650' ,'DF' ,'21763576/1232-3' ,'23122931');

insert into vendedor values
(209,'José','C',1800.00),
(111,'Carlos','A',2490.00),
(11,'João','C',2780.00),
(240,'Antônio','C',9500.00),
(720,'Felipe','A',4600.00),	
(213,'Jonas','A',2300.00),
(101,'João','C',2650.00),
(310,'Josias','B',870.00),
(250,'Maurício','B',2930.00);

insert into produto values
(25,'Queijo'	,'K'	,0.97,20),
(31,'Chocolate'	,'BAR'	,0.87,3),
(78,'Vinho'		,'L'	,2.00,5),
(22,'Linho'		,'M'	,0.11,10),
(30,'Açúcar'	,'SAC'	,0.30,2),
(53,'Linha'		,'M'	,1.80,1),
(13,'Ouro'		,'G'	,6.18,33),
(45,'Madeira'	,'M'	,0.25,22),
(87,'Cano'		,'M'	,1.97,12),
(77,'Papel'		,'M'	,1.05,33);

insert into pedido values
(121,20,410,209),
(97,20,720,101),
(101,15,720,101),
(137,20,720,720),
(148,20,720,101),
(189,15,870,213),
(104,30,110,101),
(203,30,830,250),
(98,20,410,209),
(143,30,20,111),
(105,15,180,240),
(111,20,260,240),
(103,20,260,11),
(91,20,260,11),
(138,20,260,11),
(108,15,290,310),
(119,30,390,250),
(127,10,410,11);

insert into itempedido values
(1,121,25,10),
(2,121,31,35),
(3,97,77,20),	
(4,101,31,9),	
(5,101,78,18),
(6,101,13,5),	
(7,98,77,5),
(8,148,45,8),	
(9,148,31,7),	
(10,148,77,3),
(11,148,25,10),
(12,148,78,30),
(13,104,53,32),
(14,203,31,6),	
(15,189,78,45),
(16,143,31,20),
(17,143,78,10),
(18,105,78,10),
(19,111,25,10),
(20,111,78,70),
(21,103,53,37),
(22,91,77,40),	
(23,138,22,10),
(24,138,77,35),
(25,138,53,18),
(26,108,13,17),
(27,119,77,40),
(28,119,13,6),	
(29,119,22,10),
(30,119,53,43),
(31,137,13,8);




