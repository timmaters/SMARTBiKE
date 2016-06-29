-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 29 jun 2016 om 12:29
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
-- Tabelstructuur voor tabel `heartbeat`
--

CREATE TABLE `heartbeat` (
  `id` int(11) NOT NULL,
  `beat` varchar(255) NOT NULL,
  `beat2` varchar(255) NOT NULL,
  `beat3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `heartbeat`
--

INSERT INTO `heartbeat` (`id`, `beat`, `beat2`, `beat3`) VALUES
(1, '70', '75', '72');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `heartbeat`
--
ALTER TABLE `heartbeat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `heartbeat`
--
ALTER TABLE `heartbeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
