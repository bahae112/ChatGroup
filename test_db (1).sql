-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 17 mai 2020 à 00:35
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `emetteur` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `message`, `emetteur`, `date`) VALUES
(6, 'salut', 'laaznaziha@gmail.com', '2020-04-26 05:10:20'),
(7, 'slt', 'laazn@gmail.com', '2020-04-26 10:28:51'),
(8, 'cv', 'laaznaziha@gmail.com', '2020-04-26 10:30:33'),
(9, 'dacc', 'laaznaziha@gmail.com', '2020-04-26 10:39:30'),
(10, 'test', 'laaznaziha@gmail.com', '2020-04-26 11:09:14'),
(11, 'hgfhg', 'nouhaila@gmail.com', '2020-05-01 17:40:36'),
(12, 'ghfh', 'nouhaila@gmail.com', '2020-05-01 17:41:13'),
(13, '', 'nouhaila@gmail.com', '2020-05-01 17:41:37'),
(14, 'jhgjh', 'nouhaila@gmail.com', '2020-05-01 17:42:03'),
(15, 'dfxfd', 'nouhaila@gmail.com', '2020-05-01 17:42:07'),
(16, 'salut ', 'laaznaziha@gmail.com', '2020-05-15 00:52:24'),
(17, 'salut', 'laaznaziha@gmail.com', '2020-05-14 22:54:20'),
(18, 'cc', 'laaznaziha@gmail.com', '2020-05-14 23:36:06'),
(19, 'cc', 'laaznaziha@gmail.com', '2020-05-14 23:37:54'),
(20, 'cc', 'laaznaziha@gmail.com', '2020-05-14 23:38:02'),
(21, 'slt', 'laaznaziha@gmail.com', '2020-05-14 23:40:01');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `visibility` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `password`, `name`, `birthdate`, `telephone`, `visibility`, `website`, `description`) VALUES
('laazn@gmail.com', '12345', 'Naziha Laaz', '2020-04-09', '0643632255', 2, 'http://nazihalaaz.com', 'test'),
('laaznaziha@gmail.com', '1234', 'laaz naziha', '2018-04-05', '0643632255', 1, 'http://nazihalaaz.com', 'blabla'),
('nouhaila@gmail.com', '1234', 'nouhaila', '2020-05-06', '0643632255', 1, 'http://nazihalaaz.com', 'EEEE'),
('test@gmail.com', '123', 'test1', '2020-04-07', '064', 1, 'http://test.com', 'test'),
('utilisateur_1', 'pass1', 'utilisateur', '1991', '000000000', 0, '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emetteur` (`emetteur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`emetteur`) REFERENCES `utilisateur` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
