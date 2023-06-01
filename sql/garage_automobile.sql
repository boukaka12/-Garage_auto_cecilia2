-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 01 juin 2023 à 07:29
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garage_automobile`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(100) DEFAULT NULL,
  `prenom_admin` varchar(100) DEFAULT NULL,
  `adresse_admin` varchar(100) DEFAULT NULL,
  `sexe_admin` char(1) DEFAULT NULL,
  `telephone_admin` int(30) DEFAULT NULL,
  `email_admin` varchar(100) DEFAULT NULL,
  `mot_de_pass_admin` varchar(100) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `adresse_admin`, `sexe_admin`, `telephone_admin`, `email_admin`, `mot_de_pass_admin`, `nom`) VALUES
(1, 'Parrot', 'Vincent', '9 bd Marengo, Toulouse, France', 'M', 586789456, 'parrot_vincent@gmail.com', 'parrotadmin123456', '');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(100) DEFAULT NULL,
  `prenom_client` varchar(100) DEFAULT NULL,
  `ville_client` varchar(100) DEFAULT NULL,
  `id_cont` int(11) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom_client`, `prenom_client`, `ville_client`, `id_cont`) VALUES
(1, 'Jean', 'François', 'Toulouse', 1),
(2, 'Paul', 'Samuel', 'Toulouse', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_cont` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cont` varchar(100) NOT NULL,
  `prenom_cont` varchar(100) NOT NULL,
  `email_cont` varchar(100) NOT NULL,
  `telephone_cont` varchar(100) NOT NULL,
  `message_cont` text,
  PRIMARY KEY (`id_cont`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_cont`, `nom_cont`, `prenom_cont`, `email_cont`, `telephone_cont`, `message_cont`) VALUES
(1, 'Boukaka', 'Cécilia', 'boukaka.ceciliaemmanuelle@gmail.com', '+33641230183', 'Bonjour!'),
(4, 'Bazolo', 'Beltrande', 'bazolo@gencongo.com', '0748230196', 'Bonjour!'),
(3, 'Mac', 'Duc', 'duc-mac@gmail.com', '+33689786321', 'Salut!'),
(5, 'Luc', 'Divin', 'luc@gmail.com', '+33689788743', 'Bonjour!'),
(6, 'Ruth', 'Merveille', 'ruth@gmail.com', '+33689786321', 'Salut!'),
(7, 'Grace', 'Gloire', 'gloire@gmail.com', '0641230183', 'Bonjour!'),
(9, 'Bazolo', 'Beltrande', 'bazolo@gencongo.com', '0748230196', 'Bonjour!');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id_emp` bigint(11) NOT NULL AUTO_INCREMENT,
  `nom_emp` varchar(100) DEFAULT NULL,
  `prenom_emp` varchar(100) DEFAULT NULL,
  `adresse_emp` varchar(100) DEFAULT NULL,
  `sexe_emp` char(1) DEFAULT NULL,
  `telephone_emp` int(30) DEFAULT NULL,
  `email_emp` varchar(100) DEFAULT NULL,
  `mot_de_pass_emp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id_emp`, `nom_emp`, `prenom_emp`, `adresse_emp`, `sexe_emp`, `telephone_emp`, `email_emp`, `mot_de_pass_emp`) VALUES
(1, 'Dumont', 'Jean', '2 rue du boulevard, Toulouse, France', 'M', 685749325, 'dumont_pierre@gmail.com', 'dumont123456'),
(2, 'Tanguy', 'Jean', '3 avenu saint-joseph, Toulouse, France', 'M', 587412354, 'tanguy_jean@gmail.com', 'tanguy123456'),
(3, 'Belvie', 'Héléna', '8 rue Gabriel Perri, Toulouse, France', 'F', 765485689, 'belvie_helena@gmail.com', 'belvie123456'),
(6, 'Boukaka', 'Cecilia Emmanuelle', '2 Pl. des Italiens, 91300 Massy, France', 'F', 641230183, 'boukaka.ceciliaemma@gmail.com', '123456'),
(7, 'Grace', 'Gloire', '17 rue des canadiens', 'F', 758170682, 'grace@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `gallerie`
--

DROP TABLE IF EXISTS `gallerie`;
CREATE TABLE IF NOT EXISTS `gallerie` (
  `id_gal` int(11) NOT NULL AUTO_INCREMENT,
  `photo_gal` blob,
  PRIMARY KEY (`id_gal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `horaires_ouvertures`
--

DROP TABLE IF EXISTS `horaires_ouvertures`;
CREATE TABLE IF NOT EXISTS `horaires_ouvertures` (
  `id_hr` int(11) NOT NULL AUTO_INCREMENT,
  `jours` varchar(100) DEFAULT NULL,
  `heure_matin` varchar(100) DEFAULT NULL,
  `heure_aprem` varchar(100) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_hr`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `horaires_ouvertures`
--

INSERT INTO `horaires_ouvertures` (`id_hr`, `jours`, `heure_matin`, `heure_aprem`, `id_admin`) VALUES
(1, 'Lundi', '8h30 - 12h30', '14h00 - 18h00', 1),
(2, 'Mardi', '8h30 - 12h30', '14h00 - 18h00', 1),
(3, 'Mercredi', '8h30 - 12h30', '14h00 - 18h00', 1),
(4, 'Jeudi', '8h30 - 12h30', '14h00 - 18h00', 1),
(5, 'Vendredi', '8h30 - 12h30', '14h00 - 18h00', 1),
(6, 'Samedi', '8h30 - 14h00', NULL, 1),
(7, 'Dimanche', '8h30 - 12h30', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_serv` int(11) NOT NULL AUTO_INCREMENT,
  `type_de_services` text,
  `description_de_services` text,
  PRIMARY KEY (`id_serv`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_serv`, `type_de_services`, `description_de_services`) VALUES
(1, 'Réparation de la carrosserie', 'Remplacement, débosselage, redressage, peinture, mastic.'),
(2, 'Réparation de la mécanique', 'Dépannage, Assistance, Remorquage, Rapatriement - Intervention Rapide.'),
(3, 'Vente de véhicules d\'occasion', 'Achetez votre véhicule d\'occasion en ligne avec une garantie allant jusqu\'à 36 mois.'),
(4, 'Entretien régulier', 'Vidanger l\'huile moteur, Changement du filtre à huile, Changement du filtre à pollen (filtre d\'habitacle), 10 000 km en milieu urbain et 25 000 km en zone rurale, Vérification à l\'oeil nu des disques et plaquettes de freins, Contrôler l\'état de la batterie sans la débrancher si il s\'agit d\'une voiture récente car l\'auto pourrait alors être immobilisée par l\'anti-démarrage.');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

DROP TABLE IF EXISTS `societe`;
CREATE TABLE IF NOT EXISTS `societe` (
  `nom_soc` varchar(50) NOT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `activite` text,
  PRIMARY KEY (`nom_soc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `societe`
--

INSERT INTO `societe` (`nom_soc`, `pays`, `ville`, `activite`) VALUES
('1', 'France', 'Toulouse', 'Réparation carrosserie,\r\nRéparation mécanique,\r\nEntretien véhicules,\r\nVente de voitures d\'occasion.');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

DROP TABLE IF EXISTS `temoignages`;
CREATE TABLE IF NOT EXISTS `temoignages` (
  `id_tem` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tem` varchar(100) DEFAULT NULL,
  `prenom_tem` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id_tem`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`id_tem`, `nom_tem`, `prenom_tem`, `message`) VALUES
(1, 'Sita', 'Prince', 'Bonjour!\r\nMerci, je vous conseille ce garage.'),
(2, 'Delphine', 'Grace', 'Bonjour!\r\n\r\nJe suis ravi de la qualités de votre garage.'),
(3, 'Emma', 'cecilia', 'Très satisfaite '),
(8, 'Luc', 'Divin', 'Très satisfait!');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_ut` bigint(20) NOT NULL AUTO_INCREMENT,
  `email_ut` varchar(100) DEFAULT NULL,
  `mot_de_passe_ut` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_ut`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_ut`, `email_ut`, `mot_de_passe_ut`) VALUES
(1, 'dumont_pierre@gmail.com\r\n', 'dumont123456');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `immatricule_veh` varchar(100) NOT NULL,
  `couleur` varchar(30) DEFAULT NULL,
  `modele_veh` varchar(100) DEFAULT NULL,
  `prix_veh` decimal(10,0) DEFAULT NULL,
  `description_veh` text,
  `kilometrage_veh` decimal(10,0) DEFAULT NULL,
  `annee_circulation_veh` date DEFAULT NULL,
  `type_de_moteur_veh` varchar(100) DEFAULT NULL,
  `nbre_de_places_veh` int(20) DEFAULT NULL,
  PRIMARY KEY (`immatricule_veh`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`immatricule_veh`, `couleur`, `modele_veh`, `prix_veh`, `description_veh`, `kilometrage_veh`, `annee_circulation_veh`, `type_de_moteur_veh`, `nbre_de_places_veh`) VALUES
('BG-785-JN', 'Verte', 'Renault', '6800', 'Voiture d\'occasion ', '175223', '2007-11-13', 'Carburant', 5),
('NH-584-OP', 'Rouge', 'Renauld', '7100', 'Voiture d\'occasion', '175223', '2016-05-04', 'Diesel', 5),
('BG-584-TY', 'Grise', 'Opel', '7200', 'Voiture d\'occasion', '185223', '2015-09-22', 'Diésel', 4),
('TR-567-DF', 'Bleue', 'Opel', '7500', 'Voiture d\'occasion', '189450', '2014-05-28', 'Carburant', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
