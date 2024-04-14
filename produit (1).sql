-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 avr. 2024 à 15:12
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pommestore`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int NOT NULL,
  `stock` int NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `stock`, `description`, `type`) VALUES
(1, 'MacPomme Pro Max + ', 1500, 12, 'Un pc de fou!!', 'Ordinateur'),
(2, 'MacPomme pro', 1000, 11, 'Un peut moins bien que le MacPomme Pro mais toujours cool!', 'Ordinateur'),
(3, 'MacPomme Normal', 800, 20, 'Un MacPomme classique, RAS.', 'Ordinateur'),
(4, 'MacPomme Pro -', 900, 15, 'Un MacPomme Pro plus petit, Rentrant dans tout les sacs!', 'Ordinateur'),
(5, 'MacPomme Pro Max²', 1700, 5, 'Un MacPomme Pro Max mais au carré!!', 'Ordinateur'),
(6, 'IPomme 24', 1000, 17, 'IPomme de dernière génération! ', 'Telephone'),
(7, 'IPomme 105 Pro Max +', 1050, 35, 'Un IPomme pour les gagnants, uniquement en vert #0A3633', 'Telephone'),
(8, 'IPomme 86', 860, 33, 'IPomme réservé pour les anciens', 'Telephone'),
(9, 'IPomme 51', 510, 65, 'IPomme avec 30 bon cotés mais 35 cotés négatifs', 'Telephone'),
(10, 'PommePad 12', 1000, 18, '12 ème génération des PommePad', 'Telephone'),
(11, 'Roulette Pomme', 700, 5, 'Roulette pour le MacPomme Pro Max +', 'Accessoires'),
(12, 'AirPomme 1', 140, 40, 'Ecouteurs sans fil première génération!', 'Accessoires'),
(13, 'AirPomme 2 Pro', 600, 20, 'Il a le même nom que nos écouteurs mais c\'est bien un casque!', 'Accessoires'),
(14, 'Pomme de pin', 10, 21, 'Une Pomme de pin produite dans nos laboratoires experts dans le domaine. ', 'Accessoires'),
(15, 'Chargeur', 30, 58, 'Chargeur pour vos appareils Pomme!', 'Accessoires');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
