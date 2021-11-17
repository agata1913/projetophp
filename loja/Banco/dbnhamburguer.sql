-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2021 às 13:00
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbnhamburguer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acomp`
--

CREATE TABLE `acomp` (
  `idacomp` int(5) NOT NULL,
  `nomeacomp` varchar(30) NOT NULL,
  `precoacomp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebidas`
--

CREATE TABLE `bebidas` (
  `idbebida` int(5) NOT NULL,
  `nomebebida` varchar(30) NOT NULL,
  `precobebida` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `burguer`
--

CREATE TABLE `burguer` (
  `idburguer` int(5) NOT NULL,
  `nomebg` varchar(30) NOT NULL,
  `precobg` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(5) NOT NULL,
  `nomecliente` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nomecliente`, `email`, `senha`) VALUES
(1, 'Ágata', 'agata@gmail.com', '123'),
(2, 'Nuno', 'nuno@gmail.com', '123'),
(3, 'Fânia', 'fania@gmail.com', '123'),
(4, 'Leslye', 'leslye@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `combo`
--

CREATE TABLE `combo` (
  `idcombo` int(5) NOT NULL,
  `idburguer` int(5) NOT NULL,
  `idacomp` int(5) NOT NULL,
  `idbebida` int(5) NOT NULL,
  `idmolho` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `molhos`
--

CREATE TABLE `molhos` (
  `idmolho` int(5) NOT NULL,
  `nomemolho` varchar(30) NOT NULL,
  `precomolho` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(5) NOT NULL,
  `idburguer` int(5) NOT NULL,
  `idcombo` int(5) NOT NULL,
  `idcliente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acomp`
--
ALTER TABLE `acomp`
  ADD PRIMARY KEY (`idacomp`);

--
-- Índices para tabela `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`idbebida`);

--
-- Índices para tabela `burguer`
--
ALTER TABLE `burguer`
  ADD PRIMARY KEY (`idburguer`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`idcombo`),
  ADD UNIQUE KEY `idbebida_fk` (`idbebida`),
  ADD UNIQUE KEY `idmolho_fk` (`idmolho`),
  ADD KEY `idburguer_fk` (`idburguer`),
  ADD KEY `idacomp_fk` (`idacomp`);

--
-- Índices para tabela `molhos`
--
ALTER TABLE `molhos`
  ADD PRIMARY KEY (`idmolho`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idcliente_fk` (`idcliente`),
  ADD KEY `idburger_fk` (`idburguer`),
  ADD KEY `idcombo_fk` (`idcombo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acomp`
--
ALTER TABLE `acomp`
  MODIFY `idacomp` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `idbebida` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `burguer`
--
ALTER TABLE `burguer`
  MODIFY `idburguer` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `combo`
--
ALTER TABLE `combo`
  MODIFY `idcombo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `molhos`
--
ALTER TABLE `molhos`
  MODIFY `idmolho` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
