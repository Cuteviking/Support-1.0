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
-- Tabellstruktur `dhs16_user`
--

CREATE TABLE `dhs16_user` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_swedish_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `seat` text COLLATE utf8_swedish_ci NOT NULL,
  `social` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `dhs16_user`
--

INSERT INTO `dhs16_user` (`id`, `name`, `phone`, `seat`, `social`) VALUES
(9, 'brunnen', 735035220, 'd24:02', '199605307371'),
(10, 'brunnen', 1250120512, 'd50:455', '199605307371');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `dhs16_user`
--
ALTER TABLE `dhs16_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `dhs16_user`
--
ALTER TABLE `dhs16_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
