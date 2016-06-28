-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 28 jun 2016 om 12:29
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
-- Tabelstructuur voor tabel `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `song_src` varchar(255) NOT NULL,
  `song_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `music`
--

INSERT INTO `music` (`id`, `song_src`, `song_title`) VALUES
(1, 'mp3/song1.mp3', 'Will grigg\'s on fire'),
(2, 'mp3/song2.mp3', 'Darude - Sandstorm'),
(3, 'mp3/song3.mp3', 'Willy William - Ego'),
(4, 'mp3/song4.mp3', 'Jonna Fraser - Do or Die');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
