-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2020 at 07:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE IF NOT EXISTS `product_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `is_available` varchar(255) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_image` (`product_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `pname`, `price`, `is_available`, `product_image`, `created_date`) VALUES
(3, 'fortuner', '340000', 'yes', '', '2020-12-02'),
(7, 'colgate', '20', 'yes', '', '2020-12-09'),
(9, 'p', '12', 'no', 'dddd.jpg', '2020-12-01'),
(10, 'diamond', '100000', 'no', 'pics/1608052193_d', '2020-12-24'),
(11, 'jellyfish', '698', 'yes', 'pics/1608052390_i', '2020-12-09'),
(22, 'house', '200000000000', 'no', 'pic/1608099830_h', '2020-12-16'),
(23, '', '', '', 'pic/1608099981_', '0000-00-00'),
(25, '', '', 'no', 'pic/1608100726_', '0000-00-00'),
(26, '', '', '', '', '0000-00-00'),
(27, '', '', '', 'Uploads/1608101043_', '0000-00-00'),
(28, '', '', '', 'Uploads/1608101253_', '0000-00-00');
