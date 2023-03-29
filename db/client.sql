-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 mars 2023 à 23:39
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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom_entreprise_ou_user` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `roles` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_entreprise_ou_user`, `domaine`, `pays`, `email`, `mot_de_passe`, `roles`) VALUES
(3, '', '', '', '', '', ''),
(7, 'tigo', 'télécommunications', 'Afrique_du_sud', 'tigo@gmail.com', '$2y$10$MN6U5dIK0xS1a', 'EN'),
(8, 'sonatel', 'télécommunications', 'Senegal', 'sonatel@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$QW1jVmZQYktnMy5ROUwubg$SqYw6VnRcVe7OfFHMmRvEIUosEBAtihE4tZuPoNOCkU', 'EN'),
(9, '3fpt', 'financier', 'Senegal', 'fp3tsenegal@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$M0d3UE9vaGxtN1F6a1ptSg$P4ZJwyoaol1VDO0AsQLyg8dMYPv/TZl1TuU46/m9r38', 'EN'),
(10, 'free', 'télécommunications', 'Senegal', '4free@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$WUNQYmF2ZjMuMFBscWZvTw$admwEK3VOC2j0B+DpZN8Q0WEHWckTHZDEOGD3/unbac', 'EN'),
(11, 'lsll', 'education', 'Senegal', 'lsll@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bWx0ZmU1U2ZoZVg0SU9sNw$5EUf8jAGs0Skh5d+SDwKVk4WVV9+6omR6yxcy+Z6YYM', 'EN'),
(12, 'diop', 'financier', 'Angola', 'diopsamba408@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Ylc1SkhJaGFoQzJHVzFyVA$YnYbjrh5nQqSv6H/eCG8aPIciI60N7Q7Mqz7xVhWQKI', 'EN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
