-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 08 avr. 2023 à 20:26
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appointment_system`
--

-- --------------------------------------------------------

--
-- Structure de la table `infos_exiger_du_rv`
--

CREATE TABLE `infos_exiger_du_rv` (
  `id` int(11) NOT NULL,
  `id_rv` int(11) NOT NULL,
  `prenom` varchar(2) DEFAULT NULL,
  `nom` varchar(2) DEFAULT NULL,
  `date_de_naissance` varchar(2) DEFAULT NULL,
  `lieu_de_naissance` varchar(2) DEFAULT NULL,
  `genre` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `cni` varchar(255) NOT NULL,
  `mail` varchar(2) DEFAULT NULL,
  `heure_convocation` varchar(255) DEFAULT NULL,
  `date_convocation` date DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `lieu_rv` varchar(255) NOT NULL,
  `total_places` bigint(20) NOT NULL,
  `acces` int(11) NOT NULL,
  `autre1` varchar(255) NOT NULL,
  `autre2` varchar(255) NOT NULL,
  `autre3` varchar(255) NOT NULL,
  `autre4` varchar(255) NOT NULL,
  `autre5` varchar(255) NOT NULL,
  `autre6` varchar(255) NOT NULL,
  `autre7` varchar(255) NOT NULL,
  `autre8` varchar(255) NOT NULL,
  `autre9` varchar(255) NOT NULL,
  `autre10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infos_exiger_du_rv`
--

INSERT INTO `infos_exiger_du_rv` (`id`, `id_rv`, `prenom`, `nom`, `date_de_naissance`, `lieu_de_naissance`, `genre`, `pays`, `cni`, `mail`, `heure_convocation`, `date_convocation`, `date_debut`, `date_expiration`, `lieu_rv`, `total_places`, `acces`, `autre1`, `autre2`, `autre3`, `autre4`, `autre5`, `autre6`, `autre7`, `autre8`, `autre9`, `autre10`) VALUES
(3, 3, '', '', '', '', '', '', '', '', '', NULL, '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '', '', '', '', '', ''),
(143, 10, '1', '1', '1', '1', '1', '0', '0', '1', '23:30', '2023-05-03', '2023-03-23', '2023-04-08', 'Dakar', 432, 1, '', '', '', '', '', '', '', '', '', ''),
(153, 8, '1', '1', '0', '0', '0', '0', '0', '1', '14:30', '2023-05-11', '2023-04-07', '2023-05-07', 'Dakar', 25, 1, '', '', '', '', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infos_exiger_du_rv`
--
ALTER TABLE `infos_exiger_du_rv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rv` (`id_rv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infos_exiger_du_rv`
--
ALTER TABLE `infos_exiger_du_rv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `infos_exiger_du_rv`
--
ALTER TABLE `infos_exiger_du_rv`
  ADD CONSTRAINT `infos_exiger_du_rv_ibfk_1` FOREIGN KEY (`id_rv`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
