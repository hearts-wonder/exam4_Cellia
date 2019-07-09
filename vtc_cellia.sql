-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 09 juil. 2019 à 17:33
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vtc_cellia`
--
CREATE DATABASE IF NOT EXISTS `vtc_cellia` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `vtc_cellia`;

-- --------------------------------------------------------

--
-- Structure de la table `association_vehicule_conducteur`
--

CREATE TABLE `association_vehicule_conducteur` (
  `id_association` int(11) NOT NULL,
  `id_vehicule` int(11) NOT NULL,
  `id_conducteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `association_vehicule_conducteur`
--

INSERT INTO `association_vehicule_conducteur` (`id_association`, `id_vehicule`, `id_conducteur`) VALUES
(1, 501, 1),
(2, 502, 2),
(3, 503, 3),
(4, 504, 4),
(5, 501, 3),
(11, 507, 2),
(12, 507, 2),
(13, 507, 2),
(14, 507, 2);

-- --------------------------------------------------------

--
-- Structure de la table `conducteur`
--

CREATE TABLE `conducteur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `conducteur`
--

INSERT INTO `conducteur` (`id`, `prenom`, `nom`) VALUES
(1, 'Julien', 'Avigny'),
(2, 'Morgane', 'Alamia'),
(3, 'Philippe', 'Pandre'),
(4, 'Amelie', 'Blondelle'),
(5, 'Alex', 'Richy'),
(11, 'Squall', 'Lina');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `marque` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `modele` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `couleur` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `immatriculation` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `marque`, `modele`, `couleur`, `immatriculation`) VALUES
(501, 'Peugeot', '807', 'noir', 'AB-355-CA'),
(502, 'Citroen', 'C8', 'bleu', 'CE-122-AE'),
(503, 'Mercedes', 'C1s', 'vert', 'FG-953-HI'),
(504, 'Volkswagen', 'Touran', 'noir', 'So-322-NV'),
(505, 'Skoda', 'Octavia', 'gris', 'PB-631-TK'),
(506, 'Volkswagen', 'Passat', 'gris', 'XN-973-MM');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `association_vehicule_conducteur`
--
ALTER TABLE `association_vehicule_conducteur`
  ADD PRIMARY KEY (`id_association`);

--
-- Index pour la table `conducteur`
--
ALTER TABLE `conducteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `association_vehicule_conducteur`
--
ALTER TABLE `association_vehicule_conducteur`
  MODIFY `id_association` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `conducteur`
--
ALTER TABLE `conducteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
