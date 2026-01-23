-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 23 jan. 2026 à 09:49
-- Version du serveur : 8.0.44-0ubuntu0.24.04.1
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Caméra`
--

-- --------------------------------------------------------

--
-- Structure de la table `Camebase`
--

CREATE TABLE `Camebase` (
  `id_cam` int NOT NULL,
  `posx_cam` int NOT NULL,
  `posy_cam` int NOT NULL,
  `ville_cam` text NOT NULL,
  `id_util` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Camebase`
--
ALTER TABLE `Camebase`
  ADD PRIMARY KEY (`id_cam`),
  ADD KEY `id_util` (`id_util`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Camebase`
--
ALTER TABLE `Camebase`
  ADD CONSTRAINT `Camebase_ibfk_1` FOREIGN KEY (`id_util`) REFERENCES `utilisateurs` (`id_util`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
