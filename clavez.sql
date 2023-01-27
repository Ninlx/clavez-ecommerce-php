-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 05:30 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clavez`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `address`, `contact`) VALUES
(2, 'VEE NA', 'ESPANOLA', 'GALA-GALA', '09069678411'),
(3, 'ROIDEN', 'CLAVEZ', 'GREDU', '09069677618');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(10) unsigned NOT NULL,
  `transaction` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `symbol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) unsigned NOT NULL,
  `price` decimal(64,5) unsigned NOT NULL DEFAULT '0.00000',
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `transaction`, `timestamp`, `symbol`, `shares`, `price`) VALUES
(6, 'BUY', '2014-06-26 02:55:01', 'AAPL', 5, '90.36000'),
(6, 'SELL', '2014-06-26 02:58:00', 'AAPL', 5, '90.36000'),
(6, 'SELL', '2014-06-26 04:05:55', 'FB', 200, '67.44000'),
(6, 'SELL', '2014-06-26 04:06:20', 'MSFT', 10, '42.03000');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(11) NOT NULL,
  `symbol` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) NOT NULL,
  PRIMARY KEY (`id`,`symbol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(50) NOT NULL AUTO_INCREMENT,
  `items_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `dateleft` date NOT NULL,
  `timeleft` varchar(100) NOT NULL,
  `datearrival` date NOT NULL,
  `timearrival` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `items_id`, `destination`, `dateleft`, `timeleft`, `datearrival`, `timearrival`, `status`) VALUES
(1, '321', '', '2018-01-03', '2:30', '2018-01-01', ' AM', ''),
(2, '', '', '0000-00-00', '', '2018-01-01', ' AM', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_name`, `product_type`, `product_color`) VALUES
(1, 'Nike', 'bag', 'white'),
(2, 'Vans', 'shoe', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash` decimal(64,5) unsigned NOT NULL DEFAULT '0.00000',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `cash`) VALUES
(2, 'hirschhorn', '$1$2.hhkGc/$..AaWz4IsI.74XwjtCxlC/', '10000.00000'),
(26, 'king', '$1$Lg/.2g1.$MhFR3D7ATBB5dVTdmFqvF0', '10000.00000'),
(27, 'roiden', '$1$hX..WA1.$tWBHJMlSWlPBPpswp6fnh.', '10000.00000'),
(28, 'mark', '$1$m53.1/3.$hLC0mvOhwJFyQI51OjyZM1', '10000.00000'),
(29, 'ba', '$1$8l1.vS4.$hs/bdivEhjy5a3PqSFmau1', '10000.00000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
