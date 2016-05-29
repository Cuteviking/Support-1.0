-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 maj 2016 kl 15:50
-- Serverversion: 10.1.13-MariaDB
-- PHP-version: 5.6.20

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
  `header` text COLLATE utf8_swedish_ci NOT NULL,
  `name` text COLLATE utf8_swedish_ci NOT NULL,
  `social` text COLLATE utf8_swedish_ci NOT NULL,
  `description` text COLLATE utf8_swedish_ci NOT NULL,
  `parts` text COLLATE utf8_swedish_ci NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `sign` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `dhs16_problem`
--

INSERT INTO `dhs16_problem` (`id`, `header`, `name`, `social`, `description`, `parts`, `check_in`, `check_out`, `sign`) VALUES
(1, 'Overheat', 'Pierre Norrbrink', '2147483647', 'long ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(2, 'Overheat', 'Pierre Norrbrink', '2147483647', 'long ', '', '2016-05-29 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'Overheat', 'Pierre Norrbrink', '199503211956', 'long ', '', '2016-05-29 15:45:11', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `dhs16_user`
--

CREATE TABLE `dhs16_user` (
  `name` text COLLATE utf8_swedish_ci NOT NULL,
  `social` text COLLATE utf8_swedish_ci NOT NULL,
  `seat` text COLLATE utf8_swedish_ci NOT NULL,
  `phone` text COLLATE utf8_swedish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `dhs16_user`
--

INSERT INTO `dhs16_user` (`name`, `social`, `seat`, `phone`, `id`) VALUES
('pierre norrbrink', '199503211956', 'D69:1337', '702042424', 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `dhs16_problem`
--
ALTER TABLE `dhs16_problem`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `dhs16_user`
--
ALTER TABLE `dhs16_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `dhs16_problem`
--
ALTER TABLE `dhs16_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT för tabell `dhs16_user`
--
ALTER TABLE `dhs16_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
