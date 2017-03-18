-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql310.base.pk
-- Generation Time: Jul 05, 2015 at 11:41 AM
-- Server version: 5.6.22-71.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE TABLE IF NOT EXISTS `All_USERS` (
  `session` char(100) NOT NULL DEFAULT'',
  `time` int(11) NOT NULL DEFAULT'0',
  `nick` varchar(50) NOT NULL,
  `gander` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `yahoo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
