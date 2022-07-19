-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 29 juil. 2020 à 16:11
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestabs`
--
CREATE DATABASE IF NOT EXISTS `gestabs` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `gestabs`;

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE `absence` (
  `IdAbs` int(30) NOT NULL,
  `IdSea` int(20) NOT NULL,
  `IdU` int(20) NOT NULL,
  `Justifie` tinyint(1) DEFAULT NULL,
  `Motif` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`IdAbs`, `IdSea`, `IdU`, `Justifie`, `Motif`) VALUES
(2, 1, 116, 0, NULL),
(3, 2, 116, 0, NULL),
(4, 1, 87, 1, 'vgfgv'),
(5, 10, 118, 1, 'kjbj'),
(6, 10, 87, 1, 'blabla'),
(7, 10, 87, 0, NULL),
(8, 1, 138, 1, 'Malade'),
(9, 11, 116, 0, NULL),
(10, 18, 118, 0, NULL),
(11, 20, 116, 0, NULL),
(12, 20, 125, 1, 'MALADE'),
(13, 13, 129, 0, NULL),
(14, 21, 145, 0, NULL),
(15, 22, 116, 1, 'Voyage'),
(16, 23, 145, 1, 'malade'),
(17, 24, 148, 0, NULL),
(18, 25, 148, 1, 'malade');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `IdU` int(30) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `Prenom` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Photo` varchar(20) DEFAULT NULL,
  `DateIns` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`IdU`, `Nom`, `Prenom`, `Email`, `Photo`, `DateIns`) VALUES
(1, 'Sadicky', 'Dave', 'sad@gm.com', NULL, ''),
(79, 'Saleh', 'Matenga', 'salm@gm.com', '', '2018-10-11 08:49:52'),
(143, 'rad', 'rad', 'rad@rad.rad', '', '2019-03-02 21:16:53');

-- --------------------------------------------------------

--
-- Structure de la table `afetumod`
--

CREATE TABLE `afetumod` (
  `IdMod` varchar(30) NOT NULL,
  `IdU` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `afetumod`
--

INSERT INTO `afetumod` (`IdMod`, `IdU`) VALUES
('0J6VZTEH', 87),
('0J6VZTEH', 125),
('0J6VZTEH', 129),
('0OVZAF9Y', 145),
('3MG9UTP0', 141),
('4EWNOM16', 87),
('4IY6L0X8', 87),
('4IY6L0X8', 116),
('4IY6L0X8', 118),
('BF4QSEVD', 87),
('BF4QSEVD', 129),
('EPB759MT', 116),
('EPB759MT', 118),
('EPB759MT', 125),
('PHBJYNFM', 129),
('RDLA8OKX', 148),
('RDLA8OKX', 149),
('UJMWK3ZG', 116),
('XR5DKGCN', 87),
('XR5DKGCN', 89),
('XR5DKGCN', 116),
('XR5DKGCN', 118),
('XR5DKGCN', 138),
('XWSE9U7T', 151),
('ZFALBGXK', 118),
('ZFALBGXK', 125),
('ZFALBGXK', 129);

-- --------------------------------------------------------

--
-- Structure de la table `afpromod`
--

CREATE TABLE `afpromod` (
  `IdMod` varchar(30) NOT NULL,
  `IdU` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `afpromod`
--

INSERT INTO `afpromod` (`IdMod`, `IdU`) VALUES
('0J6VZTEH', '88'),
('0OVZAF9Y', '100'),
('0OVZAF9Y', '144'),
('3MG9UTP0', '142'),
('4EWNOM16', '100'),
('4EWNOM16', '150'),
('4IY6L0X8', '146'),
('4IY6L0X8', '147'),
('BF4QSEVD', '78'),
('BF4QSEVD', '88'),
('EPB759MT', '100'),
('EPB759MT', '88'),
('FTN8WL3G', '100'),
('OFI6V95A', '78'),
('PHBJYNFM', '115'),
('RDLA8OKX', '147'),
('UJMWK3ZG', '100'),
('XR5DKGCN', '78'),
('XR5DKGCN', '87'),
('XR5DKGCN', '88'),
('XWSE9U7T', '150'),
('ZFALBGXK', '100'),
('ZFALBGXK', '115'),
('ZFALBGXK', '144');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `IdU` int(30) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `Prenom` varchar(20) DEFAULT NULL,
  `Sexe` enum('Masculin','Feminin') NOT NULL,
  `DateNaiss` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Adresse` varchar(20) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  `Photo` varchar(20) DEFAULT NULL,
  `DateIns` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`IdU`, `Nom`, `Prenom`, `Sexe`, `DateNaiss`, `Email`, `Adresse`, `Tel`, `Photo`, `DateIns`) VALUES
(87, 'Ger', 'Joel', 'Masculin', NULL, 'gerjo@', 'Jabe', '4886581', NULL, ''),
(2, 'Habi', 'ADO', 'Masculin', '19-08-1994', 'habad@gm.c', 'mutanga nord', '7956248', NULL, ''),
(89, 'Chris', 'May', 'Masculin', NULL, 'chrism@gm', 'nyamianda', '814984', NULL, ''),
(116, 'Rahma', 'Mamy', 'Feminin', '2000-09-03', 'mamram@shalom.bi', 'South Africa', '68 45 86 24', NULL, '2018-10-19 09:21:41'),
(125, 'Masikilizano', 'Emmanuel', 'Masculin', '1996-12-25', 'domeshow@init.bac3', 'Ngagara', '78 57 15 68', NULL, '2018-10-19 23:31:37'),
(118, 'Tshisekedi', 'Samuel', 'Masculin', '1993-08-16', 'samkal@gm.co', 'Jabe', '79 17 18 18', NULL, '2018-10-19 23:17:01'),
(129, 'Kombe', 'Helene', 'Feminin', '1996-10-19', 'omoy2008@gmail.com', 'Bwiza', '79 17 18 18', NULL, '2018-10-21 14:29:33'),
(130, 'Mus', 'Joseph', 'Masculin', '1996-07-19', 'jomwa@gm.bac3', 'Gasenyi', '79 17 18 18', NULL, '2018-10-21 14:30:22'),
(135, 'euygwe', 'keqyiy', 'Feminin', '1999-06-01', 'gernfu@gm.com', 'Jabe', '68 45 86 24', NULL, '2018-10-21 14:37:04'),
(138, 'Adolph', 'Habimana', 'Masculin', '2018-11-16', 'sadoba@gmail.com', 'Nyakabiga', '75 86 15 70', NULL, '2018-11-08 13:59:03'),
(141, 'uytr', 'uiytr', 'Masculin', '2018-12-25', 'uohih98@vf.c', 'drtyuio', '784512156', NULL, '2018-12-29 16:26:25'),
(145, 'Mugisho', 'franck', 'Masculin', '2019-05-15', '', '', '', NULL, '2019-05-15 12:08:20'),
(148, 'karb', 'assani', 'Masculin', '2020-02-12', 'davidsadiki09@gmail.', 'Dorsal', '76512005', NULL, '2020-02-12 11:20:34'),
(149, 'kwongw', 'mug', 'Masculin', '2020-02-12', 'satraco11@gmail.com', 'Dorsal', '76512005', NULL, '2020-02-12 11:26:17'),
(151, 'dave', 'dave', 'Masculin', '2020-03-13', 'satraco11@gmail.com', 'Dorsal', '76512005', NULL, '2020-03-17 21:55:19');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `IdMod` varchar(30) NOT NULL,
  `Intitule` varchar(20) DEFAULT NULL,
  `DateAjout` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`IdMod`, `Intitule`, `DateAjout`) VALUES
('XR5DKGCN', 'Php', '2018-10-11 23:20:19'),
('W1GP8ZV6', 'AJAX', '2019-04-29 12:27:31'),
('4EWNOM16', 'SQL', '2018-10-08 15:33:30'),
('OFI6V95A', 'PDO', '2018-10-08 15:35:26'),
('0OVZAF9Y', 'Dev', '2019-05-15 12:04:27'),
('EPB759MT', 'Electricity', '2018-10-08 18:20:53'),
('UJMWK3ZG', 'Javascript', '2018-10-15 13:59:37'),
('BF4QSEVD', 'Ajax', '2018-10-10 23:32:27'),
('ZFALBGXK', 'HTML5', '2018-10-21 14:38:37'),
('PHBJYNFM', 'CSS', '2018-11-03 13:06:56'),
('FTN8WL3G', 'ORACLE', '2018-12-22 11:29:24'),
('3MG9UTP0', 'ARDUINO', '2018-12-29 16:23:41'),
('0J6VZTEH', 'ARDUINO123', '2019-03-02 21:21:13'),
('4IY6L0X8', 'AngularJS', '2019-10-10 09:52:15'),
('ZK37LNQR', 'C#', '2019-10-15 14:31:57'),
('XWSE9U7T', 'ABCD', '2020-03-17 21:52:59');

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `IdU` int(30) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `Prenom` varchar(20) DEFAULT NULL,
  `Sexe` enum('Masculin','Feminin') NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Adresse` varchar(20) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  `Nationalite` varchar(20) DEFAULT NULL,
  `Photo` varchar(20) DEFAULT NULL,
  `DateIns` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`IdU`, `Nom`, `Prenom`, `Sexe`, `Email`, `Adresse`, `Tel`, `Nationalite`, `Photo`, `DateIns`) VALUES
(78, 'ruvuna', 'wendy', 'Masculin', 'ruvwend@gm.c', 'Ngagara', '68498498', 'Congolaise', NULL, '2018-10-11 00:56:21'),
(88, 'Sams', 'Kalimba', 'Masculin', 'samka@gm', 'kaseng', '095475282', 'Gabonais', NULL, '2018-10-11 21:39:17'),
(100, 'Ndayikengurukiye', 'Alain', 'Masculin', 'gernfu@gm.com', 'Nyakabiga', '75 48 56 56', 'Burundaise', '', '2018-10-12 15:32:38'),
(101, 'Ndayik', 'Abel', 'Masculin', 'gernfu@gm.com', 'Nyakabiga', '75 48 56 56', 'Burundaise', '', '2018-10-12 15:32:43'),
(102, 'Wabulakombe', 'Gedeon', 'Masculin', 'sadoba@gmail.com', 'Nyakabiga', '78 58 75 52', 'Congolaise', '', '2018-10-12 15:34:59'),
(106, 'mathieu', 'jean', 'Masculin', 'jkgui@id.di', 'Nyakabiga', '75 86 15 70', 'Burundaise', '', '2018-10-12 23:34:48'),
(109, 'uyf', 'hgfu', 'Masculin', 'ukjh@gh.k', 'hfuyu', '6848648', 'gcyt', '', '2018-10-12 23:38:19'),
(110, 'iouhou', 'lej', 'Feminin', 'uohih98@vf.c', 'iugi', 'igbi', 'iuhini', '', '2018-10-12 23:43:29'),
(115, 'Lwaboshi', 'Kalamo', 'Masculin', 'kalamoj@init.bac3', 'Gasenyi', '75 37 19 00', 'Congolaise', '', '2018-10-18 23:07:06'),
(133, 'iougy', 'liugy', 'Feminin', 'omoy2008@gmail.com', 'Ngagara', '79 17 18 18', 'trdfghj', '', '2018-10-21 14:35:41'),
(136, 'fuy', 'iuytdui', 'Feminin', 'gernfu@gm.com', 'Nyakabiga', '68562820', 'Burundaise', '', '2018-10-21 14:37:53'),
(142, 'Joseph', 'Muso', 'Masculin', 'gernfu@gm.com', 'Gasenyi', '64189498', 'Burundaise', '', '2018-12-29 16:27:24'),
(144, 'Migisha', 'Charles', 'Masculin', 'chm@gmail.com', 'Bwiza', '98494989498', 'Congolaise', '', '2019-05-15 12:04:07'),
(146, 'sadiki', 'francois', 'Masculin', 'kebano@gmail.com', 'Uvira', '75615625', 'Congolaise', '', '2019-10-10 09:51:25'),
(147, 'gasp', 'dany', 'Masculin', 'davidsadiki09@gmail.', 'Dorsal', '76512005', 'Congolaise', '', '2020-02-12 11:19:47'),
(150, 'marcel', 'marcel', 'Masculin', 'fridorarakaza@gmail.', 'Dorsal', '68221414', 'Congolaise', '', '2020-03-17 21:54:33');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `IdSea` int(30) NOT NULL,
  `IdMod` varchar(20) NOT NULL,
  `IdU` int(20) NOT NULL,
  `DateSea` date DEFAULT NULL,
  `HeureDeb` time DEFAULT NULL,
  `HeureFin` time DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`IdSea`, `IdMod`, `IdU`, `DateSea`, `HeureDeb`, `HeureFin`, `Type`) VALUES
(1, 'XR5DKGCN', 78, '2018-10-17', '08:30:00', '10:30:00', 'Cours'),
(2, 'BF4QSEVD', 78, '2018-10-12', '13:30:00', '15:00:00', 'TP'),
(9, 'XR5DKGCN', 78, '2018-10-28', '12:45:00', '14:30:00', 'Cours'),
(8, 'XR5DKGCN', 78, '2018-10-18', '08:45:00', '10:45:00', 'Cours'),
(3, 'BF4QSEVD', 78, '2018-10-23', '09:20:00', '10:00:00', 'TD'),
(10, 'OFI6V95A', 78, '2018-10-20', '10:45:00', '12:20:00', 'Cours'),
(11, 'EPB759MT', 100, '2018-10-26', '14:00:00', '16:30:00', 'Cours'),
(12, 'OFI6V95A', 78, '2018-10-25', '15:00:00', '17:00:00', 'TP'),
(13, 'EPB759MT', 88, '2018-10-09', '09:45:00', '15:00:00', 'Cours'),
(14, 'ZFALBGXK', 115, '2018-10-21', '14:00:00', '16:00:00', 'Cours'),
(15, 'ZFALBGXK', 100, '2018-10-18', '10:30:00', '12:00:00', 'TP'),
(16, 'PHBJYNFM', 115, '2018-11-03', '13:00:00', '14:00:00', 'TP'),
(17, 'BF4QSEVD', 78, '2018-11-01', '12:00:00', '11:00:00', 'TP'),
(18, 'BF4QSEVD', 88, '2018-12-29', '10:00:00', '12:30:00', 'Cours'),
(19, 'XR5DKGCN', 88, '2019-02-12', '12:30:00', '14:20:00', 'TD'),
(20, '0J6VZTEH', 88, '2019-03-10', '06:45:00', '12:00:00', 'Cours'),
(21, '0OVZAF9Y', 144, '2019-05-15', '12:05:00', '00:00:00', 'Cours'),
(22, '4IY6L0X8', 146, '2019-10-10', '09:55:00', '12:30:00', 'Cours'),
(23, 'ZFALBGXK', 144, '2019-11-07', '09:00:00', '10:00:00', 'Cours'),
(24, 'RDLA8OKX', 147, '2020-02-12', '11:30:00', '15:00:00', 'Cours'),
(25, '4IY6L0X8', 147, '2020-02-12', '11:45:00', '13:45:00', 'TD'),
(26, 'XWSE9U7T', 150, '2020-03-17', '09:45:00', '12:30:00', 'Cours');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IdU` int(30) NOT NULL,
  `Login` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Access` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`IdU`, `Login`, `Password`, `Type`, `Access`) VALUES
(1, 'Dave', '123', 'on', 1),
(87, 'EV', '123', 'Etudiant', 1),
(143, 'rad', '123', 'Admin', 1),
(139, 'YOYO', '123', 'Prof', 1),
(140, 'yoyo', '123', 'Prof', 1),
(88, 'KAL', '123', 'Prof', 1),
(116, 'jojo', '123', 'on', 1),
(118, 'ZPastor', '123', 'Etudiant`', 1),
(100, 'nday', '123', 'Prof', 1),
(128, 'HLN', '123', 'Etudiant`', 1),
(105, 'Ged', '123', 'Etudiant`', 1),
(142, 'yoyo', '123', 'Prof', 1),
(138, 'Ado', '123', 'Etudiant`', 1),
(115, 'jeancy', '123', 'Prof', 1),
(134, 'kug', '123', 'Prof', 0),
(125, 'dome', '123', 'Etudiant`', 1),
(144, 'charles', '123', 'Prof', 1),
(145, 'franck', '123', 'Etudiant`', 1),
(146, 'kebano', '123', 'Prof', 1),
(147, 'gaspard', 'gaspard123', 'Prof', 1),
(148, 'karb', 'karb123', 'Etudiant`', 1),
(149, 'mug', 'mug123', 'Etudiant`', 0),
(150, 'marcel', 'marcel', 'Prof', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`IdAbs`,`IdSea`,`IdU`),
  ADD KEY `IdSea` (`IdSea`),
  ADD KEY `IdU` (`IdU`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdU`);

--
-- Index pour la table `afetumod`
--
ALTER TABLE `afetumod`
  ADD PRIMARY KEY (`IdMod`,`IdU`),
  ADD KEY `IdU` (`IdU`);

--
-- Index pour la table `afpromod`
--
ALTER TABLE `afpromod`
  ADD PRIMARY KEY (`IdMod`,`IdU`),
  ADD KEY `IdU` (`IdU`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`IdU`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`IdMod`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`IdU`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`IdSea`,`IdMod`,`IdU`),
  ADD KEY `IdMod` (`IdMod`),
  ADD KEY `IdU` (`IdU`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absence`
--
ALTER TABLE `absence`
  MODIFY `IdAbs` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `prof`
--
ALTER TABLE `prof`
  MODIFY `IdU` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `IdSea` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdU` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- Base de données :  `hogoce`
--
CREATE DATABASE IF NOT EXISTS `hogoce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hogoce`;

-- --------------------------------------------------------

--
-- Structure de la table `accouchement`
--

CREATE TABLE `accouchement` (
  `ID` int(11) NOT NULL,
  `CARACT` enum('Situat_matrimoniale','Gestité','Parité','Acc_a_Risque''','Transfert') NOT NULL,
  `MOTIF` text NOT NULL,
  `ESPONSABLE` text NOT NULL,
  `TYPE` enum('Eutocique','Dystocique','','') NOT NULL,
  `DEROULEMENT` enum('Episiotomie','Déchirure','Ventouse','Autre') NOT NULL,
  `NAISSANCE` enum('Prémature','A terme >= 2,5 kg','A terme <= 2,5 kg','Apgar') NOT NULL,
  `AVORTEMENT` text NOT NULL,
  `COMPLE` enum('Hgie_antépartum','Hgie_postpartum','Infection_puéripérale','') NOT NULL,
  `DECE` enum('Mort né BCF+ a lentrée','''Mort né BCF Frais','Mort né BCF-macéré','NN mort < 24h','Maternel') NOT NULL,
  `PTME` enum('VIH+ deja connu','Deja sous ARV','Depistage VIH au cours du travail') NOT NULL,
  `ALLAIT` text NOT NULL,
  `MILDA` text NOT NULL,
  `METHODE` varchar(60) NOT NULL,
  `DATES` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(20) NOT NULL,
  `PWD` varchar(90) NOT NULL,
  `NOMS` varchar(50) NOT NULL,
  `TEL` varchar(20) NOT NULL,
  `ADRESSE` varchar(70) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `ETAT` enum('CELIBATAIRE','MARIE','DIVORCE','VEUF') NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEXE` enum('M','F') NOT NULL,
  `PHOTO` varchar(60) DEFAULT 'avatar5.png',
  `ACCESS` tinyint(1) NOT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `PWD`, `NOMS`, `TEL`, `ADRESSE`, `EMAIL`, `ETAT`, `AGE`, `SEXE`, `PHOTO`, `ACCESS`, `DATEINS`) VALUES
