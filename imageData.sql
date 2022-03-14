-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 14 mars 2022 à 17:16
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imageData`
--

-- --------------------------------------------------------

--
-- Structure de la table `imageData`
--

CREATE TABLE `imageData` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `extension` varchar(4) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `imageData`
--

INSERT INTO `imageData` (`id`, `name`, `extension`, `size`) VALUES
(0, 'SisiSurprise', 'jpg', 1491277),
(1, 'LanaPose', 'jpg', 1710993),
(2, 'BobEtSaMaman', 'jpg', 0),
(3, 'LanaDort', 'jpg', 1750322),
(4, 'VisageDeNikki', 'jpg', 0),
(5, 'BobReve', 'JPG', 1895377),
(6, 'NikkiNoel', 'JPG', 0),
(7, 'SisiFaitLaBelle', 'JPG', 2044917),
(8, 'LanaEnReflexion', 'jpg', 0),
(9, 'SisiEtBob', 'jpeg', 242232),
(10, 'LanaDort', 'jpeg', 299160),
(11, 'NikkiObserve', 'jpeg', 272827),
(12, 'BobFaitLeBeau', 'jpeg', 276528),
(13, 'SisiEtSaMaman', 'jpeg', 324965),
(14, 'Lala', 'jpeg', 256819),
(15, 'LeLitDeNikki', 'jpeg', 347309),
(16, 'SisiLImperatrice', 'jpeg', 155053);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
