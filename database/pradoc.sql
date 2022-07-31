-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 juil. 2022 à 16:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pradoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `uid` int(30) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `cpwd` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `loc` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`uid`, `name`, `fname`, `email`, `pwd`, `cpwd`, `tel`, `loc`, `pays`, `date`, `time`) VALUES
(1, 'alaise tchindou', 'alaise', 'tchindoualaise02@gmail.com', 'Altc02', '', '22890814785', 'lome', '', '0000-00-00', '00:00:00.000000'),
(2, 'tchindou', 'allal', 'tchindoualaise167@gmail.com', 'Altc02', '', '22890814785', 'lome', '', '0000-00-00', '00:00:00.000000'),
(3, 'tchindou', 'alaise', 'appcoding03@gmail.com', 'Alaise02', '', '22890814785', 'lome', '', '0000-00-00', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `usertable`
--

CREATE TABLE `usertable` (
  `code` int(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
