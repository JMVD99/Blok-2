-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 22 dec 2021 om 08:28
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sint-site`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bezorginfo`
--

DROP TABLE IF EXISTS `bezorginfo`;
CREATE TABLE IF NOT EXISTS `bezorginfo` (
  `woonplaats` varchar(100) NOT NULL,
  `bezorgmethode` varchar(100) NOT NULL,
  `huiskleur` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bezorginfo`
--

INSERT INTO `bezorginfo` (`woonplaats`, `bezorgmethode`, `huiskleur`) VALUES
('Wilnis', 'schoorsteen', '#000000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pieteninfo`
--

DROP TABLE IF EXISTS `pieteninfo`;
CREATE TABLE IF NOT EXISTS `pieteninfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standplaats` varchar(100) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `kleur` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pieteninfo`
--

INSERT INTO `pieteninfo` (`id`, `standplaats`, `naam`, `kleur`) VALUES
(1, 'Mijdrecht', 'bezorg', '#8f4242');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(100) NOT NULL,
  `Infix` varchar(10) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`UserID`, `Firstname`, `Infix`, `Lastname`) VALUES
(1, 'Marco', 'van', 'Doeland');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
