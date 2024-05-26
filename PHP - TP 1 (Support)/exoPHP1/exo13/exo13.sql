-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 15 jan. 2022 à 11:51
-- Version du serveur :  10.3.32-MariaDB-1:10.3.32+maria~focal
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tests`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `genre` enum('H','F') NOT NULL DEFAULT 'H',
  `role` enum('admin','client') NOT NULL DEFAULT 'client',
  `telephone` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `email`, `pass`, `nom`, `prenom`, `genre`, `role`, `telephone`) VALUES
(10, 'john@doe.com', 'b61a6d542f9036550ba9c401c80f00ef', 'DOE', 'John', 'H', 'client', ''),
(11, 'qsdfsqdf@qsdfqdf.com', 'b61a6d542f9036550ba9c401c80f00ef', 'qdsqsd', 'qsdfsqdf', 'H', 'client', ''),
(16, 'zolo@hamid.com', 'b61a6d542f9036550ba9c401c80f00ef', 'ZOLO', 'Hamid', 'H', 'admin', ''),
(18, 'hiba@bellaly.com', '4293bdc3303878f9951cea3ce72cffba', 'BELLALY', 'Hiba', 'F', 'client', ''),
(19, 'naoual@chikhi.com', '4293bdc3303878f9951cea3ce72cffba', 'CHIKHI ', 'Naoual', 'F', 'client', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
