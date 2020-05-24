-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2020 às 14:25
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `endereco`, `numero`, `telefone`, `email`, `usuario`, `senha`) VALUES
(4, 'emerson rodrigues gonÃ§alves', 'Frei Luiz de Souza', 2077777, '31998402112', 'eme.erg99@gmail.com', 'emerson.erg99@gmail.com', 123),
(6, 'dfdf', 'dfd', 3, '31998402112', 'emerson.erg99@gmail.com', 'df', 202),
(7, 'erer', 'eere', 54, '3136652603', 'emerson.erg99@gmail.com', 'f', 0),
(8, 'ff', 'htgh', 87, '31998402112', 'emerson.erg99@gmail.com', 'fdf', 0),
(9, 'ere', 'fdf', 54, '3136652603', 'emerson.erg99@gmail.com', 'df', 35),
(10, '', '', 5, 'd', 'd@d.com', 'ff', 0),
(11, 'dfd', 'fdfd', 8, 'dfdfd', 'emerson.erg99@gmail.com', 'fdfd', 1),
(12, '', '', 0, '', '', '', 0),
(13, '', '', 0, '', '', '', 0),
(14, 'teste', 'teste', 85, '3136652603', 'teste@teste.com', 'b@B', 202),
(15, 'k', 'kkk2', 7, '366454544', 'r@r.com', 'r', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
