-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 feb 2016 kl 19:54
-- Serverversion: 10.1.8-MariaDB
-- PHP-version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `dhs16`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `dhs16_problem`
--

CREATE TABLE `dhs16_problem` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `description` text NOT NULL,
  `parts` text NOT NULL,
  `name` text NOT NULL,
  `social` text NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `dhs16_problem`
--

INSERT INTO `dhs16_problem` (`id`, `header`, `description`, `parts`, `name`, `social`, `check_in`, `check_out`) VALUES
(9, 'Ingen bild på skrämen', 'när jag blir så jävla förbannad slår jag sönder skiten och då gik den sönder, skylle på nåpgon anna', 'en musammattatatata', 'brunnen', '199605307371', '2016-02-29 19:12:28', '0000-00-00 00:00:00'),
(10, 'Fattar inte', 'japanska tjejer överallt', 'Glidmedel', 'brunnen', '199605307371', '2016-02-29 19:19:31', '0000-00-00 00:00:00');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `dhs16_problem`
--
ALTER TABLE `dhs16_problem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `dhs16_problem`
--
ALTER TABLE `dhs16_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