(25, 'e10adc3949ba59abbe56e057f20f883e', 'DAVWuygf', '65456', 'CARkjgui', 'HFVYTUSSkjgjoi', '', 56, 'M', '0', 1, '2020-07-01 09:30:17'),
(26, 'a01610228fe998f515a72dd730294d87', 'DAVWuygf', '65456', 'CARkjgui', 'HFVYTUSSkjgjoi', '', 56, 'F', '0', 1, '2020-07-01 09:30:17'),
(27, '202cb962ac59075b964b07152d234b70', 'DAVWuygf', '65456', 'CARkjgui', 'HFVYTUSSkjgjoi', '', 56, 'F', '0', 1, '2020-07-27 18:47:28');

-- --------------------------------------------------------

--
-- Structure de la table `demande_radio`
--

CREATE TABLE `demande_radio` (
  `IdDR` int(11) NOT NULL,
  `NumP` int(11) DEFAULT NULL,
  `idM` int(11) DEFAULT NULL,
  `TypeR` varchar(50) DEFAULT NULL,
  `Motif` text DEFAULT NULL,
  `DateR` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `ID` int(11) NOT NULL,
  `FAMILLE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`ID`, `FAMILLE`) VALUES
(2, 'Beta-Lactamine'),
(3, 'Somnifere'),
(4, 'Paracetamol');

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

CREATE TABLE `infirmier` (
  `ID` int(11) NOT NULL,
  `PWD` varchar(90) NOT NULL,
  `NOMS` varchar(60) NOT NULL,
  `SPEC` varchar(60) NOT NULL,
  `GP` enum('A+','B+','O+','AB+','A-','B-','O-','AB-') NOT NULL,
  `TEL` varchar(60) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `ETAT` enum('CELIBATAIRE','MARIE','VEUF','DIVORCE') NOT NULL,
  `AGE` date NOT NULL,
  `SEXE` enum('H','F') NOT NULL,
  `PHOTO` varchar(60) NOT NULL DEFAULT 'avatar5.png',
  `ACCESS` tinyint(1) NOT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infirmier`
--

INSERT INTO `infirmier` (`ID`, `PWD`, `NOMS`, `SPEC`, `GP`, `TEL`, `ADRESSE`, `EMAIL`, `ETAT`, `AGE`, `SEXE`, `PHOTO`, `ACCESS`, `DATEINS`) VALUES
(6, '7215ee9c7d9dc229d2921a40e899ec5f', 'Placide waki', 'ophtalmologue', 'O+', '19198149', 'bujumbura', 'plaidemusafiri@yahoo.fr', 'CELIBATAIRE', '2020-05-03', 'H', '0', 0, '2020-07-23 18:57:44');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `ID` int(11) NOT NULL,
  `PWD` varchar(90) NOT NULL,
  `NOMS` varchar(60) NOT NULL,
  `SPEC` varchar(60) NOT NULL,
  `GP` enum('A+','B+','O+','AB+','A-','B-','O-','AB-') NOT NULL,
  `TEL` varchar(60) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `ETAT` enum('CELIBATAIRE','MARIE','VEUF','DIVORCE') NOT NULL,
  `AGE` date NOT NULL,
  `SEXE` enum('H','F') NOT NULL,
  `PHOTO` varchar(60) NOT NULL DEFAULT 'avatar5.png',
  `ACCESS` tinyint(1) NOT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`ID`, `PWD`, `NOMS`, `SPEC`, `GP`, `TEL`, `ADRESSE`, `EMAIL`, `ETAT`, `AGE`, `SEXE`, `PHOTO`, `ACCESS`, `DATEINS`) VALUES
(5, '7215ee9c7d9dc229d2921a40e899ec5f', 'Placide waki', 'kjbjkivbiuh', 'AB+', '19198149', 'bujumbura', 'mangalaishiabwe@gmail.com', 'DIVORCE', '2020-05-03', 'H', '0', 1, '2020-05-22 12:56:12'),
(7, '7215ee9c7d9dc229d2921a40e899ec5f', 'Sadicky D', 'Psychologue', 'AB+', '19198149', 'bujumbura', 'wyntamubona@gmail.com', 'CELIBATAIRE', '0000-00-00', 'H', '0', 1, '2020-05-23 07:39:06'),
(8, 'c81e728d9d4c2f636f067f89cc14862c', 'Jimmy waki', 'dentiste', 'O+', '897484', 'bujumbura', 'mangalaishiabwe@gmail.com', 'DIVORCE', '2020-05-12', 'H', '0', 1, '2020-06-26 06:49:04');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `ID` int(11) NOT NULL,
  `LIB` varchar(200) DEFAULT NULL,
  `DCI` varchar(200) DEFAULT NULL,
  `FORME` varchar(200) DEFAULT NULL,
  `POS` varchar(200) DEFAULT NULL,
  `COND` varchar(200) DEFAULT NULL,
  `PU` varchar(200) DEFAULT NULL,
  `SD` varchar(200) DEFAULT NULL,
  `DATEFAB` date DEFAULT NULL,
  `DATEEXP` date DEFAULT NULL,
  `IDF` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`ID`, `LIB`, `DCI`, `FORME`, `POS`, `COND`, `PU`, `SD`, `DATEFAB`, `DATEEXP`, `IDF`) VALUES
