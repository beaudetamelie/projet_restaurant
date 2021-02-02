-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 jan. 2021 à 18:26
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `menu_restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `allergene`
--

CREATE TABLE `allergene` (
  `id_allergene` int(11) NOT NULL,
  `nomAllergene` varchar(200) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `allergene`
--

INSERT INTO `allergene` (`id_allergene`, `nomAllergene`) VALUES
(1, 'Arachide '),
(2, 'Lait '),
(3, 'Poisson '),
(4, 'Œuf ');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nomMenu` varchar(200) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nomMenu`, `prix`) VALUES
(1, 'Terroir', 24),
(2, 'Tradition', 30);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id_plat` int(10) NOT NULL,
  `nomPlat` varchar(200) NOT NULL,
  `prix` float NOT NULL,
  `vegetarien` int(11) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id_plat`, `nomPlat`, `prix`, `vegetarien`, `type`) VALUES
(1, 'Croustillant de fourme d’Ambert aux poires et noix', 11, 1, 'entree'),
(2, 'Moelleux de topinambours, salade au magret séché', 12.5, 0, 'entree'),
(3, 'Foie gras de canard mi cuit aux figues moelleuses', 16, 0, 'entree'),
(4, 'Consommé de canard aux ravioles du Dauphiné, Espuma au lard fumé', 14, 0, 'entree'),
(5, 'Cuisse de canard mijotée à la bière', 15.5, 0, 'plat'),
(6, 'Filet d’églefin, fondue de poireaux', 16.5, 0, 'plat'),
(7, 'Aumônière en feuille de choux, farcie au ris et épaule de veau confite', 18.5, 0, 'plat'),
(8, 'Filet de sandre meunière, coulis de cresson et spiruline', 19, 0, 'plat'),
(9, 'Fromage blanc faisselle', 5, 1, 'dessert'),
(10, 'Cervelle de canut', 5.5, 1, 'dessert'),
(11, 'Ardoise de fromages secs', 6, 1, 'dessert'),
(12, 'Glace', 6.5, 1, 'dessert');

-- --------------------------------------------------------

--
-- Structure de la table `plat_allergene`
--

CREATE TABLE `plat_allergene` (
  `id_plat` int(11) NOT NULL,
  `id_allergene` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat_allergene`
--

INSERT INTO `plat_allergene` (`id_plat`, `id_allergene`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 4),
(5, 1),
(6, 3),
(7, 1),
(8, 3),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `plat_menu`
--

CREATE TABLE `plat_menu` (
  `id_plat` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat_menu`
--

INSERT INTO `plat_menu` (`id_plat`, `id_menu`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 1),
(6, 1),
(7, 2),
(8, 2),
(9, 1),
(10, 1),
(11, 2),
(12, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `allergene`
--
ALTER TABLE `allergene`
  ADD PRIMARY KEY (`id_allergene`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id_plat`);

--
-- Index pour la table `plat_allergene`
--
ALTER TABLE `plat_allergene`
  ADD KEY `id_plat` (`id_plat`,`id_allergene`),
  ADD KEY `id_allergene` (`id_allergene`);

--
-- Index pour la table `plat_menu`
--
ALTER TABLE `plat_menu`
  ADD KEY `id_plat` (`id_plat`,`id_menu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `allergene`
--
ALTER TABLE `allergene`
  MODIFY `id_allergene` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id_plat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plat_allergene`
--
ALTER TABLE `plat_allergene`
  ADD CONSTRAINT `plat_allergene_ibfk_1` FOREIGN KEY (`id_allergene`) REFERENCES `allergene` (`id_allergene`),
  ADD CONSTRAINT `plat_allergene_ibfk_2` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id_plat`);

--
-- Contraintes pour la table `plat_menu`
--
ALTER TABLE `plat_menu`
  ADD CONSTRAINT `plat_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `plat_menu_ibfk_2` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id_plat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
