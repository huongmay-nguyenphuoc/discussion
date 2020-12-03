-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 déc. 2020 à 21:10
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(1, 'Quelqu\'un connaît un bon affuteur de sabre ?', 1, '2020-12-02'),
(2, 'Hello, quelqu\'un peut me répondre ? \r\n', 1, '2020-12-02'),
(3, 'Bonjour à tous, je suis un jeune rat samourai. J\'espère pouvoir rencontrer des amis ici !', 3, '2020-12-02'),
(5, 'Hey, salut @parisianRat ! Bienvenue parmi nous', 1, '2020-12-02'),
(6, 'Merci pour ce chaleureux accueil, ratdu13. D\'ailleurs, je connais un maître en sabres, un vieux rat des campagnes.', 3, '2020-12-02'),
(7, 'Tu veux son adresse ?', 3, '2020-12-02'),
(8, 'Bonsoir ! J\'aimerais avoir une réponse moi aussi :D\r\n', 8, '2020-12-02'),
(9, 'Bonjour, est-ce que je peux avoir les coordonnées du vieux rat des campagnes s\'il te plait ? Sinon des adresses pour des bonnes graines ?', 9, '2020-12-02'),
(11, 'Bonsoir, je suis le vieux rat des campagnes :)', 10, '2020-12-03'),
(13, 'Hello vieuxrat! Vous affûtez toujours les sabres ? ^^', 1, '2020-12-03');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'ratdu13', '$2y$10$pJmVuqz1rO8VdEontvakAuw/34ALg0vLOcyE4XPbnwnpqtLkWK.yy'),
(3, 'parisianRat', '$2y$10$tTHClLEdYW1ms2HmQRilVuoaOBiIm0qDzRpsKO96Cwl482kXzTXXW'),
(4, 'montpelRat', '$2y$10$8ALOWXKpvl5E4apDKj3iZuYI5QzLPgzCAVHTpgksVU0ddLTCKYz3e'),
(8, 'ratdeschamps', '$2y$10$hV3Cr9wihk6RJYPRXjupGO11NgIzJW1GnuB.UwPY.g3OZYWQCQZzG'),
(9, 'mrkaRATe', '$2y$10$p4VpOt5CUaUbgcztOd3vOeNm9fRg9jDoIGxANvPMZzK3kmpdpz47K'),
(7, 'loveRat', '$2y$10$4dtMsWQR3oXIPDT59QdcCOmVhXJEk7.ZiTb0HHmSY.CiHICCEkQZ2'),
(10, 'vieuxrat', '$2y$10$8MoXOYJu1FfLeLZcpDeLY.jlP0XhssC9jQP1LKGpuaPsxNHF8GX4m');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