(2, 'hfdhg', 'ghfdh', 'fhgfh', 'ghghg', 'fhgfh', '2000', '500', '2020-07-09', '2022-07-13', 3),
(3, 'aspirine', 'Dopra', 'injectable', '2fois', 'frais', '200', '20', '2010-10-10', '2025-10-10', 4);

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `NumP` int(11) NOT NULL,
  `NomsP` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Sexe` enum('M','F') DEFAULT NULL,
  `EtatC` enum('Celibataire','Marie','Veuf','Divorcé') DEFAULT NULL,
  `ChefF` varchar(50) DEFAULT NULL,
  `Commune` varchar(50) DEFAULT NULL,
  `Quartier` varchar(50) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Origine` enum('AR','HAR','HD','HP','HB') DEFAULT NULL,
  `DateInsc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`NumP`, `NomsP`, `Age`, `Sexe`, `EtatC`, `ChefF`, `Commune`, `Quartier`, `Mobile`, `Origine`, `DateInsc`) VALUES
(128, 'Helena K', 25, 'F', 'Celibataire', 'Kombe', 'Ndahangwa', 'Nyakabiga', 61668845, 'HAR', '2020-06-25 03:55:31'),
(130, 'Jimmy Waki', 12, 'M', 'Celibataire', 'Sadicky D', 'Ntahangwa', 'Ngagara', 76512005, 'AR', '2020-07-21 09:12:52'),
(131, 'Placide Musa', 21, 'M', 'Marie', 'Sadicky D', 'Ntahangwa', 'Ngagara', 2548498, 'HAR', '2020-07-21 09:22:30');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `SERVICE` varchar(90) CHARACTER SET utf8 DEFAULT NULL,
  `IDResp` int(11) NOT NULL,
  `PRIX` int(11) NOT NULL,
  `ETAT` enum('ACTIF','NON ACTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`ID`, `SERVICE`, `IDResp`, `PRIX`, `ETAT`) VALUES
(5, 'CPN', 7, 0, 'ACTIF'),
(6, '', 5, 12, 'ACTIF'),
(7, '', 8, 10000, 'ACTIF'),
(8, '', 7, 0, 'ACTIF');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accouchement`
--
ALTER TABLE `accouchement`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `demande_radio`
--
ALTER TABLE `demande_radio`
  ADD PRIMARY KEY (`IdDR`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDF` (`IDF`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`NumP`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDResp` (`IDResp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `demande_radio`
--
ALTER TABLE `demande_radio`
  MODIFY `IdDR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `infirmier`
--
ALTER TABLE `infirmier`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `NumP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `medicament_ibfk_1` FOREIGN KEY (`IDF`) REFERENCES `famille` (`ID`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`IDResp`) REFERENCES `medecin` (`ID`);
--
-- Base de données :  `kwetuinfo`
--
CREATE DATABASE IF NOT EXISTS `kwetuinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kwetuinfo`;

-- --------------------------------------------------------

--
-- Structure de la table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_commentmeta`
--

INSERT INTO `wp_commentmeta` (`meta_id`, `comment_id`, `meta_key`, `meta_value`) VALUES
(1, 2, 'akismet_error', '1595351478'),
(2, 2, 'akismet_history', 'a:4:{s:4:\"time\";d:1595351479.024864;s:5:\"event\";s:11:\"check-error\";s:4:\"user\";s:9:\"kwetuinfo\";s:4:\"meta\";a:1:{s:8:\"response\";s:0:\"\";}}'),
(3, 2, 'akismet_as_submitted', 'a:13:{s:14:\"comment_author\";s:9:\"kwetuinfo\";s:20:\"comment_author_email\";s:18:\"dsadicky@gmail.com\";s:18:\"comment_author_url\";s:0:\"\";s:15:\"comment_content\";s:5:\"salut\";s:12:\"comment_type\";s:0:\"\";s:7:\"user_ID\";i:1;s:7:\"user_id\";i:1;s:7:\"user_ip\";s:3:\"::1\";s:10:\"user_agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\";s:4:\"blog\";s:26:\"http://localhost/kwetuinfo\";s:9:\"blog_lang\";s:5:\"fr_FR\";s:12:\"blog_charset\";s:5:\"UTF-8\";s:9:\"permalink\";s:43:\"http://localhost/kwetuinfo/fin-confinement/\";}');

-- --------------------------------------------------------

--
-- Structure de la table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un commentateur WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2020-07-21 17:43:13', '2020-07-21 15:43:13', 'Bonjour, ceci est un commentaire.\nPour débuter avec la modération, la modification et la suppression de commentaires, veuillez visiter l’écran des Commentaires dans le Tableau de bord.\nLes avatars des personnes qui commentent arrivent depuis <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0),
(2, 33, 'kwetuinfo', 'dsadicky@gmail.com', '', '::1', '2020-07-21 19:11:18', '2020-07-21 17:11:18', 'salut', 0, '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36', '', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/kwetuinfo', 'yes'),
(2, 'home', 'http://localhost/kwetuinfo', 'yes'),
(3, 'blogname', 'kwetuinfo', 'yes'),
(4, 'blogdescription', 'Un site utilisant WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'dsadicky@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G \\h i \\m\\i\\n', 'yes'),
(25, 'links_updated_date_format', 'j F Y G \\h i \\m\\i\\n', 'yes'),
(26, 'comment_moderation', '1', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:87:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=5&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:10:{i:0;s:19:\"akismet/akismet.php\";i:1;s:59:\"black-studio-tinymce-widget/black-studio-tinymce-widget.php\";i:2;s:36:\"contact-form-7/wp-contact-form-7.php\";i:3;s:45:\"facebook-by-weblizar/facebook-by-weblizar.php\";i:4;s:9:\"hello.php\";i:5;s:30:\"lightbox-plus/lightboxplus.php\";i:6;s:23:\"ml-slider/ml-slider.php\";i:7;s:39:\"siteorigin-panels/siteorigin-panels.php\";i:8;s:39:\"so-widgets-bundle/so-widgets-bundle.php\";i:9;s:37:\"social-media-widget/social-widget.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:61:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/style.css\";i:1;s:0:\"\";}', 'no'),
(40, 'template', 'vantage', 'yes'),
(41, 'stylesheet', 'vantage', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:1:{s:30:\"lightbox-plus/lightboxplus.php\";s:12:\"UninstallLBP\";}', 'no'),
(82, 'timezone_string', 'Europe/Paris', 'yes'),
(83, 'page_for_posts', '18', 'yes'),
(84, 'page_on_front', '5', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '38590', 'yes'),
(92, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(93, 'fresh_site', '0', 'yes'),
(94, 'WPLANG', 'fr_FR', 'yes'),
(95, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(96, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(97, 'widget_recent-comments', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'sidebars_widgets', 'a:6:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:2:{i:0;s:14:\"recent-posts-2\";i:1;s:12:\"categories-2\";}s:14:\"sidebar-footer\";a:1:{i:0;s:22:\"vantage-social-media-2\";}s:14:\"sidebar-header\";a:0:{}s:16:\"sidebar-masthead\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(101, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'nonce_key', ')-f{=pT]D>qat|cTHm$lv>zmXII&MWKfvKtKS|<HVGF_U#/ P$~s9>NUu~q 2q>V', 'no'),
(108, 'nonce_salt', 'mrUSorwMD|hfoMKO!M94@Q;k7MdKdB2`8RF4zD~r1J1;A#BMJK=;!@=|gO0LuRCq', 'no'),
(109, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'cron', 'a:6:{i:1595356405;a:1:{s:29:\"akismet_schedule_cron_recheck\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:2:{s:8:\"schedule\";b:0;s:4:\"args\";a:0:{}}}}i:1595389395;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1595432644;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1595434965;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1595437878;a:1:{s:24:\"akismet_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(113, 'theme_mods_twentyseventeen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1595346322;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes'),
(117, '_site_transient_update_core', 'O:8:\"stdClass\":3:{s:7:\"updates\";a:0:{}s:15:\"version_checked\";s:3:\"4.9\";s:12:\"last_checked\";i:1595346234;}', 'no'),
(118, '_site_transient_update_plugins', 'O:8:\"stdClass\":1:{s:12:\"last_checked\";i:1595346739;}', 'no'),
(121, '_site_transient_update_themes', 'O:8:\"stdClass\":1:{s:12:\"last_checked\";i:1595347925;}', 'no'),
(122, 'auth_key', 'Lg{?@d]acU0e,wnBsoR?e~M^$0hX;ctgI2<c8^n$e<ae~=,rDG5rOvAD8{7 %h,>', 'no'),
(123, 'auth_salt', 'zVs5g1i;ft|V7U~_o7Y-SA*-KqA|6.+Wp@|)0]JZOlO>lCgPh2]b{vMd3@RXb3%M', 'no'),
(124, 'logged_in_key', 'YH}1,L~|!6 tAKc{gAp:D~2Ho+.VZ2oU_&I_z2QabD2W;~g,9c9$ZQUM_E*?CKv1', 'no'),
(125, 'logged_in_salt', 'Bv2A:A2]/-uo%jgOGAW9+)KeBcyq%45)E7JAY6U*y/Y?d8#T4tGV)p ,yPq[xVta', 'no'),
(127, '_transient_timeout_dash_v2_bd94b8f41e74bae2f4dc72e9bd8379af', '1595389448', 'no'),
(128, '_transient_dash_v2_bd94b8f41e74bae2f4dc72e9bd8379af', '<div class=\"rss-widget\"><p><strong>Erreur RSS :</strong> WP HTTP Error: cURL error 6: Could not resolve host: feeds.feedburner.com</p></div><div class=\"rss-widget\"><p><strong>Erreur RSS :</strong> WP HTTP Error: cURL error 6: Could not resolve host: feeds.feedburner.com</p></div>', 'no'),
(129, 'can_compress_scripts', '1', 'no'),
(131, 'current_theme', 'Vantage', 'yes'),
(132, 'theme_mods_vantage', 'a:7:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:7:\"primary\";i:17;}s:18:\"custom_css_post_id\";i:-1;s:26:\"theme_settings_home_slider\";s:4:\"demo\";s:14:\"custom_css_key\";b:0;s:34:\"theme_settings_home_slider_stretch\";b:1;s:30:\"theme_settings_layout_masthead\";s:12:\"logo-in-menu\";}', 'yes'),
(133, 'theme_switched', '', 'yes'),
(134, 'widget_vantage-social-media', 'a:2:{i:2;a:30:{s:5:\"title\";s:1:\"l\";s:4:\"size\";s:5:\"small\";s:8:\"facebook\";s:1:\"#\";s:7:\"twitter\";s:1:\"#\";s:11:\"google-plus\";s:0:\"\";s:8:\"linkedin\";s:0:\"\";s:8:\"dribbble\";s:0:\"\";s:7:\"behance\";s:0:\"\";s:10:\"deviantart\";s:0:\"\";s:6:\"flickr\";s:0:\"\";s:5:\"500px\";s:0:\"\";s:9:\"instagram\";s:1:\"#\";s:9:\"pinterest\";s:0:\"\";s:5:\"skype\";s:0:\"\";s:7:\"youtube\";s:1:\"#\";s:5:\"vimeo\";s:0:\"\";s:6:\"medium\";s:0:\"\";s:6:\"tumblr\";s:0:\"\";s:9:\"wordpress\";s:0:\"\";s:6:\"github\";s:0:\"\";s:9:\"bitbucket\";s:0:\"\";s:7:\"codepen\";s:0:\"\";s:8:\"mixcloud\";s:0:\"\";s:10:\"soundcloud\";s:0:\"\";s:11:\"stumbleupon\";s:0:\"\";s:2:\"vk\";s:0:\"\";s:3:\"rss\";s:0:\"\";s:8:\"envelope\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:10:\"new_window\";b:1;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(135, 'widget_circleicon-widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(136, 'widget_headline-widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(137, '_transient_timeout_plugin_slugs', '1595433139', 'no'),
(138, '_transient_plugin_slugs', 'a:10:{i:0;s:19:\"akismet/akismet.php\";i:1;s:59:\"black-studio-tinymce-widget/black-studio-tinymce-widget.php\";i:2;s:36:\"contact-form-7/wp-contact-form-7.php\";i:3;s:45:\"facebook-by-weblizar/facebook-by-weblizar.php\";i:4;s:9:\"hello.php\";i:5;s:30:\"lightbox-plus/lightboxplus.php\";i:6;s:23:\"ml-slider/ml-slider.php\";i:7;s:39:\"siteorigin-panels/siteorigin-panels.php\";i:8;s:39:\"so-widgets-bundle/so-widgets-bundle.php\";i:9;s:37:\"social-media-widget/social-widget.php\";}', 'no'),
(139, 'recently_activated', 'a:0:{}', 'yes'),
(140, 'wpcf7', 'a:2:{s:7:\"version\";s:3:\"4.7\";s:13:\"bulk_validate\";a:4:{s:9:\"timestamp\";d:1595353936;s:7:\"version\";s:3:\"4.7\";s:11:\"count_valid\";i:1;s:13:\"count_invalid\";i:0;}}', 'yes'),
(141, 'lightboxplus_options', 'a:112:{s:18:\"lightboxplus_multi\";s:1:\"0\";s:10:\"use_inline\";s:1:\"0\";s:10:\"inline_num\";s:1:\"1\";s:18:\"lightboxplus_style\";s:8:\"shadowed\";s:16:\"use_custom_style\";s:1:\"0\";s:11:\"disable_css\";s:1:\"0\";s:10:\"hide_about\";s:1:\"0\";s:12:\"output_htmlv\";s:1:\"0\";s:9:\"data_name\";s:12:\"lightboxplus\";s:11:\"use_perpage\";s:1:\"0\";s:11:\"use_forpage\";s:1:\"0\";s:11:\"use_forpost\";s:1:\"0\";s:13:\"load_location\";s:9:\"wp_footer\";s:13:\"load_priority\";s:2:\"10\";s:10:\"transition\";s:7:\"elastic\";s:5:\"speed\";s:3:\"300\";s:5:\"width\";s:5:\"false\";s:6:\"height\";s:5:\"false\";s:11:\"inner_width\";s:5:\"false\";s:12:\"inner_height\";s:5:\"false\";s:13:\"initial_width\";s:3:\"30%\";s:14:\"initial_height\";s:3:\"30%\";s:9:\"max_width\";s:3:\"90%\";s:10:\"max_height\";s:3:\"90%\";s:6:\"resize\";s:1:\"1\";s:7:\"opacity\";s:3:\"0.8\";s:10:\"preloading\";s:1:\"1\";s:11:\"label_image\";s:5:\"Image\";s:8:\"label_of\";s:2:\"of\";s:8:\"previous\";s:8:\"previous\";s:4:\"next\";s:4:\"next\";s:5:\"close\";s:5:\"close\";s:13:\"overlay_close\";s:1:\"1\";s:9:\"slideshow\";s:1:\"0\";s:14:\"slideshow_auto\";s:1:\"0\";s:15:\"slideshow_speed\";s:4:\"2500\";s:15:\"slideshow_start\";s:5:\"start\";s:14:\"slideshow_stop\";s:4:\"stop\";s:17:\"use_caption_title\";s:1:\"0\";s:20:\"gallery_lightboxplus\";s:1:\"0\";s:18:\"multiple_galleries\";s:1:\"0\";s:16:\"use_class_method\";s:1:\"0\";s:10:\"class_name\";s:11:\"lbp_primary\";s:16:\"no_auto_lightbox\";s:1:\"0\";s:10:\"text_links\";s:1:\"1\";s:16:\"no_display_title\";s:1:\"0\";s:9:\"scrolling\";s:1:\"1\";s:5:\"photo\";s:1:\"0\";s:3:\"rel\";s:5:\"false\";s:4:\"loop\";s:1:\"1\";s:7:\"esc_key\";s:1:\"1\";s:9:\"arrow_key\";s:1:\"1\";s:3:\"top\";s:5:\"false\";s:5:\"right\";s:5:\"false\";s:6:\"bottom\";s:5:\"false\";s:4:\"left\";s:5:\"false\";s:5:\"fixed\";s:1:\"0\";s:14:\"transition_sec\";s:7:\"elastic\";s:9:\"speed_sec\";s:3:\"300\";s:9:\"width_sec\";s:5:\"false\";s:10:\"height_sec\";s:5:\"false\";s:15:\"inner_width_sec\";s:3:\"50%\";s:16:\"inner_height_sec\";s:3:\"50%\";s:17:\"initial_width_sec\";s:3:\"30%\";s:18:\"initial_height_sec\";s:3:\"40%\";s:13:\"max_width_sec\";s:3:\"90%\";s:14:\"max_height_sec\";s:3:\"90%\";s:10:\"resize_sec\";s:1:\"1\";s:11:\"opacity_sec\";s:3:\"0.8\";s:14:\"preloading_sec\";s:1:\"1\";s:15:\"label_image_sec\";s:5:\"Image\";s:12:\"label_of_sec\";s:2:\"of\";s:12:\"previous_sec\";s:8:\"previous\";s:8:\"next_sec\";s:4:\"next\";s:9:\"close_sec\";s:5:\"close\";s:17:\"overlay_close_sec\";s:1:\"1\";s:13:\"slideshow_sec\";s:1:\"0\";s:18:\"slideshow_auto_sec\";s:1:\"1\";s:19:\"slideshow_speed_sec\";s:4:\"2500\";s:19:\"slideshow_start_sec\";s:5:\"start\";s:18:\"slideshow_stop_sec\";s:4:\"stop\";s:10:\"iframe_sec\";s:1:\"1\";s:14:\"class_name_sec\";s:13:\"lbp_secondary\";s:20:\"no_display_title_sec\";s:1:\"0\";s:13:\"scrolling_sec\";s:1:\"1\";s:9:\"photo_sec\";s:1:\"0\";s:7:\"rel_sec\";s:1:\"0\";s:8:\"loop_sec\";s:1:\"1\";s:11:\"esc_key_sec\";s:1:\"1\";s:13:\"arrow_key_sec\";s:1:\"1\";s:7:\"top_sec\";s:1:\"0\";s:9:\"right_sec\";s:1:\"0\";s:10:\"bottom_sec\";s:1:\"0\";s:8:\"left_sec\";s:1:\"0\";s:9:\"fixed_sec\";s:1:\"0\";s:12:\"inline_links\";a:5:{i:0;s:17:\"lbp-inline-link-1\";i:1;s:17:\"lbp-inline-link-2\";i:2;s:17:\"lbp-inline-link-3\";i:3;s:17:\"lbp-inline-link-4\";i:4;s:17:\"lbp-inline-link-5\";}s:12:\"inline_hrefs\";a:5:{i:0;s:17:\"lbp-inline-href-1\";i:1;s:17:\"lbp-inline-href-2\";i:2;s:17:\"lbp-inline-href-3\";i:3;s:17:\"lbp-inline-href-4\";i:4;s:17:\"lbp-inline-href-5\";}s:18:\"inline_transitions\";a:5:{i:0;s:7:\"elastic\";i:1;s:7:\"elastic\";i:2;s:7:\"elastic\";i:3;s:7:\"elastic\";i:4;s:7:\"elastic\";}s:13:\"inline_speeds\";a:5:{i:0;s:3:\"300\";i:1;s:3:\"300\";i:2;s:3:\"300\";i:3;s:3:\"300\";i:4;s:3:\"300\";}s:13:\"inline_widths\";a:5:{i:0;s:3:\"80%\";i:1;s:3:\"80%\";i:2;s:3:\"80%\";i:3;s:3:\"80%\";i:4;s:3:\"80%\";}s:14:\"inline_heights\";a:5:{i:0;s:3:\"80%\";i:1;s:3:\"80%\";i:2;s:3:\"80%\";i:3;s:3:\"80%\";i:4;s:3:\"80%\";}s:19:\"inline_inner_widths\";a:5:{i:0;s:5:\"false\";i:1;s:5:\"false\";i:2;s:5:\"false\";i:3;s:5:\"false\";i:4;s:5:\"false\";}s:20:\"inline_inner_heights\";a:5:{i:0;s:5:\"false\";i:1;s:5:\"false\";i:2;s:5:\"false\";i:3;s:5:\"false\";i:4;s:5:\"false\";}s:17:\"inline_max_widths\";a:5:{i:0;s:3:\"80%\";i:1;s:3:\"80%\";i:2;s:3:\"80%\";i:3;s:3:\"80%\";i:4;s:3:\"80%\";}s:18:\"inline_max_heights\";a:5:{i:0;s:3:\"80%\";i:1;s:3:\"80%\";i:2;s:3:\"80%\";i:3;s:3:\"80%\";i:4;s:3:\"80%\";}s:20:\"inline_position_tops\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:22:\"inline_position_rights\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:23:\"inline_position_bottoms\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:21:\"inline_position_lefts\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}s:13:\"inline_fixeds\";a:5:{i:0;s:1:\"0\";i:1;s:1:\"0\";i:2;s:1:\"0\";i:3;s:1:\"0\";i:4;s:1:\"0\";}s:12:\"inline_opens\";a:5:{i:0;s:1:\"0\";i:1;s:1:\"0\";i:2;s:1:\"0\";i:3;s:1:\"0\";i:4;s:1:\"0\";}s:15:\"inline_opacitys\";a:5:{i:0;s:3:\"0.8\";i:1;s:3:\"0.8\";i:2;s:3:\"0.8\";i:3;s:3:\"0.8\";i:4;s:3:\"0.8\";}}', 'yes'),
(142, 'lightboxplus_init', '1', 'yes'),
(143, 'siteorigin_panels_initial_version', '2.4.25', 'no'),
(144, 'socialwidget_global_notification', '1', 'yes'),
(145, 'siteorigin_panels_settings', 'a:0:{}', 'yes'),
(146, 'widget_akismet_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(147, 'widget_black-studio-tinymce', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(148, 'widget_weblizar_facebook_likebox', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(149, 'widget_siteorigin-panels-post-content', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(150, 'widget_siteorigin-panels-postloop', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(151, 'widget_siteorigin-panels-builder', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(152, 'widget_sow-button', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(153, 'widget_sow-google-map', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(154, 'widget_sow-image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(155, 'widget_sow-slider', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(156, 'widget_sow-post-carousel', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(157, 'widget_sow-editor', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(158, 'widget_social-widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(159, 'widget_metaslider_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(160, 'siteorigin_widget_bundle_version', '1.8.2', 'yes'),
(161, 'siteorigin_widgets_old_widgets', 'C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/button/button.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/cta/cta.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/contact/contact.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/editor/editor.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/features/features.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/google-map/google-map.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/headline/headline.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/hero/hero.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/icon/icon.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/image/image.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/image-grid/image-grid.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/slider/slider.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/layout-slider/layout-slider.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/post-carousel/post-carousel.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/price-table/price-table.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/simple-masonry/simple-masonry.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/social-media-buttons/social-media-buttons.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/taxonomy/taxonomy.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/testimonial/testimonial.php,C:\\xampp\\htdocs\\KwetuInfo\\wp-content\\plugins\\so-widgets-bundle/widgets/video/video.php', 'yes'),
(165, 'siteorigin_panels_home_page_id', '5', 'yes'),
(187, 'category_children', 'a:2:{i:2;a:5:{i:0;i:3;i:1;i:4;i:2;i:5;i:3;i:6;i:4;i:7;}i:3;a:3:{i:0;i:8;i:1;i:9;i:2;i:10;}}', 'yes'),
(192, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(202, 'metaslider_systemcheck', 'a:2:{s:16:\"wordPressVersion\";b:0;s:12:\"imageLibrary\";b:0;}', 'no'),
(203, 'ml-slider_children', 'a:0:{}', 'yes'),
(205, '_transient_timeout_files_fafdb1205cc0d377ff532f4a93cce4f5b6ba430430a508d5bb19924', '1595354304', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(206, '_transient_files_fafdb1205cc0d377ff532f4a93cce4f5b6ba430430a508d5bb19924', 'a:261:{s:7:\"404.php\";s:59:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/404.php\";s:22:\"admin/about/github.png\";s:74:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/github.png\";s:25:\"admin/about/page-free.php\";s:77:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/page-free.php\";s:27:\"admin/about/page-github.php\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/page-github.php\";s:27:\"admin/about/page-mature.php\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/page-mature.php\";s:33:\"admin/about/page-page-builder.php\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/page-page-builder.php\";s:28:\"admin/about/page-support.php\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/page-support.php\";s:30:\"admin/about/stills/still-1.jpg\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/stills/still-1.jpg\";s:30:\"admin/about/stills/still-2.jpg\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/stills/still-2.jpg\";s:30:\"admin/about/stills/still-3.jpg\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/stills/still-3.jpg\";s:31:\"admin/about/vantage-logo-2x.png\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/vantage-logo-2x.png\";s:28:\"admin/about/vantage-logo.png\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/admin/about/vantage-logo.png\";s:11:\"archive.php\";s:63:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/archive.php\";s:13:\"changelog.txt\";s:65:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/changelog.txt\";s:12:\"comments.php\";s:64:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/comments.php\";s:19:\"content-gallery.php\";s:71:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/content-gallery.php\";s:17:\"content-image.php\";s:69:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/content-image.php\";s:16:\"content-page.php\";s:68:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/content-page.php\";s:18:\"content-single.php\";s:70:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/content-single.php\";s:17:\"content-video.php\";s:69:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/content-video.php\";s:11:\"content.php\";s:63:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/content.php\";s:27:\"css/social-media-widget.css\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/css/social-media-widget.css\";s:19:\"css/woocommerce.css\";s:71:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/css/woocommerce.css\";s:32:\"fontawesome/css/font-awesome.css\";s:84:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/css/font-awesome.css\";s:36:\"fontawesome/css/font-awesome.min.css\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/css/font-awesome.min.css\";s:33:\"fontawesome/fonts/FontAwesome.otf\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/fonts/FontAwesome.otf\";s:41:\"fontawesome/fonts/fontawesome-webfont.eot\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/fonts/fontawesome-webfont.eot\";s:41:\"fontawesome/fonts/fontawesome-webfont.svg\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/fonts/fontawesome-webfont.svg\";s:41:\"fontawesome/fonts/fontawesome-webfont.ttf\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/fonts/fontawesome-webfont.ttf\";s:42:\"fontawesome/fonts/fontawesome-webfont.woff\";s:94:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/fonts/fontawesome-webfont.woff\";s:43:\"fontawesome/fonts/fontawesome-webfont.woff2\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/fonts/fontawesome-webfont.woff2\";s:30:\"fontawesome/icon-migration.php\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/icon-migration.php\";s:29:\"fontawesome/icon-sections.php\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/icon-sections.php\";s:21:\"fontawesome/icons.php\";s:73:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/fontawesome/icons.php\";s:10:\"footer.php\";s:62:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/footer.php\";s:13:\"functions.php\";s:65:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/functions.php\";s:10:\"header.php\";s:62:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/header.php\";s:15:\"home-panels.php\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/home-panels.php\";s:23:\"icons/vantage-icons.eot\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/icons/vantage-icons.eot\";s:23:\"icons/vantage-icons.svg\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/icons/vantage-icons.svg\";s:23:\"icons/vantage-icons.ttf\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/icons/vantage-icons.ttf\";s:24:\"icons/vantage-icons.woff\";s:76:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/icons/vantage-icons.woff\";s:9:\"image.php\";s:61:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/image.php\";s:26:\"images/carousel-loader.gif\";s:78:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/carousel-loader.gif\";s:23:\"images/default-home.png\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/default-home.png\";s:15:\"images/logo.png\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/logo.png\";s:30:\"images/retina/gallery-next.png\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/retina/gallery-next.png\";s:30:\"images/retina/gallery-prev.png\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/retina/gallery-prev.png\";s:27:\"images/retina/more-icon.png\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/retina/more-icon.png\";s:40:\"images/retina/slide-indicator-active.png\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/retina/slide-indicator-active.png\";s:42:\"images/retina/slide-indicator-inactive.png\";s:94:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/retina/slide-indicator-inactive.png\";s:24:\"images/settings-icon.png\";s:76:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/settings-icon.png\";s:31:\"images/sprites/gallery-next.png\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/sprites/gallery-next.png\";s:31:\"images/sprites/gallery-prev.png\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/sprites/gallery-prev.png\";s:28:\"images/sprites/more-icon.png\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/sprites/more-icon.png\";s:41:\"images/sprites/slide-indicator-active.png\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/sprites/slide-indicator-active.png\";s:43:\"images/sprites/slide-indicator-inactive.png\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/images/sprites/slide-indicator-inactive.png\";s:19:\"inc/breadcrumbs.php\";s:71:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/breadcrumbs.php\";s:35:\"inc/class-tgm-plugin-activation.php\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/class-tgm-plugin-activation.php\";s:20:\"inc/contributors.php\";s:72:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/contributors.php\";s:28:\"inc/customizer/css/admin.css\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/css/admin.css\";s:29:\"inc/customizer/customizer.php\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/customizer.php\";s:31:\"inc/customizer/google-fonts.php\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/google-fonts.php\";s:26:\"inc/customizer/js/admin.js\";s:78:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/js/admin.js\";s:30:\"inc/customizer/js/admin.min.js\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/js/admin.min.js\";s:36:\"inc/customizer/js/live-customizer.js\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/js/live-customizer.js\";s:40:\"inc/customizer/js/live-customizer.min.js\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer/js/live-customizer.min.js\";s:18:\"inc/customizer.php\";s:70:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/customizer.php\";s:14:\"inc/extras.php\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/extras.php\";s:15:\"inc/gallery.php\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/gallery.php\";s:14:\"inc/legacy.php\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/legacy.php\";s:12:\"inc/menu.php\";s:64:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/menu.php\";s:33:\"inc/metaslider/css/metaslider.css\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/css/metaslider.css\";s:32:\"inc/metaslider/img/landscape.jpg\";s:84:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/img/landscape.jpg\";s:41:\"inc/metaslider/img/layouts/basic-left.png\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/img/layouts/basic-left.png\";s:42:\"inc/metaslider/img/layouts/basic-right.png\";s:94:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/img/layouts/basic-right.png\";s:43:\"inc/metaslider/img/layouts/big-headline.png\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/img/layouts/big-headline.png\";s:31:\"inc/metaslider/img/portrait.jpg\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/img/portrait.jpg\";s:31:\"inc/metaslider/js/metaslider.js\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/js/metaslider.js\";s:35:\"inc/metaslider/js/metaslider.min.js\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/js/metaslider.min.js\";s:37:\"inc/metaslider/layouts/basic-left.php\";s:89:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/layouts/basic-left.php\";s:38:\"inc/metaslider/layouts/basic-right.php\";s:90:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/layouts/basic-right.php\";s:39:\"inc/metaslider/layouts/big-headline.php\";s:91:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/layouts/big-headline.php\";s:29:\"inc/metaslider/metaslider.php\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider/metaslider.php\";s:18:\"inc/metaslider.php\";s:70:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/metaslider.php\";s:31:\"inc/mobilenav/css/mobilenav.css\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/mobilenav/css/mobilenav.css\";s:29:\"inc/mobilenav/images/next.png\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/mobilenav/images/next.png\";s:31:\"inc/mobilenav/images/search.png\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/mobilenav/images/search.png\";s:29:\"inc/mobilenav/js/mobilenav.js\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/mobilenav/js/mobilenav.js\";s:33:\"inc/mobilenav/js/mobilenav.min.js\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/mobilenav/js/mobilenav.min.js\";s:27:\"inc/mobilenav/mobilenav.php\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/mobilenav/mobilenav.php\";s:23:\"inc/panels-lite/LICENSE\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/LICENSE\";s:29:\"inc/panels-lite/css/front.css\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/front.css\";s:30:\"inc/panels-lite/css/front.less\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/front.less\";s:37:\"inc/panels-lite/css/images/handle.png\";s:89:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/images/handle.png\";s:30:\"inc/panels-lite/css/mixins.css\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/mixins.css\";s:31:\"inc/panels-lite/css/mixins.less\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/mixins.less\";s:36:\"inc/panels-lite/css/panels-admin.css\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/panels-admin.css\";s:35:\"inc/panels-lite/css/post-teaser.css\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/post-teaser.css\";s:36:\"inc/panels-lite/css/post-teaser.less\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/css/post-teaser.less\";s:31:\"inc/panels-lite/images/icon.png\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/images/icon.png\";s:27:\"inc/panels-lite/inc/css.php\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/inc/css.php\";s:38:\"inc/panels-lite/inc/default-styles.php\";s:90:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/inc/default-styles.php\";s:31:\"inc/panels-lite/inc/widgets.php\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/inc/widgets.php\";s:29:\"inc/panels-lite/js/styling.js\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/js/styling.js\";s:33:\"inc/panels-lite/js/styling.min.js\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/js/styling.min.js\";s:25:\"inc/panels-lite/js/tab.js\";s:77:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/js/tab.js\";s:29:\"inc/panels-lite/js/tab.min.js\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/js/tab.min.js\";s:31:\"inc/panels-lite/panels-lite.php\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/panels-lite.php\";s:39:\"inc/panels-lite/tpl/admin-home-page.php\";s:91:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels-lite/tpl/admin-home-page.php\";s:14:\"inc/panels.php\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/panels.php\";s:43:\"inc/plugin-activation/plugin-activation.php\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/plugin-activation/plugin-activation.php\";s:37:\"inc/settings/chosen/chosen-sprite.png\";s:89:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/chosen/chosen-sprite.png\";s:40:\"inc/settings/chosen/chosen-sprite@2x.png\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/chosen/chosen-sprite@2x.png\";s:30:\"inc/settings/chosen/chosen.css\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/chosen/chosen.css\";s:36:\"inc/settings/chosen/chosen.jquery.js\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/chosen/chosen.jquery.js\";s:40:\"inc/settings/chosen/chosen.jquery.min.js\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/chosen/chosen.jquery.min.js\";s:34:\"inc/settings/chosen/chosen.min.css\";s:86:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/chosen/chosen.min.css\";s:26:\"inc/settings/css/about.css\";s:78:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/about.css\";s:41:\"inc/settings/css/control/font-control.css\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/control/font-control.css\";s:49:\"inc/settings/css/control/image-select-control.css\";s:101:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/control/image-select-control.css\";s:48:\"inc/settings/css/control/measurement-control.css\";s:100:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/control/measurement-control.css\";s:43:\"inc/settings/css/control/teaser-control.css\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/control/teaser-control.css\";s:51:\"inc/settings/css/control/widget-setting-control.css\";s:103:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/control/widget-setting-control.css\";s:32:\"inc/settings/css/images/play.png\";s:84:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/images/play.png\";s:38:\"inc/settings/css/images/siteorigin.png\";s:90:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/css/images/siteorigin.png\";s:27:\"inc/settings/data/fonts.php\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/data/fonts.php\";s:29:\"inc/settings/data/websafe.php\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/data/websafe.php\";s:31:\"inc/settings/inc/about_page.php\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/about_page.php\";s:26:\"inc/settings/inc/color.php\";s:78:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/color.php\";s:33:\"inc/settings/inc/control/font.php\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/font.php\";s:41:\"inc/settings/inc/control/image_select.php\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/image_select.php\";s:40:\"inc/settings/inc/control/measurement.php\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/measurement.php\";s:36:\"inc/settings/inc/control/premium.php\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/premium.php\";s:35:\"inc/settings/inc/control/teaser.php\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/teaser.php\";s:40:\"inc/settings/inc/control/text_select.php\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/text_select.php\";s:35:\"inc/settings/inc/control/widget.php\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/control/widget.php\";s:34:\"inc/settings/inc/css_functions.php\";s:86:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/css_functions.php\";s:34:\"inc/settings/inc/page_settings.php\";s:86:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/page_settings.php\";s:45:\"inc/settings/inc/page_settings_customizer.php\";s:97:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/page_settings_customizer.php\";s:29:\"inc/settings/inc/sanitize.php\";s:81:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/sanitize.php\";s:28:\"inc/settings/inc/upgrade.php\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/upgrade.php\";s:36:\"inc/settings/inc/webfont_manager.php\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/inc/webfont_manager.php\";s:24:\"inc/settings/js/about.js\";s:76:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/about.js\";s:28:\"inc/settings/js/about.min.js\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/about.min.js\";s:39:\"inc/settings/js/control/font-control.js\";s:91:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/font-control.js\";s:43:\"inc/settings/js/control/font-control.min.js\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/font-control.min.js\";s:47:\"inc/settings/js/control/image-select-control.js\";s:99:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/image-select-control.js\";s:51:\"inc/settings/js/control/image-select-control.min.js\";s:103:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/image-select-control.min.js\";s:46:\"inc/settings/js/control/measurement-control.js\";s:98:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/measurement-control.js\";s:50:\"inc/settings/js/control/measurement-control.min.js\";s:102:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/measurement-control.min.js\";s:41:\"inc/settings/js/control/teaser-control.js\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/teaser-control.js\";s:45:\"inc/settings/js/control/teaser-control.min.js\";s:97:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/teaser-control.min.js\";s:46:\"inc/settings/js/control/text-select-control.js\";s:98:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/text-select-control.js\";s:50:\"inc/settings/js/control/text-select-control.min.js\";s:102:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/text-select-control.min.js\";s:49:\"inc/settings/js/control/widget-setting-control.js\";s:101:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/widget-setting-control.js\";s:53:\"inc/settings/js/control/widget-setting-control.min.js\";s:105:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/control/widget-setting-control.min.js\";s:23:\"inc/settings/js/live.js\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/live.js\";s:27:\"inc/settings/js/live.min.js\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/live.min.js\";s:38:\"inc/settings/js/page-settings-admin.js\";s:90:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/page-settings-admin.js\";s:42:\"inc/settings/js/page-settings-admin.min.js\";s:94:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/page-settings-admin.min.js\";s:32:\"inc/settings/js/page-settings.js\";s:84:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/page-settings.js\";s:36:\"inc/settings/js/page-settings.min.js\";s:88:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/page-settings.min.js\";s:28:\"inc/settings/js/tinycolor.js\";s:80:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/tinycolor.js\";s:32:\"inc/settings/js/tinycolor.min.js\";s:84:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/js/tinycolor.min.js\";s:25:\"inc/settings/settings.php\";s:77:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings/settings.php\";s:16:\"inc/settings.php\";s:68:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/settings.php\";s:21:\"inc/template-tags.php\";s:73:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/template-tags.php\";s:15:\"inc/widgets.php\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/inc/widgets.php\";s:9:\"index.php\";s:61:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/index.php\";s:18:\"js/color-picker.js\";s:70:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/color-picker.js\";s:22:\"js/color-picker.min.js\";s:74:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/color-picker.min.js\";s:11:\"js/html5.js\";s:63:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/html5.js\";s:15:\"js/html5.min.js\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/html5.min.js\";s:20:\"js/jquery.fitvids.js\";s:72:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.fitvids.js\";s:24:\"js/jquery.fitvids.min.js\";s:76:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.fitvids.min.js\";s:23:\"js/jquery.flexslider.js\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.flexslider.js\";s:27:\"js/jquery.flexslider.min.js\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.flexslider.min.js\";s:23:\"js/jquery.theme-main.js\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.theme-main.js\";s:27:\"js/jquery.theme-main.min.js\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.theme-main.min.js\";s:23:\"js/jquery.touchSwipe.js\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.touchSwipe.js\";s:27:\"js/jquery.touchSwipe.min.js\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/jquery.touchSwipe.min.js\";s:31:\"js/keyboard-image-navigation.js\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/keyboard-image-navigation.js\";s:35:\"js/keyboard-image-navigation.min.js\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/keyboard-image-navigation.min.js\";s:17:\"js/selectivizr.js\";s:69:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/selectivizr.js\";s:21:\"js/selectivizr.min.js\";s:73:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/js/selectivizr.min.js\";s:20:\"languages/readme.txt\";s:72:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/languages/readme.txt\";s:21:\"languages/vantage.pot\";s:73:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/languages/vantage.pot\";s:11:\"license.txt\";s:63:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/license.txt\";s:8:\"loop.php\";s:60:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/loop.php\";s:19:\"loops/loop-blog.php\";s:71:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/loops/loop-blog.php\";s:23:\"loops/loop-carousel.php\";s:75:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/loops/loop-carousel.php\";s:25:\"loops/loop-circleicon.php\";s:77:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/loops/loop-circleicon.php\";s:19:\"loops/loop-grid.php\";s:71:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/loops/loop-grid.php\";s:21:\"loops/loop-slider.php\";s:73:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/loops/loop-slider.php\";s:14:\"no-results.php\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/no-results.php\";s:8:\"page.php\";s:60:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/page.php\";s:25:\"parts/footer-vertical.php\";s:77:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/parts/footer-vertical.php\";s:16:\"parts/footer.php\";s:68:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/parts/footer.php\";s:31:\"parts/masthead-logo-in-menu.php\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/parts/masthead-logo-in-menu.php\";s:18:\"parts/masthead.php\";s:70:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/parts/masthead.php\";s:20:\"parts/menu-empty.php\";s:72:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/parts/menu-empty.php\";s:14:\"parts/menu.php\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/parts/menu.php\";s:10:\"readme.txt\";s:62:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/readme.txt\";s:14:\"screenshot.jpg\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/screenshot.jpg\";s:10:\"search.php\";s:62:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/search.php\";s:14:\"searchform.php\";s:66:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/searchform.php\";s:16:\"sidebar-shop.php\";s:68:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/sidebar-shop.php\";s:11:\"sidebar.php\";s:63:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/sidebar.php\";s:10:\"single.php\";s:62:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/single.php\";s:17:\"slider/action.png\";s:69:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/action.png\";s:30:\"slider/backgrounds/slide-1.jpg\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/backgrounds/slide-1.jpg\";s:30:\"slider/backgrounds/slide-4.jpg\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/backgrounds/slide-4.jpg\";s:44:\"slider/backgrounds/slide-plugins-overlay.png\";s:96:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/backgrounds/slide-plugins-overlay.png\";s:47:\"slider/backgrounds/slide-responsive-overlay.png\";s:99:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/backgrounds/slide-responsive-overlay.png\";s:15:\"slider/demo.php\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/demo.php\";s:34:\"slider/metaslider-editor-style.css\";s:86:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/slider/metaslider-editor-style.css\";s:40:\"snippets/adjust-widget-sidebar-width.css\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/adjust-widget-sidebar-width.css\";s:47:\"snippets/boxed-layout-adjust-footer-padding.css\";s:99:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/boxed-layout-adjust-footer-padding.css\";s:43:\"snippets/boxed-layout-adjust-site-width.css\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/boxed-layout-adjust-site-width.css\";s:43:\"snippets/boxed-layout-full-width-footer.css\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/boxed-layout-full-width-footer.css\";s:43:\"snippets/boxed-layout-full-width-header.css\";s:95:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/boxed-layout-full-width-header.css\";s:46:\"snippets/boxed-layout-remove-bottom-margin.css\";s:98:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/boxed-layout-remove-bottom-margin.css\";s:44:\"snippets/boxed-layout-remove-top-padding.css\";s:96:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/boxed-layout-remove-top-padding.css\";s:57:\"snippets/center-vantage-social-media-widget-in-footer.css\";s:109:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/center-vantage-social-media-widget-in-footer.css\";s:46:\"snippets/circle-icon-widget-hide-more-link.css\";s:98:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/circle-icon-widget-hide-more-link.css\";s:45:\"snippets/content-container-minimum-height.css\";s:97:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/content-container-minimum-height.css\";s:41:\"snippets/disable-site-title-logo-link.css\";s:93:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/disable-site-title-logo-link.css\";s:35:\"snippets/drop-down-menu-opacity.css\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/drop-down-menu-opacity.css\";s:45:\"snippets/full-width-adjust-footer-padding.css\";s:97:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/full-width-adjust-footer-padding.css\";s:44:\"snippets/full-width-expand-header-to-100.css\";s:96:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/full-width-expand-header-to-100.css\";s:30:\"snippets/header-text-style.css\";s:82:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/header-text-style.css\";s:44:\"snippets/hide-main-meta-slider-on-mobile.css\";s:96:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/hide-main-meta-slider-on-mobile.css\";s:35:\"snippets/hide-sidebar-on-mobile.css\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/hide-sidebar-on-mobile.css\";s:59:\"snippets/home-page-remove-content-container-top-padding.css\";s:111:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/home-page-remove-content-container-top-padding.css\";s:35:\"snippets/horizontal-footer-menu.css\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/horizontal-footer-menu.css\";s:54:\"snippets/logo-in-menu-masthead-remove-logo-padding.css\";s:106:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/logo-in-menu-masthead-remove-logo-padding.css\";s:40:\"snippets/menu-drop-down-item-padding.css\";s:92:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/menu-drop-down-item-padding.css\";s:38:\"snippets/menu-search-field-opacity.css\";s:90:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/menu-search-field-opacity.css\";s:42:\"snippets/remove-footer-link-underlines.css\";s:94:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/remove-footer-link-underlines.css\";s:35:\"snippets/remove-link-underlines.css\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/remove-link-underlines.css\";s:42:\"snippets/remove-sticky-menu-box-shadow.css\";s:94:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/remove-sticky-menu-box-shadow.css\";s:45:\"snippets/set-meta-slider-background-color.css\";s:97:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/set-meta-slider-background-color.css\";s:31:\"snippets/table-border-color.css\";s:83:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/table-border-color.css\";s:32:\"snippets/uppercase-main-menu.css\";s:84:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/snippets/uppercase-main-menu.css\";s:9:\"style.css\";s:61:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/style.css\";s:10:\"style.less\";s:62:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/style.less\";s:35:\"templates/template-full-notitle.php\";s:87:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/templates/template-full-notitle.php\";s:27:\"templates/template-full.php\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/templates/template-full.php\";s:25:\"tour/steps/additional.png\";s:77:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/additional.png\";s:26:\"tour/steps/header-text.jpg\";s:78:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/header-text.jpg\";s:19:\"tour/steps/logo.png\";s:71:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/logo.png\";s:27:\"tour/steps/page-builder.jpg\";s:79:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/page-builder.jpg\";s:22:\"tour/steps/premium.jpg\";s:74:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/premium.jpg\";s:22:\"tour/steps/sharing.png\";s:74:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/sharing.png\";s:21:\"tour/steps/slider.jpg\";s:73:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/slider.jpg\";s:33:\"tour/steps/upload-logo-retina.jpg\";s:85:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/upload-logo-retina.jpg\";s:26:\"tour/steps/upload-logo.jpg\";s:78:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/upload-logo.jpg\";s:20:\"tour/steps/width.jpg\";s:72:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/steps/width.jpg\";s:13:\"tour/tour.php\";s:65:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/tour/tour.php\";s:15:\"wpml-config.xml\";s:67:\"C:\\xampp\\htdocs\\KwetuInfo/wp-content/themes/vantage/wpml-config.xml\";}', 'no'),
(209, '_site_transient_timeout_theme_roots', '1595352810', 'no'),
(210, '_site_transient_theme_roots', 'a:1:{s:7:\"vantage\";s:7:\"/themes\";}', 'no'),
(213, '_transient_is_multi_author', '0', 'yes'),
(214, '_transient_vantage_categorized_blog_cache_count', '3', 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 4, 'vantage_panels_no_legacy', 'true'),
(3, 4, '_form', '<label> Your Name (required)\n    [text* your-name] </label>\n\n<label> Your Email (required)\n    [email* your-email] </label>\n\n<label> Subject\n    [text your-subject] </label>\n\n<label> Your Message\n    [textarea your-message] </label>\n\n[submit \"Send\"]'),
(4, 4, '_mail', 'a:8:{s:7:\"subject\";s:26:\"kwetuinfo \"[your-subject]\"\";s:6:\"sender\";s:32:\"[your-name] <dsadicky@gmail.com>\";s:4:\"body\";s:174:\"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on kwetuinfo (http://localhost/kwetuinfo)\";s:9:\"recipient\";s:18:\"dsadicky@gmail.com\";s:18:\"additional_headers\";s:22:\"Reply-To: [your-email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),
(5, 4, '_mail_2', 'a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:26:\"kwetuinfo \"[your-subject]\"\";s:6:\"sender\";s:30:\"kwetuinfo <dsadicky@gmail.com>\";s:4:\"body\";s:116:\"Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on kwetuinfo (http://localhost/kwetuinfo)\";s:9:\"recipient\";s:12:\"[your-email]\";s:18:\"additional_headers\";s:28:\"Reply-To: dsadicky@gmail.com\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),
(6, 4, '_messages', 'a:8:{s:12:\"mail_sent_ok\";s:45:\"Thank you for your message. It has been sent.\";s:12:\"mail_sent_ng\";s:71:\"There was an error trying to send your message. Please try again later.\";s:16:\"validation_error\";s:61:\"One or more fields have an error. Please check and try again.\";s:4:\"spam\";s:71:\"There was an error trying to send your message. Please try again later.\";s:12:\"accept_terms\";s:69:\"You must accept the terms and conditions before sending your message.\";s:16:\"invalid_required\";s:22:\"The field is required.\";s:16:\"invalid_too_long\";s:22:\"The field is too long.\";s:17:\"invalid_too_short\";s:23:\"The field is too short.\";}'),
(7, 4, '_additional_settings', NULL),
(8, 4, '_locale', 'fr_FR'),
(9, 2, '_edit_lock', '1595346777:1'),
(10, 5, 'vantage_panels_no_legacy', 'true'),
(11, 5, 'siteorigin_page_settings', 'a:7:{s:6:\"layout\";s:10:\"no-sidebar\";s:15:\"masthead_margin\";b:1;s:13:\"footer_margin\";b:1;s:14:\"featured_image\";b:0;s:10:\"page_title\";b:0;s:13:\"hide_masthead\";b:0;s:19:\"hide_footer_widgets\";b:0;}'),
(12, 5, 'panels_data', 'a:3:{s:7:\"widgets\";a:7:{i:0;a:16:{s:5:\"title\";s:18:\"Editable Home Page\";s:11:\"title_color\";s:0:\"\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:10:\"text_color\";s:0:\"\";s:4:\"icon\";s:21:\"fa fa-pencil-square-o\";s:10:\"icon_color\";s:0:\"\";s:21:\"icon_background_color\";s:0:\"\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:9:\"icon_size\";s:5:\"small\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:12:\"all_linkable\";b:0;s:11:\"more_target\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:1:{s:18:\"background_display\";s:4:\"tile\";}}}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}i:6;a:31:{s:5:\"title\";s:12:\"Social Media\";s:4:\"size\";s:6:\"medium\";s:8:\"facebook\";s:1:\"#\";s:7:\"twitter\";s:1:\"#\";s:11:\"google-plus\";s:1:\"#\";s:8:\"linkedin\";s:0:\"\";s:8:\"dribbble\";s:0:\"\";s:7:\"behance\";s:0:\"\";s:10:\"deviantart\";s:0:\"\";s:6:\"flickr\";s:0:\"\";s:5:\"500px\";s:0:\"\";s:9:\"instagram\";s:1:\"#\";s:9:\"pinterest\";s:0:\"\";s:5:\"skype\";s:1:\"#\";s:7:\"youtube\";s:1:\"#\";s:5:\"vimeo\";s:0:\"\";s:6:\"medium\";s:0:\"\";s:6:\"tumblr\";s:0:\"\";s:9:\"wordpress\";s:0:\"\";s:6:\"github\";s:0:\"\";s:9:\"bitbucket\";s:0:\"\";s:7:\"codepen\";s:0:\"\";s:8:\"mixcloud\";s:0:\"\";s:10:\"soundcloud\";s:0:\"\";s:11:\"stumbleupon\";s:0:\"\";s:2:\"vk\";s:0:\"\";s:3:\"rss\";s:0:\"\";s:8:\"envelope\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:10:\"new_window\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:27:\"Vantage_Social_Media_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:3;s:4:\"cell\";i:0;s:2:\"id\";i:6;s:9:\"widget_id\";s:36:\"51a037ff-b04b-4d62-ac74-738aa28f7344\";s:5:\"style\";a:1:{s:18:\"background_display\";s:4:\"tile\";}}}}s:5:\"grids\";a:4:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:1:{s:5:\"class\";s:9:\"wide-grey\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}i:3;a:2:{s:5:\"cells\";i:3;s:5:\"style\";a:0:{}}}s:10:\"grid_cells\";a:9:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}i:6;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24074074074074076;}i:7;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.5164609053497943;}i:8;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24279835390946503;}}}'),
(13, 5, '_wp_page_template', 'home-panels.php'),
(14, 6, 'panels_data', 'a:3:{s:7:\"widgets\";a:6:{i:0;a:9:{s:5:\"title\";s:18:\"Editable Home Page\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:4:\"icon\";s:9:\"icon-edit\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:0:{}}}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}}s:5:\"grids\";a:3:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:3:{s:5:\"class\";s:9:\"wide-grey\";s:23:\"background_image_repeat\";s:0:\"\";s:9:\"no_margin\";s:0:\"\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}}s:10:\"grid_cells\";a:6:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}}}'),
(15, 5, '_edit_lock', '1595349802:1'),
(16, 7, 'panels_data', 'a:3:{s:7:\"widgets\";a:6:{i:0;a:9:{s:5:\"title\";s:18:\"Editable Home Page\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:4:\"icon\";s:9:\"icon-edit\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:0:{}}}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}}s:5:\"grids\";a:3:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:3:{s:5:\"class\";s:9:\"wide-grey\";s:23:\"background_image_repeat\";s:0:\"\";s:9:\"no_margin\";s:0:\"\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}}s:10:\"grid_cells\";a:6:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}}}'),
(17, 5, '_edit_last', '1'),
(18, 5, '_panels_data_preview', 'a:3:{s:7:\"widgets\";a:7:{i:0;a:16:{s:5:\"title\";s:18:\"Editable Home Page\";s:11:\"title_color\";s:0:\"\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:10:\"text_color\";s:0:\"\";s:4:\"icon\";s:21:\"fa fa-pencil-square-o\";s:10:\"icon_color\";s:0:\"\";s:21:\"icon_background_color\";s:0:\"\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:9:\"icon_size\";s:5:\"small\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:12:\"all_linkable\";b:0;s:11:\"more_target\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:1:{s:18:\"background_display\";s:4:\"tile\";}}}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}i:6;a:31:{s:5:\"title\";s:12:\"Social Media\";s:4:\"size\";s:6:\"medium\";s:8:\"facebook\";s:1:\"#\";s:7:\"twitter\";s:1:\"#\";s:11:\"google-plus\";s:1:\"#\";s:8:\"linkedin\";s:0:\"\";s:8:\"dribbble\";s:0:\"\";s:7:\"behance\";s:0:\"\";s:10:\"deviantart\";s:0:\"\";s:6:\"flickr\";s:0:\"\";s:5:\"500px\";s:0:\"\";s:9:\"instagram\";s:1:\"#\";s:9:\"pinterest\";s:0:\"\";s:5:\"skype\";s:1:\"#\";s:7:\"youtube\";s:1:\"#\";s:5:\"vimeo\";s:0:\"\";s:6:\"medium\";s:0:\"\";s:6:\"tumblr\";s:0:\"\";s:9:\"wordpress\";s:0:\"\";s:6:\"github\";s:0:\"\";s:9:\"bitbucket\";s:0:\"\";s:7:\"codepen\";s:0:\"\";s:8:\"mixcloud\";s:0:\"\";s:10:\"soundcloud\";s:0:\"\";s:11:\"stumbleupon\";s:0:\"\";s:2:\"vk\";s:0:\"\";s:3:\"rss\";s:0:\"\";s:8:\"envelope\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:10:\"new_window\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:27:\"Vantage_Social_Media_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:3;s:4:\"cell\";i:0;s:2:\"id\";i:6;s:9:\"widget_id\";s:36:\"51a037ff-b04b-4d62-ac74-738aa28f7344\";s:5:\"style\";a:1:{s:18:\"background_display\";s:4:\"tile\";}}}}s:5:\"grids\";a:4:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:1:{s:5:\"class\";s:9:\"wide-grey\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}i:3;a:2:{s:5:\"cells\";i:3;s:5:\"style\";a:0:{}}}s:10:\"grid_cells\";a:9:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}i:6;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24074074074074076;}i:7;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.5164609053497943;}i:8;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24279835390946503;}}}'),
(19, 5, 'vantage_metaslider_slider', 'demo'),
(20, 5, 'vantage_metaslider_slider_stretch', '1'),
(21, 5, 'vantage_menu_icon', ''),
(22, 8, 'panels_data', 'a:3:{s:7:\"widgets\";a:6:{i:0;a:9:{s:5:\"title\";s:18:\"Editable Home Page\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:4:\"icon\";s:9:\"icon-edit\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:0:{}}}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}}s:5:\"grids\";a:3:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:3:{s:5:\"class\";s:9:\"wide-grey\";s:23:\"background_image_repeat\";s:0:\"\";s:9:\"no_margin\";s:0:\"\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}}s:10:\"grid_cells\";a:6:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}}}'),
(23, 9, 'panels_data', 'a:3:{s:7:\"widgets\";a:7:{i:0;a:16:{s:5:\"title\";s:18:\"Editable Home Page\";s:11:\"title_color\";s:0:\"\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:10:\"text_color\";s:0:\"\";s:4:\"icon\";s:21:\"fa fa-pencil-square-o\";s:10:\"icon_color\";s:0:\"\";s:21:\"icon_background_color\";s:0:\"\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:9:\"icon_size\";s:5:\"small\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:11:\"panels_info\";a:6:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:2:{s:27:\"background_image_attachment\";b:0;s:18:\"background_display\";s:4:\"tile\";}}s:3:\"box\";b:0;s:12:\"all_linkable\";b:0;s:11:\"more_target\";b:0;}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}i:6;a:31:{s:5:\"title\";s:12:\"Social Media\";s:4:\"size\";s:6:\"medium\";s:8:\"facebook\";s:1:\"#\";s:7:\"twitter\";s:1:\"#\";s:11:\"google-plus\";s:1:\"#\";s:8:\"linkedin\";s:0:\"\";s:8:\"dribbble\";s:0:\"\";s:7:\"behance\";s:0:\"\";s:10:\"deviantart\";s:0:\"\";s:6:\"flickr\";s:0:\"\";s:5:\"500px\";s:0:\"\";s:9:\"instagram\";s:0:\"\";s:9:\"pinterest\";s:0:\"\";s:5:\"skype\";s:0:\"\";s:7:\"youtube\";s:0:\"\";s:5:\"vimeo\";s:0:\"\";s:6:\"medium\";s:0:\"\";s:6:\"tumblr\";s:0:\"\";s:9:\"wordpress\";s:0:\"\";s:6:\"github\";s:0:\"\";s:9:\"bitbucket\";s:0:\"\";s:7:\"codepen\";s:0:\"\";s:8:\"mixcloud\";s:0:\"\";s:10:\"soundcloud\";s:0:\"\";s:11:\"stumbleupon\";s:0:\"\";s:2:\"vk\";s:0:\"\";s:3:\"rss\";s:0:\"\";s:8:\"envelope\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:10:\"new_window\";b:1;s:11:\"panels_info\";a:6:{s:5:\"class\";s:27:\"Vantage_Social_Media_Widget\";s:4:\"grid\";i:3;s:4:\"cell\";i:0;s:2:\"id\";i:6;s:9:\"widget_id\";s:36:\"51a037ff-b04b-4d62-ac74-738aa28f7344\";s:5:\"style\";a:2:{s:27:\"background_image_attachment\";b:0;s:18:\"background_display\";s:4:\"tile\";}}}}s:5:\"grids\";a:4:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:1:{s:5:\"class\";s:9:\"wide-grey\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}i:3;a:2:{s:5:\"cells\";i:3;s:5:\"style\";a:0:{}}}s:10:\"grid_cells\";a:9:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}i:6;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24074074074074076;}i:7;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.5164609053497943;}i:8;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24279835390946503;}}}'),
(24, 10, '_wp_trash_meta_status', 'publish'),
(25, 10, '_wp_trash_meta_time', '1595347841'),
(26, 10, 'vantage_panels_no_legacy', 'true'),
(27, 2, '_wp_trash_meta_status', 'publish'),
(28, 2, '_wp_trash_meta_time', '1595348553'),
(29, 2, '_wp_desired_post_slug', 'page-d-exemple'),
(30, 2, '_wp_trash_meta_status', 'publish'),
(31, 2, '_wp_trash_meta_time', '1595348554'),
(32, 2, '_wp_desired_post_slug', 'page-d-exemple'),
(33, 2, 'vantage_panels_no_legacy', 'true'),
(34, 12, 'vantage_panels_no_legacy', 'true'),
(35, 12, '_edit_last', '1'),
(36, 12, '_wp_page_template', 'default'),
(37, 12, 'vantage_metaslider_slider', ''),
(38, 12, 'vantage_metaslider_slider_stretch', '1'),
(39, 12, 'vantage_menu_icon', ''),
(40, 12, 'siteorigin_page_settings', 'a:7:{s:6:\"layout\";s:7:\"default\";s:10:\"page_title\";b:1;s:15:\"masthead_margin\";b:1;s:13:\"footer_margin\";b:1;s:14:\"featured_image\";b:0;s:13:\"hide_masthead\";b:0;s:19:\"hide_footer_widgets\";b:0;}'),
(41, 12, '_edit_lock', '1595350683:1'),
(42, 14, 'vantage_panels_no_legacy', 'true'),
(43, 14, '_edit_last', '1'),
(44, 14, '_wp_page_template', 'default'),
(45, 14, 'vantage_metaslider_slider', ''),
(46, 14, 'vantage_metaslider_slider_stretch', '1'),
(47, 14, 'vantage_menu_icon', ''),
(48, 14, 'siteorigin_page_settings', 'a:7:{s:6:\"layout\";s:7:\"default\";s:10:\"page_title\";b:1;s:15:\"masthead_margin\";b:1;s:13:\"footer_margin\";b:1;s:14:\"featured_image\";b:0;s:13:\"hide_masthead\";b:0;s:19:\"hide_footer_widgets\";b:0;}'),
(49, 14, '_edit_lock', '1595348477:1'),
(50, 16, 'vantage_panels_no_legacy', 'true'),
(51, 16, '_edit_last', '1'),
(52, 16, '_wp_page_template', 'default'),
(53, 16, 'vantage_metaslider_slider', ''),
(54, 16, 'vantage_metaslider_slider_stretch', '1'),
(55, 16, 'vantage_menu_icon', ''),
(56, 16, 'siteorigin_page_settings', 'a:7:{s:6:\"layout\";s:7:\"default\";s:10:\"page_title\";b:1;s:15:\"masthead_margin\";b:1;s:13:\"footer_margin\";b:1;s:14:\"featured_image\";b:0;s:13:\"hide_masthead\";b:0;s:19:\"hide_footer_widgets\";b:0;}'),
(57, 16, '_edit_lock', '1595348573:1'),
(58, 18, 'vantage_panels_no_legacy', 'true'),
(59, 18, '_edit_last', '1'),
(60, 18, '_wp_page_template', 'default'),
(61, 18, 'vantage_metaslider_slider', ''),
(62, 18, 'vantage_metaslider_slider_stretch', '1'),
(63, 18, 'vantage_menu_icon', ''),
(64, 18, 'siteorigin_page_settings', 'a:7:{s:6:\"layout\";s:7:\"default\";s:10:\"page_title\";b:1;s:15:\"masthead_margin\";b:1;s:13:\"footer_margin\";b:1;s:14:\"featured_image\";b:0;s:13:\"hide_masthead\";b:0;s:19:\"hide_footer_widgets\";b:0;}'),
(65, 18, '_edit_lock', '1595349342:1'),
(66, 20, 'vantage_panels_no_legacy', 'true'),
(67, 21, 'vantage_panels_no_legacy', 'true'),
(68, 21, '_menu_item_type', 'post_type'),
(69, 21, '_menu_item_menu_item_parent', '0'),
(70, 21, '_menu_item_object_id', '5'),
(71, 21, '_menu_item_object', 'page'),
(72, 21, '_menu_item_target', ''),
(73, 21, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(74, 21, '_menu_item_xfn', ''),
(75, 21, '_menu_item_url', ''),
(77, 22, 'vantage_panels_no_legacy', 'true'),
(78, 22, '_menu_item_type', 'post_type'),
(79, 22, '_menu_item_menu_item_parent', '0'),
(80, 22, '_menu_item_object_id', '14'),
(81, 22, '_menu_item_object', 'page'),
(82, 22, '_menu_item_target', ''),
(83, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(84, 22, '_menu_item_xfn', ''),
(85, 22, '_menu_item_url', ''),
(87, 23, 'vantage_panels_no_legacy', 'true'),
(88, 23, '_menu_item_type', 'post_type'),
(89, 23, '_menu_item_menu_item_parent', '0'),
(90, 23, '_menu_item_object_id', '18'),
(91, 23, '_menu_item_object', 'page'),
(92, 23, '_menu_item_target', ''),
(93, 23, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(94, 23, '_menu_item_xfn', ''),
(95, 23, '_menu_item_url', ''),
(97, 24, 'vantage_panels_no_legacy', 'true'),
(98, 24, '_menu_item_type', 'post_type'),
(99, 24, '_menu_item_menu_item_parent', '0'),
(100, 24, '_menu_item_object_id', '12'),
(101, 24, '_menu_item_object', 'page'),
(102, 24, '_menu_item_target', ''),
(103, 24, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(104, 24, '_menu_item_xfn', ''),
(105, 24, '_menu_item_url', ''),
(107, 25, 'vantage_panels_no_legacy', 'true'),
(108, 25, '_menu_item_type', 'post_type'),
(109, 25, '_menu_item_menu_item_parent', '0'),
(110, 25, '_menu_item_object_id', '5'),
(111, 25, '_menu_item_object', 'page'),
(112, 25, '_menu_item_target', ''),
(113, 25, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(114, 25, '_menu_item_xfn', ''),
(115, 25, '_menu_item_url', ''),
(116, 25, '_menu_item_orphaned', '1595349571'),
(117, 26, 'vantage_panels_no_legacy', 'true'),
(118, 26, '_menu_item_type', 'post_type'),
(119, 26, '_menu_item_menu_item_parent', '0'),
(120, 26, '_menu_item_object_id', '16'),
(121, 26, '_menu_item_object', 'page'),
(122, 26, '_menu_item_target', ''),
(123, 26, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(124, 26, '_menu_item_xfn', ''),
(125, 26, '_menu_item_url', ''),
(127, 27, 'vantage_panels_no_legacy', 'true'),
(128, 27, '_menu_item_type', 'taxonomy'),
(129, 27, '_menu_item_menu_item_parent', '0'),
(130, 27, '_menu_item_object_id', '16'),
(131, 27, '_menu_item_object', 'category'),
(132, 27, '_menu_item_target', ''),
(133, 27, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(134, 27, '_menu_item_xfn', ''),
(135, 27, '_menu_item_url', ''),
(136, 27, '_menu_item_orphaned', '1595349658'),
(137, 28, 'panels_data', 'a:3:{s:7:\"widgets\";a:7:{i:0;a:16:{s:5:\"title\";s:18:\"Editable Home Page\";s:11:\"title_color\";s:0:\"\";s:4:\"text\";s:167:\"You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.\";s:10:\"text_color\";s:0:\"\";s:4:\"icon\";s:21:\"fa fa-pencil-square-o\";s:10:\"icon_color\";s:0:\"\";s:21:\"icon_background_color\";s:0:\"\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:9:\"icon_size\";s:5:\"small\";s:4:\"more\";s:13:\"Start Editing\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:12:\"all_linkable\";b:0;s:11:\"more_target\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:0;s:2:\"id\";i:0;s:9:\"widget_id\";s:36:\"59a663b7-3931-459b-b558-248f8e340878\";s:5:\"style\";a:1:{s:18:\"background_display\";s:4:\"tile\";}}}i:1;a:9:{s:5:\"title\";s:14:\"Loads of Icons\";s:4:\"text\";s:144:\"This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.\";s:4:\"icon\";s:14:\"icon-ok-circle\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:14:\"Example Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:1;s:2:\"id\";i:1;s:9:\"widget_id\";s:36:\"2d1c3211-3f49-45b9-9e0c-948f26166f95\";s:5:\"style\";a:0:{}}}i:2;a:9:{s:5:\"title\";s:14:\"Saves You Time\";s:4:\"text\";s:135:\"Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.\";s:4:\"icon\";s:9:\"icon-time\";s:5:\"image\";s:0:\"\";s:13:\"icon_position\";s:3:\"top\";s:4:\"more\";s:11:\"Test Button\";s:8:\"more_url\";s:1:\"#\";s:3:\"box\";b:0;s:11:\"panels_info\";a:7:{s:5:\"class\";s:25:\"Vantage_CircleIcon_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:0;s:4:\"cell\";i:2;s:2:\"id\";i:2;s:9:\"widget_id\";s:36:\"ee7b2e4f-717e-4ca6-8301-bbad5b1e8451\";s:5:\"style\";a:0:{}}}i:3;a:3:{s:8:\"headline\";s:25:\"This Is A Headline Widget\";s:12:\"sub_headline\";s:51:\"You can customize it and put it where ever you want\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:23:\"Vantage_Headline_Widget\";s:3:\"raw\";b:0;s:4:\"grid\";i:1;s:4:\"cell\";i:0;s:2:\"id\";i:3;s:9:\"widget_id\";s:36:\"e7690a72-827f-4ca3-899a-90af71e22aa0\";s:5:\"style\";a:0:{}}}i:4;a:9:{s:5:\"title\";s:12:\"Latest Posts\";s:8:\"template\";s:23:\"loops/loop-carousel.php\";s:9:\"post_type\";s:4:\"post\";s:14:\"posts_per_page\";s:1:\"4\";s:7:\"orderby\";s:4:\"date\";s:5:\"order\";s:4:\"DESC\";s:6:\"sticky\";s:0:\"\";s:10:\"additional\";s:0:\"\";s:11:\"panels_info\";a:7:{s:5:\"class\";s:34:\"SiteOrigin_Panels_Widgets_PostLoop\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:0;s:2:\"id\";i:4;s:9:\"widget_id\";s:36:\"0a1b9133-fc0b-439e-84e7-3bed06085a6f\";s:5:\"style\";a:0:{}}}i:5;a:4:{s:5:\"title\";s:0:\"\";s:4:\"text\";s:99:\"There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.\";s:6:\"filter\";b:1;s:11:\"panels_info\";a:7:{s:5:\"class\";s:14:\"WP_Widget_Text\";s:3:\"raw\";b:0;s:4:\"grid\";i:2;s:4:\"cell\";i:1;s:2:\"id\";i:5;s:9:\"widget_id\";s:36:\"b3952949-5bc5-4d69-99e5-2e26ab792fa7\";s:5:\"style\";a:0:{}}}i:6;a:31:{s:5:\"title\";s:12:\"Social Media\";s:4:\"size\";s:6:\"medium\";s:8:\"facebook\";s:1:\"#\";s:7:\"twitter\";s:1:\"#\";s:11:\"google-plus\";s:1:\"#\";s:8:\"linkedin\";s:0:\"\";s:8:\"dribbble\";s:0:\"\";s:7:\"behance\";s:0:\"\";s:10:\"deviantart\";s:0:\"\";s:6:\"flickr\";s:0:\"\";s:5:\"500px\";s:0:\"\";s:9:\"instagram\";s:1:\"#\";s:9:\"pinterest\";s:0:\"\";s:5:\"skype\";s:1:\"#\";s:7:\"youtube\";s:1:\"#\";s:5:\"vimeo\";s:0:\"\";s:6:\"medium\";s:0:\"\";s:6:\"tumblr\";s:0:\"\";s:9:\"wordpress\";s:0:\"\";s:6:\"github\";s:0:\"\";s:9:\"bitbucket\";s:0:\"\";s:7:\"codepen\";s:0:\"\";s:8:\"mixcloud\";s:0:\"\";s:10:\"soundcloud\";s:0:\"\";s:11:\"stumbleupon\";s:0:\"\";s:2:\"vk\";s:0:\"\";s:3:\"rss\";s:0:\"\";s:8:\"envelope\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:10:\"new_window\";b:1;s:11:\"panels_info\";a:6:{s:5:\"class\";s:27:\"Vantage_Social_Media_Widget\";s:4:\"grid\";i:3;s:4:\"cell\";i:0;s:2:\"id\";i:6;s:9:\"widget_id\";s:36:\"51a037ff-b04b-4d62-ac74-738aa28f7344\";s:5:\"style\";a:2:{s:27:\"background_image_attachment\";b:0;s:18:\"background_display\";s:4:\"tile\";}}}}s:5:\"grids\";a:4:{i:0;a:2:{s:5:\"cells\";i:3;s:5:\"style\";s:0:\"\";}i:1;a:2:{s:5:\"cells\";i:1;s:5:\"style\";a:1:{s:5:\"class\";s:9:\"wide-grey\";}}i:2;a:2:{s:5:\"cells\";i:2;s:5:\"style\";s:0:\"\";}i:3;a:2:{s:5:\"cells\";i:3;s:5:\"style\";a:0:{}}}s:10:\"grid_cells\";a:9:{i:0;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:1;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:2;a:2:{s:4:\"grid\";i:0;s:6:\"weight\";d:0.3333333333333333;}i:3;a:2:{s:4:\"grid\";i:1;s:6:\"weight\";i:1;}i:4;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.6658461538461539;}i:5;a:2:{s:4:\"grid\";i:2;s:6:\"weight\";d:0.33415384615384613;}i:6;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24074074074074076;}i:7;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.5164609053497943;}i:8;a:2:{s:4:\"grid\";i:3;s:6:\"weight\";d:0.24279835390946503;}}}'),
(138, 29, 'vantage_panels_no_legacy', 'true'),
(139, 29, 'ml-slider_settings', 'a:34:{s:4:\"type\";s:4:\"flex\";s:6:\"random\";b:0;s:8:\"cssClass\";s:0:\"\";s:8:\"printCss\";b:1;s:7:\"printJs\";b:1;s:5:\"width\";i:700;s:6:\"height\";i:300;s:3:\"spw\";i:7;s:3:\"sph\";i:5;s:5:\"delay\";i:3000;s:6:\"sDelay\";i:30;s:7:\"opacity\";d:0.7;s:10:\"titleSpeed\";i:500;s:6:\"effect\";s:6:\"random\";s:10:\"navigation\";b:1;s:5:\"links\";b:1;s:10:\"hoverPause\";b:1;s:5:\"theme\";s:7:\"default\";s:9:\"direction\";s:10:\"horizontal\";s:7:\"reverse\";b:0;s:14:\"animationSpeed\";i:600;s:8:\"prevText\";s:1:\"<\";s:8:\"nextText\";s:1:\">\";s:6:\"slices\";i:15;s:6:\"center\";b:0;s:9:\"smartCrop\";b:1;s:12:\"carouselMode\";b:0;s:14:\"carouselMargin\";i:5;s:6:\"easing\";s:6:\"linear\";s:8:\"autoPlay\";b:1;s:11:\"thumb_width\";i:150;s:12:\"thumb_height\";i:100;s:9:\"fullWidth\";b:0;s:10:\"noConflict\";b:1;}'),
(140, 32, 'vantage_panels_no_legacy', 'true'),
(141, 33, 'vantage_panels_no_legacy', 'true'),
(142, 33, '_edit_lock', '1595351348:1'),
(143, 33, '_edit_last', '1'),
(144, 34, '_wp_attached_file', '2020/07/ii.jpg'),
(145, 34, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:5472;s:6:\"height\";i:3648;s:4:\"file\";s:14:\"2020/07/ii.jpg\";s:5:\"sizes\";a:10:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:14:\"ii-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:14:\"ii-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:14:\"ii-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:15:\"ii-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:14:\"ii-720x380.jpg\";s:5:\"width\";i:720;s:6:\"height\";i:380;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:28:\"vantage-thumbnail-no-sidebar\";a:4:{s:4:\"file\";s:15:\"ii-1080x380.jpg\";s:5:\"width\";i:1080;s:6:\"height\";i:380;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"vantage-slide\";a:4:{s:4:\"file\";s:14:\"ii-960x480.jpg\";s:5:\"width\";i:960;s:6:\"height\";i:480;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:16:\"vantage-carousel\";a:4:{s:4:\"file\";s:14:\"ii-272x182.jpg\";s:5:\"width\";i:272;s:6:\"height\";i:182;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:17:\"vantage-grid-loop\";a:4:{s:4:\"file\";s:14:\"ii-436x272.jpg\";s:5:\"width\";i:436;s:6:\"height\";i:272;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:20:\"sow-carousel-default\";a:4:{s:4:\"file\";s:14:\"ii-272x182.jpg\";s:5:\"width\";i:272;s:6:\"height\";i:182;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:3:\"2.8\";s:6:\"credit\";s:6:\"Evrard\";s:6:\"camera\";s:12:\"Canon EOS 6D\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:10:\"1558298065\";s:9:\"copyright\";s:18:\"devani photography\";s:12:\"focal_length\";s:2:\"78\";s:3:\"iso\";s:4:\"3200\";s:13:\"shutter_speed\";s:7:\"0.00625\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(146, 33, '_thumbnail_id', '34'),
(148, 33, 'siteorigin_page_settings', 'a:6:{s:6:\"layout\";s:7:\"default\";s:15:\"masthead_margin\";b:1;s:13:\"footer_margin\";b:1;s:10:\"page_title\";b:0;s:13:\"hide_masthead\";b:0;s:19:\"hide_footer_widgets\";b:0;}');

-- --------------------------------------------------------

--
-- Structure de la table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2020-07-21 17:43:13', '2020-07-21 15:43:13', 'Bienvenue sur WordPress. Ceci est votre premier article. Modifiez-le ou supprimez-le, puis lancez-vous !', 'Bonjour tout le monde !', '', 'publish', 'open', 'open', '', 'bonjour-tout-le-monde', '', '', '2020-07-21 17:43:13', '2020-07-21 15:43:13', '', 0, 'http://localhost/kwetuinfo/?p=1', 0, 'post', '', 1),
(2, 1, '2020-07-21 17:43:13', '2020-07-21 15:43:13', 'Voici un exemple de page. Elle est différente d’un article de blog, en cela qu’elle restera à la même place, et s’affichera dans le menu de navigation de votre site (en fonction de votre thème). La plupart des gens commencent par écrire une page « À Propos » qui les présente aux visiteurs potentiels du site. Vous pourriez y écrire quelque chose de ce tenant :\n\n<blockquote>Bonjour ! Je suis un mécanicien qui aspire à devenir un acteur, et ceci est mon blog. J’habite à Bordeaux, j’ai un super chien qui s’appelle Russell, et j’aime la vodka-ananas (ainsi que perdre mon temps à regarder la pluie tomber).</blockquote>\n\n...ou bien quelque chose comme cela :\n\n<blockquote>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis cette année. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules super pour la communauté bouzemontoise.</blockquote>\n\nÉtant donné que vous êtes un nouvel utilisateur ou une nouvelle utilisatrice de WordPress, vous devriez vous rendre sur votre <a href=\"http://localhost/kwetuinfo/wp-admin/\">tableau de bord</a> pour effacer la présente page, et créer de nouvelles pages avec votre propre contenu. Amusez-vous bien !', 'Page d’exemple', '', 'trash', 'closed', 'open', '', 'page-d-exemple__trashed', '', '', '2020-07-21 18:22:34', '2020-07-21 16:22:34', '', 0, 'http://localhost/kwetuinfo/?page_id=2', 0, 'page', '', 0),
(3, 1, '2020-07-21 17:44:05', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-07-21 17:44:05', '0000-00-00 00:00:00', '', 0, 'http://localhost/kwetuinfo/?p=3', 0, 'post', '', 0),
(4, 1, '2020-07-21 17:52:15', '2020-07-21 15:52:15', '<label> Your Name (required)\n    [text* your-name] </label>\n\n<label> Your Email (required)\n    [email* your-email] </label>\n\n<label> Subject\n    [text your-subject] </label>\n\n<label> Your Message\n    [textarea your-message] </label>\n\n[submit \"Send\"]\nkwetuinfo \"[your-subject]\"\n[your-name] <dsadicky@gmail.com>\nFrom: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on kwetuinfo (http://localhost/kwetuinfo)\ndsadicky@gmail.com\nReply-To: [your-email]\n\n0\n0\n\nkwetuinfo \"[your-subject]\"\nkwetuinfo <dsadicky@gmail.com>\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on kwetuinfo (http://localhost/kwetuinfo)\n[your-email]\nReply-To: dsadicky@gmail.com\n\n0\n0\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nThe field is required.\nThe field is too long.\nThe field is too short.', 'Contact form 1', '', 'publish', 'closed', 'closed', '', 'contact-form-1', '', '', '2020-07-21 17:52:15', '2020-07-21 15:52:15', '', 0, 'http://localhost/kwetuinfo/?post_type=wpcf7_contact_form&p=4', 0, 'wpcf7_contact_form', '', 0),
(5, 1, '2020-07-21 17:55:49', '2020-07-21 15:55:49', '<h4>Editable Home Page</h4>			\r\n<p class=\"text\">You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.</p>							<a href=\"#\" class=\"more-button\">Start Editing <i></i></a>\r\n<h4>Loads of Icons</h4>			\r\n<p class=\"text\">This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.</p>							<a href=\"#\" class=\"more-button\">Example Button <i></i></a>\r\n<h4>Saves You Time</h4>			\r\n<p class=\"text\">Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.</p>							<a href=\"#\" class=\"more-button\">Test Button <i></i></a>\r\n<h1>This Is A Headline Widget</h1>\r\n<h3>You can customize it and put it where ever you want</h3>\r\n<p>There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.</p>\r\n<h3 class=\"widget-title\">Social Media</h3><a class=\"social-media-icon social-media-icon-facebook social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Facebook\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a><a class=\"social-media-icon social-media-icon-twitter social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Twitter\" target=\"_blank\"><span class=\"fa fa-twitter\"></span></a><a class=\"social-media-icon social-media-icon-google-plus social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Google Plus\" target=\"_blank\"><span class=\"fa fa-google-plus\"></span></a><a class=\"social-media-icon social-media-icon-instagram social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Instagram\" target=\"_blank\"><span class=\"fa fa-instagram\"></span></a><a class=\"social-media-icon social-media-icon-skype social-media-icon-size-medium\" href=\"skype:#\" title=\"kwetuinfo Skype\" target=\"_blank\"><span class=\"fa fa-skype\"></span></a><a class=\"social-media-icon social-media-icon-youtube social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo YouTube\" target=\"_blank\"><span class=\"fa fa-youtube\"></span></a>', 'Accueil', '', 'publish', 'closed', 'closed', '', 'page-dacceuil', '', '', '2020-07-21 18:45:32', '2020-07-21 16:45:32', '', 0, 'http://localhost/kwetuinfo/page-dacceuil/', 0, 'page', '', 0),
(6, 1, '2020-07-21 17:57:42', '2020-07-21 15:57:42', '', 'Page d\'acceuil', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2020-07-21 17:57:42', '2020-07-21 15:57:42', '', 5, 'http://localhost/kwetuinfo/2020/07/21/5-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2020-07-21 18:00:19', '2020-07-21 16:00:19', '<h4>Editable Home Page</h4>			\n<p class=\"text\">You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.</p>							<a href=\"#\" class=\"more-button\">Start Editing <i></i></a>\n<h4>Loads of Icons</h4>			\n<p class=\"text\">This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.</p>							<a href=\"#\" class=\"more-button\">Example Button <i></i></a>\n<h4>Saves You Time</h4>			\n<p class=\"text\">Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.</p>							<a href=\"#\" class=\"more-button\">Test Button <i></i></a>\n<h1>This Is A Headline Widget</h1>\n<h3>You can customize it and put it where ever you want</h3>\n<p>There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.</p>', 'Page d\'acceuil', '', 'inherit', 'closed', 'closed', '', '5-autosave-v1', '', '', '2020-07-21 18:00:19', '2020-07-21 16:00:19', '', 5, 'http://localhost/kwetuinfo/2020/07/21/5-autosave-v1/', 0, 'revision', '', 0),
(8, 1, '2020-07-21 18:03:02', '2020-07-21 16:03:02', '<h4>Editable Home Page</h4>			\r\n<p class=\"text\">You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.</p>							<a href=\"#\" class=\"more-button\">Start Editing <i></i></a>\r\n<h4>Loads of Icons</h4>			\r\n<p class=\"text\">This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.</p>							<a href=\"#\" class=\"more-button\">Example Button <i></i></a>\r\n<h4>Saves You Time</h4>			\r\n<p class=\"text\">Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.</p>							<a href=\"#\" class=\"more-button\">Test Button <i></i></a>\r\n<h1>This Is A Headline Widget</h1>\r\n<h3>You can customize it and put it where ever you want</h3>\r\n<p>There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.</p>\r\n<h3 class=\"widget-title\">Social Media</h3><a class=\"social-media-icon social-media-icon-facebook social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Facebook\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a><a class=\"social-media-icon social-media-icon-twitter social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Twitter\" target=\"_blank\"><span class=\"fa fa-twitter\"></span></a><a class=\"social-media-icon social-media-icon-google-plus social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Google Plus\" target=\"_blank\"><span class=\"fa fa-google-plus\"></span></a>', 'Page d\'acceuil', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2020-07-21 18:03:02', '2020-07-21 16:03:02', '', 5, 'http://localhost/kwetuinfo/2020/07/21/5-revision-v1/', 0, 'revision', '', 0),
(9, 1, '2020-07-21 18:04:03', '2020-07-21 16:04:03', '<h4>Editable Home Page</h4>			\r\n<p class=\"text\">You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.</p>							<a href=\"#\" class=\"more-button\">Start Editing <i></i></a>\r\n<h4>Loads of Icons</h4>			\r\n<p class=\"text\">This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.</p>							<a href=\"#\" class=\"more-button\">Example Button <i></i></a>\r\n<h4>Saves You Time</h4>			\r\n<p class=\"text\">Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.</p>							<a href=\"#\" class=\"more-button\">Test Button <i></i></a>\r\n<h1>This Is A Headline Widget</h1>\r\n<h3>You can customize it and put it where ever you want</h3>\r\n<p>There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.</p>\r\n<h3 class=\"widget-title\">Social Media</h3><a class=\"social-media-icon social-media-icon-facebook social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Facebook\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a><a class=\"social-media-icon social-media-icon-twitter social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Twitter\" target=\"_blank\"><span class=\"fa fa-twitter\"></span></a><a class=\"social-media-icon social-media-icon-google-plus social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Google Plus\" target=\"_blank\"><span class=\"fa fa-google-plus\"></span></a><a class=\"social-media-icon social-media-icon-instagram social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Instagram\" target=\"_blank\"><span class=\"fa fa-instagram\"></span></a><a class=\"social-media-icon social-media-icon-skype social-media-icon-size-medium\" href=\"skype:#\" title=\"kwetuinfo Skype\" target=\"_blank\"><span class=\"fa fa-skype\"></span></a><a class=\"social-media-icon social-media-icon-youtube social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo YouTube\" target=\"_blank\"><span class=\"fa fa-youtube\"></span></a>', 'Page d\'acceuil', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2020-07-21 18:04:03', '2020-07-21 16:04:03', '', 5, 'http://localhost/kwetuinfo/2020/07/21/5-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2020-07-21 18:10:41', '2020-07-21 16:10:41', '{\n    \"vantage::theme_settings_layout_masthead\": {\n        \"value\": \"logo-in-menu\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2020-07-21 16:10:41\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '04de6c1d-8a12-4746-9292-a0a50656af2d', '', '', '2020-07-21 18:10:41', '2020-07-21 16:10:41', '', 0, 'http://localhost/kwetuinfo/2020/07/21/04de6c1d-8a12-4746-9292-a0a50656af2d/', 0, 'customize_changeset', '', 0),
(11, 1, '2020-07-21 18:22:33', '2020-07-21 16:22:33', 'Voici un exemple de page. Elle est différente d’un article de blog, en cela qu’elle restera à la même place, et s’affichera dans le menu de navigation de votre site (en fonction de votre thème). La plupart des gens commencent par écrire une page « À Propos » qui les présente aux visiteurs potentiels du site. Vous pourriez y écrire quelque chose de ce tenant :\n\n<blockquote>Bonjour ! Je suis un mécanicien qui aspire à devenir un acteur, et ceci est mon blog. J’habite à Bordeaux, j’ai un super chien qui s’appelle Russell, et j’aime la vodka-ananas (ainsi que perdre mon temps à regarder la pluie tomber).</blockquote>\n\n...ou bien quelque chose comme cela :\n\n<blockquote>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis cette année. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules super pour la communauté bouzemontoise.</blockquote>\n\nÉtant donné que vous êtes un nouvel utilisateur ou une nouvelle utilisatrice de WordPress, vous devriez vous rendre sur votre <a href=\"http://localhost/kwetuinfo/wp-admin/\">tableau de bord</a> pour effacer la présente page, et créer de nouvelles pages avec votre propre contenu. Amusez-vous bien !', 'Page d’exemple', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2020-07-21 18:22:33', '2020-07-21 16:22:33', '', 2, 'http://localhost/kwetuinfo/2020/07/21/2-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2020-07-21 18:23:06', '2020-07-21 16:23:06', '[metaslider id=29]', 'Contact', '', 'publish', 'closed', 'closed', '', 'contact', '', '', '2020-07-21 18:58:40', '2020-07-21 16:58:40', '', 0, 'http://localhost/kwetuinfo/?page_id=12', 0, 'page', '', 0),
(13, 1, '2020-07-21 18:23:06', '2020-07-21 16:23:06', '', 'Contact', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2020-07-21 18:23:06', '2020-07-21 16:23:06', '', 12, 'http://localhost/kwetuinfo/2020/07/21/12-revision-v1/', 0, 'revision', '', 0),
(14, 1, '2020-07-21 18:23:36', '2020-07-21 16:23:36', '', 'A Propos', '', 'publish', 'closed', 'closed', '', 'a-propos', '', '', '2020-07-21 18:23:36', '2020-07-21 16:23:36', '', 0, 'http://localhost/kwetuinfo/?page_id=14', 0, 'page', '', 0),
(15, 1, '2020-07-21 18:23:36', '2020-07-21 16:23:36', '', 'A Propos', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2020-07-21 18:23:36', '2020-07-21 16:23:36', '', 14, 'http://localhost/kwetuinfo/2020/07/21/14-revision-v1/', 0, 'revision', '', 0),
(16, 1, '2020-07-21 18:23:49', '2020-07-21 16:23:49', '', 'Services', '', 'publish', 'closed', 'closed', '', 'services', '', '', '2020-07-21 18:23:49', '2020-07-21 16:23:49', '', 0, 'http://localhost/kwetuinfo/?page_id=16', 0, 'page', '', 0),
(17, 1, '2020-07-21 18:23:49', '2020-07-21 16:23:49', '', 'Services', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2020-07-21 18:23:49', '2020-07-21 16:23:49', '', 16, 'http://localhost/kwetuinfo/2020/07/21/16-revision-v1/', 0, 'revision', '', 0),
(18, 1, '2020-07-21 18:37:47', '2020-07-21 16:37:47', '', 'Blog', '', 'publish', 'closed', 'closed', '', 'blog', '', '', '2020-07-21 18:37:47', '2020-07-21 16:37:47', '', 0, 'http://localhost/kwetuinfo/?page_id=18', 0, 'page', '', 0),
(19, 1, '2020-07-21 18:37:47', '2020-07-21 16:37:47', '', 'Blog', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2020-07-21 18:37:47', '2020-07-21 16:37:47', '', 18, 'http://localhost/kwetuinfo/2020/07/21/18-revision-v1/', 0, 'revision', '', 0),
(20, 1, '2020-07-21 18:38:06', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2020-07-21 18:38:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/kwetuinfo/?page_id=20', 0, 'page', '', 0),
(21, 1, '2020-07-21 18:41:06', '2020-07-21 16:41:06', ' ', '', '', 'publish', 'closed', 'closed', '', 'page-dacceuil', '', '', '2020-07-21 18:46:14', '2020-07-21 16:46:14', '', 0, 'http://localhost/kwetuinfo/?p=21', 1, 'nav_menu_item', '', 0),
(22, 1, '2020-07-21 18:41:07', '2020-07-21 16:41:07', ' ', '', '', 'publish', 'closed', 'closed', '', '22', '', '', '2020-07-21 18:46:14', '2020-07-21 16:46:14', '', 0, 'http://localhost/kwetuinfo/?p=22', 5, 'nav_menu_item', '', 0),
(23, 1, '2020-07-21 18:41:06', '2020-07-21 16:41:06', ' ', '', '', 'publish', 'closed', 'closed', '', '23', '', '', '2020-07-21 18:46:14', '2020-07-21 16:46:14', '', 0, 'http://localhost/kwetuinfo/?p=23', 2, 'nav_menu_item', '', 0),
(24, 1, '2020-07-21 18:41:07', '2020-07-21 16:41:07', ' ', '', '', 'publish', 'closed', 'closed', '', '24', '', '', '2020-07-21 18:46:14', '2020-07-21 16:46:14', '', 0, 'http://localhost/kwetuinfo/?p=24', 4, 'nav_menu_item', '', 0),
(25, 1, '2020-07-21 18:39:31', '0000-00-00 00:00:00', '', 'Page d\'acceuil', '', 'draft', 'closed', 'closed', '', '', '', '', '2020-07-21 18:39:31', '0000-00-00 00:00:00', '', 0, 'http://localhost/kwetuinfo/?p=25', 1, 'nav_menu_item', '', 0),
(26, 1, '2020-07-21 18:41:07', '2020-07-21 16:41:07', ' ', '', '', 'publish', 'closed', 'closed', '', '26', '', '', '2020-07-21 18:46:14', '2020-07-21 16:46:14', '', 0, 'http://localhost/kwetuinfo/?p=26', 3, 'nav_menu_item', '', 0),
(27, 1, '2020-07-21 18:40:58', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2020-07-21 18:40:58', '0000-00-00 00:00:00', '', 0, 'http://localhost/kwetuinfo/?p=27', 1, 'nav_menu_item', '', 0),
(28, 1, '2020-07-21 18:45:16', '2020-07-21 16:45:16', '<h4>Editable Home Page</h4>			\r\n<p class=\"text\">You can edit this home page using our free, drag and drop Page Builder, or simply disable it to fall back to a standard blog. It\'s a powerful page building experience.</p>							<a href=\"#\" class=\"more-button\">Start Editing <i></i></a>\r\n<h4>Loads of Icons</h4>			\r\n<p class=\"text\">This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.</p>							<a href=\"#\" class=\"more-button\">Example Button <i></i></a>\r\n<h4>Saves You Time</h4>			\r\n<p class=\"text\">Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don\'t waste it.</p>							<a href=\"#\" class=\"more-button\">Test Button <i></i></a>\r\n<h1>This Is A Headline Widget</h1>\r\n<h3>You can customize it and put it where ever you want</h3>\r\n<p>There are a lot of widgets bundled with Page Builder. You can use them to bring your pages to life.</p>\r\n<h3 class=\"widget-title\">Social Media</h3><a class=\"social-media-icon social-media-icon-facebook social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Facebook\" target=\"_blank\"><span class=\"fa fa-facebook\"></span></a><a class=\"social-media-icon social-media-icon-twitter social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Twitter\" target=\"_blank\"><span class=\"fa fa-twitter\"></span></a><a class=\"social-media-icon social-media-icon-google-plus social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Google Plus\" target=\"_blank\"><span class=\"fa fa-google-plus\"></span></a><a class=\"social-media-icon social-media-icon-instagram social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo Instagram\" target=\"_blank\"><span class=\"fa fa-instagram\"></span></a><a class=\"social-media-icon social-media-icon-skype social-media-icon-size-medium\" href=\"skype:#\" title=\"kwetuinfo Skype\" target=\"_blank\"><span class=\"fa fa-skype\"></span></a><a class=\"social-media-icon social-media-icon-youtube social-media-icon-size-medium\" href=\"#\" title=\"kwetuinfo YouTube\" target=\"_blank\"><span class=\"fa fa-youtube\"></span></a>', 'Accueil', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2020-07-21 18:45:16', '2020-07-21 16:45:16', '', 5, 'http://localhost/kwetuinfo/5-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2020-07-21 18:47:00', '2020-07-21 16:47:00', '', 'Nouveau diaporama', '', 'publish', 'closed', 'closed', '', 'nouveau-diaporama', '', '', '2020-07-21 18:47:00', '2020-07-21 16:47:00', '', 0, 'http://localhost/kwetuinfo/?post_type=ml-slider&p=29', 0, 'ml-slider', '', 0),
(30, 1, '2020-07-21 18:58:40', '2020-07-21 16:58:40', '[metaslider id=29]', 'Contact', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2020-07-21 18:58:40', '2020-07-21 16:58:40', '', 12, 'http://localhost/kwetuinfo/12-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2020-07-21 18:59:42', '2020-07-21 16:59:42', '[', 'Contact', '', 'inherit', 'closed', 'closed', '', '12-autosave-v1', '', '', '2020-07-21 18:59:42', '2020-07-21 16:59:42', '', 12, 'http://localhost/kwetuinfo/12-autosave-v1/', 0, 'revision', '', 0),
(32, 2, '2020-07-21 19:06:52', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-07-21 19:06:52', '0000-00-00 00:00:00', '', 0, 'http://localhost/kwetuinfo/?p=32', 0, 'post', '', 0),
(33, 1, '2020-07-21 19:10:37', '2020-07-21 17:10:37', 'mxzbslbxlxlnsakl;nlsknklanlskskl', 'Fin Confinement', '', 'publish', 'open', 'open', '', 'fin-confinement', '', '', '2020-07-21 19:10:37', '2020-07-21 17:10:37', '', 0, 'http://localhost/kwetuinfo/?p=33', 0, 'post', '', 1),
(34, 1, '2020-07-21 19:10:04', '2020-07-21 17:10:04', '', 'ii', '', 'inherit', 'open', 'closed', '', 'ii', '', '', '2020-07-21 19:10:04', '2020-07-21 17:10:04', '', 33, 'http://localhost/kwetuinfo/wp-content/uploads/2020/07/ii.jpg', 0, 'attachment', 'image/jpeg', 0),
(35, 1, '2020-07-21 19:10:37', '2020-07-21 17:10:37', 'mxzbslbxlxlnsakl;nlsknklanlskskl', 'Fin Confinement', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2020-07-21 19:10:37', '2020-07-21 17:10:37', '', 33, 'http://localhost/kwetuinfo/33-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Non classé', 'non-classe', 0),
(2, 'Info Congo', 'info-congo', 0),
(3, 'Sud-Kivu', 'sud-kivu', 0),
(4, 'Nord-Kivu', 'nord-kivu', 0),
(5, 'Kinshasa', 'kinshasa', 0),
(6, 'Katanga', 'katanga', 0),
(7, 'Kasai Occ', 'kasai-occ', 0),
(8, 'Bukavu', 'bukavu', 0),
(9, 'Afrique', 'afrique', 0),
(10, 'Monde', 'monde', 0),
(11, 'Politique', 'politique', 0),
(12, 'Sport', 'sport', 0),
(13, 'Musique', 'musique', 0),
(14, 'Technologie', 'technologie', 0),
(15, 'Sante', 'sante', 0),
(16, 'Autres', 'autres', 0),
(17, 'Menu 1', 'menu-1', 0),
(18, '29', '29', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(21, 17, 0),
(22, 17, 0),
(23, 17, 0),
(24, 17, 0),
(26, 17, 0),
(33, 2, 0),
(33, 15, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'category', '', 0, 1),
(3, 3, 'category', '', 2, 0),
(4, 4, 'category', '', 2, 0),
(5, 5, 'category', '', 2, 0),
(6, 6, 'category', '', 2, 0),
(7, 7, 'category', '', 2, 0),
(8, 8, 'category', '', 3, 0),
(9, 9, 'category', '', 3, 0),
(10, 10, 'category', '', 3, 0),
(11, 11, 'category', '', 0, 0),
(12, 12, 'category', '', 0, 0),
(13, 13, 'category', '', 0, 0),
(14, 14, 'category', '', 0, 0),
(15, 15, 'category', '', 0, 1),
(16, 16, 'category', '', 0, 0),
(17, 17, 'nav_menu', '', 0, 5),
(18, 18, 'ml-slider', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'kwetuinfo'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '3'),
(18, 1, 'wp_user-settings', 'siteorigin_panels_setting_tab=content&editor=tinymce&libraryContent=browse'),
(19, 1, 'wp_user-settings-time', '1595351435'),
(20, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(21, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),
(22, 1, 'nav_menu_recently_edited', '17'),
(23, 2, 'nickname', 'dave'),
(24, 2, 'first_name', 'dave'),
(25, 2, 'last_name', 'dave'),
(26, 2, 'description', ''),
(27, 2, 'rich_editing', 'true'),
(28, 2, 'syntax_highlighting', 'true'),
(29, 2, 'comment_shortcuts', 'false'),
(30, 2, 'admin_color', 'fresh'),
(31, 2, 'use_ssl', '0'),
(32, 2, 'show_admin_bar_front', 'true'),
(33, 2, 'locale', ''),
(34, 2, 'wp_capabilities', 'a:1:{s:6:\"editor\";b:1;}'),
(35, 2, 'wp_user_level', '7'),
(36, 2, 'dismissed_wp_pointers', ''),
(38, 2, 'wp_dashboard_quick_press_last_post_id', '32'),
(39, 1, 'session_tokens', 'a:1:{s:64:\"145f9aedec095bd3e572c58e6bea59f31bfe67be3da0188f24189c4336e59610\";a:4:{s:10:\"expiration\";i:1595524072;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\";s:5:\"login\";i:1595351272;}}');

-- --------------------------------------------------------

--
-- Structure de la table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'kwetuinfo', '$P$BBNdP.px0hDYPXLD2pQ8kyAvXQBWue/', 'kwetuinfo', 'dsadicky@gmail.com', '', '2020-07-21 15:43:11', '', 0, 'kwetuinfo'),
(2, 'dave', '$P$BkJTX6lkzqYFpMAoZbDbdYrZIWlzT2.', 'dave', 'davidsadiki09@gmail.com', '', '2020-07-21 17:06:30', '1595351192:$P$B2JGO96I1P0aC9tJRaJdcmTImMc0MC1', 0, 'dave dave');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Index pour la table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Index pour la table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Index pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Index pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Index pour la table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Index pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Index pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Base de données :  `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'Anuj Kumar', 'phpgurukulofficial@gmail.com', 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-07-16 18:11:42');

-- --------------------------------------------------------

--
-- Structure de la table `tblauthors`
--

CREATE TABLE `tblauthors` (
  `id` int(11) NOT NULL,
  `AuthorName` varchar(159) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblauthors`
--

INSERT INTO `tblauthors` (`id`, `AuthorName`, `creationDate`, `UpdationDate`) VALUES
(1, 'Anuj kumar', '2017-07-08 12:49:09', '2017-07-08 15:16:59'),
(2, 'Chetan Bhagatt', '2017-07-08 14:30:23', '2017-07-08 15:15:09'),
(3, 'Anita Desai', '2017-07-08 14:35:08', NULL),
(4, 'HC Verma', '2017-07-08 14:35:21', NULL),
(5, 'R.D. Sharma ', '2017-07-08 14:35:36', NULL),
(9, 'fwdfrwer', '2017-07-08 15:22:03', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `BookName` varchar(255) DEFAULT NULL,
  `CatId` int(11) DEFAULT NULL,
  `AuthorId` int(11) DEFAULT NULL,
  `ISBNNumber` int(11) DEFAULT NULL,
  `BookPrice` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `BookName`, `CatId`, `AuthorId`, `ISBNNumber`, `BookPrice`, `RegDate`, `UpdationDate`) VALUES
(1, 'PHP And MySql programming', 5, 1, 222333, 20, '2017-07-08 20:04:55', '2017-07-15 05:54:41'),
(3, 'physics', 6, 4, 1111, 15, '2017-07-08 20:17:31', '2017-07-15 06:13:17');

-- --------------------------------------------------------

--
-- Structure de la table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(4, 'Romantic', 1, '2017-07-04 18:35:25', '2017-07-06 16:00:42'),
(5, 'Technology', 1, '2017-07-04 18:35:39', '2017-07-08 17:13:03'),
(6, 'Science', 1, '2017-07-04 18:35:55', '0000-00-00 00:00:00'),
(7, 'Management', 0, '2017-07-04 18:36:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tblissuedbookdetails`
--

CREATE TABLE `tblissuedbookdetails` (
  `id` int(11) NOT NULL,
  `BookId` int(11) DEFAULT NULL,
  `StudentID` varchar(150) DEFAULT NULL,
  `IssuesDate` timestamp NULL DEFAULT current_timestamp(),
  `ReturnDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `RetrunStatus` int(1) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblissuedbookdetails`
--

INSERT INTO `tblissuedbookdetails` (`id`, `BookId`, `StudentID`, `IssuesDate`, `ReturnDate`, `RetrunStatus`, `fine`) VALUES
(1, 1, 'SID002', '2017-07-15 06:09:47', '2017-07-15 11:15:20', 1, 0),
(2, 1, 'SID002', '2017-07-15 06:12:27', '2017-07-15 11:15:23', 1, 5),
(3, 3, 'SID002', '2017-07-15 06:13:40', NULL, 0, NULL),
(4, 3, 'SID002', '2017-07-15 06:23:23', '2017-07-15 11:22:29', 1, 2),
(5, 1, 'SID009', '2017-07-15 10:59:26', NULL, 0, NULL),
(6, 3, 'SID011', '2017-07-15 18:02:55', NULL, 0, NULL),
(7, 3, 'SID011', '2020-07-23 19:07:02', '2020-07-23 19:07:15', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(11) NOT NULL,
  `StudentId` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `StudentId`, `FullName`, `EmailId`, `MobileNumber`, `Password`, `Status`, `RegDate`, `UpdationDate`) VALUES
(1, 'SID002', 'Anuj kumar', 'anuj.lpu1@gmail.com', '9865472555', 'f925916e2754e5e03f75dd58a5733251', 1, '2017-07-11 15:37:05', '2017-07-15 18:26:21'),
(4, 'SID005', 'sdfsd', 'csfsd@dfsfks.com', '8569710025', '92228410fc8b872914e023160cf4ae8f', 0, '2017-07-11 15:41:27', '2017-07-15 17:43:03'),
(8, 'SID009', 'test', 'test@gmail.com', '2359874527', 'f925916e2754e5e03f75dd58a5733251', 1, '2017-07-11 15:58:28', '2017-07-15 13:42:44'),
(9, 'SID010', 'Amit', 'amit@gmail.com', '8585856224', 'f925916e2754e5e03f75dd58a5733251', 1, '2017-07-15 13:40:30', NULL),
(10, 'SID011', 'Sarita Pandey', 'sarita@gmail.com', '4672423754', 'f925916e2754e5e03f75dd58a5733251', 1, '2017-07-15 18:00:59', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblauthors`
--
ALTER TABLE `tblauthors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `StudentId` (`StudentId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tblauthors`
--
ALTER TABLE `tblauthors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tblissuedbookdetails`
--
ALTER TABLE `tblissuedbookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Base de données :  `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"gestabs\",\"table\":\"user\"},{\"db\":\"gestabs\",\"table\":\"absence\"},{\"db\":\"hogoce\",\"table\":\"patients\"},{\"db\":\"library\",\"table\":\"tblstudents\"},{\"db\":\"library\",\"table\":\"tblbooks\"},{\"db\":\"hogoce\",\"table\":\"famille\"},{\"db\":\"hogoce\",\"table\":\"medicament\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Déchargement des données de la table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'gestabs', 'user', '{\"sorted_col\":\"`user`.`Type`  DESC\"}', '2020-07-27 19:16:46');

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-07-29 14:11:12', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"fr\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données :  `schoolline`
--
CREATE DATABASE IF NOT EXISTS `schoolline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `schoolline`;

-- --------------------------------------------------------

--
-- Structure de la table `aa`
--

CREATE TABLE `aa` (
  `ID` int(11) NOT NULL,
  `AA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aa`
--

INSERT INTO `aa` (`ID`, `AA`) VALUES
(1, '2020-2021'),
(2, '2021-2022'),
(3, '2022-2023'),
(4, '2024-2025');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `PWD` varchar(90) DEFAULT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `TEL` varchar(20) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ACCESS` tinyint(1) DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `LOGIN`, `PWD`, `NOM`, `PRENOM`, `TEL`, `EMAIL`, `ACCESS`, `DATEINS`) VALUES
(4, 'admin9652', '33d3b157ddc0896addfb22fa2a519097', 'Placide', 'Musafiri', '79299299', 'davidsadiki09@gmail.com', 1, '2020-07-08 10:19:57'),
(6, 'chack', '202cb962ac59075b964b07152d234b70', 'chakila', 'nijimbere', '79299299', 'simonnd@gmail.com', 0, '2020-07-08 10:19:55');

-- --------------------------------------------------------

--
-- Structure de la table `af`
--

CREATE TABLE `af` (
  `IDAF` int(11) NOT NULL,
  `MONTANT` float DEFAULT NULL,
  `MOTIF` varchar(150) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `af`
--

INSERT INTO `af` (`IDAF`, `MONTANT`, `MOTIF`, `IDAA`) VALUES
(1, 30000, 'uniforme', 4);

-- --------------------------------------------------------

--
-- Structure de la table `auteurlivre`
--

CREATE TABLE `auteurlivre` (
  `ID` int(11) NOT NULL,
  `AUTEUR` varchar(159) DEFAULT NULL,
  `CREATIONDATE` timestamp NULL DEFAULT current_timestamp(),
  `UPDATIONDATE` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteurlivre`
--

INSERT INTO `auteurlivre` (`ID`, `AUTEUR`, `CREATIONDATE`, `UPDATIONDATE`) VALUES
(6, 'Thami Kabbaj', '2020-07-17 12:30:11', NULL),
(7, 'Robert KIYOSAKI', '2020-07-17 12:31:38', NULL),
(8, 'Hal Helrod', '2020-07-23 20:36:51', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `bibliothecaire`
--

CREATE TABLE `bibliothecaire` (
  `ID` int(30) NOT NULL,
  `NOMS` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` int(11) DEFAULT NULL,
  `PHOTO` varchar(20) DEFAULT NULL,
  `PWD` varchar(60) NOT NULL,
  `ACCESS` enum('1','0') NOT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliothecaire`
--

INSERT INTO `bibliothecaire` (`ID`, `NOMS`, `EMAIL`, `SEXE`, `TEL`, `DOB`, `PHOTO`, `PWD`, `ACCESS`, `DATEINS`) VALUES
(1, 'sadicky d', 'dsadicky@yhtagy.vcuj', 'M', '765862', 0, '', '202cb962ac59075b964b07152d234b70', '1', '2020-07-16 13:33:46'),
(5, 'sezikeye jean', 'davidsadiki09@gmail.', 'M', '184984', 23, '', '7215ee9c7d9dc229d2921a40e899ec5f', '1', '2020-07-17 08:52:56');

-- --------------------------------------------------------

--
-- Structure de la table `caissier`
--

CREATE TABLE `caissier` (
  `ID` int(30) NOT NULL,
  `MATRICULE` varchar(45) DEFAULT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `NATIONALITE` varchar(40) DEFAULT NULL,
  `PHOTO` varchar(20) DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `catlivre`
--

CREATE TABLE `catlivre` (
  `ID` int(11) NOT NULL,
  `LIBELLE` varchar(150) DEFAULT NULL,
  `STATUS` int(1) DEFAULT NULL,
  `CREATIONDATE` timestamp NULL DEFAULT current_timestamp(),
  `UPDATIONDATE` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catlivre`
--

INSERT INTO `catlivre` (`ID`, `LIBELLE`, `STATUS`, `CREATIONDATE`, `UPDATIONDATE`) VALUES
(6, 'Romantique', 1, '2020-07-17 12:28:59', NULL),
(7, 'Developpement personnel', 1, '2020-07-17 13:13:54', NULL),
(9, 'Langue', 1, '2020-07-23 20:36:38', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `IDC` int(11) NOT NULL,
  `COURS` varchar(90) NOT NULL,
  `PONDERATION` int(11) DEFAULT NULL,
  `NBH` int(11) DEFAULT NULL,
  `IDP` int(11) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL,
  `IDDep` int(11) DEFAULT NULL,
  `IDNiv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`IDC`, `COURS`, `PONDERATION`, `NBH`, `IDP`, `IDAA`, `IDDep`, `IDNiv`) VALUES
(8, 'PSYCHOLOGIE', 10, 30, 13, 4, 6, 7),
(9, 'DERMATOLOGIE', 2, 60, 11, 4, 6, 6),
(10, 'PHP', 6, 72, 12, 4, 7, 7),
(11, 'DROIT FISCAL', 6, 72, 14, 4, 9, 15),
(12, 'DROIT FISCAL', 6, 60, 11, 4, 9, 13),
(13, 'Systeme embarquÃ©', 4, 50, 14, 4, 10, 21),
(14, 'Dropshiping', 2, 15, 11, 4, 6, 6),
(15, 'HTML', 15, 72, 7, 4, 10, 22);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `IDDep` int(11) NOT NULL,
  `DEPARTEMENT` varchar(50) DEFAULT NULL,
  `IDDOYEN` int(11) DEFAULT NULL,
  `IDFac` int(11) DEFAULT NULL,
  `ACCESS` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`IDDep`, `DEPARTEMENT`, `IDDOYEN`, `IDFac`, `ACCESS`) VALUES
(6, 'SantÃ© Publique', 7, 7, '1'),
(7, 'Robotique', 13, 6, '1'),
(8, 'Telecom', 9, 6, '1'),
(9, 'Droit des Affaires', 14, 8, '1'),
(10, 'Genie Logiciel', 14, 6, '1');

-- --------------------------------------------------------

--
-- Structure de la table `encodeur`
--

CREATE TABLE `encodeur` (
  `ID` int(30) NOT NULL,
  `MATRICULE` varchar(45) DEFAULT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `NATIONALITE` varchar(40) DEFAULT NULL,
  `PHOTO` varchar(20) DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(30) NOT NULL,
  `MATRICULE` varchar(45) DEFAULT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `ECOLE_ORIGINE` varchar(60) NOT NULL,
  `NATIONALITE` varchar(40) DEFAULT NULL,
  `PHOTO` varchar(20) DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IDNiv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fa`
--

CREATE TABLE `fa` (
  `ID` int(11) NOT NULL,
  `MONTANT` int(11) DEFAULT NULL,
  `IDF` int(11) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL,
  `IDDep` int(11) DEFAULT NULL,
  `IDNiv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fa`
--

INSERT INTO `fa` (`ID`, `MONTANT`, `IDF`, `IDAA`, `IDDep`, `IDNiv`) VALUES
(3, 500000, 7, 4, 6, 7),
(4, 500000, 6, 4, 7, 6),
(5, 700000, 6, 4, 8, 10),
(6, 600000, 8, 4, 9, 15),
(8, 500000, 8, 4, 9, 14),
(9, 50000, 6, 4, 8, 9);

-- --------------------------------------------------------

--
-- Structure de la table `faculte`
--

CREATE TABLE `faculte` (
  `IDFac` int(11) NOT NULL,
  `FACULTE` varchar(50) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL,
  `IDDOYEN` int(11) DEFAULT NULL,
  `ACCESS` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faculte`
--

INSERT INTO `faculte` (`IDFac`, `FACULTE`, `IDAA`, `IDDOYEN`, `ACCESS`) VALUES
(5, 'Marketing', 4, 12, '0'),
(6, 'Informatique', 4, 9, '1'),
(7, 'Medecine', 4, 7, '1'),
(8, 'Droit', 4, 14, '1');

-- --------------------------------------------------------

--
-- Structure de la table `jc`
--

CREATE TABLE `jc` (
  `IDJC` int(11) NOT NULL,
  `MOTIF` varchar(200) DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL,
  `DATEDEB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jc`
--

INSERT INTO `jc` (`IDJC`, `MOTIF`, `DATEFIN`, `DATEDEB`) VALUES
(1, 'Fin', '2020-06-26', '2020-06-04'),
(3, 'Mort du President', '2020-06-26', '2020-06-25'),
(4, 'Independance', '2020-06-30', '2020-06-30');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `ID` int(11) NOT NULL,
  `DESIGNATION` varchar(255) DEFAULT NULL,
  `CATID` int(11) DEFAULT NULL,
  `AUTID` int(11) DEFAULT NULL,
  `ISBNNum` int(11) DEFAULT NULL,
  `REGDATE` timestamp NULL DEFAULT current_timestamp(),
  `UPDATEDATE` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`ID`, `DESIGNATION`, `CATID`, `AUTID`, `ISBNNum`, `REGDATE`, `UPDATEDATE`) VALUES
(3, 'agir', 7, 7, 101010, '2020-07-17 13:18:19', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `IDNiv` int(11) NOT NULL,
  `NIVEAU` enum('BAC1','BAC2','BAC3','M1','M2','G1','G2','G3','L1','L2') DEFAULT NULL,
  `IDDep` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`IDNiv`, `NIVEAU`, `IDDep`) VALUES
(6, 'L1', 6),
(7, 'BAC3', 7),
(8, 'BAC1', 8),
(9, 'BAC2', 8),
(10, 'BAC3', 8),
(11, 'G1', 9),
(12, 'G2', 9),
(13, 'G3', 9),
(14, 'L1', 9),
(15, 'L2', 9),
(21, 'BAC1', 10),
(22, 'BAC2', 10);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `ID` int(11) NOT NULL,
  `TITRE` enum('Mr','Mme','Ir','Dr','Me') DEFAULT NULL,
  `NOMS` varchar(60) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `NIVEAU` enum('A2','Baccalauréat','Grade','Licence','Master','Maitrise','Doctorat') DEFAULT NULL,
  `NATIONALITE` varchar(40) DEFAULT NULL,
  `ACCESS` tinyint(1) NOT NULL,
  `PWD` varchar(90) NOT NULL,
  `PHOTO` varchar(20) DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`ID`, `TITRE`, `NOMS`, `EMAIL`, `SEXE`, `TEL`, `DOB`, `NIVEAU`, `NATIONALITE`, `ACCESS`, `PWD`, `PHOTO`, `DATEINS`) VALUES
(7, 'Dr', 'Niyungeko Prosper', 'davidsadiki09@gmail.', 'M', '79299299', '2020-05-07', 'Doctorat', 'congolaise', 1, '7215ee9c7d9dc229d2921a40e899ec5f', '', '2020-05-08 12:12:02'),
(9, 'Ir', 'Adolph HABIMANA', 'ahabi@gmail.com', 'M', '79 26 26 01', '2020-05-05', 'Baccalauréat', 'Burundaise', 1, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'C:\\Users\\Groupe S\\Do', '2020-05-27 06:48:41'),
(11, 'Me', 'Christian CITERA', 'ndikumanajustin1@gma', 'F', '+254 74 69 55 384', '2020-05-05', 'Licence', 'burundaise', 1, '61e9c06ea9a85a5088a499df6458d276', '', '2020-05-08 12:12:00'),
(12, 'Mme', 'Julienne NSENGUM', 'simonnd@gmail.com', 'F', '79299299', '2020-05-08', 'Master', 'burundaise', 1, '7215ee9c7d9dc229d2921a40e899ec5f', '', '2020-05-12 09:20:07'),
(13, 'Ir', 'Niyonkuru Viator', 'senda@yahoo.fr', 'M', '79299299', '2020-05-29', 'Master', 'burundaise', 1, '7215ee9c7d9dc229d2921a40e899ec5f', '', '2020-07-15 07:32:06'),
(14, 'Ir', 'Sadicky Dave', 'dsadicky@gmail.com', 'M', '62404065', '2020-06-16', '', 'Congolaise', 1, '7215ee9c7d9dc229d2921a40e899ec5f', '', '2020-07-15 07:32:03');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `IDS` int(11) NOT NULL,
  `CON` varchar(200) DEFAULT NULL,
  `DES` varchar(200) DEFAULT NULL,
  `DAT` date DEFAULT NULL,
  `NIV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`IDS`, `CON`, `DES`, `DAT`, `NIV`) VALUES
(2, 'da', 'df', '0000-00-00', 6),
(3, 'mkjfdhbikjds', 'yg8iuysgoius', '2020-06-29', 6),
(4, 'TYU6TRU', 'RURUU', '2020-06-27', 12);

-- --------------------------------------------------------

--
-- Structure de la table `tuteuretud`
--

CREATE TABLE `tuteuretud` (
  `IdTit` int(11) NOT NULL,
  `PERE` varchar(50) DEFAULT NULL,
  `MERE` varchar(50) DEFAULT NULL,
  `TELEPERE` varchar(50) DEFAULT NULL,
  `TELEMERE` varchar(50) DEFAULT NULL,
  `autres` varchar(20) DEFAULT NULL,
  `IDEtud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aa`
--
ALTER TABLE `aa`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `af`
--
ALTER TABLE `af`
  ADD PRIMARY KEY (`IDAF`),
  ADD KEY `IDAA` (`IDAA`);

--
-- Index pour la table `auteurlivre`
--
ALTER TABLE `auteurlivre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `bibliothecaire`
--
ALTER TABLE `bibliothecaire`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `caissier`
--
ALTER TABLE `caissier`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `catlivre`
--
ALTER TABLE `catlivre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`IDC`),
  ADD KEY `IDP` (`IDP`),
  ADD KEY `IDAA` (`IDAA`),
  ADD KEY `IDNiv` (`IDNiv`),
  ADD KEY `IDDep` (`IDDep`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`IDDep`),
  ADD KEY `IDDOYEN` (`IDDOYEN`),
  ADD KEY `IDFac` (`IDFac`);

--
-- Index pour la table `encodeur`
--
ALTER TABLE `encodeur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDNiv` (`IDNiv`);

--
-- Index pour la table `fa`
--
ALTER TABLE `fa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDF` (`IDF`),
  ADD KEY `IDAA` (`IDAA`),
  ADD KEY `IDDep` (`IDDep`),
  ADD KEY `IDNiv` (`IDNiv`);

--
-- Index pour la table `faculte`
--
ALTER TABLE `faculte`
  ADD PRIMARY KEY (`IDFac`),
  ADD KEY `IDAA` (`IDAA`),
  ADD KEY `IDDOYEN` (`IDDOYEN`);

--
-- Index pour la table `jc`
--
ALTER TABLE `jc`
  ADD PRIMARY KEY (`IDJC`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ISBNNum` (`ISBNNum`),
  ADD KEY `CATID` (`CATID`),
  ADD KEY `AUTID` (`AUTID`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`IDNiv`),
  ADD KEY `IDDep` (`IDDep`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`IDS`),
  ADD KEY `NIV` (`NIV`);

--
-- Index pour la table `tuteuretud`
--
ALTER TABLE `tuteuretud`
  ADD PRIMARY KEY (`IdTit`),
  ADD KEY `IDEtud` (`IDEtud`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aa`
--
ALTER TABLE `aa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `af`
--
ALTER TABLE `af`
  MODIFY `IDAF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `auteurlivre`
--
ALTER TABLE `auteurlivre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `bibliothecaire`
--
ALTER TABLE `bibliothecaire`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `catlivre`
--
ALTER TABLE `catlivre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `IDDep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `fa`
--
ALTER TABLE `fa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `faculte`
--
ALTER TABLE `faculte`
  MODIFY `IDFac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `jc`
--
ALTER TABLE `jc`
  MODIFY `IDJC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `IDNiv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `prof`
--
ALTER TABLE `prof`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `IDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tuteuretud`
--
ALTER TABLE `tuteuretud`
  MODIFY `IdTit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `af`
--
ALTER TABLE `af`
  ADD CONSTRAINT `af_ibfk_1` FOREIGN KEY (`IDAA`) REFERENCES `aa` (`ID`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`IDP`) REFERENCES `prof` (`ID`),
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`IDAA`) REFERENCES `aa` (`ID`),
  ADD CONSTRAINT `cours_ibfk_3` FOREIGN KEY (`IDNiv`) REFERENCES `niveau` (`IDNiv`),
  ADD CONSTRAINT `cours_ibfk_4` FOREIGN KEY (`IDDep`) REFERENCES `departement` (`IDDep`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`IDDOYEN`) REFERENCES `prof` (`ID`),
  ADD CONSTRAINT `departement_ibfk_2` FOREIGN KEY (`IDFac`) REFERENCES `faculte` (`IDFac`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`IDNiv`) REFERENCES `niveau` (`IDNiv`);

--
-- Contraintes pour la table `fa`
--
ALTER TABLE `fa`
  ADD CONSTRAINT `fa_ibfk_1` FOREIGN KEY (`IDF`) REFERENCES `faculte` (`IDFac`),
  ADD CONSTRAINT `fa_ibfk_2` FOREIGN KEY (`IDAA`) REFERENCES `aa` (`ID`),
  ADD CONSTRAINT `fa_ibfk_3` FOREIGN KEY (`IDDep`) REFERENCES `departement` (`IDDep`),
  ADD CONSTRAINT `fa_ibfk_4` FOREIGN KEY (`IDNiv`) REFERENCES `niveau` (`IDNiv`);

--
-- Contraintes pour la table `faculte`
--
ALTER TABLE `faculte`
  ADD CONSTRAINT `faculte_ibfk_1` FOREIGN KEY (`IDAA`) REFERENCES `aa` (`ID`),
  ADD CONSTRAINT `faculte_ibfk_2` FOREIGN KEY (`IDDOYEN`) REFERENCES `prof` (`ID`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`CATID`) REFERENCES `catlivre` (`ID`),
  ADD CONSTRAINT `livre_ibfk_2` FOREIGN KEY (`AUTID`) REFERENCES `auteurlivre` (`ID`);

--
-- Contraintes pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD CONSTRAINT `niveau_ibfk_1` FOREIGN KEY (`IDDep`) REFERENCES `departement` (`IDDep`);

--
-- Contraintes pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD CONSTRAINT `sortie_ibfk_1` FOREIGN KEY (`NIV`) REFERENCES `niveau` (`IDNiv`);

--
-- Contraintes pour la table `tuteuretud`
--
ALTER TABLE `tuteuretud`
  ADD CONSTRAINT `tuteuretud_ibfk_1` FOREIGN KEY (`IDEtud`) REFERENCES `etudiant` (`ID`);
--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
