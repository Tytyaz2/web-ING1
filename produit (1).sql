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
(1, 'Pinky Promise',2.99, 12, 'Cette bière vous promettra une nuit folle (mais ça reste entre vous)', 'Rose'),
(2, 'Spicy Sip', 4.99, 11, 'Une bière qui vous réserve de piquantes surprises', 'Rose'),
(3, 'Crazy Craft', 4.49, 20, 'Une bière dont la confection artisanale rendra vos soirées géniales', 'Rose'),
(4, 'Cherry Cheers', 3.99, 15, 'Son goût aux cerises titillera vos papilles', 'Rose'),
(5, 'Berlin Booze', 4.99, 5, 'Cette bière saura vous faire penser aux sempiternelles soirées de Berlin', 'Rose'),
(6, 'Fresh Foam', 2.49, 17, 'La fraicheur de cette bière égale même les eaux les plus pures', 'Bleue'),
(7, 'Drowned Drink', 2.99, 35, 'Laissez vous noyer sous une avalanche de saveurs', 'Bleue'),
(8, 'Calm Cup', 2.49, 33, 'De quoi passer un moment des plus agréables', 'Bleue'),
(9, 'OceanOil', 3.99, 65, 'Une bière à consommer sur la plage... ou en plein milieu des océans', 'Bleue'),
(10, 'RomeAroma', 4.99, 18, 'Une bière qui vous rappelera le calme des rues de Rome, la ville éternelle', 'Bleue'),
(11, 'Bestial Beverage', 3.49, 5, 'Une bière qui fera de vous une bête', 'Verte'),
(12, 'Wild Wheat', 4.49, 40, 'Une bière qui ravivera vos instincts les plus sauvages', 'Verte'),
(13, 'Guilty Glass', 2.49, 20, 'Ne vous sentez pas coupable de ne boire plus que ça', 'Verte'),
(14, 'Jungle Jar', 3.99, 21, 'Les instincts de la jungle surgiront de cette bière', 'Verte'),
(15, 'Lagos Lager', 4.99, 58, 'La boire vous fera vous sentir dans les rues de la belle Lagos', 'Verte');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
