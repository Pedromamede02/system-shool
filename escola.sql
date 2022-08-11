-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 11/08/2022 às 06h11min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcurso`
--

CREATE TABLE IF NOT EXISTS `tbcurso` (
  `codcurso` int(11) NOT NULL AUTO_INCREMENT,
  `nomecurso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tbcurso`
--

INSERT INTO `tbcurso` (`codcurso`, `nomecurso`) VALUES
(5, '2efeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdici`
--

CREATE TABLE IF NOT EXISTS `tbdici` (
  `coddici` int(11) NOT NULL AUTO_INCREMENT,
  `nomedici` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`coddici`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbdici`
--

INSERT INTO `tbdici` (`coddici`, `nomedici`) VALUES
(1, 'ciberseguranÃ§a'),
(2, 'ciencias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprof`
--

CREATE TABLE IF NOT EXISTS `tbprof` (
  `codprof` int(11) NOT NULL AUTO_INCREMENT,
  `nomeprof` varchar(50) DEFAULT NULL,
  `telprof` varchar(50) DEFAULT NULL,
  `emailprof` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codprof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbprof`
--

INSERT INTO `tbprof` (`codprof`, `nomeprof`, `telprof`, `emailprof`) VALUES
(1, 'fe', 'rssrgrsg', 'rsggrssrg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
