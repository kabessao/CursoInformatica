-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: dbenquete
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

CREATE DATABASE IF NOT EXISTS dbenquete;

USE dbenquete;

DROP TABLE IF EXISTS `games`;

CREATE TABLE `games` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `jogo` varchar(50) DEFAULT NULL,
  `sugestao` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
codigo int primary key auto_increment,
nome varchar(50),
email varchar(50),
senha varchar(100)
);

LOCK TABLES `games` WRITE;

UNLOCK TABLES;



show databases;

