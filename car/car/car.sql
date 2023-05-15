-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2022 at 11:28 AM
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
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

DROP TABLE IF EXISTS `clienti`;
CREATE TABLE IF NOT EXISTS `clienti` (
  `idclient` int(10) NOT NULL AUTO_INCREMENT,
  `nume` varchar(25) COLLATE utf32_romanian_ci NOT NULL,
  `prenume` varchar(25) COLLATE utf32_romanian_ci NOT NULL,
  `telefon` text COLLATE utf32_romanian_ci NOT NULL,
  `adresa` varchar(100) COLLATE utf32_romanian_ci NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf32 COLLATE=utf32_romanian_ci;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`idclient`, `nume`, `prenume`, `telefon`, `adresa`) VALUES
(1, 'Florescu', 'Constantin', '0724968523', 'Str. Paltinului, nr. 12, Craiova'),
(2, 'Panoiu', 'Valeriu', '0265487369', 'Str. Plevnei, nr. 12c, Craiova'),
(3, 'Vanvu', 'Marcel', '0265897653', 'Str. Viilor, nr. 84, Preajba, Dolj'),
(4, 'Marin', 'Dragos', '074586325', 'str. Petuniilor, nr. 5, Craiova'),
(5, 'Marcu', 'Florin', ' 0725647564', ' str. Prunului, nr. 421, Craiova'),
(6, 'Barbu', 'Fanica', '0265478965 ', ' str. General Dragalina, nr. 42, Craiova'),
(7, 'Frasinescu', 'Aurelia', '07265931256 ', 'str. Putna, nr. 3 , Podari, Dolj '),
(8, 'Cizmaru', 'Vasile', '0723654987', 'str. Gloria nr. 25, Calafat'),
(9, 'Balea', 'Nina Valentina', '0265654785', 'str. Mimozelor, nr.12, Craiova'),
(10, 'Toader', 'Filimon', '0726936420', 'str. Brestei, nr. 332, Craiova'),
(11, 'Amza', 'Pelea', '02145789', 'str. Lunga, nr.12, Bailesti'),
(12, 'Marcel', 'Dumitru', '0721965685', 'str. Campului, nr.12, Craiova'),
(13, 'Balanescu', 'Victoria', '0265471002', 'str. Pinului, nr 5, Filiasi'),
(14, 'Manea', 'Robert', '0726893000', 'str. Fulger, nr. 45a, Craiova'),
(15, 'Sandu', 'Ciorba', '0764238962', 'Aleea Caramidarilor, nr. 3, Dabuleni'),
(16, 'Lepadatu', 'Fane', '0265412980', 'str. Poligonului, nr.42b, Corabia'),
(17, 'Hancu', 'Mioara Paulina', '', 'str. Mierlei, nr. 356, Podari'),
(18, 'David', 'Silviu', '0745689532', 'str. Plopului, nr. 12, Caracal'),
(19, 'Lica', 'Doina', '02631108112', 'srt. Campia Islaz, nr. 49, Craiova'),
(20, 'Negoescu', 'Constantin', '0771798256', 'str. Victoriei, nr.11, Piatra Olt'),
(21, 'Barbarasa', 'Filip', '0789895623', 'str. Romanescu, nr 128a, Craiova'),
(22, 'Pigulea', 'Ana-Maria', '0263200014', 'str. Morii, nr.80, Segarcea'),
(23, 'Halmaciu', 'Florin Nicolae', '0789364517', 'Str. Frumoasa, nr. 21, Filiasi'),
(24, 'Paun', 'Bogdan Viorel', '0265891203', 'str. Garii, nr.35, Craiova'),
(25, 'Elefterie', 'Simina', '0721453698', 'str. Berzei, nr.42, Craiova'),
(26, 'Oana', 'Aurelia', '07968523144', 'str. Florilor, nr. 1, Craiova'),
(27, 'Ionescu', 'Marian', '0265421397', 'str. Viorelelor, nr. 412, Filiasi'),
(28, 'Sinulescu', 'Benone', '0251432698', 'str. Podul Inalt, nr. 7, Slatina'),
(29, 'Minulescu', 'Madalin', '265849763', 'str. Garoafei, nr. 12, Craiova'),
(30, 'Fulga', 'Paul', '0736925844', 'str.Macin, nr.24, Caracal'),
(31, 'Marcu', 'Petre', '023559845', 'str. Lunga, nr. 7, Bechet'),
(32, 'Mondea', 'Paul', '0723659234', 'str. Fantanilor, nr. 18, Bechet'),
(33, 'Lazar', 'Constantin', '0265478321', 'str. Depoului, nr. 17, Craiova');

-- --------------------------------------------------------

--
-- Table structure for table `programari`
--

DROP TABLE IF EXISTS `programari`;
CREATE TABLE IF NOT EXISTS `programari` (
  `idprogramari` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `idservicii` int(11) NOT NULL,
  `dataprogramarii` date NOT NULL,
  PRIMARY KEY (`idprogramari`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf32 COLLATE=utf32_romanian_ci;

--
-- Dumping data for table `programari`
--

INSERT INTO `programari` (`idprogramari`, `idclient`, `idservicii`, `dataprogramarii`) VALUES
(1, 8, 7, '2022-11-11'),
(2, 10, 2, '2022-11-22'),
(3, 9, 4, '2022-11-08'),
(4, 10, 2, '2022-11-09'),
(5, 8, 7, '2022-11-08'),
(6, 4, 4, '2022-11-07'),
(7, 6, 8, '2022-11-07'),
(8, 8, 5, '2022-11-24'),
(9, 14, 4, '2022-11-11'),
(10, 17, 5, '2022-11-30'),
(11, 25, 3, '2022-12-03'),
(12, 1, 7, '2022-11-10'),
(13, 11, 7, '2022-11-30'),
(14, 14, 1, '2022-11-27'),
(15, 30, 6, '2022-11-29'),
(16, 16, 6, '2022-11-26'),
(17, 1, 1, '2022-11-23'),
(18, 26, 8, '2022-12-23'),
(19, 32, 1, '2022-12-05'),
(20, 13, 3, '2022-11-10'),
(21, 2, 1, '2022-11-08'),
(22, 12, 8, '2023-01-02'),
(23, 33, 4, '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `servicii`
--

DROP TABLE IF EXISTS `servicii`;
CREATE TABLE IF NOT EXISTS `servicii` (
  `idservicii` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(100) COLLATE utf32_romanian_ci NOT NULL,
  `durata(zile)` varchar(25) COLLATE utf32_romanian_ci DEFAULT NULL,
  `pret/m2(lei)` smallint(30) NOT NULL,
  PRIMARY KEY (`idservicii`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf32 COLLATE=utf32_romanian_ci;

--
-- Dumping data for table `servicii`
--

INSERT INTO `servicii` (`idservicii`, `denumire`, `durata(zile)`, `pret/m2(lei)`) VALUES
(1, 'Infiintare peluza gazon', '4 ', 130),
(2, 'Amenajare rondouri cu flori', '1', 70),
(3, 'Plantare gard viu', '1', 98),
(4, 'Plantare pomi ornamentali', '1', 140),
(5, 'Gradini de conifere', '3', 285),
(6, 'Sere de flori', '7', 400),
(7, 'Servicii complete de toaletare si intretinere', '1', 45),
(8, 'Sisteme de irigatii', '3', 160);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
