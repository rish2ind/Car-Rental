-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 09:42 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Rishabh2ind');

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
  `expire` varchar(255) NOT NULL,
  `Drop_location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_journey`
--

INSERT INTO `user_journey` (`id`, `booking_id`, `name`, `email`, `mobile`, `address`, `pick_date`, `drop_date`, `card_number`, `CVV`, `expire`, `Drop_location`) VALUES
(1, 41633, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8560838257, 'Pratap nagar', '10/11/2019', '10/15/2019', 1234567890123456, 452, '0000-00-00', 'Ajmer'),
(2, 72583, 'Ansh Agrawal ', 'anshagrawal@gmail.com', 8560838453, 'Jaipur', '10/11/2019', '10/23/2019', 987654321098765, 432, '0000-00-00', 'Alwar'),
(3, 41633, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Jaipur', '10/22/2019', '10/24/2019', 1234567890123456, 452, '0000-00-00', 'Ajmer'),
(4, 41633, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Ajmer Sharif Dargah, dargah shareef, Diggi Bazaar, Ajmer, Rajasthan', '11/28/2019', '11/29/2019', 1234567890123456, 452, '0000-00-00', 'Jaipur'),
(5, 0, 'Rishabh Mathur', 'mathur.rishabh123@gmail.com', 8756098123, 'Pratap Nagar, Jaipur, Rajasthan, India', '11/30/2019', '12/03/2019', 0, 0, '0000-00-00', 'Ajmer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
