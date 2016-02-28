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
-- Table structure for table `dhs16_problem`
--

CREATE TABLE IF NOT EXISTS `dhs16_problem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `description` text NOT NULL,
  `parts` text NOT NULL,
  `name` text NOT NULL,
  `social` text NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
