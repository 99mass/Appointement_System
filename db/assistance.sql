-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 avr. 2023 à 19:28
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
-- Structure de la table `assistance`
--

CREATE TABLE `assistance` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `reponse_admin` varchar(255) NOT NULL,
  `traiter` int(11) NOT NULL,
  `date_message` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `assistance`
--

INSERT INTO `assistance` (`id`, `email`, `message`, `reponse_admin`, `traiter`, `date_message`) VALUES
(1, 'sambadiop161@gmail.com', 'Bienvenue sur notre plateforme de gestion de rendez-vous ! Nous sommes là pour vous aider à gérer efficacement votre temps et vos rendez-vous. Si vous avez des questions, des commentaires ou des suggestions\r\n', 'ok merci', 1, '2023-04-04 17:26:36'),
(2, 'ernest@gmail.com', 'Merci de visiter notre plateforme, et n\'hésitez pas à nous contacter pour toute question ou demande d\'information supplémentaire.', '', 0, '2023-04-04 17:26:17'),
(3, 'pikine@gmail.com', 'vons pour ambition de devenir un leader dans le domaine des Technologies de l\'Information et de la Communication.', '', 0, '2023-04-04 17:26:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assistance`
--
ALTER TABLE `assistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
