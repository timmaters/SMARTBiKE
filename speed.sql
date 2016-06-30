-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 30 jun 2016 om 10:35
-- Serverversie: 5.5.41
-- PHP-versie: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timmaow175_BiKE`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `speed`
--

CREATE TABLE `speed` (
  `id` int(11) NOT NULL,
  `spd1` varchar(255) NOT NULL,
  `spd2` varchar(255) NOT NULL,
  `spd3` varchar(255) NOT NULL,
  `spd4` varchar(255) NOT NULL,
  `spd5` varchar(255) NOT NULL,
  `spd6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `speed`
--

INSERT INTO `speed` (`id`, `spd1`, `spd2`, `spd3`, `spd4`, `spd5`, `spd6`) VALUES
(1, '5 KM/u', '8 KM/u', '12 KM/u', '15 KM/u', '13 KM/u', '10 KM/u');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `speed`
--
ALTER TABLE `speed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `speed`
--
ALTER TABLE `speed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
