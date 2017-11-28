-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Novembre 2017 à 11:19
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `groupe`, `annee`) VALUES
(1, 'Herrgott', 'Julien', '0', '1'),
(2, 'Ferrandez', 'Audrey', 'P12', '1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `designation`, `categorie`, `quantite_total`) VALUES
(1, 'camera reflex', 'video', 0),
(2, 'camera reflex', 'video', 0),
(3, 'camera epaule', 'video', 0),
(4, 'camera epaule', 'video', 0),
(5, 'camera poing', 'video', 0),
(6, 'camera poing', 'video', 0),
(7, 'camera poing', 'video', 0),
(8, 'camera poing', 'video', 0),
(9, 'camera poing', 'video', 0),
(10, 'camera poing', 'video', 0),
(11, 'micro filaires', 'audio', 0),
(12, 'micro filaires', 'audio', 0),
(13, 'micro filaires', 'audio', 0),
(14, 'casques audio', 'audio', 0),
(15, 'casques audio', 'audio', 0),
(16, 'casques audio', 'audio', 0),
(17, 'casques audio', 'audio', 0),
(18, 'casques audio', 'audio', 0),
(19, 'micro cravate', 'audio', 0),
(20, 'micro cravate', 'audio', 0),
(21, 'micro cravate', 'audio', 0),
(22, 'zoom mp3', 'audio', 0),
(23, 'zoom mp3', 'audio', 0),
(24, 'zoom mp3', 'audio', 0),
(25, 'zoom mp3', 'audio', 0),
(26, 'reflecteur', 'eclairage', 0),
(27, 'reflecteur', 'eclairage', 0),
(28, 'Caméra Linux', 'video', 0),
(29, 'Spot LCD', 'lumiere', 0),
(30, 'Perche', 'accesoire', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`id_materiel`, `id_etudiant`, `id_reserver`, `date_debut`, `date_retour`, `quantite_reserver`) VALUES
(0, 0, 1, '2017-11-02', '2017-11-16', 0),
(0, 0, 2, '2017-11-02', '2017-11-16', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
