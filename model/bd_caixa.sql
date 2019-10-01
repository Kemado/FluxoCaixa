-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01-Out-2019 às 11:59
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_caixa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(4) NOT NULL AUTO_INCREMENT,
  `desc_cliente` varchar(35) NOT NULL,
  `email_cliente` varchar(35) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_modificacao` date NOT NULL,
  `ativo` int(1) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `desc_cliente`, `email_cliente`, `data_cadastro`, `data_modificacao`, `ativo`) VALUES
(1, 'Cliente', 'cliente@email.com', '2019-10-01', '2019-10-01', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_lancamento`
--

DROP TABLE IF EXISTS `itens_lancamento`;
CREATE TABLE IF NOT EXISTS `itens_lancamento` (
  `id_lancamento` int(11) NOT NULL,
  `id_tipo_lancamento` int(4) NOT NULL,
  `id_cliente` int(4) NOT NULL,
  `valor_item` decimal(5,2) NOT NULL,
  `desconto_item` decimal(5,2) NOT NULL,
  `sub_total` decimal(5,2) NOT NULL,
  `valor_pago` decimal(5,2) NOT NULL,
  `valor_total` decimal(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

DROP TABLE IF EXISTS `lancamentos`;
CREATE TABLE IF NOT EXISTS `lancamentos` (
  `id_lancamento` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(4) NOT NULL,
  `id_tipo_lancamento` int(4) NOT NULL,
  `data_modificacao` date NOT NULL,
  `aberto` int(1) NOT NULL,
  PRIMARY KEY (`id_lancamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_lancamento`
--

DROP TABLE IF EXISTS `tipo_lancamento`;
CREATE TABLE IF NOT EXISTS `tipo_lancamento` (
  `id_tipo_lancamento` int(4) NOT NULL AUTO_INCREMENT,
  `desc_lancamento` varchar(35) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_modificacao` date NOT NULL,
  `ativo` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_lancamento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_lancamento`
--

INSERT INTO `tipo_lancamento` (`id_tipo_lancamento`, `desc_lancamento`, `data_cadastro`, `data_modificacao`, `ativo`) VALUES
(1, 'Entrada', '2019-10-01', '2019-10-01', 1),
(2, 'Saida', '2019-10-01', '2019-10-01', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(4) NOT NULL AUTO_INCREMENT,
  `login_usuario` varchar(35) NOT NULL,
  `senha_usuario` varchar(35) NOT NULL,
  `desc_usuario` varchar(35) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_modificacao` date NOT NULL,
  `ativo` int(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login_usuario`, `senha_usuario`, `desc_usuario`, `data_cadastro`, `data_modificacao`, `ativo`) VALUES
(1, 'funcionario01', '11223344', 'funcionario1', '2019-10-01', '2019-10-01', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
