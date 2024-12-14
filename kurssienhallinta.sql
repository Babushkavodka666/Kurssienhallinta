-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12.12.2024 klo 12:26
-- Palvelimen versio: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO kurssi (matematiikka, musiikki, aidinkieli, englanti, liikunta)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `22p_2882`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kurssienhallinta`
--

CREATE TABLE `kurssienhallinta` (
  `opiskelijaID` int(16) NOT NULL,
  `opettajaID` int(16) NOT NULL,
  `kurssiID` int(16) NOT NULL,
  `kurssikirjautuminenID` int(16) NOT NULL,
  `tila` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurssienhallinta`
--
ALTER TABLE `kurssienhallinta`
  ADD KEY `tila` (`tila`),
  ADD KEY `opiskelijaID` (`opiskelijaID`),
  ADD KEY `opettajaID` (`opettajaID`),
  ADD KEY `kurssikirjautuminenID` (`kurssikirjautuminenID`),
  ADD KEY `kurssiID` (`kurssiID`);

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `kurssienhallinta`
--
ALTER TABLE `kurssienhallinta`
  ADD CONSTRAINT `kurssienhallinta_ibfk_1` FOREIGN KEY (`tila`) REFERENCES `tila` (`tunnus`),
  ADD CONSTRAINT `kurssienhallinta_ibfk_2` FOREIGN KEY (`opiskelijaID`) REFERENCES `opiskelija` (`opiskelijanumero`),
  ADD CONSTRAINT `kurssienhallinta_ibfk_3` FOREIGN KEY (`opettajaID`) REFERENCES `opettaja` (`tunnusnumero`),
  ADD CONSTRAINT `kurssienhallinta_ibfk_4` FOREIGN KEY (`kurssikirjautuminenID`) REFERENCES `kurssikirjautuminen` (`tunnus`),
  ADD CONSTRAINT `kurssienhallinta_ibfk_5` FOREIGN KEY (`kurssiID`) REFERENCES `kurssi` (`tunnus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
