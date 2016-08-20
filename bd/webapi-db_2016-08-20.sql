-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20/08/2016 às 03:53
-- Versão do servidor: 5.5.45
-- Versão do PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webapi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `id_estado`) VALUES
(1, 'Florianópolis', 24),
(2, 'Balneário Camboriu', 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(2) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `estados`
--

INSERT INTO `estados` (`id`, `sigla`, `nome`) VALUES
(2, 'AL', 'Alagoas'),
(1, 'AC', 'Acre'),
(3, 'AM', 'Amazonas'),
(4, 'AP', 'Amapá'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espírito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MG', 'Minas Gerais'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MT', 'Mato Grosso'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PE', 'Pernambuco'),
(17, 'PI', 'Piauí'),
(18, 'PR', 'Paraná'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RO', 'Rondônia'),
(22, 'RR', 'Roraima'),
(23, 'RS', 'Rio Grande do Sul'),
(24, 'SC', 'Santa Catarina'),
(25, 'SE', 'Sergipe'),
(26, 'SP', 'São Paulo'),
(27, 'TO', 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_cidade` int(11) NOT NULL,
  `privado` tinyint(1) NOT NULL DEFAULT '0',
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `local`, `endereco`, `observacao`, `data`, `id_cidade`, `privado`, `link`) VALUES
(13, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-08-08 10:00:00', 1, 0, ''),
(14, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-08-12 10:00:00', 1, 0, ''),
(15, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-06-19 10:00:00', 1, 0, ''),
(16, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-06-26 10:00:00', 1, 0, ''),
(17, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-07-03 10:00:00', 1, 0, ''),
(18, 'Meditação da Lua Cheia ', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-20 20:00:00', 1, 0, ''),
(19, 'Meditação da Lua Cheia ', 'Campeche', '', 'Riozinho (areia)', '2016-08-20 20:00:00', 1, 0, ''),
(20, 'Meditação da Lua Cheia ', 'Jurerê', '', 'GoSunset (areia)', '2016-07-29 20:00:00', 1, 0, ''),
(21, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-12-04 22:00:00', 1, 1, ''),
(22, 'Happiness Program', 'Jaiguruhouse', '', '', '2016-09-08 02:19:51', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5147'),
(30, 'asdas', '', '', '', '0000-00-00 00:00:00', 0, 10, '2'),
(29, 'asdas', '', '', '', '0000-00-00 00:00:00', 0, 0, '2'),
(31, 'asdas', '', '', '', '0000-00-00 00:00:00', 0, 2, ''),
(32, 'aaa', '', '', '', '0000-00-00 00:00:00', 0, 2, ''),
(33, 'teste', 'teste', 'teste', 'teste', '0000-00-00 00:00:00', 24, 1, ''),
(34, 'sdfsd', 'sdfsd', 'Sdfsd', 'sdfsd', '0000-00-00 00:00:00', 24, 2, NULL),
(37, 'sdfsd', 'sdfsd', 'Sdfsd', 'sdfsd', '0000-00-00 00:00:00', 1, 2, ''),
(36, 'sdfsd', 'sdfsd', 'Sdfsd', 'sdfsd', '0000-00-00 00:00:00', 1, 2, ''),
(38, 'aaa', 'aaa', 'aaa', 'aaa', '2016-08-22 03:00:00', 1, 2, ''),
(39, 'aaa2', 'aaa', 'aaa', 'aaa', '0000-00-00 00:00:00', 1, 2, ''),
(40, 'aaa2', 'aaa', 'aaa', 'aaa', '0000-00-00 00:00:00', 1, 2, ''),
(41, 'aaa2', 'aaa', 'aaa', 'aaa', '2016-08-22 22:00:00', 1, 2, ''),
(42, 'aaa2', 'aaa', 'aaa', 'aaa', '2016-08-22 22:00:00', 1, 2, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista_emails`
--

CREATE TABLE `lista_emails` (
  `email` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=481 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `lista_emails`
--

INSERT INTO `lista_emails` (`email`, `id`) VALUES
('jaigurudev', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'artedeviver', '22666db15e24f78d92613e713610a58034a52204');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lista_emails`
--
ALTER TABLE `lista_emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de tabela `lista_emails`
--
ALTER TABLE `lista_emails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=481;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
