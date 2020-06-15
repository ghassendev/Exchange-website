-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 10 déc. 2019 à 13:51
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mini`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `datenaissance` date NOT NULL,
  `telephone` int(20) NOT NULL,
  `motpasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`Nom`, `Prenom`, `Email`, `datenaissance`, `telephone`, `motpasse`) VALUES
('admin', 'admin', 'admin', '0000-00-00', 0, 'admin'),
('gharsseloui', 'ghassen', 'ghassen@gmail.com', '1997-12-29', 24788090, 'ghassen'),
('ghaas', 'ssen', 'ghassengharsseloui@gmail.com', '2021-04-02', 72666444, '$2y$10$Dl0FQ.IZfRf/HM66bPYHgeJtZaQK3tE26Fn9sK8vZ7hXfl6GoftjG');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `sujet` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `par` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `type`, `sujet`, `date`, `par`) VALUES
(33, '', '', '2019-12-05', 'ghassen'),
(34, 'USD', 'dollar augmente', '2019-12-05', 'ghassen'),
(37, 'gha', 'ghj', '2019-12-07', 'fedighaston'),
(40, 'usd', 'cest malheureux\r\n', '2019-12-07', 'ghaston'),
(41, 'usd', 'cest malheureux\r\n', '2019-12-07', 'ghaston'),
(44, 'usd', 'dollae ', '2019-12-07', 'ghassen'),
(45, 'USD', 'ajoutee', '2019-12-07', 'ghassen'),
(46, 'USD', 'ajoutee', '2019-12-07', 'ghassen');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`Email`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
