-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19/01/2017 às 00:49
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
(2, 'Balneário Camboriu', 24),
(3, 'Blumenau', 24);

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
  `link` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `id_tipo_evento` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=243 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `local`, `endereco`, `observacao`, `data`, `id_cidade`, `privado`, `link`, `map`, `id_tipo_evento`) VALUES
(23, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-12-30 09:00:00', 1, 0, '', NULL, 0),
(24, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2017-03-31 10:00:00', 1, 0, '', NULL, 0),
(25, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-19 10:00:00', 1, 0, '', NULL, 0),
(26, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-26 10:00:00', 1, 0, '', NULL, 0),
(27, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-03 10:00:00', 1, 0, '', NULL, 0),
(28, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-10 10:00:00', 1, 0, '', NULL, 0),
(29, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-17 10:00:00', 1, 0, '', NULL, 0),
(30, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-24 10:00:00', 1, 0, '', NULL, 0),
(31, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-31 10:00:00', 1, 0, '', NULL, 0),
(32, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-08-07 10:00:00', 1, 0, '', NULL, 0),
(33, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:01', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(34, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:13', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(35, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:17', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(36, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:20', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(37, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:23', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(38, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:27', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(39, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:31', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02', 0),
(41, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-06-20 20:00:00', 1, 0, '', NULL, 0),
(42, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-07-19 20:00:00', 1, 0, '', NULL, 0),
(43, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-08-18 20:00:00', 1, 0, '', NULL, 0),
(44, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-09-16 20:00:00', 1, 0, '', NULL, 0),
(45, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', 'aaaaa', '2016-10-16 08:00:00', 1, 0, '', '', 0),
(231, 'teste', 'teste', '', '', '0000-00-00 00:00:00', 2, 2, '', '', 0),
(47, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', 'aaaa23aa', '2016-12-13 20:00:00', 1, 0, '', '', 0),
(147, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-08-18 20:00:00', 3, 0, '', NULL, 0),
(49, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-12-13 01:46:27', 1, 1, '', NULL, 0),
(50, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:05', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(51, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:08', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(52, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:11', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(53, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:14', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(54, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:17', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(55, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:20', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(56, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:23', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(57, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:26', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(58, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:29', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(59, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:31', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(60, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:34', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(61, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:36', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(62, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:39', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(63, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:41', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(64, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:45', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(65, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:48', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(66, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:51', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(211, 'Happiness Program', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', 'Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-09-11 20:53:04', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5441', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(68, 'Ashtavakra Gita Módulo 2', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '14, 16, 17, 20 e 21/06/2016', '2016-09-11 20:53:12', 1, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5081', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(144, 'Happiness Program', 'Stefan Grand Chef', 'Rua Pastor Oswaldo Hesse 1501 - Ribeirão Fresco', 'Qui/Sex/Seg: 19h-22h30; Sáb/Dom: 10h-18h', '2016-09-23 19:00:00', 3, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5084', NULL, 0),
(145, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-06-20 20:00:00', 3, 0, '', NULL, 0),
(160, 'Meditação do Sol', 'Praia do coco (barra norte)', '', '', '2016-09-03 09:00:00', 2, 0, '', NULL, 0),
(159, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-08-18 20:00:00', 2, 0, '', NULL, 0),
(152, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-06-09 19:30:00', 2, 0, '', NULL, 0),
(148, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-09-16 20:00:00', 3, 0, '', NULL, 0),
(149, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-10-16 20:00:00', 3, 0, '', NULL, 0),
(150, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-11-14 20:00:00', 3, 0, '', NULL, 0),
(151, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-12-13 20:00:00', 3, 0, '', NULL, 0),
(158, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-08-07 00:00:00', 2, 0, '', NULL, 0),
(153, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-06-20 20:00:00', 2, 0, '', NULL, 0),
(154, 'Meditação do Sol', 'Parque Natural Raimundo Malta', '', '', '2016-07-03 15:00:00', 2, 0, '', NULL, 0),
(155, 'ArtExcel', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 18 a 22/Julho - 14h às 17h30', '2016-07-18 00:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=4836', NULL, 0),
(156, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-07-19 20:00:00', 2, 0, '', NULL, 0),
(157, 'Yes!', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 21 a 25/Julho', '2016-07-21 00:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=4835', NULL, 0),
(182, 'Meditação do Sol', 'Local e horário a definir', '', '', '2017-03-25 00:00:00', 2, 0, '', NULL, 0),
(180, 'Meditação do Sol', 'Local e horário a definir', '', '', '2017-02-26 09:00:00', 2, 0, '', NULL, 0),
(181, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2017-03-12 20:00:00', 2, 0, '', NULL, 0),
(179, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2017-02-11 00:00:00', 2, 0, '', NULL, 0),
(178, 'Sahaj Samadhi', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 10, 11 e 12/Fev', '2017-02-10 00:00:00', 2, 0, '', NULL, 0),
(177, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '02 à 06/Fev - Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2017-02-02 19:30:00', 2, 0, '', NULL, 0),
(176, 'Yes!', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '26 a 30/Jan', '2017-01-26 00:00:00', 2, 0, '', NULL, 0),
(174, 'Meditação do Sol', 'Local e horário a definir', '', '', '2017-01-22 09:00:00', 2, 0, '', NULL, 0),
(175, 'Art Excel', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '23 a 27/Jan', '2017-01-23 00:00:00', 2, 0, '', NULL, 0),
(173, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2017-01-12 20:00:00', 2, 0, '', NULL, 0),
(172, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-12-13 20:00:00', 2, 0, '', NULL, 0),
(171, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-12-10 09:00:00', 2, 0, '', NULL, 0),
(170, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '01 à 05/Dez - Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-12-01 19:30:00', 2, 0, '', NULL, 0),
(169, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-11-14 20:00:00', 2, 0, '', NULL, 0),
(168, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-11-06 09:00:00', 2, 0, '', NULL, 0),
(167, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-10-16 20:00:00', 2, 0, '', NULL, 0),
(166, 'Sahaj Samadhi', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 14, 15 e 16 - 19h30 as 22h (sexta) | 10h as 12h (sábado e domingo)', '2016-10-14 19:30:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5584', NULL, 0),
(165, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-10-08 09:00:00', 2, 0, '', NULL, 0),
(164, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487, Balneário Camboriú - SC', '22 à 26/Set - Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-09-22 19:30:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5283', NULL, 0),
(163, 'Happiness Program Melhor Idade', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487, Balneário Camboriú - SC', '26 à 30/Set - Seg-Sex das 14h às 18h30. Especial para idosos', '2016-09-26 14:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5284', NULL, 0),
(162, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-09-16 20:00:00', 2, 0, '', NULL, 0),
(161, 'Sri Sri Yoga', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'De 03 à 07/Out', '2016-10-03 00:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5594', NULL, 0),
(143, 'Arte do Silêncio', 'Montanha Encantada (Garopaba/SC)', 'Rua Luiz Silveira Soares Nº 108 - Garopaba', 'Chegada: Qua 18h-23h - Término: Dom 15h', '2016-09-14 19:30:00', 3, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5342', NULL, 0),
(142, 'Arte do Silêncio', 'Montanha Encantada (Garopaba/SC)', 'Rua Luiz Silveira Soares Nº 108 - Garopaba', 'Chegada: Qua 18h-23h - Término: Dom 15h', '2016-09-14 19:30:00', 2, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5342', NULL, 0),
(140, 'Sahaj Samadhi', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '10/out - 12/out: 19h30 - 22H30', '2016-09-11 20:53:17', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5354', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212', 0),
(139, 'Happiness Program', 'Hotel Maria do Mar', 'Rodovia João Paulo, 2285\n(João Paulo)', 'Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-09-11 20:53:38', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5442', 'https://www.google.com.br/maps/place/Maria+do+Mar+Hotel+-+Jo%EF%BF%BDo,+Rodovia+Jo%C3%A3o+Paulo,+2285+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-300/@-27.5557357,-48.5091145,16z/data=!4m2!3m1!1s0x9527477d00ae732b:0xd2bcbaa6036deb39', 0),
(141, 'Arte do Silêncio', 'Montanha Encantada (Garopaba/SC)', 'Rua Luiz Silveira Soares Nº 108 - Garopaba', 'Chegada: Qua 18h-23h - Término: Dom 15h', '2016-09-11 20:54:04', 1, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5342', 'https://www.google.com.br/maps/place/Centro+de+Yoga+Montanha+Encantada+-+Rua+Luiz+Silveira+Soares,+108+-+Encantada,+Garopaba+-+SC,+88495-000/@-28.0602189,-48.6793017,17z/data=!4m2!3m1!1s0x9526d2f5635c2bdf:0x9eb0e21bf77c40b2', 0),
(146, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-07-19 20:00:00', 3, 0, '', NULL, 0),
(184, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:17', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(185, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:29', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(186, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:32', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(187, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:34', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(188, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:36', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(189, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:39', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(190, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:41', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(191, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:43', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(192, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:46', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(193, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:48', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(194, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:27', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(195, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:30', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(196, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:23', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(197, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:21', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(198, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:19', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(199, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:17', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(200, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:15', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(201, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:13', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(202, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:11', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(203, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:09', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(204, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:07', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(205, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:05', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(206, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:03', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(207, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:00', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(208, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:58', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(209, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:55', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(210, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:53', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544', 0),
(214, 'Palestra Equilíbrio e Felicidade - Lidando com desafios na era das distrações - com Swami Paramtej', 'Hotel Canasvieiras Internacional', 'Me. Maria Vilac, 2020 - Canasvieiras', '20h - 22h', '2016-09-11 20:54:59', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5653', 'https://www.google.com.br/maps/place/Hotel+Canasvieiras+Internacional+-+HCI+-+R.+Me.+Maria+Vilac,+2020+-+Canasvieiras,+Florian%C3%B3polis+-+SC,+88054-001/@-27.428613,-48.450843,16z/data=!4m2!3m1!1s0x952743a4ead78401:0x5ff42980b677d60f', 0),
(215, 'Palestra Equilíbrio e Felicidade - Lidando com desafios na era das distrações - com Swami Paramtej', 'Auditório Celhs, Sapiens Park (Florianópolis)', 'Av. Luiz Boiteux Piazza, 1302 - Canasvieiras ', '', '2016-09-14 19:30:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5653', NULL, 0),
(216, 'Palestra Equilíbrio e Felicidade - Lidando com desafios na era das distrações - com Swami Paramtej', 'Auditório Celhs, Sapiens Park (Florianópolis)', 'Av. Luiz Boiteux Piazza, 1302 - Canasvieiras ', '', '2016-09-14 19:30:00', 3, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5653', NULL, 0),
(217, 'Meditação com Trilha', 'Trilha do Cambirela', '', '', '2016-10-22 06:30:00', 2, 0, '', NULL, 0),
(218, 'Halloween Arte de Viver', 'Local a definir', '', '', '2016-10-29 20:00:00', 2, 0, '', NULL, 0),
(219, 'América Medita', 'Barra Sul - Horário a definir', '', '', '2016-11-19 00:00:00', 2, 0, '', NULL, 0),
(220, 'Satsang de Final de Ano', 'Local a definir', '', '', '2016-12-03 20:00:00', 2, 0, '', NULL, 0),
(221, 'Meditação com Trilha', 'Local e horário a definir', '', '', '2017-01-14 00:00:00', 2, 0, '', NULL, 0),
(222, 'Meditação com Trilha e SUP', 'Local e horário a definir', '', '', '2017-02-11 00:00:00', 2, 0, '', NULL, 0),
(232, 'teste', 'teste', '', '', '0000-00-00 00:00:00', 1, 2, '', '', 0),
(233, 'teste', 'teste', '', '', '0000-00-00 00:00:00', 1, 2, '', '', 0),
(227, 'aaaaaa', 'aaaa', 'aaa', 'aaaa', '2016-10-27 00:22:00', 2, 2, 'aaa', 'aaa', 0),
(228, '', '', '', '', '0000-00-00 00:00:00', 2, 2, '', '', 0),
(229, 'teste', 'teste', 'teste', 'teste', '2016-11-04 20:00:00', 2, 1, 'aaa', 'aaa', 0),
(235, 'teste', 'teste', '', '', '2016-11-02 20:00:00', 2, 2, '', '', 0),
(238, 'teste', 'teste', 'teste', 'teste', '0000-00-00 00:00:00', 2, 2, '', '', 0),
(241, 'teste', 'teste', 'teste', '', '2017-01-27 20:00:00', 2, 0, '', '', NULL),
(242, 'teste2adas', 'testeasdsa', 'testeasdas', '', '2017-01-27 20:00:00', 2, 1, '', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista_emails`
--

CREATE TABLE `lista_emails` (
  `email` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `lista_emails`
--

INSERT INTO `lista_emails` (`email`, `id`) VALUES
('jaigurudev', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_evento`
--

CREATE TABLE `tipo_evento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tipo_evento`
--

INSERT INTO `tipo_evento` (`id`, `descricao`) VALUES
(1, 'meditação'),
(2, 'satsang');

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
-- Índices de tabela `tipo_evento`
--
ALTER TABLE `tipo_evento`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT de tabela `lista_emails`
--
ALTER TABLE `lista_emails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de tabela `tipo_evento`
--
ALTER TABLE `tipo_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
