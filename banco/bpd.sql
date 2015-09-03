-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Set-2015 às 16:39
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
  `nomeInstituicao` varchar(45) COLLATE utf8_bin NOT NULL,
  `curso` varchar(45) COLLATE utf8_bin NOT NULL,
  `supervisorEstagio` varchar(45) COLLATE utf8_bin NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFim` date NOT NULL,
  `cargaHoraria` int(11) NOT NULL,
  `valorBolsa` double NOT NULL,
  `valorAuxilioTrasporte` double NOT NULL,
  `localEstagio` varchar(45) COLLATE utf8_bin NOT NULL,
  `atividades` varchar(250) COLLATE utf8_bin NOT NULL,
  `autorizado` int(11) NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL,
  `programa_idPrograma` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `bolsaestagio`
--

INSERT INTO `bolsaestagio` (`idbolsaEstagio`, `nomeInstituicao`, `curso`, `supervisorEstagio`, `dataInicio`, `dataFim`, `cargaHoraria`, `valorBolsa`, `valorAuxilioTrasporte`, `localEstagio`, `atividades`, `autorizado`, `pessoa_cpf`, `programa_idPrograma`) VALUES
(1, 'UFRB', 'Educa', 'FAMAM', '2124-02-15', '0000-00-00', 20, 600, 200, 'SEAD', 'jiofdghfjkd', 1, 4294967295, 1),
(6, 'UFRB', 'Educação fisica', 'SEAD', '0000-00-00', '0000-00-00', 20, 500, 500, 'SEAD', 'sxasxasxasxasxasx', 1, 4294967295, 1),
(7, 'UFRB', 'Eng. Computação', 'Leo', '2015-07-10', '2016-07-10', 20, 500, 500, 'SEAD', 'sxasxasxasxasxasx', 2, 2864254562, 52),
(8, 'UFRB', 'Eng. Computação', 'SEAD', '2015-03-01', '2016-03-01', 30, 650, 200, 'SEAD', 'lalala', 1, 2864254562, 53);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsapesquisa`
--

