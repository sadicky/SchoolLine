-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for schoolline
CREATE DATABASE IF NOT EXISTS `schoolline` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `schoolline`;

-- Dumping structure for table schoolline.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(50) DEFAULT NULL,
  `PWD` varchar(90) DEFAULT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `TEL` varchar(20) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ACCESS` tinyint(1) DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`ID`, `LOGIN`, `PWD`, `NOM`, `PRENOM`, `TEL`, `EMAIL`, `ACCESS`, `DATEINS`) VALUES
	(4, 'admin9652', '33d3b157ddc0896addfb22fa2a519097', 'Placide', 'Musafiri', '79299299', 'davidsadiki09@gmail.com', 1, '2022-07-15 22:23:33');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table schoolline.af
CREATE TABLE IF NOT EXISTS `af` (
  `IDAF` int(11) NOT NULL AUTO_INCREMENT,
  `MONTANT` float DEFAULT NULL,
  `MOTIF` varchar(150) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDAF`),
  KEY `IDAA` (`IDAA`),
  CONSTRAINT `af_ibfk_1` FOREIGN KEY (`IDAA`) REFERENCES `asco` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.af: ~0 rows (approximately)
/*!40000 ALTER TABLE `af` DISABLE KEYS */;
INSERT INTO `af` (`IDAF`, `MONTANT`, `MOTIF`, `IDAA`) VALUES
	(1, 15, 'Frais d\'Inscription', 3);
/*!40000 ALTER TABLE `af` ENABLE KEYS */;

-- Dumping structure for table schoolline.asco
CREATE TABLE IF NOT EXISTS `asco` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AS` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.asco: ~2 rows (approximately)
/*!40000 ALTER TABLE `asco` DISABLE KEYS */;
INSERT INTO `asco` (`ID`, `AS`) VALUES
	(3, '2022-2023');
/*!40000 ALTER TABLE `asco` ENABLE KEYS */;

-- Dumping structure for table schoolline.bibliothecaire
CREATE TABLE IF NOT EXISTS `bibliothecaire` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `NOMS` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` tinyblob,
  `MAT` varchar(50) DEFAULT NULL,
  `PWD` varchar(60) NOT NULL,
  `ACCESS` enum('1','0') NOT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.bibliothecaire: ~1 rows (approximately)
/*!40000 ALTER TABLE `bibliothecaire` DISABLE KEYS */;
INSERT INTO `bibliothecaire` (`ID`, `NOMS`, `EMAIL`, `SEXE`, `TEL`, `DOB`, `MAT`, `PWD`, `ACCESS`, `DATEINS`) VALUES
	(10, 'Gakima Nadia', 'dsadicky@hdd.id', 'M', '849498189', _binary 0x3332, 'BI01723658', '$2y$10$D3/Nav3wi2.6xaBUVJJ2Kelp74FTUZIqiSJ7FD5Y/hqjhj1DJOfkS', '1', '2022-07-15 08:07:55');
/*!40000 ALTER TABLE `bibliothecaire` ENABLE KEYS */;

