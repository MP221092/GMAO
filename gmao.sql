-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Mai 2019 à 08:55
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gmao`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE IF NOT EXISTS `batiment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`id`, `nom`) VALUES
(10, 'cedres'),
(11, 'thuyas1'),
(12, 'thuyas2'),
(13, 'esplanade'),
(14, 'aquarelle'),
(15, 'pasa / accueil de jour'),
(16, 'entretien ménage'),
(17, 'blanchisserie'),
(18, 'cuisine'),
(19, 'pharmacie'),
(20, 'psychiatre/psychologue/dieteticien'),
(21, 'cadre de santé/ I.S.G.S'),
(22, 'administration'),
(23, 'animation'),
(24, 'camélia'),
(25, 'cyprès');

-- --------------------------------------------------------

--
-- Structure de la table `bon`
--

CREATE TABLE IF NOT EXISTS `bon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_debut` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `batiment` varchar(30) NOT NULL,
  `etage` varchar(10) NOT NULL,
  `localisation` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `etat` varchar(50) NOT NULL DEFAULT 'non lu',
  `tech1` varchar(100) NOT NULL,
  `tech2` varchar(100) NOT NULL,
  `commentaire` text NOT NULL,
  `date_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`id`, `prenom`, `nom`) VALUES
(2, 'arnaud', 'FORTRIE'),
(3, 'thierry', 'LEFRANC'),
(4, 'yann', 'SALLÉ'),
(5, 'james', 'FOUILLOY'),
(6, 'jean_michel', 'CLIN'),
(7, 'gary', 'GERARD');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
