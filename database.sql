-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2022 às 15:47
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cdpes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` int(13) NOT NULL,
  `empresa` varchar(60) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `telefone`, `empresa`, `idCliente`) VALUES
(1, 'Nome1', 'email@gm.com', 93, 'empresa', 123),
(2, 'Amiraldo', 'amiraldo@ufopa.edu.br', 93, 'empresa', 123),
(3, 'Amiraldo', 'amiraldo@ufopa.edu.br', 93, 'empresa', 123),
(4, 'Savo Jungkook', 'savo@gmail.com', 93, 'IPERMEMO', 123),
(5, 'Ramom', 'god@email.com', 93, 'Playstation2', 123),
(6, 'Jarlisson a máquina', 'brabo@gmail.com', 93, 'Casa das prima', 123),
(7, 'Lorenzo', 'italiano@gmail.com', 93, 'Dentista mafioso', 123),
(8, 'Lucas Heliab', 'lucas@email.com', 93, 'Programadores com Alzaimer', 123),
(9, 'Jheickson', 'perfect@email.com', 93, 'Plágio da Steam', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