-- Dumping structure for table schoolline.caissier
CREATE TABLE IF NOT EXISTS `caissier` (
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
  `DATEINS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.caissier: ~0 rows (approximately)
/*!40000 ALTER TABLE `caissier` DISABLE KEYS */;
/*!40000 ALTER TABLE `caissier` ENABLE KEYS */;

-- Dumping structure for table schoolline.catlivre
CREATE TABLE IF NOT EXISTS `catlivre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(150) DEFAULT NULL,
  `STATUS` int(1) DEFAULT NULL,
  `CREATIONDATE` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATIONDATE` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.catlivre: ~2 rows (approximately)
/*!40000 ALTER TABLE `catlivre` DISABLE KEYS */;
INSERT INTO `catlivre` (`ID`, `LIBELLE`, `STATUS`, `CREATIONDATE`, `UPDATIONDATE`) VALUES
	(6, 'Romantique', 1, '2020-07-17 14:28:59', NULL),
	(7, 'Developpement personnel', 1, '2020-07-17 15:13:54', NULL),
	(8, 'Motiv', 1, '2022-07-14 23:56:23', NULL);
/*!40000 ALTER TABLE `catlivre` ENABLE KEYS */;

-- Dumping structure for table schoolline.classe
CREATE TABLE IF NOT EXISTS `classe` (
  `IDCLA` int(11) NOT NULL AUTO_INCREMENT,
  `CLASSE` varchar(50) DEFAULT NULL,
  `ACCESS` enum('1','0') DEFAULT NULL,
  `IDOPT` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCLA`),
  KEY `IDOPT` (`IDOPT`),
  CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`IDOPT`) REFERENCES `options` (`IDOPT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.classe: ~0 rows (approximately)
/*!40000 ALTER TABLE `classe` DISABLE KEYS */;
INSERT INTO `classe` (`IDCLA`, `CLASSE`, `ACCESS`, `IDOPT`) VALUES
	(1, '3e HL/A', '1', 1),
	(2, '1e CO/A', '1', 4);
/*!40000 ALTER TABLE `classe` ENABLE KEYS */;

-- Dumping structure for table schoolline.cours
CREATE TABLE IF NOT EXISTS `cours` (
  `IDCO` int(11) NOT NULL AUTO_INCREMENT,
  `COURS` varchar(50) DEFAULT NULL,
  `POND` varchar(50) DEFAULT NULL,
  `NBH` int(11) DEFAULT NULL,
  `ACCESS` enum('1','0') DEFAULT '0',
  `IDCLA` int(11) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCO`),
  KEY `IDAA` (`IDAA`),
  KEY `IDCLA` (`IDCLA`),
  CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`IDAA`) REFERENCES `asco` (`ID`),
  CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`IDCLA`) REFERENCES `classe` (`IDCLA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.cours: ~0 rows (approximately)
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
INSERT INTO `cours` (`IDCO`, `COURS`, `POND`, `NBH`, `ACCESS`, `IDCLA`, `IDAA`) VALUES
	(1, 'Latin', '280', 120, '0', 1, 3),
	(2, 'Histoire', '80', 75, '0', 2, 3);
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;

-- Dumping structure for table schoolline.eleve
CREATE TABLE IF NOT EXISTS `eleve` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MATRICULE` varchar(45) DEFAULT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRENOM` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `ECOLE_ORIGINE` varchar(60) DEFAULT NULL,
  `ACCESS` enum('M','F') DEFAULT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IDCLA` int(11) DEFAULT NULL,
  `IDAS` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDCLA` (`IDCLA`),
  KEY `IDAS` (`IDAS`),
  CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`IDCLA`) REFERENCES `classe` (`IDCLA`),
  CONSTRAINT `eleve_ibfk_2` FOREIGN KEY (`IDAS`) REFERENCES `asco` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.eleve: ~2 rows (approximately)
/*!40000 ALTER TABLE `eleve` DISABLE KEYS */;
INSERT INTO `eleve` (`ID`, `MATRICULE`, `NOM`, `PRENOM`, `EMAIL`, `SEXE`, `TEL`, `DOB`, `ECOLE_ORIGINE`, `ACCESS`, `DATEINS`, `IDCLA`, `IDAS`) VALUES
	(2, 'EL-10629437', 'Placide Musafiri', 'Carim', 'placimus@gmail.com', 'M', '+25775985655', '1994-07-15', 'MUNANIRA', '', '2022-07-15 02:07:00', 2, 3),
	(3, 'EL-86902345', 'Jimmy', 'Walumire', 'jimwaluu@gmail.com', 'M', '+25775985655', '1989-07-15', 'COMPLEXE SCOLAIRE NURU', '', '2022-07-15 07:07:00', 1, 3);
/*!40000 ALTER TABLE `eleve` ENABLE KEYS */;

-- Dumping structure for table schoolline.encodeur
CREATE TABLE IF NOT EXISTS `encodeur` (
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
  `DATEINS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.encodeur: ~0 rows (approximately)
/*!40000 ALTER TABLE `encodeur` DISABLE KEYS */;
/*!40000 ALTER TABLE `encodeur` ENABLE KEYS */;

-- Dumping structure for table schoolline.fs
CREATE TABLE IF NOT EXISTS `fs` (
  `IDFS` int(11) NOT NULL AUTO_INCREMENT,
  `MONTANT` varchar(50) DEFAULT NULL,
  `ACCESS` enum('1','0') DEFAULT '0',
  `IDCLA` int(11) DEFAULT NULL,
  `IDAA` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDFS`),
  KEY `IDAA` (`IDAA`),
  KEY `IDCLA` (`IDCLA`),
  CONSTRAINT `fs_ibfk_1` FOREIGN KEY (`IDAA`) REFERENCES `asco` (`ID`),
  CONSTRAINT `fs_ibfk_2` FOREIGN KEY (`IDCLA`) REFERENCES `classe` (`IDCLA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.fs: ~1 rows (approximately)
/*!40000 ALTER TABLE `fs` DISABLE KEYS */;
INSERT INTO `fs` (`IDFS`, `MONTANT`, `ACCESS`, `IDCLA`, `IDAA`) VALUES
	(1, '280', '0', 1, 3);
/*!40000 ALTER TABLE `fs` ENABLE KEYS */;

-- Dumping structure for table schoolline.jc
CREATE TABLE IF NOT EXISTS `jc` (
  `IDJC` int(11) NOT NULL AUTO_INCREMENT,
  `MOTIF` varchar(200) DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL,
  `DATEDEB` date DEFAULT NULL,
  PRIMARY KEY (`IDJC`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.jc: ~3 rows (approximately)
/*!40000 ALTER TABLE `jc` DISABLE KEYS */;
INSERT INTO `jc` (`IDJC`, `MOTIF`, `DATEFIN`, `DATEDEB`) VALUES
	(1, 'Fin', '2020-06-26', '2020-06-04'),
	(3, 'Mort du President', '2020-06-26', '2020-06-25'),
	(4, 'Independance', '2020-06-30', '2020-06-30');
/*!40000 ALTER TABLE `jc` ENABLE KEYS */;

-- Dumping structure for table schoolline.livre
CREATE TABLE IF NOT EXISTS `livre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  `AUTEUR` varchar(50) DEFAULT NULL,
  `CATID` int(11) DEFAULT NULL,
  `ISBNNum` varchar(50) DEFAULT NULL,
  `REGDATE` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATEDATE` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ISBNNum` (`ISBNNum`),
  KEY `CATID` (`CATID`),
  CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`CATID`) REFERENCES `catlivre` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.livre: ~2 rows (approximately)
/*!40000 ALTER TABLE `livre` DISABLE KEYS */;
INSERT INTO `livre` (`ID`, `DESIGNATION`, `AUTEUR`, `CATID`, `ISBNNum`, `REGDATE`, `UPDATEDATE`) VALUES
	(2, 'AVALEZ LE CRAPAUD', 'BRIAN TRACY', 8, '6669-6891-45-545', '2022-07-15 12:20:45', NULL),
	(4, '', '', 6, '', '2022-07-15 12:31:21', NULL);
/*!40000 ALTER TABLE `livre` ENABLE KEYS */;

-- Dumping structure for table schoolline.options
CREATE TABLE IF NOT EXISTS `options` (
  `IDOPT` int(11) NOT NULL AUTO_INCREMENT,
  `OPT` varchar(50) DEFAULT NULL,
  `ACCESS` enum('1','0') DEFAULT '0',
  `IDSECT` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDOPT`),
  KEY `IDSECT` (`IDSECT`),
  CONSTRAINT `options_ibfk_1` FOREIGN KEY (`IDSECT`) REFERENCES `section` (`IDSECT`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.options: ~6 rows (approximately)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`IDOPT`, `OPT`, `ACCESS`, `IDSECT`) VALUES
	(1, 'Latin-Philo', '1', 1),
	(2, 'Math-Physique', '1', 2),
	(3, 'Bio-Chimie', '1', 2),
	(4, 'SÃ©condaire', '1', 4),
	(5, 'Administration', '1', 3),
	(6, 'Info', '1', 3);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Dumping structure for table schoolline.prof
CREATE TABLE IF NOT EXISTS `prof` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MATRICULE` varchar(50) DEFAULT NULL,
  `NOMS` varchar(60) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SEXE` enum('M','F') DEFAULT NULL,
  `TEL` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `NIVEAU` enum('A2','Baccalauréat','Grade','Licence','Master','Maitrise','Doctorat') DEFAULT NULL,
  `ACCESS` tinyint(1) NOT NULL,
  `PWD` varchar(90) NOT NULL,
  `DATEINS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.prof: ~8 rows (approximately)
/*!40000 ALTER TABLE `prof` DISABLE KEYS */;
INSERT INTO `prof` (`ID`, `MATRICULE`, `NOMS`, `EMAIL`, `SEXE`, `TEL`, `DOB`, `NIVEAU`, `ACCESS`, `PWD`, `DATEINS`) VALUES
	(1, 'P-29751604', 'Kebano Bushole', 'dsadicky@gmail.com', 'M', '+25768598258', '2022-07-12', 'Grade', 1, '$2y$10$Z.I3ZsMH35H8CphC1ufIyO1hRceITDbg1jB4Fd.EUNWh6iJcJeWyq', '2022-07-12 15:26:51'),
	(2, 'P-18675024', 'Sadicky Dave', 'dsfaujiu@ud.dojd', 'M', '78941615', '2022-07-12', 'Maitrise', 1, '$2y$10$2.1WBTGSkONfSzJq.iq9se7Jip894YJNXouwVmDT5Hvh./A3UITia', '2022-07-12 15:44:07'),
	(3, 'P-57289634', 'benigne b', 'Dsadicky@gmail.com', 'F', '+25468598258', '2022-07-12', 'Licence', 0, '', '2022-07-12 23:02:22'),
	(4, 'P-15687349', 'SABenie N', 'benignebeniw@gmail.com', 'F', '8941968161', '2022-07-12', 'Licence', 1, '', '2022-07-18 18:12:06'),
	(5, 'P-12594036', 'Kebano Bushole Neskens', 'Dsadicky@gmail.com', 'M', '+25468598258', '2022-07-12', 'Doctorat', 0, '$2y$10$aAyL2OqbP.PMfnsVXOWo1.D9b/Vx3RCDFTeMBsby8nBXCfTAPH96e', '2022-07-18 18:09:12'),
	(6, 'P-41389602', 'Gakima Nadia ', 'gkimanadia@gmail.com', 'F', '+25468598258', '2022-07-12', 'A2', 0, '$2y$10$Doml3m/hLvEN3RqfDkG.Bu8Jj78I4ZuUMMGE9blRfokNMoKa3btQu', '2022-07-12 02:07:42'),
	(7, 'P-14375089', 'Mutumbi Matenga Jean Paul', 'Mutujean@gmail.com', 'M', '+243985982580', '1986-10-11', 'Grade', 0, '$2y$10$0AT79.aztaRhPkRRDGtfGu2yBxBz1GLJg9P6wSEnlnCi6nyRWCMBe', '2022-07-12 06:07:43'),
	(8, 'P-37409285', 'Ngomanziza Bienvenu', 'ngomabi@gmail.com', 'M', '+25468598258', '2022-07-10', 'Doctorat', 0, '$2y$10$A.bLsaBo7RgxN.B6S31M7.zTRgzV.g35snbn.L.Rj9cNQFO9Od6ce', '2022-07-12 08:07:12');
/*!40000 ALTER TABLE `prof` ENABLE KEYS */;

-- Dumping structure for table schoolline.profcours
CREATE TABLE IF NOT EXISTS `profcours` (
  `IDP` int(11) NOT NULL,
  `IDCLA` int(11) NOT NULL,
  `IDCO` int(11) NOT NULL,
  `IDAS` int(11) NOT NULL,
  `ACCESS` enum('0','1') DEFAULT NULL,
  `DATEINS` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDP`,`IDCO`,`IDCLA`,`IDAS`),
  KEY `IDCO` (`IDCO`),
  KEY `IDCLA` (`IDCLA`),
  KEY `IDAS` (`IDAS`),
  CONSTRAINT `profcours_ibfk_1` FOREIGN KEY (`IDP`) REFERENCES `prof` (`ID`),
  CONSTRAINT `profcours_ibfk_2` FOREIGN KEY (`IDCO`) REFERENCES `cours` (`IDCO`),
  CONSTRAINT `profcours_ibfk_3` FOREIGN KEY (`IDCLA`) REFERENCES `classe` (`IDCLA`),
  CONSTRAINT `profcours_ibfk_4` FOREIGN KEY (`IDAS`) REFERENCES `asco` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.profcours: ~0 rows (approximately)
/*!40000 ALTER TABLE `profcours` DISABLE KEYS */;
INSERT INTO `profcours` (`IDP`, `IDCLA`, `IDCO`, `IDAS`, `ACCESS`, `DATEINS`) VALUES
	(3, 1, 1, 3, '1', '2022-07-18 04:07:41'),
	(5, 1, 1, 3, '0', '2022-07-12 10:07:25'),
	(5, 2, 2, 3, '1', '2022-07-14 06:07:36');
/*!40000 ALTER TABLE `profcours` ENABLE KEYS */;

-- Dumping structure for table schoolline.section
CREATE TABLE IF NOT EXISTS `section` (
  `IDSECT` int(11) NOT NULL AUTO_INCREMENT,
  `SECTION` varchar(50) DEFAULT NULL,
  `ACCESS` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`IDSECT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.section: ~3 rows (approximately)
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` (`IDSECT`, `SECTION`, `ACCESS`) VALUES
	(1, 'LittÃ©raire', '1'),
	(2, 'Scientifique', '1'),
	(3, 'Commerciale', '1'),
	(4, 'SÃ©condaire', '1'),
	(5, 'Agronomie', '1');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;

-- Dumping structure for table schoolline.sortie
CREATE TABLE IF NOT EXISTS `sortie` (
  `IDS` int(11) NOT NULL AUTO_INCREMENT,
  `CON` varchar(200) DEFAULT NULL,
  `DES` varchar(200) DEFAULT NULL,
  `DAT` date DEFAULT NULL,
  `NIV` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDS`),
  KEY `NIV` (`NIV`),
  CONSTRAINT `sortie_ibfk_1` FOREIGN KEY (`NIV`) REFERENCES `niveau` (`IDNiv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.sortie: ~3 rows (approximately)
/*!40000 ALTER TABLE `sortie` DISABLE KEYS */;
INSERT INTO `sortie` (`IDS`, `CON`, `DES`, `DAT`, `NIV`) VALUES
	(2, 'da', 'df', '0000-00-00', 6),
	(3, 'mkjfdhbikjds', 'yg8iuysgoius', '2020-06-29', 6),
	(4, 'TYU6TRU', 'RURUU', '2020-06-27', 12);
/*!40000 ALTER TABLE `sortie` ENABLE KEYS */;

-- Dumping structure for table schoolline.tuteuretud
CREATE TABLE IF NOT EXISTS `tuteuretud` (
  `IdTit` int(11) NOT NULL AUTO_INCREMENT,
  `PERE` varchar(50) DEFAULT NULL,
  `MERE` varchar(50) DEFAULT NULL,
  `TELEPERE` varchar(50) DEFAULT NULL,
  `TELEMERE` varchar(50) DEFAULT NULL,
  `autres` varchar(20) DEFAULT NULL,
  `IDEtud` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdTit`),
  KEY `IDEtud` (`IDEtud`),
  CONSTRAINT `tuteuretud_ibfk_1` FOREIGN KEY (`IDEtud`) REFERENCES `eleve` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table schoolline.tuteuretud: ~0 rows (approximately)
/*!40000 ALTER TABLE `tuteuretud` DISABLE KEYS */;
/*!40000 ALTER TABLE `tuteuretud` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
