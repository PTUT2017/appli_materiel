-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Décembre 2017 à 18:08
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
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
  `id_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `designation` text NOT NULL,
  `categorie` text NOT NULL,
  `quantite_total` int(11) NOT NULL,
  PRIMARY KEY (`id_materiel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `designation`, `categorie`, `quantite_total`) VALUES
(14, 'steady cam', 'accessoire', 1),
(13, 'crosse epaule pour reflex', 'accessoire', 1),
(12, 'pieds sans niveau', 'accessoire', 4),
(11, 'pieds a niveau', 'accessoire', 4),
(10, 'mandarines halogene', 'lumiere', 2),
(9, 'panneaux led', 'lumiere', 3),
(8, 'reflecteur', 'lumiere', 2),
(7, 'zoom mp3', 'son', 4),
(6, 'micro cravate', 'son', 3),
(5, 'casque audio', 'son', 5),
(4, 'micro filaire', 'son', 3),
(3, 'camera poing', 'video', 6),
(2, 'camera epaule', 'video', 2),
(1, 'camera reflex', 'video', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
