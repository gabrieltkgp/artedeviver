
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 13/09/2016 às 02:56:59
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u210765844_1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_cidade` int(11) NOT NULL,
  `privado` tinyint(1) NOT NULL DEFAULT '0',
  `link` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=226 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `local`, `endereco`, `observacao`, `data`, `id_cidade`, `privado`, `link`, `map`) VALUES
(23, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-05 10:00:00', 1, 0, '', NULL),
(24, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-12 10:00:00', 1, 0, '', NULL),
(25, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-19 10:00:00', 1, 0, '', NULL),
(26, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-26 10:00:00', 1, 0, '', NULL),
(27, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-03 10:00:00', 1, 0, '', NULL),
(28, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-10 10:00:00', 1, 0, '', NULL),
(29, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-17 10:00:00', 1, 0, '', NULL),
(30, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-24 10:00:00', 1, 0, '', NULL),
(31, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-07-31 10:00:00', 1, 0, '', NULL),
(32, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-08-07 10:00:00', 1, 0, '', NULL),
(33, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:01', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(34, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:13', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(35, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:17', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(36, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:20', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(37, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:23', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(38, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:27', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(39, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-09-11 20:47:31', 1, 0, '', 'https://www.google.com.br/maps/place/Av.+Jorn.+Rub%C3%A9ns+de+Arruda+Ramos,+4572-5198+-+Centro,+Florian%C3%B3polis+-+SC,+88015-702/@-27.5850001,-48.5490212,18z/data=!4m2!3m1!1s0x9527381a224184ed:0x89b1e43715d58b02'),
(41, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-06-20 20:00:00', 1, 0, '', NULL),
(42, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-07-19 20:00:00', 1, 0, '', NULL),
(43, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-08-18 20:00:00', 1, 0, '', NULL),
(44, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-09-16 20:00:00', 1, 0, '', NULL),
(45, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-10-16 20:00:00', 1, 0, '', NULL),
(46, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-11-14 20:00:00', 1, 0, '', NULL),
(47, 'Meditação da Lua Cheia', '2 Locais: Beira Mar; Jurerê (GoSunset (Areia))', 'Beira Mar (Atrás da estação de tratamento da Casan)', '', '2016-12-13 20:00:00', 1, 0, '', NULL),
(147, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-08-18 20:00:00', 3, 0, '', NULL),
(49, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-13 02:46:27', 1, 1, '', NULL),
(50, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:05', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(51, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:08', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(52, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:11', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(53, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:14', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(54, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:17', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(55, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:20', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(56, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:23', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(57, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:26', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(58, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:29', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(59, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:31', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(60, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:34', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(61, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:36', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(62, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:39', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(63, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:41', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(64, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:45', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(65, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:48', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(66, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-09-11 20:52:51', 1, 1, '', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(211, 'Happiness Program', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', 'Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-09-11 20:53:04', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5441', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(68, 'Ashtavakra Gita Módulo 2', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '14, 16, 17, 20 e 21/06/2016', '2016-09-11 20:53:12', 1, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5081', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(144, 'Happiness Program', 'Stefan Grand Chef', 'Rua Pastor Oswaldo Hesse 1501 - Ribeirão Fresco', 'Qui/Sex/Seg: 19h-22h30; Sáb/Dom: 10h-18h', '2016-09-23 19:00:00', 3, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5084', NULL),
(145, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-06-20 20:00:00', 3, 0, '', NULL),
(160, 'Meditação do Sol', 'Praia do coco (barra norte)', '', '', '2016-09-03 09:00:00', 2, 0, '', NULL),
(159, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-08-18 20:00:00', 2, 0, '', NULL),
(152, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-06-09 19:30:00', 2, 0, '', NULL),
(148, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-09-16 20:00:00', 3, 0, '', NULL),
(149, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-10-16 20:00:00', 3, 0, '', NULL),
(150, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-11-14 20:00:00', 3, 0, '', NULL),
(151, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-12-13 20:00:00', 3, 0, '', NULL),
(158, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-08-07 00:00:00', 2, 0, '', NULL),
(153, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-06-20 20:00:00', 2, 0, '', NULL),
(154, 'Meditação do Sol', 'Parque Natural Raimundo Malta', '', '', '2016-07-03 15:00:00', 2, 0, '', NULL),
(155, 'ArtExcel', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 18 a 22/Julho - 14h às 17h30', '2016-07-18 00:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=4836', NULL),
(156, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-07-19 20:00:00', 2, 0, '', NULL),
(157, 'Yes!', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 21 a 25/Julho', '2016-07-21 00:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=4835', NULL),
(182, 'Meditação do Sol', 'Local e horário a definir', '', '', '2017-03-25 00:00:00', 2, 0, '', NULL),
(180, 'Meditação do Sol', 'Local e horário a definir', '', '', '2017-02-26 09:00:00', 2, 0, '', NULL),
(181, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2017-03-12 20:00:00', 2, 0, '', NULL),
(179, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2017-02-11 00:00:00', 2, 0, '', NULL),
(178, 'Sahaj Samadhi', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 10, 11 e 12/Fev', '2017-02-10 00:00:00', 2, 0, '', NULL),
(177, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '02 à 06/Fev - Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2017-02-02 19:30:00', 2, 0, '', NULL),
(176, 'Yes!', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '26 a 30/Jan', '2017-01-26 00:00:00', 2, 0, '', NULL),
(174, 'Meditação do Sol', 'Local e horário a definir', '', '', '2017-01-22 09:00:00', 2, 0, '', NULL),
(175, 'Art Excel', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '23 a 27/Jan', '2017-01-23 00:00:00', 2, 0, '', NULL),
(173, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2017-01-12 20:00:00', 2, 0, '', NULL),
(172, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-12-13 20:00:00', 2, 0, '', NULL),
(171, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-12-10 09:00:00', 2, 0, '', NULL),
(170, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '01 à 05/Dez - Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-12-01 19:30:00', 2, 0, '', NULL),
(169, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-11-14 20:00:00', 2, 0, '', NULL),
(168, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-11-06 09:00:00', 2, 0, '', NULL),
(167, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-10-16 20:00:00', 2, 0, '', NULL),
(166, 'Sahaj Samadhi', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'Dias 14, 15 e 16 - 19h30 as 22h (sexta) | 10h as 12h (sábado e domingo)', '2016-10-14 19:30:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5584', NULL),
(165, 'Meditação do Sol', 'Local e horário a definir', '', '', '2016-10-08 09:00:00', 2, 0, '', NULL),
(164, 'Happiness Program', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487, Balneário Camboriú - SC', '22 à 26/Set - Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-09-22 19:30:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5283', NULL),
(163, 'Happiness Program Melhor Idade', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487, Balneário Camboriú - SC', '26 à 30/Set - Seg-Sex das 14h às 18h30. Especial para idosos', '2016-09-26 14:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5284', NULL),
(162, 'Meditação da Lua Cheia', 'Praia Central, em frente à rua 2.700', '', '', '2016-09-16 20:00:00', 2, 0, '', NULL),
(161, 'Sri Sri Yoga', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', 'De 03 à 07/Out', '2016-10-03 00:00:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5594', NULL),
(143, 'Arte do Silêncio', 'Montanha Encantada (Garopaba/SC)', 'Rua Luiz Silveira Soares Nº 108 - Garopaba', 'Chegada: Qua 18h-23h - Término: Dom 15h', '2016-09-14 19:30:00', 3, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5342', NULL),
(142, 'Arte do Silêncio', 'Montanha Encantada (Garopaba/SC)', 'Rua Luiz Silveira Soares Nº 108 - Garopaba', 'Chegada: Qua 18h-23h - Término: Dom 15h', '2016-09-14 19:30:00', 2, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5342', NULL),
(140, 'Sahaj Samadhi', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '10/out - 12/out: 19h30 - 22H30', '2016-09-11 20:53:17', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5354', 'https://www.google.com.br/maps/place/Arte+de+Viver+-+Florian%C3%B3polis+-+R.+Osvaldo+Calixto+de+Lima,+79+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-540/@-27.5579835,-48.5061671,17z/data=!4m2!3m1!1s0x9527389d37323093:0x90dff3559993b212'),
(139, 'Happiness Program', 'Hotel Maria do Mar', 'Rodovia João Paulo, 2285\n(João Paulo)', 'Qui/Sex/Seg: 19h30-23h; Sáb/Dom: 10h-18h', '2016-09-11 20:53:38', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5442', 'https://www.google.com.br/maps/place/Maria+do+Mar+Hotel+-+Jo%EF%BF%BDo,+Rodovia+Jo%C3%A3o+Paulo,+2285+-+Jo%C3%A3o+Paulo,+Florian%C3%B3polis+-+SC,+88030-300/@-27.5557357,-48.5091145,16z/data=!4m2!3m1!1s0x9527477d00ae732b:0xd2bcbaa6036deb39'),
(141, 'Arte do Silêncio', 'Montanha Encantada (Garopaba/SC)', 'Rua Luiz Silveira Soares Nº 108 - Garopaba', 'Chegada: Qua 18h-23h - Término: Dom 15h', '2016-09-11 20:54:04', 1, 1, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5342', 'https://www.google.com.br/maps/place/Centro+de+Yoga+Montanha+Encantada+-+Rua+Luiz+Silveira+Soares,+108+-+Encantada,+Garopaba+-+SC,+88495-000/@-28.0602189,-48.6793017,17z/data=!4m2!3m1!1s0x9526d2f5635c2bdf:0x9eb0e21bf77c40b2'),
(146, 'Meditação da Lua Cheia', 'Parque Ramiro Ruediger', '', '', '2016-07-19 20:00:00', 3, 0, '', NULL),
(184, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:17', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(185, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:29', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(186, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:32', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(187, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:34', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(188, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:36', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(189, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:39', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(190, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:41', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(191, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:43', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(192, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:46', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(193, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:48', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(194, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:27', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(195, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:30', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(196, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:23', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(197, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:21', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(198, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:19', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(199, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:17', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(200, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:15', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(201, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:13', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(202, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:11', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(203, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:09', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(204, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:07', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(205, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:05', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(206, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:03', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(207, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:57:00', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(208, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:58', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(209, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:55', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(210, 'Satsang', 'Floreser Desenvolvimento Humano', 'Rua Suíca, 487', '', '2016-09-11 20:56:53', 2, 1, '', 'https://www.google.com.br/maps/place/R.+Su%C3%AD%C3%A7a,+487+-+Na%C3%A7%C3%B5es,+Balne%C3%A1rio+Cambori%C3%BA+-+SC,+Brasil/@-26.9752452,-48.64366,19z/data=!4m2!3m1!1s0x94d8ca1b610f3e4d:0x43d1b53003288544'),
(214, 'Palestra Equilíbrio e Felicidade - Lidando com desafios na era das distrações - com Swami Paramtej', 'Hotel Canasvieiras Internacional', 'Me. Maria Vilac, 2020 - Canasvieiras', '20h - 22h', '2016-09-11 20:54:59', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5653', 'https://www.google.com.br/maps/place/Hotel+Canasvieiras+Internacional+-+HCI+-+R.+Me.+Maria+Vilac,+2020+-+Canasvieiras,+Florian%C3%B3polis+-+SC,+88054-001/@-27.428613,-48.450843,16z/data=!4m2!3m1!1s0x952743a4ead78401:0x5ff42980b677d60f'),
(215, 'Palestra Equilíbrio e Felicidade - Lidando com desafios na era das distrações - com Swami Paramtej', 'Auditório Celhs, Sapiens Park (Florianópolis)', 'Av. Luiz Boiteux Piazza, 1302 - Canasvieiras ', '', '2016-09-14 19:30:00', 2, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5653', NULL),
(216, 'Palestra Equilíbrio e Felicidade - Lidando com desafios na era das distrações - com Swami Paramtej', 'Auditório Celhs, Sapiens Park (Florianópolis)', 'Av. Luiz Boiteux Piazza, 1302 - Canasvieiras ', '', '2016-09-14 19:30:00', 3, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5653', NULL),
(217, 'Meditação com Trilha', 'Trilha do Cambirela', '', '', '2016-10-22 06:30:00', 2, 0, '', NULL),
(218, 'Halloween Arte de Viver', 'Local a definir', '', '', '2016-10-29 20:00:00', 2, 0, '', NULL),
(219, 'América Medita', 'Barra Sul - Horário a definir', '', '', '2016-11-19 00:00:00', 2, 0, '', NULL),
(220, 'Satsang de Final de Ano', 'Local a definir', '', '', '2016-12-03 20:00:00', 2, 0, '', NULL),
(221, 'Meditação com Trilha', 'Local e horário a definir', '', '', '2017-01-14 00:00:00', 2, 0, '', NULL),
(222, 'Meditação com Trilha e SUP', 'Local e horário a definir', '', '', '2017-02-11 00:00:00', 2, 0, '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
