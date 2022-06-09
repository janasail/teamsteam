-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2022 at 05:30 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celabaza_v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `dete`
--

DROP TABLE IF EXISTS `dete`;
CREATE TABLE IF NOT EXISTS `dete` (
  `idDet` int(11) NOT NULL AUTO_INCREMENT,
  `imeDet` varchar(45) NOT NULL,
  `prezimeDet` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `jmbgRod1` bigint(20) NOT NULL,
  `jmbgRod2` bigint(20) DEFAULT NULL,
  `datumRodj` date DEFAULT NULL,
  `idVrtica` int(11) NOT NULL,
  PRIMARY KEY (`idDet`),
  KEY `idVrtica` (`idVrtica`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dete`
--

INSERT INTO `dete` (`idDet`, `imeDet`, `prezimeDet`, `adresa`, `jmbgRod1`, `jmbgRod2`, `datumRodj`, `idVrtica`) VALUES
(1, 'Jenny', 'Bernerlee', 'Lazarevacki drum 89', 1231231231231, 4564564564, '2020-02-02', 1),
(2, 'Mike', 'Lamport', 'Baja Pivljanina 22', 7897897897897, NULL, '2020-03-14', 2),
(3, 'Larry', 'Bernerlee', 'Lazarevacki drum 89', 1231231231231, 4564564564, '2019-10-02', 1),
(4, 'Christine', 'Bernerlee', 'Lazarevacki drum 89', 1231231231231, 4564564564, '2018-04-17', 1),
(5, 'Debbie', 'Lamport', 'Baja Pivljanina 22', 7897897897897, NULL, '2018-07-10', 2),
(6, 'Julia', 'Ancelotti', 'Skadarska 35', 120120120120, NULL, '2018-04-10', 3),
(7, 'Gianluca', 'Ancelotti', 'Skadarska 35', 120120120120, NULL, '2021-09-12', 3),
(8, 'Alessandro', 'Ancelotti', 'Skadarska 35', 120120120120, NULL, '2018-05-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `direktor`
--

DROP TABLE IF EXISTS `direktor`;
CREATE TABLE IF NOT EXISTS `direktor` (
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direktor`
--

INSERT INTO `direktor` (`email`) VALUES
('edWitten@gmail.com'),
('sofJovanovic@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `evidencija`
--

DROP TABLE IF EXISTS `evidencija`;
CREATE TABLE IF NOT EXISTS `evidencija` (
  `opcija` enum('D','OT','OD') NOT NULL DEFAULT 'OD',
  `datumIvreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idDet` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `idEvid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idEvid`),
  UNIQUE KEY `idEvid` (`idEvid`),
  KEY `idDet` (`idDet`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evidencija`
--

INSERT INTO `evidencija` (`opcija`, `datumIvreme`, `idDet`, `email`, `idEvid`) VALUES
('D', '2022-06-09 17:21:10', 1, 'dunjaMiletic@gmail.com', 1),
('D', '2022-06-09 17:29:19', 3, 'dunjaMiletic@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `grupa`
--

DROP TABLE IF EXISTS `grupa`;
CREATE TABLE IF NOT EXISTS `grupa` (
  `idGrupe` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(45) NOT NULL,
  `uzrast` int(11) NOT NULL,
  `idVrtica` int(11) NOT NULL,
  PRIMARY KEY (`idGrupe`),
  KEY `idVrtica` (`idVrtica`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupa`
--

INSERT INTO `grupa` (`idGrupe`, `naziv`, `uzrast`, `idVrtica`) VALUES
(1, 'Crveni', 1, 1),
(2, 'Narandžasti', 2, 1),
(3, 'Žuti', 3, 1),
(4, 'Zeleni', 4, 1),
(5, 'Plavi', 5, 1),
(11, 'Ljubicasti', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ima_dete`
--

DROP TABLE IF EXISTS `ima_dete`;
CREATE TABLE IF NOT EXISTS `ima_dete` (
  `jmbgRod` bigint(20) NOT NULL,
  `idDet` int(11) NOT NULL,
  PRIMARY KEY (`jmbgRod`,`idDet`),
  KEY `idDet` (`idDet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ima_dete`
--

INSERT INTO `ima_dete` (`jmbgRod`, `idDet`) VALUES
(12012012012, 6),
(12012012012, 7),
(12012012012, 8),
(1231231231231, 1),
(1231231231231, 3),
(1231231231231, 4),
(4564564564564, 1),
(4564564564564, 3),
(4564564564564, 4),
(7897897897897, 2),
(7897897897897, 5);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE IF NOT EXISTS `komentar` (
  `datumIvreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info` tinytext NOT NULL,
  `idSadrz` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idSadrz`,`datumIvreme`,`email`),
  KEY `IdKor` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`datumIvreme`, `info`, `idSadrz`, `email`) VALUES
('2022-06-09 17:16:35', 'Divan dan sa decom!', 1, 'dunjaMiletic@gmail.com'),
('2022-06-09 17:16:35', 'Danas smo rucali paprikas.', 2, 'dunjaMiletic@gmail.com'),
('2022-06-09 17:16:35', 'Dete jako lepo napreduje.', 3, 'dunjaMiletic@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `PIB` bigint(20) NOT NULL,
  `imeKor` varchar(45) NOT NULL,
  `prezimeKor` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `brojTel` varchar(15) NOT NULL,
  `lozinka` varchar(24) DEFAULT NULL,
  `tipNaloga` enum('R','D','V') DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `PIB` (`PIB`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`PIB`, `imeKor`, `prezimeKor`, `adresa`, `email`, `brojTel`, `lozinka`, `tipNaloga`) VALUES
(1111111111111, 'Judea', 'Perl', 'Blagoja Parovica 12', 'judeaPerl@hotmail.com', '0651111111', 'pass123', 'R'),
(1111111111111, 'Tim', 'Bernerlee', 'Pet solitera 45', 'timLee@gmail.com', '0652222222', 'pass123', 'R'),
(1111111111111, 'Leslie', 'Lamport', 'Karadjordjeva 17', 'lLamport@protonmail.com', '0653333333', 'pass123', 'R'),
(65456465, 'Carlo', 'Ancelotti', 'Hercegovacka 18', 'cRovelli@hotmail.com', '0654444444', 'pass123', 'R'),
(65456465, 'Edward', 'Witten', 'Luke Vojvodica 99', 'edWitten@gmail.com', '0655555555', 'pass123', 'D'),
(1111111111111, 'Sofija', 'Jovanovic', 'Bulevar oslobodjenja 121', 'sofJovanovic@gmail.com', '063666666', 'pass123', 'D'),
(1111111111111, 'Sara', 'Crnojevic', 'Scerbinova 2', 'dunjaMiletic@gmail.com', '0638888888', 'pass123', 'V'),
(65456465, 'Stefan', 'Djordjevic', 'Jevremova 36', 'stefanD@hotmail.com', '0639999999', 'pass123', 'V'),
(65456465, 'Filip', 'Zivojinovic', 'Gospodara Vucica 66', 'filipZ@protonmail.com', '0630000000', 'pass123', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `pohadja_grupu`
--

DROP TABLE IF EXISTS `pohadja_grupu`;
CREATE TABLE IF NOT EXISTS `pohadja_grupu` (
  `idDet` int(11) NOT NULL,
  `idGrupe` int(11) NOT NULL,
  PRIMARY KEY (`idDet`,`idGrupe`),
  KEY `idGrupe` (`idGrupe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pohadja_grupu`
--

INSERT INTO `pohadja_grupu` (`idDet`, `idGrupe`) VALUES
(1, 2),
(3, 2),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `radi_sa_grupom`
--

DROP TABLE IF EXISTS `radi_sa_grupom`;
CREATE TABLE IF NOT EXISTS `radi_sa_grupom` (
  `email` varchar(45) NOT NULL,
  `idGrupe` int(11) NOT NULL,
  PRIMARY KEY (`email`,`idGrupe`),
  KEY `idGrupe` (`idGrupe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radi_sa_grupom`
--

INSERT INTO `radi_sa_grupom` (`email`, `idGrupe`) VALUES
('58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roditelj`
--

DROP TABLE IF EXISTS `roditelj`;
CREATE TABLE IF NOT EXISTS `roditelj` (
  `jmbgRod` bigint(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roditelj`
--

INSERT INTO `roditelj` (`jmbgRod`, `email`) VALUES
(1231231231231, 'judeaPerl@hotmail.com'),
(4564564564564, 'timLee@gmail.com'),
(7897897897897, 'lLamport@protonmail.com'),
(120120120120, 'cRovelli@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sadrzaj`
--

DROP TABLE IF EXISTS `sadrzaj`;
CREATE TABLE IF NOT EXISTS `sadrzaj` (
  `idSadrz` int(11) NOT NULL AUTO_INCREMENT,
  `datumIvreme` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `info` text NOT NULL,
  `poslaoSadrz` varchar(45) NOT NULL,
  `idGrupe` int(11) DEFAULT NULL,
  `idDet` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSadrz`),
  KEY `idGrupe` (`idGrupe`),
  KEY `idDet` (`idDet`),
  KEY `poslaoSadrz` (`poslaoSadrz`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sadrzaj`
--

INSERT INTO `sadrzaj` (`idSadrz`, `datumIvreme`, `info`, `poslaoSadrz`, `idGrupe`, `idDet`) VALUES
(1, '2022-06-09 17:18:10', 'Divan dan sa decom! SLika.jpg??', 'dunjaMiletic@gmail.com', 2, NULL),
(2, '2022-06-09 17:18:10', 'Danas smo rucali paprikas. SLika.jpg??', 'dunjaMiletic@gmail.com', 2, NULL),
(3, '2022-06-09 17:18:10', 'Dete jako lepo napreduje.', 'dunjaMiletic@gmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaspitac`
--

DROP TABLE IF EXISTS `vaspitac`;
CREATE TABLE IF NOT EXISTS `vaspitac` (
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaspitac`
--

INSERT INTO `vaspitac` (`email`) VALUES
('dunjaMiletic@gmail.com'),
('stefanD@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vrtic`
--

DROP TABLE IF EXISTS `vrtic`;
CREATE TABLE IF NOT EXISTS `vrtic` (
  `idVrtica` int(11) NOT NULL AUTO_INCREMENT,
  `PIB` bigint(20) NOT NULL,
  `naziv` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `brojTel` varchar(15) NOT NULL,
  PRIMARY KEY (`idVrtica`),
  UNIQUE KEY `PIB` (`PIB`),
  UNIQUE KEY `PIB_2` (`PIB`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vrtic`
--

INSERT INTO `vrtic` (`idVrtica`, `PIB`, `naziv`, `adresa`, `email`, `brojTel`) VALUES
(1, 1111111111111, 'Visibaba', 'Kestenova 1', 'visibaba@gmail.com', '011/1111 111'),
(2, 2222222222222, 'Djurdjevak', 'Jablanicka 2', 'djurdjevak@gmail.com', '011/2222 222'),
(3, 3333333333333, 'Zova', 'Borska 3', 'zova.zova@gmail.com', '011/3333 333'),
(4, 4444444444444, 'Iris', 'Lipa 4', 'vrticlipa@gmail.com', '011/4444 444'),
(5, 5555555555555, 'Plava ptica', 'Vinogradska 5', 'plavaptica@hotmail.com', '011/5555 555'),
(6, 6666666666666, 'Jasmin', 'Kestenova 6', 'jasmin.vrtic@live.com', '011/6666 666'),
(7, 7777777777777, 'Ljubicica', 'Ljubice Ivosevic 77', 'volim.ljubicasto@hotmail.com', '011/7777 777'),
(8, 8888888888888, 'Sanjalica', 'Kosmajska 8', 'sanjalicasanja@gmail.com', '011/8888 888'),
(9, 9999999999999, 'Radosno detinjstvo', 'Pozeska 9', 'najradosnijivrtic@live.com', '011/9999 999'),
(10, 1010101010101, 'Bajka', 'Trebevicka 10', 'vrtic.bajka@yahoo.com', '011/ 1010 101');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