CREATE TABLE IF NOT EXISTS `bolsapesquisa` (
`idbolsaPesquisa` int(10) unsigned NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL,
  `programa_idPrograma` int(11) NOT NULL,
  `dataCadastramento` date NOT NULL,
  `nomeInstituicao` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipoCursoVinculado` varchar(25) COLLATE utf8_bin NOT NULL,
  `nomeCursoVinculado` varchar(45) COLLATE utf8_bin NOT NULL,
  `profissao` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `funcaoPrograma` varchar(45) COLLATE utf8_bin NOT NULL,
  `atribuicaoBolsista` varchar(20) COLLATE utf8_bin NOT NULL,
  `declaracao1` int(11) NOT NULL,
  `declaracao2` int(11) NOT NULL,
  `declaracao3` int(11) NOT NULL,
  `autorizado` int(11) NOT NULL,
  `numeroAnos` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `bolsapesquisa`
--

INSERT INTO `bolsapesquisa` (`idbolsaPesquisa`, `pessoa_cpf`, `programa_idPrograma`, `dataCadastramento`, `nomeInstituicao`, `tipoCursoVinculado`, `nomeCursoVinculado`, `profissao`, `sexo`, `funcaoPrograma`, `atribuicaoBolsista`, `declaracao1`, `declaracao2`, `declaracao3`, `autorizado`, `numeroAnos`) VALUES
(1, 2864254562, 52, '0000-00-00', 'UFRB', 'Sequencial', 'Eng. Computação', NULL, NULL, 'Tutor', 'Tutor presencial', 1, 0, 0, 0, 6),
(2, 2864254562, 52, '0000-00-00', 'UFRB', 'Lato Sensu', 'dfgfdgfd', NULL, NULL, 'Tutor', 'Tutor a distancia', 3, 0, 0, 0, 0),
(3, 2864254562, 53, '0000-00-00', 'gfswfsdf', 'Lato Sensu', 'sdfsdfs', NULL, NULL, 'sdfsdfsdfsdfsdfsdf', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diaria`
--

CREATE TABLE IF NOT EXISTS `diaria` (
`iddiaria` int(10) unsigned NOT NULL,
  `numeroDiarias` int(10) unsigned NOT NULL,
  `valor` int(10) unsigned NOT NULL,
  `taxaDeslocamento` int(10) unsigned NOT NULL,
  `valorTotal` int(10) unsigned NOT NULL,
  `dataSolicitacao` datetime NOT NULL,
  `status_2` varchar(20) COLLATE utf8_bin NOT NULL,
  `usuarioSolicitante` int(10) unsigned NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passagem`
--

CREATE TABLE IF NOT EXISTS `passagem` (
`idpassagem` int(10) unsigned NOT NULL,
  `cidadeOrigem` varchar(45) COLLATE utf8_bin NOT NULL,
  `cidadeDestino` varchar(45) COLLATE utf8_bin NOT NULL,
  `beneficiario` varchar(45) COLLATE utf8_bin NOT NULL,
  `dataSaida` date NOT NULL,
  `dataRetorno` date NOT NULL,
  `dataSolicitacao` date NOT NULL,
  `status_2` varchar(45) COLLATE utf8_bin NOT NULL,
  `tipoPassagem` varchar(45) COLLATE utf8_bin NOT NULL,
  `pessoa_cpf` int(10) unsigned NOT NULL
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
  `codBanco` int(10) unsigned NOT NULL,
  `nomeBanco` int(10) unsigned NOT NULL,
  `tipoConta` varchar(20) COLLATE utf8_bin NOT NULL,
  `enderecoBrasil` int(10) unsigned NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(45) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(45) COLLATE utf8_bin NOT NULL,
  `cep` int(10) unsigned NOT NULL,
  `endereco` varchar(45) COLLATE utf8_bin NOT NULL,
  `escolaridade` varchar(20) COLLATE utf8_bin NOT NULL,
  `profissao` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `agencia` varchar(8) COLLATE utf8_bin NOT NULL,
  `conta` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`cpf`, `nome`, `nascimento`, `email`, `rg`, `orgaoEmissor`, `dataEmissaoRg`, `nacionalidade`, `naturalidade`, `contato`, `servidorPublico`, `numeroPis`, `inscricaoMunicipal`, `codBanco`, `nomeBanco`, `tipoConta`, `enderecoBrasil`, `estado`, `cidade`, `bairro`, `cep`, `endereco`, `escolaridade`, `profissao`, `agencia`, `conta`) VALUES
(123456789, 'Marcos Bião', '0000-00-00', 'marcosbiao@hotmail.com', 998547821, 'sspba', '2010-02-04', '', '', '75 6584-9854', NULL, 654654, 654654, 124, 0, 'Corrente', 0, 'ba', 'cruz das almas', 'ana lucia', 44380000, 'rua tal e coisa', 'Superior completo', 'Professor', '125-8', '21548-9'),
(2864254562, 'Marcos Bião', '0000-00-00', 'marcosbiao@yahoo.com.br', 622545855, 'sspba', '0000-00-00', '', '', '', NULL, NULL, NULL, 0, 0, '', 0, 'ba', 'cruz das almas', 'analucia', 44380000, 'jiehfjidh defhsd fsd', '', NULL, '', ''),
(4294967295, 'Marcos', '0000-00-00', 'hfvjidbv', 4534543, 'sspba', '0000-00-00', '', '', '75 9754-6251', NULL, 4294967295, 465465465, 1245, 0, 'Poupança', 0, 'zbvc', 'cruz das almas', 'uihuihui', 44380000, 'jhfiruehfu', 'Doutor', 'Professor', '1254-8', '21547-9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
`idPrograma` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `programa`
--

INSERT INTO `programa` (`idPrograma`, `nome`, `data`) VALUES
(1, 'COMFOR', NULL),
(52, 'mais novo', '2015-02-05'),
(53, 'erretre', '2015-02-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `login` varchar(45) COLLATE utf8_bin NOT NULL,
  `senha` varchar(45) COLLATE utf8_bin NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `login`, `senha`, `nivel`, `ativo`) VALUES
(1, 'root', 'root', 1, 1),
(2, 'coordenador', 'coordenador', 2, 1),
(3, 'adm', 'adm', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolsaestagio`
--
ALTER TABLE `bolsaestagio`
 ADD PRIMARY KEY (`idbolsaEstagio`,`pessoa_cpf`,`programa_idPrograma`), ADD KEY `fk_bolsaestagio_pessoa_idx` (`pessoa_cpf`), ADD KEY `fk_bolsaestagio_programa1_idx` (`programa_idPrograma`);

--
-- Indexes for table `bolsapesquisa`
--
ALTER TABLE `bolsapesquisa`
 ADD PRIMARY KEY (`idbolsaPesquisa`,`pessoa_cpf`,`programa_idPrograma`), ADD KEY `fk_bolsapesquisa_pessoa1_idx` (`pessoa_cpf`), ADD KEY `fk_bolsapesquisa_programa1_idx` (`programa_idPrograma`);

--
-- Indexes for table `diaria`
--
ALTER TABLE `diaria`
 ADD PRIMARY KEY (`iddiaria`,`pessoa_cpf`), ADD KEY `fk_diaria_pessoa1_idx` (`pessoa_cpf`);

--
-- Indexes for table `passagem`
--
ALTER TABLE `passagem`
 ADD PRIMARY KEY (`idpassagem`,`pessoa_cpf`), ADD KEY `fk_passagem_pessoa1_idx` (`pessoa_cpf`);

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
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`), ADD KEY `nome` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolsaestagio`
--
ALTER TABLE `bolsaestagio`
MODIFY `idbolsaEstagio` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bolsapesquisa`
--
ALTER TABLE `bolsapesquisa`
MODIFY `idbolsaPesquisa` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `idPrograma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bolsaestagio`
--
ALTER TABLE `bolsaestagio`
ADD CONSTRAINT `fk_bolsaestagio_pessoa` FOREIGN KEY (`pessoa_cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_bolsaestagio_programa1` FOREIGN KEY (`programa_idPrograma`) REFERENCES `programa` (`idPrograma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `bolsapesquisa`
--
ALTER TABLE `bolsapesquisa`
ADD CONSTRAINT `fk_bolsapesquisa_pessoa1` FOREIGN KEY (`pessoa_cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_bolsapesquisa_programa1` FOREIGN KEY (`programa_idPrograma`) REFERENCES `programa` (`idPrograma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `diaria`
--
ALTER TABLE `diaria`
ADD CONSTRAINT `fk_diaria_pessoa1` FOREIGN KEY (`pessoa_cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `passagem`
--
ALTER TABLE `passagem`
ADD CONSTRAINT `fk_passagem_pessoa1` FOREIGN KEY (`pessoa_cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
