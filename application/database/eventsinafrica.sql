-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 20 juin 2019 à 09:59
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eventsinafrica`
--

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(255) NOT NULL,
  `login_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detailfoods`
--

DROP TABLE IF EXISTS `detailfoods`;
CREATE TABLE IF NOT EXISTS `detailfoods` (
  `id_lieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prix_total` decimal(12,2) NOT NULL,
  `qte` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_food` int(10) UNSIGNED NOT NULL,
  `state` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_lieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_event` varchar(25) NOT NULL,
  `description_event` varchar(255) NOT NULL,
  `categorie_event` varchar(255) NOT NULL,
  `date_eventdebut` date NOT NULL,
  `heure_eventdebut` time NOT NULL,
  `date_eventfin` date NOT NULL,
  `heure_eventfin` time NOT NULL,
  `prix_participation` decimal(12,2) UNSIGNED NOT NULL,
  `createAt` datetime NOT NULL,
  `id_lieu` int(10) UNSIGNED NOT NULL,
  `id_sponsor` int(10) UNSIGNED NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id_food` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_food` varchar(255) NOT NULL,
  `prix_food` decimal(12,2) NOT NULL,
  `createAt` datetime NOT NULL,
  `id_catfood` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_food`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

DROP TABLE IF EXISTS `lieux`;
CREATE TABLE IF NOT EXISTS `lieux` (
  `id_lieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_lieu` varchar(255) NOT NULL,
  `adresse_lieu` varchar(255) NOT NULL,
  `nbreplace_lieu` int(10) UNSIGNED NOT NULL,
  `createAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_lieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id_participant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_event` int(10) UNSIGNED NOT NULL,
  `nom_participant` varchar(255) NOT NULL,
  `telephone_participant` varchar(255) NOT NULL,
  `email_participant` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_participant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
  `id_place` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description_place` varchar(255) NOT NULL,
  `etat_place` int(10) UNSIGNED NOT NULL,
  `createAt` datetime NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_place`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id_sponsor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_sponsor` varchar(255) NOT NULL,
  `logo_sponsor` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_sponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
