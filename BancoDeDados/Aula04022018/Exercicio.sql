CREATE DATABASE IF NOT EXISTS `exercicio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exercicio`;

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `rm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`rm`)
);

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_endereco` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `rm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `rm` (`rm`)
);

DROP TABLE IF EXISTS `fones`;
CREATE TABLE IF NOT EXISTS `fones` (
  `id_fone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `rm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_fone`),
  KEY `rm` (`rm`)
);


ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`rm`) REFERENCES `alunos` (`rm`);

ALTER TABLE `fones`
  ADD CONSTRAINT `fones_ibfk_1` FOREIGN KEY (`rm`) REFERENCES `alunos` (`rm`);
