-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 01 Février 2017 à 08:50
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dearmusic`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `Id_Album` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Date` date NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL,
  `Picture` varchar(500) NOT NULL,
  `Label` varchar(50) NOT NULL,
  `Fnac` varchar(150) NOT NULL,
  `Itune` varchar(150) NOT NULL,
  `Amazon` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `Id_Artist` int(11) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Mail` varchar(150) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Picture` varchar(500) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `CreationDate` date NOT NULL,
  `BirthDate` date NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `Twitter` varchar(100) NOT NULL,
  `Instagram` varchar(100) NOT NULL,
  `Youtube` varchar(100) NOT NULL,
  `Itunes` varchar(100) NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `artistcomments`
--

CREATE TABLE `artistcomments` (
  `Id_ComArtist` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Content` varchar(500) NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL,
  `Id_Artist` int(11) NOT NULL,
  `Id_Page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `Id_Event` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Website` varchar(150) NOT NULL,
  `Fnac` varchar(150) NOT NULL,
  `Digitick` varchar(150) NOT NULL,
  `Festicket` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

CREATE TABLE `music` (
  `Id_Music` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL,
  `Youtube` varchar(150) NOT NULL,
  `Duration` varchar(8) NOT NULL,
  `Lyrics` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `Id_Page` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `Id_type` int(11) NOT NULL,
  `Designation` varchar(150) NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `LastName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `FirstName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `UserName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `Mail` varchar(150) CHARACTER SET utf8 NOT NULL,
  `Phone` int(10) NOT NULL,
  `City` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Country` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Picture` varchar(500) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `CreationDate` date NOT NULL,
  `BirthDate` date NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `Twitter` varchar(100) NOT NULL,
  `Instagram` varchar(100) NOT NULL,
  `Youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `usercomments`
--

CREATE TABLE `usercomments` (
  `Id_ComUser` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Content` varchar(500) NOT NULL,
  `NbLike` int(11) NOT NULL,
  `NbDislike` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`Id_Album`),
  ADD UNIQUE KEY `Id_Album` (`Id_Album`);

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Id_Artist`),
  ADD UNIQUE KEY `UserName` (`UserName`,`Mail`),
  ADD UNIQUE KEY `Id_Artisti` (`Id_Artist`);

--
-- Index pour la table `artistcomments`
--
ALTER TABLE `artistcomments`
  ADD PRIMARY KEY (`Id_ComArtist`),
  ADD UNIQUE KEY `Id_ComArtist` (`Id_ComArtist`),
  ADD KEY `Id_Artist` (`Id_Artist`),
  ADD KEY `Id_Page` (`Id_Page`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Id_Event`),
  ADD UNIQUE KEY `Id_Event` (`Id_Event`);

--
-- Index pour la table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`Id_Music`),
  ADD UNIQUE KEY `Id_Music` (`Id_Music`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`Id_Page`),
  ADD UNIQUE KEY `Id_Page` (`Id_Page`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id_type`),
  ADD UNIQUE KEY `Id_type` (`Id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `Mail` (`Mail`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Id_User` (`Id_User`);

--
-- Index pour la table `usercomments`
--
ALTER TABLE `usercomments`
  ADD PRIMARY KEY (`Id_ComUser`),
  ADD UNIQUE KEY `Id_ComUser` (`Id_ComUser`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Page` (`Id_Page`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `Id_Album` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `Id_Artist` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `artistcomments`
--
ALTER TABLE `artistcomments`
  MODIFY `Id_ComArtist` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `Id_Event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `music`
--
ALTER TABLE `music`
  MODIFY `Id_Music` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `Id_Page` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `Id_type` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `usercomments`
--
ALTER TABLE `usercomments`
  MODIFY `Id_ComUser` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `artistcomments`
--
ALTER TABLE `artistcomments`
  ADD CONSTRAINT `artistcomments_ibfk_1` FOREIGN KEY (`Id_Artist`) REFERENCES `artist` (`Id_Artist`),
  ADD CONSTRAINT `artistcomments_ibfk_2` FOREIGN KEY (`Id_Page`) REFERENCES `page` (`Id_Page`);

--
-- Contraintes pour la table `usercomments`
--
ALTER TABLE `usercomments`
  ADD CONSTRAINT `usercomments_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `usercomments_ibfk_2` FOREIGN KEY (`Id_Page`) REFERENCES `page` (`Id_Page`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
