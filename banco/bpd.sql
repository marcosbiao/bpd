-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2015 às 22:14
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsaestagio`
--

CREATE TABLE IF NOT EXISTS `bolsaestagio` (
`idbolsaEstagio` int(10) unsigned NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL,
  `idPrograma` int(11) DEFAULT NULL,
  `nomeInstituicao` varchar(45) COLLATE utf8_bin NOT NULL,
  `curso` varchar(45) COLLATE utf8_bin NOT NULL,
  `supervisorEstagio` varchar(45) COLLATE utf8_bin NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFim` date NOT NULL,
  `cargaHoraria` int(11) NOT NULL,
  `valorBolsa` double NOT NULL,
  `valorAuxilioTrasporte` double NOT NULL,
  `localEstagio` varchar(45) COLLATE utf8_bin NOT NULL,
  `atividades` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `bolsaestagio`
--

INSERT INTO `bolsaestagio` (`idbolsaEstagio`, `pessoa_cpf`, `idPrograma`, `nomeInstituicao`, `curso`, `supervisorEstagio`, `dataInicio`, `dataFim`, `cargaHoraria`, `valorBolsa`, `valorAuxilioTrasporte`, `localEstagio`, `atividades`) VALUES
(1, 4294967295, 6, 'UFRB', 'Educa', 'FAMAM', '2124-02-15', '0000-00-00', 20, 600, 200, 'SEAD', 'jiofdghfjkd'),
(2, 215478, 3, 'UFRB', 'Educa', 'FAMAM', '2124-02-15', '0000-00-00', 20, 600, 200, 'SEAD', 'jiofdghfjkd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsapesquisa`
--

CREATE TABLE IF NOT EXISTS `bolsapesquisa` (
`idbolsaPesquisa` int(10) unsigned NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diaria`
--

CREATE TABLE IF NOT EXISTS `diaria` (
`iddiaria` int(10) unsigned NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL,
  `numeroDiarias` int(10) unsigned NOT NULL,
  `valor` int(10) unsigned NOT NULL,
  `taxaDeslocamento` int(10) unsigned NOT NULL,
  `valorTotal` int(10) unsigned NOT NULL,
  `dataSolicitacao` datetime NOT NULL,
  `status_2` varchar(20) COLLATE utf8_bin NOT NULL,
  `usuarioSolicitante` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passagem`
--

CREATE TABLE IF NOT EXISTS `passagem` (
`idpassagem` int(10) unsigned NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL,
  `cidadeOrigem` varchar(45) COLLATE utf8_bin NOT NULL,
  `cidadeDestino` varchar(45) COLLATE utf8_bin NOT NULL,
  `beneficiario` varchar(45) COLLATE utf8_bin NOT NULL,
  `dataSaida` date NOT NULL,
  `dataRetorno` date NOT NULL,
  `dataSolicitacao` date NOT NULL,
  `status_2` varchar(45) COLLATE utf8_bin NOT NULL,
  `tipoPassagem` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `cpf` int(10) unsigned NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `rg` int(10) unsigned NOT NULL,
  `orgaoEmissor` varchar(20) COLLATE utf8_bin NOT NULL,
  `dataEmissaoRg` date NOT NULL,
  `nacionalidade` varchar(45) COLLATE utf8_bin NOT NULL,
  `naturalidade` varchar(45) COLLATE utf8_bin NOT NULL,
  `contato` varchar(45) COLLATE utf8_bin NOT NULL,
  `servidorPublico` int(10) unsigned DEFAULT NULL,
  `numeroPis` int(10) unsigned DEFAULT NULL,
  `inscricaoMunicipal` int(10) unsigned DEFAULT NULL,
  `escolaridade` int(10) unsigned DEFAULT NULL,
  `profissao` int(10) unsigned DEFAULT NULL,
  `codBanco` int(10) unsigned NOT NULL,
  `nomeBanco` int(10) unsigned NOT NULL,
  `agencia` int(10) unsigned NOT NULL,
  `conta` int(10) unsigned NOT NULL,
  `tipoConta` varchar(20) COLLATE utf8_bin NOT NULL,
  `enderecoBrasil` int(10) unsigned NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(45) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(45) COLLATE utf8_bin NOT NULL,
  `cep` int(10) unsigned NOT NULL,
  `endereco` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`cpf`, `nome`, `nascimento`, `email`, `rg`, `orgaoEmissor`, `dataEmissaoRg`, `nacionalidade`, `naturalidade`, `contato`, `servidorPublico`, `numeroPis`, `inscricaoMunicipal`, `escolaridade`, `profissao`, `codBanco`, `nomeBanco`, `agencia`, `conta`, `tipoConta`, `enderecoBrasil`, `estado`, `cidade`, `bairro`, `cep`, `endereco`) VALUES
(215478, 'Luana', '0000-00-00', 'luanasantos@hotmail.com', 435435, 'sspba', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '', 0, 'ba', 'cruz das almas', 'analucia', 44380000, 'manoel pedro da silveira'),
(2864254562, 'Marcos Bião', '0000-00-00', 'marcosbiao@yahoo.com.br', 622545855, 'sspba', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '', 0, 'ba', 'cruz das almas', 'analucia', 44380000, 'jiehfjidh defhsd fsd'),
(4294967295, 'moura', '0000-00-00', 'mourais_182@hotmail.com', 564654654, 'sspsp', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '', 0, 'sp', 'sao carlos', 'china town', 44258123, 'jkwefhjkwehjkd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
`idPrograma` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `programa`
--

INSERT INTO `programa` (`idPrograma`, `nome`) VALUES
(1, 'COMFOR'),
(2, 'Pac'),
(3, 'PACC'),
(4, 'Unasus'),
(6, 'Novo programa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolsaestagio`
--
ALTER TABLE `bolsaestagio`
 ADD PRIMARY KEY (`idbolsaEstagio`), ADD KEY `bolsaEstagio_FKIndex1` (`pessoa_cpf`), ADD KEY `idPrograma_FKIndex2` (`idPrograma`);

--
-- Indexes for table `bolsapesquisa`
--
ALTER TABLE `bolsapesquisa`
 ADD PRIMARY KEY (`idbolsaPesquisa`), ADD KEY `bolsaPesquisa_FKIndex1` (`pessoa_cpf`);

--
-- Indexes for table `diaria`
--
ALTER TABLE `diaria`
 ADD PRIMARY KEY (`iddiaria`), ADD KEY `diaria_FKIndex1` (`pessoa_cpf`);

--
-- Indexes for table `passagem`
--
ALTER TABLE `passagem`
 ADD PRIMARY KEY (`idpassagem`), ADD KEY `passagem_FKIndex1` (`pessoa_cpf`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
 ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `programa`
--
ALTER TABLE `programa`
 ADD PRIMARY KEY (`idPrograma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolsaestagio`
--
ALTER TABLE `bolsaestagio`
MODIFY `idbolsaEstagio` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bolsapesquisa`
--
ALTER TABLE `bolsapesquisa`
MODIFY `idbolsaPesquisa` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diaria`
--
ALTER TABLE `diaria`
MODIFY `iddiaria` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `passagem`
--
ALTER TABLE `passagem`
MODIFY `idpassagem` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programa`
--
ALTER TABLE `programa`
MODIFY `idPrograma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
