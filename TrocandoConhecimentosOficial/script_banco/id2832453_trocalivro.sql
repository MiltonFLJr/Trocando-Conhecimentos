-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/09/2017 às 17:31
-- Versão do servidor: 10.1.26-MariaDB
-- Versão do PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cdUsuario` varchar(500) NOT NULL,
  `cpfUsuario` varchar(500) NOT NULL,
  `rgUsuario` varchar(500) NOT NULL,
  `nomeUsuario` varchar(500) NOT NULL,
  `dtNascimento` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `nomeMae` varchar(500) NOT NULL,
  `nomePai` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `senha` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`cdUsuario`, `cpfUsuario`, `rgUsuario`, `nomeUsuario`, `dtNascimento`, `telefone`, `endereco`, `nomeMae`, `nomePai`, `email`, `senha`) VALUES
('asdasd', 'asdsad', 'asdasdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', 'asdasd', 'asdasdasd', 'asdasdasd', NULL),
('asdfsdaf', 'asdfsdaf', 'asdfsdaf', 'asdfsadf', 'asdfsadf', 'asdfasdf', 'asdfsdaf', 'sdfsdf', 'asdfsdaf', 'asdfsadf', 'sadfsdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
