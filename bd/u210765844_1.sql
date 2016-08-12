
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/06/2016 às 16:29:01
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
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `id_estado`) VALUES
(1, 'Florianópolis', 24),
(2, 'Balneário Camboriu', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(2) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `estados`
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `local`, `endereco`, `observacao`, `data`, `id_cidade`, `privado`, `link`) VALUES
(13, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-06-05 10:00:00', 1, 0, ''),
(14, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-06-12 10:00:00', 1, 0, ''),
(15, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-06-19 10:00:00', 1, 0, ''),
(16, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-06-26 10:00:00', 1, 0, ''),
(17, 'Medita Floripa', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan ', '2016-07-03 10:00:00', 1, 0, ''),
(18, 'Meditação da Lua Cheia ', 'Beira Mar', '', 'Atrás da estação de tratamento da Casan', '2016-06-20 20:00:00', 1, 0, ''),
(19, 'Meditação da Lua Cheia ', 'Campeche', '', 'Riozinho (areia)', '2016-06-20 20:00:00', 1, 0, ''),
(20, 'Meditação da Lua Cheia ', 'Jurerê', '', 'GoSunset (areia)', '2016-06-20 20:00:00', 1, 0, ''),
(21, 'Satsang', 'JGH', 'Osvaldo Calixto Lima (João Paulo)', '', '2016-06-01 20:00:00', 1, 1, ''),
(22, 'Happiness Program', 'Osvaldo Calixto Lima', '', '', '2016-06-16 00:00:00', 1, 0, 'http://www.artedeviver.org.br/atividadedetalhe.php?codturma=5147');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_emails`
--

CREATE TABLE IF NOT EXISTS `lista_emails` (
  `email` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=481 ;

--
-- Extraindo dados da tabela `lista_emails`
--

INSERT INTO `lista_emails` (`email`, `id`) VALUES
('dimbitt@gmail.com                                 ', 2),
('milson_silveira@hotmail.com                       ', 3),
('bmedeiros.angela@gmail.com                        ', 4),
('thaiscmuller@hotmail.com                          ', 5),
('luizbarbejat@hotmail.com                          ', 6),
('lai.csouza@gmail.com                              ', 7),
('katherinenovaes@gmail.com                         ', 8),
('solangedilmacosta@hotmail.com                     ', 9),
('marcoslaffin@gmail.com                            ', 10),
('fernando_hort@hotmail.com                         ', 11),
('daianaaaa@gmail.com                               ', 12),
('maressaqmc@gmail.com                              ', 13),
('douglasmenegazzi@gmail.com                        ', 14),
('rafael.aleixo@gmail.com                           ', 15),
('amnavarro2@hotmail.com                            ', 16),
('ceci_ft@hotmail.com                               ', 17),
('gessimail@gmail.com                               ', 18),
('jo.packer@bravi.com.br                            ', 19),
('mah.bossle@gmail.com                              ', 20),
('monicamgsousa@gmail.com                           ', 21),
('lidilini@live.com                                 ', 22),
('rosanebossle@gmail.com                            ', 23),
('ademarsae@yahoo.com.br                            ', 24),
('rejanebodnar@gmail.com                            ', 25),
('anallopesg@hotmail.com                            ', 26),
('jorge.vilhar@gmail.com                            ', 27),
('marcoantonio.vaz@bol.com.br                       ', 28),
('alinec.ravara@gmail.com                           ', 29),
('aurilourenco@yahoo.com.br                         ', 30),
('patricia_kressin@hotmail.com                      ', 31),
('498aline@gmail.com                                ', 32),
('pedrolenzi.psi@gmail.com                          ', 33),
('karen.altmayer@gmail.com                          ', 34),
('robertacco@gmail.com                              ', 35),
('nathaliabruncosta@gmail.com                       ', 36),
('ad.annadiniz@gmail.com                            ', 37),
('ba.mnt@hotmail.com                                ', 38),
('mariane_dutra30@hotmail.com                       ', 39),
('rodrigo.santos@softplan.com.br                    ', 40),
('ferbresola@yahoo.com.br                           ', 41),
('lukaskock@gmail.com                               ', 42),
('tessa.mccrudden@gmail.com                         ', 43),
('bioliveira80@gmail.com                            ', 44),
('jaqueinline@yahoo.com.br                          ', 45),
('gabriellasvaz@gmail.com                           ', 46),
('miltonbecker@gmail.com                            ', 47),
('jeaninebj@hotmail.com                             ', 48),
('mi.lumini@gmail.com                               ', 49),
('dani.castellain@gmail.com                         ', 50),
('ramon.bozelli@gmail.com                           ', 51),
('julilopes07@yahoo.com.br                          ', 52),
('luana.matos@gmail.com                             ', 53),
('ellen.sezerino@gmail.com                          ', 54),
('paulo.bodnar@ufsc.br                              ', 55),
('vanessa.sc22@gmail.com                            ', 56),
('bruna.evaldt@gmail.com                            ', 57),
('wanderson.socialnet@gmail.com                     ', 58),
('sharlene.melanie@gmail.com                        ', 59),
('acjeffe@hotmail.com                               ', 60),
('mauriciominella@gmail.com                         ', 61),
('fs.udesc@gmail.com                                ', 62),
('fabianosfmartins@yahoo.com.br                     ', 63),
('magda.sprovieri@gmail.com                         ', 64),
('ma.rcsalles@hotmail.com                           ', 65),
('sumondadori@yahoo.com.br                          ', 66),
('gabriel.feitoza88@gmail.com                       ', 67),
('evelynevaz@yahoo.com.br                           ', 68),
('rrsordi@yahoo.com.br                              ', 69),
('marcosepbarbejat@gmail.com                        ', 70),
('mybarbejat@gmail.com                              ', 71),
('barbejat@terra.com.br                             ', 72),
('lucaszanotelli@gmail.com                          ', 73),
('daniel_oliveira079@hotmail.com                    ', 74),
('lisabuka@gmail.com                                ', 75),
('silviaconeglian@terra.com.br                      ', 76),
('suellenlorenci@hotmail.com                        ', 77),
('anamastrogiacomo@gmail.com                        ', 78),
('gruber@ig.com.br                                  ', 79),
('marinagmercadante@gmail.com                       ', 80),
('giseleghisi@hotmail.com                           ', 81),
('laitano.julia@gmail.com                           ', 82),
('myriam.eugenia@hotmail.com                        ', 83),
('isprates@hotmail.com                              ', 84),
('leti.raupp@gmail.com                              ', 85),
('andreia.zampronio@hotmail.com.br                  ', 86),
('lca_transcender@hotmail.com                       ', 87),
('felipe.o@live.com                                 ', 88),
('davi_fonseca@hotmail.com                          ', 89),
('val_s_s@hotmail.com                               ', 90),
('izelli@gmail.com                                  ', 91),
('lariizanella@gmail.com                            ', 92),
('talitaphilippi@gmail.com                          ', 93),
('verdeterra@gmail.com                              ', 94),
('andrejunckes@gmail.com                            ', 95),
('kboabaid@hotmail.com                              ', 96),
('sophia_boabaid@hotmail.com                        ', 97),
('melmatos2@hotmail.com                             ', 98),
('jaquefcunha83@gmail.com                           ', 99),
('silmara1829@hotmail.com                           ', 100),
('gcorreacardoso@gmail.com                          ', 101),
('luutavares@gmail.com                              ', 102),
('liliane19@gmail.com                               ', 103),
('victorjrborges@gmail.com                          ', 104),
('mari_cesa@yahoo.com.br                            ', 105),
('doracb@gmail.com                                  ', 106),
('mmartallegretti@hotmail.com                       ', 107),
('giovana.rolin@yahoo.com                           ', 108),
('lucianealtenburg@gmail.com                        ', 109),
('lenicegrave@gmail.com                             ', 110),
('isadorasc10@gmail.com                             ', 111),
('camila.collato@gmail.com                          ', 112),
('fernanda.mps@gmail.com                            ', 113),
('parrasilva@gmail.com                              ', 114),
('zerbinil@gmail.com                                ', 115),
('arquitetaingrid@gmail.com                         ', 116),
('miriam.baby@ig.com.br                             ', 117),
('lucaskinceler@gmail.com                           ', 118),
('gimartins43@gmail.com                             ', 119),
('lorrainemdm@hotmail.com                           ', 120),
('patriciaarnez@hotmail.com                         ', 121),
('jane.biblio@gmail.com                             ', 122),
('lilaalvares@hotmail.com                           ', 123),
('betakuzolitz@hotmail.com                          ', 124),
('fabiano_salles@hotmail.com                        ', 125),
('festafloripa@gmail.com                            ', 126),
('lukauling@gmail.com                               ', 127),
('raquelalbino@gmail.com                            ', 128),
('mairaosmari@gmail.com                             ', 129),
('icleafm@yahoo.com.br                              ', 130),
('andre@gennera.com.br                              ', 131),
('mariana@advocaciaonline.net                       ', 132),
('paticesa@hotmail.com                              ', 133),
('leticiamattana@outlook.com                        ', 134),
('npzanella@gmail.com                               ', 135),
('gillian@schemes.com.br                            ', 136),
('paula@lupaconstrucao.com.br                       ', 137),
('arimello1225@yahoo.com.br                         ', 138),
('binho.barreiros@gmail.com                         ', 139),
('tlonrupp@gmail.com                                ', 140),
('debastiani1983@gmail.com                          ', 141),
('dudamaria.ms@gmail.com                            ', 142),
('silvia-deschamps@hotmail.com                      ', 143),
('judosreis@hotmail.com                             ', 144),
('pathi_scalco@hotmail.com                          ', 145),
('renatabrose@terra.com.br                          ', 146),
('rosanaideta@yahoo.com.br                          ', 147),
('evolymgpaz@hotmail.com                            ', 148),
('arthur.pdr@gmail.com                              ', 149),
('ricdutra8@yahoo.com.br                            ', 150),
('alinegallois@hotmail.com                          ', 151),
('marilde.mafra@gmail.com                           ', 152),
('danielagarciamesquita@yahoo.com.br                ', 153),
('shahlaco@hotmail.com                              ', 154),
('catarina.mcm@gmail.com                            ', 155),
('faccofloripa@hotmail.com                          ', 156),
('luverdinelli@yahoo.com.br                         ', 157),
('glecifloripa@hotmail.com                          ', 158),
('gian@isopneus.com.br                              ', 159),
('rafael.gutierres@gmail.com                        ', 160),
('iete@hotmail.com                                  ', 161),
('alicewerlang@uol.com.br                           ', 162),
('deise@softplan.com.br                             ', 163),
('amcervo@yahoo.com.br                              ', 164),
('mrmueller@live.com                                ', 165),
('mari.linardi@gmail.com                            ', 166),
('bianozari@yahoo.com.br                            ', 167),
('nawabare@gmail.com                                ', 168),
('deyse06.ferreira@gmail.com                        ', 169),
('locksfabricio@gmail.com                           ', 170),
('lupigs@gmail.com                                  ', 171),
('maura.teodoro@hotmail.com                         ', 172),
('claudiasens@gmail.com                             ', 173),
('pereira.xande@gmail.com                           ', 174),
('patrimili@hotmail.com                             ', 175),
('barbaracavallazzi_@hotmail.com                    ', 176),
('contato@educadoracanina.com.br                    ', 177),
('carolnina.cf@hotmail.com                          ', 178),
('belasielski@gmail.com                             ', 179),
('leonorapp@terra.com.br                            ', 180),
('gisellemerino@gmail.com                           ', 181),
('pati_corti@hotmail.com                            ', 182),
('rlmacedo@gmail.com                                ', 183),
('carolazago@hotmail.com                            ', 184),
('majucanzi@gmail.com                               ', 185),
('melina.ayres@yahoo.com                            ', 186),
('nanprovin@hotmail.com                             ', 187),
('dmitri.aguiar@yahoo.com.br                        ', 188),
('ccsegatto@gmail.com                               ', 189),
('carmela@carmela.com.br                            ', 190),
('joquinhasouza@gmail.com                           ', 191),
('alice.rhoden@gmail.com                            ', 192),
('elisaogliari@gmail.com                            ', 193),
('viana.elaine@gmail.com                            ', 194),
('leticia-thomas@hotmail.com                        ', 195),
('fabianaflorip@gmail.com                           ', 196),
('amanda@softplan.com.br                            ', 197),
('brunoplenzi@gmail.com                             ', 198),
('elaineximeness@gmail.com                          ', 199),
('caroline.cunha@softplan.com.br                    ', 200),
('llbsilva@yahoo.com.br                             ', 201),
('fg.grillo@uol.com.br                              ', 202),
('lecamatosilva@gmail.com                           ', 203),
('bia_althoff@hotmail.com                           ', 204),
('farias.thais@gmail.com                            ', 205),
('fgberton@yahoo.com.br                             ', 206),
('gihselle@gmail.com                                ', 207),
('kenia.pickler@gmail.com                           ', 208),
('pablotgomes@yahoo.com.br                          ', 209),
('jamilenina@msn.com                                ', 210),
('ronaldo.lidio@softplan.com.br                     ', 211),
('felipe70@gmail.com                                ', 212),
('thaiane.santos@softplan.com.br                    ', 213),
('allissonrdias@yahoo.com.br                        ', 214),
('francine.cadore@softplan.com.br                   ', 215),
('carolpeixotocosta@gmail.com                       ', 216),
('fecachapuz@hotmail.com                            ', 217),
('polletflores@yahoo.com.br                         ', 218),
('emiayres@yahoo.com.br                             ', 219),
('rafaeldemenech@gmail.com                          ', 220),
('gabrielarovieira@gmail.com                        ', 221),
('m.moniquesilva@gmail.com                          ', 222),
('mariana_maryhh@hotmail.com                        ', 223),
('felipe.besen@gmail.com                            ', 224),
('ramilarossa@gmail.com                             ', 225),
('adri.carmignan@hotmail.com                        ', 226),
('cristinakuba@gmail.com                            ', 227),
('filipe_dutra27@hotmail.com                        ', 228),
('chcaputo@uol.com.br                               ', 229),
('nessaffgoes@hotmail.com                           ', 230),
('psicassia@gmail.com                               ', 231),
('gallif.karina@gmail.com                           ', 232),
('gismanutri@yahoo.com.br                           ', 233),
('janicemaciel@gmail.com                            ', 234),
('melbellan@yahoo.com                               ', 235),
('raquelnavarrocorretora@gmail.com                  ', 236),
('fernandaferraripsi@gmail.com                      ', 237),
('martins.nilda@gmail.com                           ', 238),
('elisalmg@gmail.com                                ', 239),
('renemacedo@gmail.com                              ', 240),
('naraluizasouza@hotmail.com                        ', 241),
('murilocitadin@hotmail.com                         ', 242),
('lucilialorenzetti@globo.com                       ', 243),
('julia.mdamian@gmail.com                           ', 244),
('murilomichels@yahoo.com.br                        ', 245),
('nessaguesser@hotmail.com                          ', 246),
('lethicia@gdr.adv.br                               ', 247),
('silviacmed@gmail.com                              ', 248),
('thaise@s2arquitetura.com.br                       ', 249),
('luciana.ser@hotmail.com                           ', 250),
('baltazarluciane@homail.com                        ', 251),
('claudia_dietrich@hotmail.com                      ', 252),
('julamim@hotmail.com                               ', 253),
('miwedekin@hotmail.com                             ', 254),
('jbruggemannn@gmail.com                            ', 255),
('ucc2@terra.com.br                                 ', 256),
('mcristina1408@gmail.com                           ', 257),
('analuchese@yahoo.com.br                           ', 258),
('carolghizoni@hotmail.com                          ', 259),
('sandraredatora@gmail.com                          ', 260),
('reserratine@gmail.com                             ', 261),
('ludoc@terra.com.br                                ', 262),
('ziliotto@hotmail.com                              ', 263),
('fabivilain@hotmail.com                            ', 264),
('cassia.scapini@yahoo.com.br                       ', 265),
('rejifp@yahoo.com.br                               ', 266),
('lariprin@yahoo.com                                ', 267),
('lindacdf@hotmail.com                              ', 268),
('bru_pamplona@hotmail.com                          ', 269),
('drb_daniel@hotmail.com                            ', 270),
('francinybartolo@hotmail.com                       ', 271),
('amxcorrea@yahoo.com.br                            ', 272),
('flaviza@gmail.com                                 ', 273),
('lfbahia@yahoo.com.br                              ', 274),
('rabefernanda@gmail.com                            ', 275),
('martin.rodacki@gmail.com                          ', 276),
('depaula.gabrielac@gmail.com                       ', 277),
('farmsimone@hotmail.com                            ', 278),
('marlucialves2010@hotmail.com                      ', 279),
('carlareginaga@gmail.com                           ', 280),
('ohisao@terra.com.br                               ', 281),
('bibixcorrea@hotmail.com                           ', 282),
('greicecadorin@hotmail.com                         ', 283),
('salu_vinteum@hotmail.com                          ', 284),
('beta_redatora@hotmail.com                         ', 285),
('rafa_rozner@hotmail.com                           ', 286),
('luanapeter@yahoo.com.br                           ', 287),
('camilapeter@yahoo.com.br                          ', 288),
('telmalenzi@hotmail.com                            ', 289),
('izabellenda@gmail.com                             ', 290),
('anabiabraz@gmail.com                              ', 291),
('claudia@fisiotecfisioterapia.com.br               ', 292),
('thiagokirst@gmail.com                             ', 293),
('thiagokirst@hotmail.com                           ', 294),
('thissaretta@gmail.com                             ', 295),
('michenunes@yahoo.com.br                           ', 296),
('gfloriano@gmail.com                               ', 297),
('diegoacn@gmail.com                                ', 298),
('juliane@formatec.com.br                           ', 299),
('naccari@gmail.com                                 ', 300),
('flores1228@gmail.com                              ', 301),
('vanflo311@gmail.com                               ', 302),
('satiananda2014@gmail.com                          ', 303),
('rr.raisarocha@gmail.com                           ', 304),
('felipe.couto75@gmail.com                          ', 305),
('nathalie.cardone@gmail.com                        ', 306),
('mariane.cultura@gmail.com                         ', 307),
('jianiehues@hotmail.com                            ', 308),
('veralu60@hotmail.com                              ', 309),
('ivania.fabiola.de.souza@gmail.com                 ', 310),
('arena.daniel@gmail.com                            ', 311),
('ribeiroolucass@gmail.com                          ', 312),
('alinep06@gmail.com                                ', 313),
('fmc.coelho@gmail.com                              ', 314),
('maryannesilva.c@gmail.com                         ', 315),
('cycyne@yahoo.com                                  ', 316),
('nataliacfa@hotmail.com                            ', 317),
('fabiopina@yahoo.com                               ', 318),
('muniz.jn@gmail.com                                ', 319),
('fatima@lpgadvogados.com.br                        ', 320),
('lucasgalli.lgf@gmail.com                          ', 321),
('denizzi2002@hotmail.com                           ', 322),
('alicehb_eel@yahoo.com.br                          ', 323),
('danivictorbicudo@gmail.com                        ', 324),
('dinaracosta@hotmail.com                           ', 325),
('marinapauloarq@gmail.com                          ', 326),
('maabosse@gmail.com                                ', 327),
('estevao@treeintelligence.com                      ', 328),
('elisilva.2801@gmail.com                           ', 329),
('marcieleberger@gmail.com                          ', 330),
('estevaohbottini@gmail.com                         ', 331),
('lfazzani@mpsc.mp.br                               ', 332),
('angeladilmacosta@hotmail.com                      ', 333),
('cris.rosauro@gmail.com                            ', 334),
('jcrotti@gmail.com                                 ', 335),
('raquelnts@gmail.com                               ', 336),
('abreu.clarisse@gmail.com                          ', 337),
('anapaula@outgraf.com                              ', 338),
('weyderbarros@gmail.com                            ', 339),
('cristinahauser.trainer@gmail.com                  ', 340),
('aleminieri@hotmail.com                            ', 341),
('silvia.yanase@hotmail.com                         ', 342),
('fernanda_felizola@hotmail.com                     ', 343),
('movemontanhas@gmail.com                           ', 344),
('michelefrasson@hotmail.com                        ', 345),
('crisrosauro@gmail.com                             ', 346),
('oyamapaulo@yahoo.com                              ', 347),
('iuanareus@gmail.com                               ', 348),
('vrindakunjadd@gmail.com                           ', 349),
('jvelasco@ciasc.sc.gov.br                          ', 350),
('plamim@gmail.com                                  ', 351),
('danny.nosdaterra@gmail.com                        ', 352),
('sisvfontes@gmail.com                              ', 353),
('katiamayer@gmail.com                              ', 354),
('grazinha1@yahoo.com                               ', 355),
('dhauser@ohchr.org.gt                              ', 356),
('ma.santosvieira@gmail.com                         ', 357),
('gerilopes@hotmail.com                             ', 358),
('gezinha@terra.com.br                              ', 359),
('tulne@dataa.com.br                                ', 360),
('giu.costa15@gmail.com                             ', 361),
('brunomaya_r@hotmail.com                           ', 362),
('mckassessoria@terra.com.br                        ', 363),
('tatijunkes@hotmail.com                            ', 364),
('isamir.carvalho@gmail.com                         ', 365),
('silviosaad@ecoeacao.com.br                        ', 366),
('roselysayon@yahoo.com.br                          ', 367),
('isabela_delmondes@hotmail.com                     ', 368),
('familiademinas@hotmail.com                        ', 369),
('suelen.ufsc@gmail.com                             ', 370),
('leonardo.asv@gmail.com                            ', 371),
('daniewchagas@yahoo.com.br                         ', 372),
('pedroarantescecilio@gmail.com                     ', 373),
('elizadeasouza@gmail.com                           ', 374),
('clovis@garapuvu.com.br                            ', 375),
('piresluciane@uol.com.br                           ', 376),
('thales.rfonseca@gmail.com                         ', 377),
('elizangela_r@hotmail.com                          ', 378),
('diegocordovez@gmail.com                           ', 379),
('mila-milene@hotmail.com                           ', 380),
('marirollin@hotmail.com                            ', 381),
('gabecoelho@gmail.com                              ', 382),
('gabighisii@gmail.com                              ', 383),
('sresantos@yahoo.com.br                            ', 384),
('alessandrobordon@gmail.com                        ', 385),
('juliapm12@gmail.com                               ', 386),
('laislagos@gmail.com                               ', 387),
('gilberto.hidroponia@hotmail.com                   ', 388),
('aliceconstante@gmail.com                          ', 389),
('marcia_munaretto@hotmail.com                      ', 390),
('juliaaamarina@hotmail.com                         ', 391),
('noedealmeida@bol.com.br                           ', 392),
('fernandamassambani@gmail.com                      ', 393),
('diogobtesche@gmail.com                            ', 394),
('bernardo@estudiomezanino.com.br                   ', 395),
('knihsschirlei@gmail.com                           ', 396),
('renata.goncalves.rocha@gmail.com                  ', 397),
('calegari.adm@gmail.com                            ', 398),
('raizaterra@gmail.com                              ', 399),
('ticiana_s@hotmail.com                             ', 400),
('elisafloripainvestments@gmail.com                 ', 401),
('ellfloripa@yahoo.com.br                           ', 402),
('buenotelles@uol.com.br                            ', 403),
('fernandavscosta@yahoo.com.br                      ', 404),
('kuhnencamila@gmail.com                            ', 405),
('elisalf@yahoo.com.br                              ', 406),
('dannysol@ig.com.br                                ', 407),
('luvieiraa@gmail.com                               ', 408),
('fernandahlima@hotmail.com                         ', 409),
('rosimilia@yahoo.com.br                            ', 410),
('miriantorquato@gmail.com                          ', 411),
('pmariasantos@yahoo.com.br                         ', 412),
('mmarioaga@gmail.com                               ', 413),
('somaviel@hotmail.com                              ', 414),
('faslluz@yahoo.com.br                              ', 415),
('alexandre.a.montenegro@gmail.com                  ', 416),
('ltsobreiro@gmail.com                              ', 417),
('janainatmar@gmail.com                             ', 418),
('amellone2@hotmail.com                             ', 419),
('marciahcorrea@hotmail.com                         ', 420),
('patricia.imprensa@gmail.com.br                    ', 421),
('danprile@hotmail.com                              ', 422),
('lucianahervoso@gmail.com                          ', 423),
('ingridvictor@gmail.com                            ', 424),
('haugustoas@gmail.com                              ', 425),
('felipe@deieno.com.br                              ', 426),
('andresfssa@hotmail.com                            ', 427),
('mckassessoria@UOL.COM.BR                          ', 428),
('ffalpert@gmail.com                                ', 429),
('priv_ramos@hotmail.com                         ', 430),
('anamartassena@gmail.com                        ', 431),
('marlitebinka1@gmail.com                        ', 432),
('gabiguislote21@hotmail.com                     ', 433),
('iedamrosa@hotmail.com                          ', 434),
('brenoquaresma@hotmail.com                      ', 435),
('kadrizeelisabeth@gmail.com                     ', 436),
('elisa.lorper@gmail.com                         ', 437),
('marisafk82@hotmail.com                         ', 438),
('maralucosta@gmail.com                          ', 439),
('ka.appel@gmail.com                             ', 440),
('brunamichelin@live.com                         ', 441),
('turatto_filho@hotmail.com                      ', 442),
('gabrielafaccin@gmail.com                       ', 443),
('isabelbader@gmail.com                          ', 444),
('monalisazanol@gmail.com                        ', 445),
('fraguasnz@gmail.com                            ', 446),
('fbschmitt@hotmail.com                          ', 447),
('eunice@artezanallemoveis.com.br                ', 448),
('vinicius_tomazi@hotmail.com                    ', 449),
('leandrowieira@gmail.com                        ', 450),
('fabertocco@hotmail.com                         ', 451),
('leandro@soulcozinhadefesta.com.br              ', 452),
('diana_abrao@yahoo.com.br                       ', 453),
('simonekit@hotmail.com                          ', 454),
('gustavo@soulcozinhadefesta.com.br              ', 455),
('andressa.gaboardi3@gmail.com                   ', 456),
('inesfusinato@gmail.com                         ', 457),
('quelimoura@hotmail.com                         ', 458),
('nicole_lpf@hotmail.com                         ', 459),
('thaispro@gmail.com                             ', 460),
('alineradloff@gmail.com                         ', 461),
('clausiaregina@hotmail.com                      ', 462),
('assessoria.marcinho@gmail.com                  ', 463),
('heerjuver@gmail.com                            ', 464),
('beteorsi@hotmail.com                           ', 465),
('bruna.orsimota@hotmail.com                     ', 466),
('vinicio.senhorini@gmail.com                    ', 467),
('ariana.jornal@gmail.com                        ', 468),
('loenep@hotmail.com                             ', 469),
('lilian_nogara@hotmail.com                      ', 470),
('adv.simonegirotto@gmail.com                    ', 471),
('reipert.aline@gmail.com                        ', 472),
('mariananeves.mkt@gmail.com                     ', 473),
('karla_spezia@hotmail.com                       ', 474),
('sheriffedm@gmail.com                           ', 475),
('abicondoa@gmail.com                            ', 476),
('janaisa.carlini@gmail.com                      ', 477),
('mariana@marianarussi.com.br                    ', 478),
('micheli.denez@gmail.com                        ', 479),
('gabrieltkgp@gmail.com', 480);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'artedeviver', '22666db15e24f78d92613e713610a58034a52204');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;