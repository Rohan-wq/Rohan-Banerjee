-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2020 at 05:57 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `pname`, `price`, `is_available`, `product_image`, `created_date`) VALUES
(9, 'p', '12', 'no', 'dddd.jpg', '2020-12-01'),
(10, 'diamond', '100000', 'no', 'pics/1608052193_d', '2020-12-24'),
(11, 'jellyfish', '698', 'yes', 'pics/1608052390_i', '2020-12-09'),
(22, 'house', '200000000000', 'no', 'pic/1608099830_h', '2020-12-16'),
(29, 'jellyfish', '100000', 'yes', 'Uploads/1608103145_', '2020-12-07'),
(31, 'watch1', '250000', 'No', 'Uploads/1608135165_', '2020-12-11'),
(32, 'Sonata', '30000', 'Yes', 'Uploads/1608135204_', '2020-12-04'),
(33, 'Watch5', '26000', 'Yes', 'Uploads/1608136618_', '2020-12-09'),
(34, 'Watch6', '10000', 'Yes', 'Uploads/1608136672_', '2020-12-13'),
(35, 'watch77', '100000', 'Yes', 'Uploads/1608136919_', '2020-12-10'),
(36, 'Apple iphone', '800000', 'Yes', 'Uploads/1608137289_', '2020-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password_hash`, `fullname`) VALUES
(1, 'rohanfeb11@gmail.com', 'c456136771a4493a4e182e627e3bf4aa', 'Rohan Banerjee'),
(2, 'shoaib@gmail.com', 'c456136771a4493a4e182e627e3bf4aa', 'shoaib akhtar'),
(3, 'rohit@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 'Rohit Sharma'),
(4, 'sourav@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'sourav ganguly'),
(5, 'saikat@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 'Saikat Sarkar'),
(6, 'sourav@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Sourav Ganguly'),
(7, 'sumanta@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 'sumanta basak');
