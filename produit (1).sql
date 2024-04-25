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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `stock`, `description`, `type`) VALUES
(1, 'Pinky Promise', 1500, 12, 'Un pc de fou!!', 'Rose'),
(2, 'Spicy Sip', 1000, 11, 'Un peut moins bien que le MacPomme Pro mais toujours cool!', 'Rose'),
(3, 'Crazy Craft', 800, 20, 'Un MacPomme classique, RAS.', 'Rose'),
(4, 'Cherry Cheers', 900, 15, 'Un MacPomme Pro plus petit, Rentrant dans tout les sacs!', 'Rose'),
(5, 'Berlin Booze', 1700, 5, 'Un MacPomme Pro Max mais au carré!!', 'Rose'),
(6, 'Fresh Foam', 1000, 17, 'IPomme de dernière génération! ', 'Bleue'),
(7, 'Drowned Drink', 1050, 35, 'Un IPomme pour les gagnants, uniquement en vert #0A3633', 'Bleue'),
(8, 'Calm Cup', 860, 33, 'IPomme réservé pour les anciens', 'Bleue'),
(9, 'OceanOil', 510, 65, 'IPomme avec 30 bon cotés mais 35 cotés négatifs', 'Bleue'),
(10, 'RomeAroma', 1000, 18, '12 ème génération des PommePad', 'Bleue'),
(11, 'Bestial Beverage', 700, 5, 'Roulette pour le MacPomme Pro Max +', 'Verte'),
(12, 'Wild Wheat', 140, 40, 'Ecouteurs sans fil première génération!', 'Verte'),
(13, 'Guilty Glass', 600, 20, 'Il a le même nom que nos écouteurs mais c\'est bien un casque!', 'Verte'),
(14, 'Jungle Jar', 10, 21, 'Une Pomme de pin produite dans nos laboratoires experts dans le domaine. ', 'Verte'),
(15, 'Lagos Lager', 30, 58, 'Chargeur pour vos appareils Pomme!', 'Verte');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
