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
-- Tabelstructuur voor tabel `navigation_data`
--

CREATE TABLE `navigation_data` (
  `id` int(11) NOT NULL,
  `dir1` varchar(255) NOT NULL,
  `dir2` varchar(255) NOT NULL,
  `dir3` varchar(255) NOT NULL,
  `dir4` varchar(255) NOT NULL,
  `dir5` varchar(255) NOT NULL,
  `dir6` varchar(255) NOT NULL,
  `dir7` varchar(255) NOT NULL,
  `dir8` varchar(255) NOT NULL,
  `dir9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `navigation_data`
--

INSERT INTO `navigation_data` (`id`, `dir1`, `dir2`, `dir3`, `dir4`, `dir5`, `dir6`, `dir7`, `dir8`, `dir9`) VALUES
(1, 'Sla na 500 meter rechtsaf', 'Ga na 50 meter 3de afslag op de rotonde', 'Na 65 meter sla rechtsaf ', 'Sla over 200 meter linksaf', 'Ga na 90 meter 2de afslag op de rotonde', 'Ga bij het eerstvolgende kruispunt rechtdoor', 'Sla na 150 meter linksaf', 'Ga 500 meter vooruit en stop', 'U heeft uw bestemming bereikt');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `navigation_data`
--
ALTER TABLE `navigation_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `navigation_data`
--
ALTER TABLE `navigation_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
