CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `escola`;

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(25) DEFAULT NULL,
  `cargahoraria_curso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(20) DEFAULT NULL,
  `id_prof_disc` int(11) DEFAULT NULL,
  `ch_disciplina` int(11) DEFAULT NULL,
  `id_modulo_disc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_disciplina`),
  KEY `id_modulo_disc` (`id_modulo_disc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `modulo`;
CREATE TABLE IF NOT EXISTS `modulo` (
  `id_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_modulo` varchar(20) DEFAULT NULL,
  `ch_modulo` int(11) DEFAULT NULL,
  `id_curso_mod` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_modulo`),
  KEY `id_curso_mod` (`id_curso_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `disciplina`
  ADD FOREIGN KEY (`id_modulo_disc`) REFERENCES `modulo` (`id_modulo`);

ALTER TABLE `modulo`
  ADD FOREIGN KEY (`id_curso_mod`) REFERENCES `curso` (`id_curso`);
