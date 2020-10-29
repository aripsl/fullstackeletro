-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2020 às 21:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstack`
--
CREATE DATABASE IF NOT EXISTS `fullstack` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fullstack`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `nomecliente` varchar(45) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `produto` varchar(150) NOT NULL,
  `valorunitario` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valortotal` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `nomecliente`, `endereco`, `telefone`, `produto`, `valorunitario`, `quantidade`, `valortotal`) VALUES
(1, 'Ariana Neto de Castro', 'Rua Fava de Lobo 127\r\ncep 03244-80\r\nJd Guairacá\r\nSão Paulo-SP', 22112602, 'Microondas 25 Litros Espelhado Philco 220V', '464.53', 3, '1393.59'),
(2, 'João Pé de Feijão', 'Rua das Borboletas, 13\r\ncep 03244-852\r\nJd Céu\r\nSão Paulo-SP', 26022211, 'Lavadora de Roupas Philco Inverter 12KG', '2179.90', 1, '2179.90');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) NOT NULL,
  `imagem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `descricao`, `preco`, `precofinal`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', '6389.00', '5019.00', 'imagens/geladeira1.jpg'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 litros', '2068.60', '1940.90', 'imagens/geladeira2.jpg'),
(3, 'geladeira', 'Geladeira Frost Free Consul Prata 340 litros', '2911.00', '2069.00', 'imagens/geladeira3.jpg'),
(4, 'fogoes', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', '1209.90', '1129.00', 'imagens/fogao1.jpg'),
(5, 'fogoes', 'Fogão de Piso 4 bocas Atlas Monaco com Acendimento Automático', '609.90', '519.70', 'imagens/fogao2.jpg'),
(6, 'microondas', 'Microondas Consul 32 litros Inox 220V', '580.00', '409.88', 'imagens/micro1.jpg'),
(7, 'microondas', 'Microondas 25 Litros Espelhado Philco 220V', '508.70', '464.53', 'imagens/micro2.jpg'),
(8, 'microondas', 'Forno Microondas Electrolux 20L Branco', '459.00', '436.05', 'imagens/micro3.jpg'),
(9, 'lavalouca', 'Lava-Louça Electrolux Inox 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch', '3599.00', '2799.90', 'imagens/lavalouca1.jpg'),
(10, 'lavalouca', 'Lava-Louça Compacta 8 Serviços Branca 127V Brastemp', '1970.60', '1730.61', 'imagens/lavalouca2.jpg'),
(11, 'lavadoraderoupas', 'Lavadora de Roupas Brastemp 11 kg com Turbo Performance Branca', '1699.00', '1214.10', 'imagens/lavaroupa1.jpg'),
(12, 'lavadoraderoupas', 'Lavadora de Roupas Philco Inverter 12KG', '2399.00', '2179.90', 'imagens/lavaroupa2.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
