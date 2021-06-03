-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 03 juin 2021 à 13:46
-- Version du serveur :  5.5.62-log
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `assistetu`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

DROP TABLE IF EXISTS `appartient`;
CREATE TABLE IF NOT EXISTS `appartient` (
  `idMatiere` int(11) NOT NULL DEFAULT '0',
  `idTheme` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idMatiere`,`idTheme`),
  KEY `idTheme` (`idTheme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conseils`
--

DROP TABLE IF EXISTS `conseils`;
CREATE TABLE IF NOT EXISTS `conseils` (
  `idConseil` int(11) NOT NULL AUTO_INCREMENT,
  `contenuConseil` varchar(240) DEFAULT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idConseil`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conseils`
--

INSERT INTO `conseils` (`idConseil`, `contenuConseil`, `idUtilisateur`) VALUES
(3, 'Pour les mathématiques, il faut bien reproduire les exercices à la maison afin de bien les assimiler ! ', 4),
(4, 'Écouter en cours c\'es retenir plus de la moitié de la leçon ! ', 6),
(7, 'Ne dormez pas trop tard, afin de bien retenir ses cours vous devez avoir un rythme de sommeil normal', 6),
(8, 'Venez aux réunions de révisions ! On s\'aide vraiment et pour ma part cela m\'a été efficace ', 5);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `idUtilisateur` int(11) NOT NULL DEFAULT '0',
  `idMatiere` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUtilisateur`,`idMatiere`),
  KEY `idMatiere` (`idMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvenement` int(11) NOT NULL AUTO_INCREMENT,
  `dateEvenement` date DEFAULT NULL,
  `idLieu` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idEvenement`),
  KEY `idLieu` (`idLieu`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `idForum` int(11) NOT NULL AUTO_INCREMENT,
  `Tchat` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idForum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `idLieu` int(11) NOT NULL AUTO_INCREMENT,
  `libelleVille` varchar(120) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLieu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`idLieu`, `libelleVille`, `codePostal`) VALUES
(1, 'Montbéliard', 25200);

-- --------------------------------------------------------

--
-- Structure de la table `maitrise`
--

DROP TABLE IF EXISTS `maitrise`;
CREATE TABLE IF NOT EXISTS `maitrise` (
  `idUtilisateur` int(11) NOT NULL DEFAULT '0',
  `idMatiere` int(11) NOT NULL DEFAULT '0',
  `libelleMatiereMaitrise` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idMatiere`),
  KEY `idMatiere` (`idMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMatiere` varchar(120) DEFAULT NULL,
  `idForum` int(11) NOT NULL,
  PRIMARY KEY (`idMatiere`),
  KEY `idForum` (`idForum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `idUtilisateur` int(11) NOT NULL DEFAULT '0',
  `idUtilisateur_1` int(11) NOT NULL DEFAULT '0',
  `Note` int(11) DEFAULT NULL,
  `commentaireNote` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idUtilisateur_1`),
  KEY `idUtilisateur_1` (`idUtilisateur_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

DROP TABLE IF EXISTS `participe`;
CREATE TABLE IF NOT EXISTS `participe` (
  `idEvenement` int(11) NOT NULL DEFAULT '0',
  `idUtilisateur` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idEvenement`,`idUtilisateur`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `passion`
--

DROP TABLE IF EXISTS `passion`;
CREATE TABLE IF NOT EXISTS `passion` (
  `idPassion` int(11) NOT NULL AUTO_INCREMENT,
  `libellePassion` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idPassion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `possede_`
--

DROP TABLE IF EXISTS `possede_`;
CREATE TABLE IF NOT EXISTS `possede_` (
  `idUtilisateur` int(11) NOT NULL DEFAULT '0',
  `idPassion` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUtilisateur`,`idPassion`),
  KEY `idPassion` (`idPassion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `idTheme` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTheme` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idTheme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(120) DEFAULT NULL,
  `Prenom` varchar(120) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Pseudo` varchar(120) DEFAULT NULL,
  `AdresseMail` varchar(120) DEFAULT NULL,
  `MotDePasse` varchar(120) DEFAULT NULL,
  `Professeur` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `Nom`, `Prenom`, `Age`, `Pseudo`, `AdresseMail`, `MotDePasse`, `Professeur`) VALUES
(4, 'Dimont', 'Aurélien', 40, 'AureDimon', 'aurelien.dimont@gmail.com', 'blabla', 1),
(5, 'Gaubert', 'Camille', 38, 'Camille.Gaubert', 'Camille.gaubert@gmail.com', 'blabla', 1),
(6, 'Abbadie', 'Patrice', 45, 'PAbbadie', 'Patrcie.Abbadie@gmail.com', 'blabla', 1),
(7, 'Bellegrade', 'Colin', 18, 'Colin.Blgd', 'Colin/blgd@gmail.com', 'blabla', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_ibfk_1` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`),
  ADD CONSTRAINT `appartient_ibfk_2` FOREIGN KEY (`idTheme`) REFERENCES `theme` (`idTheme`);

--
-- Contraintes pour la table `conseils`
--
ALTER TABLE `conseils`
  ADD CONSTRAINT `conseils_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `demande_ibfk_2` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`idLieu`) REFERENCES `localisation` (`idLieu`),
  ADD CONSTRAINT `evenement_ibfk_2` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `maitrise`
--
ALTER TABLE `maitrise`
  ADD CONSTRAINT `maitrise_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `maitrise_ibfk_2` FOREIGN KEY (`idMatiere`) REFERENCES `matiere` (`idMatiere`);

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`idForum`) REFERENCES `forum` (`idForum`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`idUtilisateur_1`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`idEvenement`) REFERENCES `evenement` (`idEvenement`),
  ADD CONSTRAINT `participe_ibfk_2` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `possede_`
--
ALTER TABLE `possede_`
  ADD CONSTRAINT `possede__ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `possede__ibfk_2` FOREIGN KEY (`idPassion`) REFERENCES `passion` (`idPassion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
