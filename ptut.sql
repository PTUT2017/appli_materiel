-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Décembre 2017 à 15:30
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ptut`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `groupe` text NOT NULL,
  `annee` text NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `groupe`, `annee`) VALUES
(3, 'steve', '', '1A', ''),
(4, 'fohrer', '', '1A', ''),
(5, 'steve', '', '1A', ''),
(6, 'xdfghx', '', '1A', ''),
(7, 'steve', '', '1A', '');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
  `id_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `designation` text NOT NULL,
  `categorie` text NOT NULL,
  `quantite_total` int(11) NOT NULL,
  `quantite_restante` int(11) NOT NULL,
  PRIMARY KEY (`id_materiel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `designation`, `categorie`, `quantite_total`, `quantite_restante`) VALUES
(14, 'steady cam', 'accessoire', 1, 1),
(13, 'crosse epaule pour reflex', 'accessoire', 1, 1),
(12, 'pieds sans niveau', 'accessoire', 4, 4),
(11, 'pieds a niveau', 'accessoire', 4, 4),
(10, '3 mandarines halogene', 'eclairage', 2, 2),
(9, 'panneaux led', 'eclairage', 3, 3),
(8, 'reflecteur', 'eclairage', 2, 2),
(7, 'zoom mp3', 'son', 4, 4),
(6, 'micro cravate', 'son', 3, 3),
(5, 'casque audio', 'son', 5, 5),
(4, 'micro filaire', 'son', 3, 3),
(3, 'camera poing', 'video', 6, 6),
(2, 'camera epaule', 'video', 2, 2),
(1, 'camera reflex', 'video', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE IF NOT EXISTS `reserver` (
  `id_materiel` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `id_reserver` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_retour` date NOT NULL,
  `quantite_reserver` int(11) NOT NULL,
  PRIMARY KEY (`id_reserver`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
