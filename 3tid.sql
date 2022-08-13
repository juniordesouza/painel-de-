-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/08/2022 às 01:34
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3tid`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela1`
--

CREATE TABLE `tabela1` (
  `idcode` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `dtval` date DEFAULT NULL,
  `qtdat` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tabela1`
--

INSERT INTO `tabela1` (`idcode`, `descricao`, `dtval`, `qtdat`, `valor`) VALUES
(1, 'Banana', '2030-01-10', 262, 30.2),
(2, 'Carro', '2022-01-12', 80, 100000);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabela1`
--
ALTER TABLE `tabela1`
  ADD PRIMARY KEY (`idcode`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela1`
--
ALTER TABLE `tabela1`
  MODIFY `idcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
