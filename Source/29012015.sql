-- --------------------------------------------------------
-- Servidor:                     mysql.scripting.com.br
-- Versão do servidor:           5.5.40-log - Source distribution
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela scripting02.catalogo
DROP TABLE IF EXISTS `catalogo`;
CREATE TABLE IF NOT EXISTS `catalogo` (
  `id_catalogo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '0',
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `userid` varchar(50) NOT NULL DEFAULT '0',
  `arquivo` varchar(100) NOT NULL DEFAULT 'padrao.jpg',
  PRIMARY KEY (`id_catalogo`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela scripting02.catalogo: ~15 rows (aproximadamente)
DELETE FROM `catalogo`;
/*!40000 ALTER TABLE `catalogo` DISABLE KEYS */;
INSERT INTO `catalogo` (`id_catalogo`, `email`, `nome`, `userid`, `arquivo`) VALUES
	(11, 'npp@dominio.com.br', '', 'um.nome@gmail.com', 'padrao.jpg'),
	(12, 'um.nome@gmail.com', '', 'um.nome@gmail.com', 'padrao.jpg'),
	(13, 'npp@dominio.com.br', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(14, 'ezequiel.mmmmk@gmail.com', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(15, 'andrewielki.php@gmail.com', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(16, '666.schneider@gmail.com\r', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(17, 'financeiro.mmmmk@gmail.com\r', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(18, 'felipe.mmmmk@gmail.com\r', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(19, 'tatiane.mmmmk@gmail.com\r', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(20, 'caixa.mmmmk@gmail.com\r', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(21, 'rma.mmmmk@gmail.com', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(25, 'andreeeemachado@gmail.com', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(28, 'xpp@gmail.com', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(29, 'loremipsum.p@gmail.com', '', 'npp@dominio.com.br', 'padrao.jpg'),
	(30, 'felipejoaot@bol.com.br', '', 'npp@dominio.com.br', 'padrao.jpg');
/*!40000 ALTER TABLE `catalogo` ENABLE KEYS */;


-- Copiando estrutura para tabela scripting02.remetente
DROP TABLE IF EXISTS `remetente`;
CREATE TABLE IF NOT EXISTS `remetente` (
  `id_remetente` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `remetente` varchar(50) NOT NULL,
  PRIMARY KEY (`id_remetente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scripting02.remetente: ~5 rows (aproximadamente)
DELETE FROM `remetente`;
/*!40000 ALTER TABLE `remetente` DISABLE KEYS */;
INSERT INTO `remetente` (`id_remetente`, `userid`, `login`, `senha`, `remetente`) VALUES
	(1, 'npp@dominio.com.br', 'loremipsum.p@gmail.com', 'empty00!', 'lorem@ipsum.com.br'),
	(1155, 'alex.mmmmk@gmail.com', 'loremipsum.p@gmail.com', 'empty00!', 'lorem@ipsum.com.br'),
	(4591, 'npp@dominio.com.br', 'um.nome@gmail.com', 'mmmmk1500xp3', 'promocao@registrosativos.com.br'),
	(6984, 'um.nome@gmail.com', 'um.nome@gmail.com', 'mmmmk1500xp3', 'promocao@registrosativos.com.br'),
	(9404, 'um.nome@gmail.com', 'loremipsum.p@gmail.com', 'empty00!', 'lorem@ipsum.com.br');
/*!40000 ALTER TABLE `remetente` ENABLE KEYS */;


-- Copiando estrutura para tabela scripting02.sent
DROP TABLE IF EXISTS `sent`;
CREATE TABLE IF NOT EXISTS `sent` (
  `id_email` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) DEFAULT 'Fila',
  `userid` varchar(50) DEFAULT NULL,
  `id_remetente` int(11) DEFAULT NULL,
  `metodo` varchar(50) DEFAULT NULL,
  `destinatario` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `datanovo` date DEFAULT NULL,
  `dataenviado` datetime DEFAULT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB AUTO_INCREMENT=544 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scripting02.sent: ~52 rows (aproximadamente)
DELETE FROM `sent`;
/*!40000 ALTER TABLE `sent` DISABLE KEYS */;
INSERT INTO `sent` (`id_email`, `status`, `userid`, `id_remetente`, `metodo`, `destinatario`, `empresa`, `site`, `datanovo`, `dataenviado`) VALUES
	(492, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'ANDRE M', NULL, '2015-01-07', NULL),
	(493, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'ANDRE M', NULL, '2015-01-07', NULL),
	(494, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'ANDRE M', NULL, '2015-01-07', NULL),
	(495, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'A', NULL, '2015-01-07', NULL),
	(496, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'A', NULL, '2015-01-07', NULL),
	(497, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(498, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(499, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(500, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(501, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(502, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(503, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(504, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(505, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(506, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(507, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(508, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(509, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(510, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(511, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(512, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(513, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(514, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(515, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(516, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(517, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(518, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(519, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'loremipsum.p@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(520, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'loremipsum.p@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(521, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(522, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(523, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(524, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(525, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(526, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(527, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(528, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'loremipsum.p@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(529, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'felipejoaot@bol.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(530, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com\r', 'UM NOME', NULL, '2015-01-07', NULL),
	(531, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(532, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(533, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(534, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'xpp@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(535, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'loremipsum.p@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(536, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'loremipsum.p@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(537, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'loremipsum.p@gmail.com\r', 'UM NOME', NULL, '2015-01-07', NULL),
	(538, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'felipejoaot@bol.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(539, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(540, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(541, 'ENVIADO', 'um.nome@gmail.com', 6984, 'Hospedagem', 'um.nome@gmail.com', 'UM NOME', NULL, '2015-01-07', NULL),
	(542, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-07', NULL),
	(543, 'ENVIADO', 'npp@dominio.com.br', 4591, 'Hospedagem', 'npp@dominio.com.br', 'UM NOME', NULL, '2015-01-08', NULL);
/*!40000 ALTER TABLE `sent` ENABLE KEYS */;


-- Copiando estrutura para tabela scripting02.tarefa
DROP TABLE IF EXISTS `tarefa`;
CREATE TABLE IF NOT EXISTS `tarefa` (
  `id_tarefa` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `tarefa` longtext NOT NULL,
  `prazo` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `concluida` date DEFAULT NULL,
  PRIMARY KEY (`id_tarefa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela scripting02.tarefa: ~11 rows (aproximadamente)
DELETE FROM `tarefa`;
/*!40000 ALTER TABLE `tarefa` DISABLE KEYS */;
INSERT INTO `tarefa` (`id_tarefa`, `userid`, `tarefa`, `prazo`, `status`, `concluida`) VALUES
	(1, 'npp@dominio.com.br', '23432423423432423', '0000-00-00', 'CONCLUIDA', '2015-01-05'),
	(2, 'npp@dominio.com.br', '99540622 TIERRIR', '0000-00-00', 'PENDENTE', NULL),
	(3, 'npp@dominio.com.br', '99592372 SABRINA', '0000-00-00', 'PENDENTE', NULL),
	(4, 'npp@dominio.com.br', '85836967 DAVID SCHUMANN', '0033-02-02', 'PENDENTE', NULL),
	(5, 'npp@dominio.com.br', '84149418 JEFERSON DREANS', '2016-02-03', 'PENDENTE', NULL),
	(6, 'npp@dominio.com.br', '91965517 TIAGO TEIXEIRA', '2015-01-01', 'PENDENTE', NULL),
	(7, 'npp@dominio.com.br', '98244281 TIAGO TEIXEIRA WHATS', '2016-01-01', 'PENDENTE', NULL),
	(8, 'npp@dominio.com.br', '91780120 MAD FERNANDO', '2016-01-01', 'PENDENTE', NULL),
	(9, 'npp@dominio.com.br', '99435973 THAIS ARIELI', '2018-02-02', 'PENDENTE', NULL),
	(10, 'npp@dominio.com.br', '96846630 ANDRE MACHADO', '2015-01-01', 'PENDENTE', NULL),
	(11, 'npp@dominio.com.br', '85868924 LOIRINHA', '2015-02-01', 'PENDENTE', NULL);
/*!40000 ALTER TABLE `tarefa` ENABLE KEYS */;


-- Copiando estrutura para tabela scripting02.template
DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `id_template` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `metodo` varchar(50) NOT NULL DEFAULT 'Hospedagem',
  `id_remetente` int(11) NOT NULL DEFAULT '1',
  `hiddenprodutos` int(11) NOT NULL DEFAULT '1',
  `tema` varchar(50) NOT NULL DEFAULT 'TEMP 001',
  `telefone` varchar(50) NOT NULL DEFAULT '(00) 0000-0000',
  `cnpj` varchar(50) NOT NULL DEFAULT '88.888.888/8888-88',
  `empresa` varchar(50) NOT NULL DEFAULT 'Testing',
  `site` varchar(50) NOT NULL DEFAULT 'http://www.dominio.com.br',
  `assunto` varchar(100) NOT NULL DEFAULT 'Um e-mail p/ Teste!',
  `banner` varchar(255) NOT NULL DEFAULT 'http://www.scripting.com.br/app/envio/imagens/banner.jpg',
  `Frasedomeio` text NOT NULL,
  `U01` varchar(255) NOT NULL DEFAULT 'http://www.registrosativos.com.br/Detalhes.aspx?id=9d984e86-073b-44ae-a80c-a041c4037950',
  `U02` varchar(255) NOT NULL DEFAULT 'http://www.registrosativos.com.br/Detalhes.aspx?id=1a99aa26-1d7f-458e-811d-f476291f6786',
  `U03` varchar(255) NOT NULL DEFAULT 'http://www.registrosativos.com.br/Detalhes.aspx?id=784b41bd-9608-4720-90a4-10756322a510',
  `U04` varchar(255) NOT NULL DEFAULT 'http://www.registrosativos.com.br/Detalhes.aspx?id=37510e78-bcd1-4049-803c-c544502eedd5',
  `T01` varchar(50) NOT NULL DEFAULT 'Nobreak Save 1500VA',
  `T02` varchar(50) NOT NULL DEFAULT 'Notebook Panasonic CF-31WFLAXMV',
  `T03` varchar(50) NOT NULL DEFAULT 'TV Smart 55 Semp Toshiba',
  `T04` varchar(50) NOT NULL DEFAULT 'I. Multifuncional Samsung',
  `D01` varchar(750) NOT NULL DEFAULT 'Fornece proteÃ§Ã£o para seus equipamentos, confira a potÃªncia adequada.',
  `D02` varchar(750) NOT NULL DEFAULT 'Notebook do tipo rÃ­gido, resistente a impactos e a respingos de Ãgua. Panasonic CF-31WFLAXMV',
  `D03` varchar(750) NOT NULL DEFAULT 'TV SMART SEMP TOSHIBA, 55 pol com o menor preÃ§o do mercado!',
  `D04` varchar(750) NOT NULL DEFAULT 'Multifuncional laser ImpressÃ£o, DigitalizaÃ§Ã£o, CÃ³pia, Fax; â€¢ Processador de 600 MHz; â€¢ Monitor LCD de 2 Linhas; â€¢ MemÃ³ria de 128 MB; â€¢ Interface Hi-Speed USB 2.0 / Ethernet 10 / 100 Base TX; â€¢ Consumo de Energia 400 W (Imprimindo) / 50 W (Em espera) / 1.1 W (HibernaÃ§Ã£o); â€¢ NÃ­vel de ruÃ­do: Menos de 50 dBA (Imprimindo) / Menos de 52 dBA (Copiando pelo Vidro) / Menos de 53 dBA (Copiando pelo ADF) / Menos de 26 dBA (Em espera); â€¢ DimensÃµes 401 x 362 x 367 mm (15.8Â´ x 14.2Â´ x 14.4Â´); â€¢ Peso de 11.3 kg (24.9 lbs.); â€¢ Ciclo de Trabalho Mensal MÃ¡ximo: AtÃ© 12000 pÃ¡ginas. ',
  `P01` varchar(50) NOT NULL DEFAULT 'R$ 799,99',
  `P02` varchar(50) NOT NULL DEFAULT 'R$ 21.489,00',
  `P03` varchar(50) NOT NULL DEFAULT 'R$ 3.584,00',
  `P04` varchar(50) NOT NULL DEFAULT 'R$ 930,33',
  `I01` varchar(50) NOT NULL DEFAULT 'nobreak1500va.jpg',
  `I02` varchar(50) NOT NULL DEFAULT 'note21.jpg',
  `I03` varchar(50) NOT NULL DEFAULT 'tv55semptoshiba.jpg',
  `I04` varchar(50) NOT NULL DEFAULT 'impressorasamsung.jpg',
  `corTitulo` varchar(50) NOT NULL DEFAULT '#333',
  `corFundoFrasedomeio` varchar(50) NOT NULL DEFAULT '#27408b',
  `corLetraTitulo` varchar(50) NOT NULL DEFAULT '#FFF',
  `corRodape` varchar(50) NOT NULL DEFAULT '#333',
  `corLetraRodape` varchar(50) NOT NULL DEFAULT '#FFF',
  `corSeparador` varchar(50) NOT NULL DEFAULT '#caff70',
  `corFundo` varchar(50) NOT NULL DEFAULT '#FFF',
  `corBorda` varchar(50) NOT NULL DEFAULT '#333',
  `corP1` varchar(50) NOT NULL DEFAULT '#27408b',
  `corP2` varchar(50) NOT NULL DEFAULT '#8b475d',
  `corP3` varchar(50) NOT NULL DEFAULT '#cd2626',
  `corP4` varchar(50) NOT NULL DEFAULT '#66cdaa',
  PRIMARY KEY (`id_template`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scripting02.template: ~3 rows (aproximadamente)
DELETE FROM `template`;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` (`id_template`, `userid`, `metodo`, `id_remetente`, `hiddenprodutos`, `tema`, `telefone`, `cnpj`, `empresa`, `site`, `assunto`, `banner`, `Frasedomeio`, `U01`, `U02`, `U03`, `U04`, `T01`, `T02`, `T03`, `T04`, `D01`, `D02`, `D03`, `D04`, `P01`, `P02`, `P03`, `P04`, `I01`, `I02`, `I03`, `I04`, `corTitulo`, `corFundoFrasedomeio`, `corLetraTitulo`, `corRodape`, `corLetraRodape`, `corSeparador`, `corFundo`, `corBorda`, `corP1`, `corP2`, `corP3`, `corP4`) VALUES
	(1, 'npp@dominio.com.br', 'Hospedagem', 4591, 0, 'TEMP 001', '(51) 3722-2583', '13.360.521/0001-00', 'UM NOME', 'http://www.registrosativos.com.br', 'Equipamentos de InformÃ¡tica em promoÃ§Ã£o - LicitaÃ§Ã£o', 'http://www.scripting.com.br/app/envio/imagens/banner.jpg', 'VocÃª pode responder este e-mail para falar com um Vendedor, de Segunda Ã  Sexta-feira em horÃ¡rio comercial.', 'http://www.registrosativos.com.br/Detalhes.aspx?id=9d984e86-073b-44ae-a80c-a041c4037950', 'http://www.registrosativos.com.br/Detalhes.aspx?id=1a99aa26-1d7f-458e-811d-f476291f6786', 'http://www.registrosativos.com.br/Detalhes.aspx?id=784b41bd-9608-4720-90a4-10756322a510', 'http://www.registrosativos.com.br/Detalhes.aspx?id=37510e78-bcd1-4049-803c-c544502eedd5', 'Nobreak Save 1500VA', 'Notebook Panasonic CF-31WFLAXMV', 'TV Smart 55 Semp Toshiba', 'I. Multifuncional Samsung', 'Fornece proteÃ§Ã£o para seus equipamentos, confira a potÃªncia adequada.', 'Notebook do tipo rÃ­gido, resistente a impactos e a respingos de Ãgua. Panasonic CF-31WFLAXMV', 'TV SMART SEMP TOSHIBA, 55 pol com o menor preÃ§o do mercado!', 'Multifuncional laser ImpressÃ£o, DigitalizaÃ§Ã£o, CÃ³pia, Fax; â€¢ Processador de 600 MHz; â€¢ Monitor LCD de 2 Linhas; â€¢ MemÃ³ria de 128 MB; â€¢ Interface Hi-Speed USB 2.0 / Ethernet 10 / 100 Base TX; â€¢ Consumo de Energia 400 W (Imprimindo) / 50 W (Em espera) / 1.1 W (HibernaÃ§Ã£o); â€¢ NÃ­vel de ruÃ­do: Menos de 50 dBA (Imprimindo) / Menos de 52 dBA (Copiando pelo Vidro) / Menos de 53 dBA (Copiando pelo ADF) / Menos de 26 dBA (Em espera); â€¢ DimensÃµes 401 x 362 x 367 mm (15.8Â´ x 14.2Â´ x 14.4Â´); â€¢ Peso de 11.3 kg (24.9 lbs.); â€¢ Ciclo de Trabalho Mensal MÃ¡ximo: AtÃ© 12000 pÃ¡ginas. ', 'R$ 799,99', 'R$ 21.489,00', 'R$ 3.584,00', 'R$ 930,33', 'nobreak1500va.jpg', 'note21.jpg', 'tv55semptoshiba.jpg', 'impressorasamsung.jpg', '#333', '#27408b', '#FFF', '#333', '#FFF', '#caff70', '#FFF', '#333', '#27408b', '#8b475d', '#cd2626', '#66cdaa'),
	(3, 'um.nome@gmail.com', 'Hospedagem', 6984, 1, 'TEMP 001', '(51) 3722-2583', '13.360.521/0001-00', 'UM NOME', 'http://www.registrosativos.com.br', 'Equipamentos de InformÃ¡tica em promoÃ§Ã£o - LicitaÃ§Ã£o', 'http://www.scripting.com.br/app/envio/imagens/banner.jpg', 'VocÃª pode responder este e-mail para falar com um Vendedor, de Segunda Ã  Sexta-feira em horÃ¡rio comercial.', 'http://www.registrosativos.com.br/Detalhes.aspx?id=9d984e86-073b-44ae-a80c-a041c4037950', 'http://www.registrosativos.com.br/Detalhes.aspx?id=1a99aa26-1d7f-458e-811d-f476291f6786', 'http://www.registrosativos.com.br/Detalhes.aspx?id=784b41bd-9608-4720-90a4-10756322a510', 'http://www.registrosativos.com.br/Detalhes.aspx?id=37510e78-bcd1-4049-803c-c544502eedd5', 'Nobreak Save 1500VA', 'Notebook Panasonic CF-31WFLAXMV', 'TV Smart 55 Semp Toshiba', 'I. Multifuncional Samsung', 'Fornece proteÃ§Ã£o para seus equipamentos, confira a potÃªncia adequada.', 'Notebook do tipo rÃ­gido, resistente a impactos e a respingos de Ãgua. Panasonic CF-31WFLAXMV', 'TV SMART SEMP TOSHIBA, 55 pol com o menor preÃ§o do mercado!', 'Multifuncional laser ImpressÃ£o, DigitalizaÃ§Ã£o, CÃ³pia, Fax; â€¢ Processador de 600 MHz; â€¢ Monitor LCD de 2 Linhas; â€¢ MemÃ³ria de 128 MB; â€¢ Interface Hi-Speed USB 2.0 / Ethernet 10 / 100 Base TX; â€¢ Consumo de Energia 400 W (Imprimindo) / 50 W (Em espera) / 1.1 W (HibernaÃ§Ã£o); â€¢ NÃ­vel de ruÃ­do: Menos de 50 dBA (Imprimindo) / Menos de 52 dBA (Copiando pelo Vidro) / Menos de 53 dBA (Copiando pelo ADF) / Menos de 26 dBA (Em espera); â€¢ DimensÃµes 401 x 362 x 367 mm (15.8Â´ x 14.2Â´ x 14.4Â´); â€¢ Peso de 11.3 kg (24.9 lbs.); â€¢ Ciclo de Trabalho Mensal MÃ¡ximo: AtÃ© 12000 pÃ¡ginas. ', 'R$ 799,99', 'R$ 21.489,00', 'R$ 3.584,00', 'R$ 930,33', 'nobreak1500va.jpg', 'note21.jpg', 'tv55semptoshiba.jpg', 'impressorasamsung.jpg', '#333', '#27408b', '#FFF', '#333', '#FFF', '#caff70', '#FFF', '#333', '#27408b', '#8b475d', '#cd2626', '#66cdaa'),
	(4, 'alex.mmmmk@gmail.com', 'Hospedagem', 1155, 1, 'TEMP 001', '(51) 3722-1000', '03.389.599/0001-95', 'mmmmk LTDA', 'https://www.facebook.com/pages/mmmmk-LTDA/567', 'Um e-mail p/ Teste!', 'http://www.scripting.com.br/app/envio/imagens/banner.jpg', 'VocÃª pode responder este e-mail para falar com um Vendedor, de Segunda Ã  Sexta-feira em horÃ¡rio comercial.', 'http://www.registrosativos.com.br/Detalhes.aspx?id=9d984e86-073b-44ae-a80c-a041c4037950', 'http://www.registrosativos.com.br/Detalhes.aspx?id=1a99aa26-1d7f-458e-811d-f476291f6786', 'http://www.registrosativos.com.br/Detalhes.aspx?id=784b41bd-9608-4720-90a4-10756322a510', 'http://www.registrosativos.com.br/Detalhes.aspx?id=37510e78-bcd1-4049-803c-c544502eedd5', 'Nobreak Save 1500VA', 'Notebook Panasonic CF-31WFLAXMV', 'TV Smart 55 Semp Toshiba', 'I. Multifuncional Samsung', 'Fornece proteÃ§Ã£o para seus equipamentos, confira a potÃªncia adequada.', 'Notebook do tipo rÃ­gido, resistente a impactos e a respingos de Ãgua. Panasonic CF-31WFLAXMV', 'TV SMART SEMP TOSHIBA, 55 pol com o menor preÃ§o do mercado!', 'Multifuncional laser ImpressÃ£o, DigitalizaÃ§Ã£o, CÃ³pia, Fax; â€¢ Processador de 600 MHz; â€¢ Monitor LCD de 2 Linhas; â€¢ MemÃ³ria de 128 MB; â€¢ Interface Hi-Speed USB 2.0 / Ethernet 10 / 100 Base TX; â€¢ Consumo de Energia 400 W (Imprimindo) / 50 W (Em espera) / 1.1 W (HibernaÃ§Ã£o); â€¢ NÃ­vel de ruÃ­do: Menos de 50 dBA (Imprimindo) / Menos de 52 dBA (Copiando pelo Vidro) / Menos de 53 dBA (Copiando pelo ADF) / Menos de 26 dBA (Em espera); â€¢ DimensÃµes 401 x 362 x 367 mm (15.8Â´ x 14.2Â´ x 14.4Â´); â€¢ Peso de 11.3 kg (24.9 lbs.); â€¢ Ciclo de Trabalho Mensal MÃ¡ximo: AtÃ© 12000 pÃ¡ginas. ', 'R$ 799,99', 'R$ 21.489,00', 'R$ 3.584,00', 'R$ 930,33', 'nobreak1500va.jpg', 'note21.jpg', 'tv55semptoshiba.jpg', 'impressorasamsung.jpg', '#333', '#27408b', '#FFF', '#333', '#FFF', '#caff70', '#FFF', '#333', '#27408b', '#8b475d', '#cd2626', '#66cdaa');
/*!40000 ALTER TABLE `template` ENABLE KEYS */;


-- Copiando estrutura para tabela scripting02.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `limite` int(11) DEFAULT '10',
  `total` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scripting02.usuario: ~3 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`, `usuario`, `senha`, `userid`, `limite`, `total`) VALUES
	(1, 'ANDRE MACHADO', 'c81e728d9d4c2f636f067f89cc14862c', 'npp@dominio.com.br', 400, 479),
	(3, 'LUCAS', 'c81e728d9d4c2f636f067f89cc14862c', 'um.nome@gmail.com', 400, 3),
	(4, 'alex.mmmmk@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'alex.mmmmk@gmail.com', 400, 0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
