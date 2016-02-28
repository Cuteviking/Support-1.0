-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: norr.one.mysql:3306
-- Generation Time: Feb 28, 2016 at 02:32 PM
-- Server version: 5.5.47-MariaDB-1~wheezy
-- PHP Version: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `norr_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `dhs16_user`
--

CREATE TABLE IF NOT EXISTS `dhs16_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_swedish_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `seat` text COLLATE utf8_swedish_ci NOT NULL,
  `social` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
