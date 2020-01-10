-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 03:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapkanje`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `idProizvoda` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `opis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idVlasnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`idProizvoda`, `naziv`, `kategorija`, `cena`, `opis`, `slika`, `idVlasnika`) VALUES
(1, 'Bicycle Fire karte', 'kolekcionari', '1000', 'Bicycle kompanija dizajnira i štampa najbolje karte na svetu za igru. Još od 1885 godine Bicycle kompanija pravi karte koje spajaju ljude koji uživaju u nezaboravnim igrama. Na hiljade profesionalnih mečeva je odigrano sa ovim brendom, kao i različiti por', 'img/kolekcije/karte.jpg', 2),
(2, 'GOT figurice', 'kolekcionari', '1200', 'Mnogo lepe GOT figurice.', 'img/kolekcije/got.jpg', 1),
(3, 'Krigle', 'kolekcionari', '800', 'Mnogo lepe krigle.', 'img/kolekcije/krigle.jpg', 2),
(4, 'Torba', 'razmena', '1000', 'Lepa torba', 'img/razmene/torba.jpg', 2),
(5, 'Cipele', 'razmena', '1000', 'Lepe cipele', 'img/razmene/cipele.jpg', 1),
(6, 'Majica', 'razmena', '1200', 'Lepa majica', 'img/razmene/majica.jpg', 2),
(7, 'Tiganj', 'razmena', '800', 'Lep tiganj', 'img/razmene/pan.jpg', 2),
(8, 'Tepih', 'razmena', '3800', 'Lep tepih', 'img/razmene/carpet.png', 2),
(9, 'Sorc', 'razmena', '700', 'Lep sorc', 'img/razmene/shorts.jpg', 1),
(10, 'Solja', 'kolekcionari', '500', 'Lepa solja', 'img/kolekcije/mug.jpg\r\n', 2),
(11, 'Hemijska', 'kolekcionari', '400', 'Lepa hemijska', 'img/kolekcije/pen.jpg', 1),
(12, 'Lounge stolica', 'kolekcionari', '1800', 'Lepa stolica', 'img/kolekcije/lounge.jpg', 2),
(13, 'Konzerva piva', 'kolekcionari', '200', 'Lepa konzerva', 'img/kolekcije/can.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vlasnik`
--

CREATE TABLE `vlasnik` (
  `idVlasnika` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kontakt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vlasnik`
--

INSERT INTO `vlasnik` (`idVlasnika`, `ime`, `prezime`, `kontakt`, `username`, `password`) VALUES
(1, 'Srdjan', 'Petric', '+381 1111111111', 'srki', 'srki'),
(2, 'Djordje', 'Velikic', '+381 6009376523 djole@velikic.com', 'djo', 'djo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`idProizvoda`),
  ADD KEY `idVlasnika` (`idVlasnika`);

--
-- Indexes for table `vlasnik`
--
ALTER TABLE `vlasnik`
  ADD PRIMARY KEY (`idVlasnika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `idProizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vlasnik`
--
ALTER TABLE `vlasnik`
  MODIFY `idVlasnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
