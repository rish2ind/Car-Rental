-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 08:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carrentalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE IF NOT EXISTS `driver_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`id`, `Name`, `Mobile`) VALUES
(1, 'Rahul', 8560838179);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(4, 'Ansh Agrawal ', 'anshagrawal@gmail.com', 8560838453, 'Ansh2ind'),
(6, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8560838257, 'Rishabh2ind'),
(7, 'Himanshu ', 'himanshu@gmail.com', 1234567890, '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `user_journey`
--

CREATE TABLE IF NOT EXISTS `user_journey` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `booking_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `drop_date` varchar(20) NOT NULL,
  `card_number` bigint(15) NOT NULL,
  `CVV` int(5) NOT NULL,
  `expire` date NOT NULL,
  `Drop_location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_journey`
--

INSERT INTO `user_journey` (`id`, `booking_id`, `name`, `email`, `mobile`, `address`, `pick_date`, `drop_date`, `card_number`, `CVV`, `expire`, `Drop_location`) VALUES
(1, 57927, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8560838257, 'Pratap nagar', '10/11/2019', '10/15/2019', 1234567890123456, 123, '0000-00-00', 'Ajmer'),
(2, 72583, 'Ansh Agrawal ', 'anshagrawal@gmail.com', 8560838453, 'Jaipur', '10/11/2019', '10/23/2019', 987654321098765, 432, '0000-00-00', 'Alwar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
